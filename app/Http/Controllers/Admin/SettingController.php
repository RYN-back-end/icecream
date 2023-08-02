<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Models\SiteText;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use UploadFiles;
    public function index(){
        $text = SiteText::firstOrCreate();
        return view('Admin/Setting/index',compact('text'));
    }

    public function update(SettingRequest $request){
        $input = $request->validated();

        if ($request->has('logo') && $request->logo != null)
            $input['logo'] = $this->saveFile($request->logo, 'assets/uploads/setting', 'yes', 99);
        else
            unset($input['logo']);

        if ($request->has('menu') && $request->menu != null)
            $input['menu'] = $this->saveFile($request->menu, 'assets/uploads/setting', 'yes', 99);
        else
            unset($input['menu']);

        if ($request->has('about_image') && $request->about_image != null)
            $input['about_image'] = $this->saveFile($request->about_image, 'assets/uploads/setting', 'yes', 99);
        else
            unset($input['about_image']);

        SiteText::first()->update($input);
        toastr('تم تحديث البيانات بنجاح','','');
        return back();
    }
}
