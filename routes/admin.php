<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix'=>'admin'],function (){
    #### Auth ####
    Route::get('login', [AuthController::class,'index'])->name('admin.loginPage');
    Route::post('login', [AuthController::class,'doLogin'])->name('admin.doLogin');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


        #### Home ####
        Route::view('/', 'Admin/index')->name('adminHome');

        #### categories ####
        Route::resource('categories', CategoryController::class);


        #### Admins ####
        Route::resource('admins', AdminController::class);

});

