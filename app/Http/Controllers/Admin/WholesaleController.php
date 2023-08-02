<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wholesale;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class WholesaleController extends Controller
{
    use UploadFiles, ResponseTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Wholesale::query();
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
                    return $row->title_ar.'<br>'.$row->title_en;
                })
                ->editColumn('desc_ar', function ($row) {
                    return Str::limit($row->desc_ar,70).'<br>'.Str::limit($row->desc_en,70);
                })
                ->addColumn('actions', function ($row) {
                    return "
                    <div class='d-flex gap-3'>
                   <a href='javascript:void(0);' class='text-danger delete' data-id='" . $row->id . "'><i class='mdi mdi-delete font-size-18'></i> </a>
                   </div>
                   ";

                })
                ->escapeColumns('image')
                ->make(true);
        }
        return view('Admin.CRUD.Wholesale.index');
    }


    public function create()
    {
        return view('Admin.CRUD.Wholesale.parts.create');
    }


    public function store(request $request)
    {
        // adjust data before save
        if ($request->has('image'))
            $data['image'] = $this->saveFile($request->image, 'assets/uploads/wholesale', 'yes', 70);

        // save data
        Wholesale::create($data);
        return $this->addResponse();
    }

    public function destroy($id)
    {
        $row = Wholesale::findOrFail($id);

        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return $this->deleteResponse();
    }

}
