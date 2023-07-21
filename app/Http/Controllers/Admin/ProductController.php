<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Review;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    use UploadFiles, ResponseTrait;

    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Product::query();
            return DataTables::of($data)
                ->addColumn('desc', function ($row) {
                    return Str::limit($row->desc_ar,'70')."<br>".Str::limit($row->desc_en,'70');
                })
                ->addColumn('title', function ($row) {
                    return Str::limit($row->title_ar,'70')."<br>".Str::limit($row->title_en,'70');
                })
                ->editColumn('category_id', function ($row) {
                    return ($row->category->title_ar) ?? '---';
                })
                ->editColumn('image', function ($row) {
                    return ' <img src="' . getFile($row->image) . '" class="avatar-xs rounded-circle" onclick="window.open(this.src)">';
                })
                ->addColumn('price', function ($row) {
                    $html = '';
                    if($row->large_price != null)
                        $html .= '<span class="text-muted">كبير: </span>'.$row->large_price." ر.ق<br>";
                    if($row->medium_price != null)
                        $html .= '<span class="text-muted">وسط: </span>'.$row->medium_price." ر.ق<br>";
                    if($row->small_price != null)
                        $html .= '<span class="text-muted">صغير: </span>'.$row->small_price." ر.ق<br>";

                    return $html;

                })
                ->addColumn('actions', function ($row) {
                    return "
                    <div class='d-flex gap-3'>
                    <a href='".route('products.show',$row->id)."' title='التفاصيل' class='text-primary' data-id='" . $row->id . "'> <i class='mdi mdi-information font-size-18'></i></a>
                    <a href='javascript:void(0);' class='text-info editBtn' title='تعديل' data-id='" . $row->id . "'> <i class='mdi mdi-pencil font-size-18'></i></a>
                   <a href='javascript:void(0);' class='text-danger delete' title='حذف' data-id='" . $row->id . "'><i class='mdi mdi-delete font-size-18'></i> </a>
                   </div>
                   ";

                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('Admin.CRUD.Product.index');
    }


    public function create()
    {
        $categories = Category::orderBy('title_ar','ASC')->select('title_ar','id')->get();
        return view('Admin.CRUD.Product.parts.create',compact('categories'));
    }

    public function show($id){
        $product = Product::with('images')->findOrFail($id);
        return view('Admin.CRUD.Product.parts.details',compact('product'));
    }

    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->has('image'))
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/products', 'yes', 95);

        $product = Product::create($validatedData);

        // save images of the products
        if($request->images){
            foreach ($request->images as $image) {
                $data['product_id'] = $product->id;
                $data['image'] = $this->saveFile($image, 'assets/uploads/products');
                ProductImage::create($data);
            }
        }
        return $this->addResponse("تم اضافة منتج جديد");
    }


    public function edit($id)
    {
        $row = Product::findOrFail($id);
        $categories = Category::orderBy('title_ar','ASC')->select('title_ar','id')->get();
        return view('Admin.CRUD.Product.parts.edit', compact('row','categories'));
    }


    public function update(ProductRequest $request, $id)
    {
        $validatedData = $request->validated();

        $row = Product::findOrFail($id);

        /// adjust data before save it ////
        if ($request->hasFile('image')) {
            // delete old image
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/products', 'yes', 70);
        }

        ////////////////////////////////////

        $row->update($validatedData);

        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = Product::findOrFail($id);
        if (file_exists($row->image)) {
            unlink($row->image);
        }
        foreach ($row->images as $image){
            if (file_exists($image->image)) {
                unlink($image->image);
            }
        }
        $row->delete();
        return $this->deleteResponse();
    }

    public function deleteImage($image_id){
        $row = ProductImage::findOrFail($image_id);
        // at least one photo should be existed to show image details
        $countOfImages = ProductImage::where('product_id',$row->product_id)->get()->count();
        if($countOfImages == 1){
            return response()->json([
                'status'  => 405,
            ]);
        }
        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return response()->json([
            'status' => 200,
            'id' => $image_id
        ]);
    }
}
