<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ReviewController extends Controller
{
    use UploadFiles, ResponseTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Review::query();
            return DataTables::of($data)
                ->editColumn('image', function ($row) {
                    return ' <img src="' . getFile($row->image) . '" class="rounded avatar-md" onclick="window.open(this.src)">';
                })
                ->editColumn('name_ar', function ($row) {
                    return $row->name_ar.'<br>'.$row->name_en;
                })
                ->editColumn('desc_ar', function ($row) {
                    return Str::limit($row->desc_ar,70).'<br>'.Str::limit($row->desc_en,70);
                })
                ->editColumn('written_at_ar', function ($row) {
                    return $row->written_at_ar.'<br>'.$row->written_at_en;
                })
                ->addColumn('actions', function ($row) {
                    return "
                    <div class='d-flex gap-3'>
                    <a href='javascript:void(0);' class='text-info editBtn' data-id='" . $row->id . "'> <i class='mdi mdi-pencil font-size-18'></i></a>
                   <a href='javascript:void(0);' class='text-danger delete' data-id='" . $row->id . "'><i class='mdi mdi-delete font-size-18'></i> </a>
                   </div>
                   ";

                })
                ->escapeColumns('image')
                ->make(true);
        }
        return view('Admin.CRUD.Review.index');
    }


    public function create()
    {
        return view('Admin.CRUD.Review.parts.create');
    }


    public function store(ReviewRequest $request)
    {
        $validatedData = $request->validated();

        // adjust data before save
        if ($request->has('image'))
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/reviews', 'yes', 99);

        // save data
        Review::create($validatedData);
        return $this->addResponse();
    }


    public function edit($id)
    {
        $row = Review::findOrFail($id);
        return view('Admin.CRUD.Review.parts.edit', compact('row'));
    }


    public function update(ReviewRequest $request, $id)
    {
        $validatedData = $request->validated();

        $row = Review::findOrFail($id);

        /// adjust data before save it ////
        if ($request->hasFile('image')) {
            // delete old image
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/reviews', 'yes', 99);
        }
        ////////////////////////////////////

        $row->update($validatedData);

        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = Review::findOrFail($id);

        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return $this->deleteResponse();
    }
}
