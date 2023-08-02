<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TraditionRequest;
use App\Models\Tradition;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class TraditionController extends Controller
{
    use UploadFiles;
    public function index(){
        $row = Tradition::firstOrCreate();
        return view('Admin/CRUD/Tradition/index',compact('row'));
    }

    public function update(TraditionRequest $request){
        $input = $request->validated();

        if ($request->has('image') && $request->image != null)
            $input['image'] = $this->saveFile($request->image, 'assets/uploads/setting', 'yes', 99);
        else
            unset($input['image']);

        Tradition::first()->update($input);
        toastr('تم تحديث البيانات بنجاح','','');
        return back();
    }
}
