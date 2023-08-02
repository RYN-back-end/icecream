<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Client;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    use UploadFiles, ResponseTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Client::query();
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
        return view('Admin.CRUD.Client.index');
    }


    public function create()
    {
        return view('Admin.CRUD.Client.parts.create');
    }


    public function store(request $request)
    {

        // adjust data before save
        if ($request->has('image'))
            $data['image'] = $this->saveFile($request->image, 'assets/uploads/clients', 'yes', 99);

        // save data
        Client::create($data);
        return $this->addResponse();
    }


    public function edit($id)
    {
        $row = Client::findOrFail($id);
        return view('Admin.CRUD.Client.parts.edit', compact('row'));
    }


    public function update(request $request, $id)
    {

        $row = Client::findOrFail($id);

        /// adjust data before save it ////
        if ($request->hasFile('image')) {
            // delete old image
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $data['image'] = $this->saveFile($request->image, 'assets/uploads/clients', 'yes', 99);
        }
        ////////////////////////////////////

        $row->update($data);

        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = Client::findOrFail($id);

        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return $this->deleteResponse("تم حذف بيانات القسم بنجاح");
    }
}
