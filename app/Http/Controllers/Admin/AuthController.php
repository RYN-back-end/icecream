<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        if (Auth::guard('admin')->check()){
            return redirect('admin');
        }
        return view('Admin.Auth.login');
    }

    public function doLogin(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'email'   =>'required|exists:admins',
            'password'=>'required'
        ],[
            'email.exists'      => 'Wrong E-mail',
            'email.required'    => 'Enter Your E-mail',
            'password.required' => 'Enter The Password',
        ]);
        if (Auth::guard('admin')->attempt($data)){
            return response()->json(200);
        }
        return response()->json(405);
    }

    public function logout(){
        loggedAdmin()->logout();
        toastr()->info('Logged out successfully','Good Bye');
        return redirect('admin/login');
    }
}
