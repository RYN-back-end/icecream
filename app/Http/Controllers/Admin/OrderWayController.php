<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderWayRequest;
use App\Models\OrderWay;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class OrderWayController extends Controller
{
    use UploadFiles, ResponseTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = OrderWay::query();
            return DataTables::of($data)
                ->editColumn('created_at', function ($row) {
                    try {
                        return $row->created_at->diffForHumans();
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                })
                ->editColumn('image', function ($row) {
                    return ' <img src="' . getFile($row->image) . '" class="rounded avatar-md" onclick="window.open(this.src)">';
                })
                ->editColumn('title_ar', function ($row) {
                    return "<a href='".$row->link."'>".$row->title_ar.' | '.$row->title_en."</a>";
                })
                ->editColumn('link', function ($row) {
                    return "<a href='".$row->link."'>".Str::limit($row->link,100)."</a>";
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
        return view('Admin.CRUD.OrderWay.index');
    }


    public function create()
    {
        return view('Admin.CRUD.OrderWay.parts.create');
    }


    public function store(OrderWayRequest $request)
    {
        $validatedData = $request->validated();

        // adjust data before save
        if ($request->has('image'))
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/order_ways', 'yes', 99);

        // save data
        OrderWay::create($validatedData);
        return $this->addResponse();
    }


    public function edit($id)
    {
        $row = OrderWay::findOrFail($id);
        return view('Admin.CRUD.OrderWay.parts.edit', compact('row'));
    }


    public function update(OrderWayRequest $request, $id)
    {
        $validatedData = $request->validated();

        $row = OrderWay::findOrFail($id);

        /// adjust data before save it ////
        if ($request->hasFile('image')) {
            // delete old image
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/order_ways', 'yes', 99);
        }
        ////////////////////////////////////

        $row->update($validatedData);

        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = OrderWay::findOrFail($id);

        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return $this->deleteResponse();
    }
}
