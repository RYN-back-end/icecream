<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\OrderWayController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TraditionController;
use App\Http\Controllers\Admin\WholesaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'admin'], function () {
    #### Auth ####
    Route::get('login', [AuthController::class, 'index'])->name('admin.loginPage');
    Route::post('login', [AuthController::class, 'doLogin'])->name('admin.doLogin');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


    #### Home ####
    Route::view('/', 'Admin/index')->name('adminHome');

    #### categories ####
    Route::resource('categories', CategoryController::class);

    #### reviews ####
    Route::resource('reviews', ReviewController::class);


    #### contact ####
    Route::resource('contacts', ContactUsController::class);

    #### clients ####
    Route::resource('clients', ClientController::class);

    #### flavors ####
    Route::resource('flavors', FlavorController::class);

    #### wholesale ####
    Route::resource('wholesale', WholesaleController::class);


    #### settings ####
    Route::get('settings', [SettingController::class,'index'])->name('settings.index');
    Route::post('settingUpdate', [SettingController::class,'update'])->name('settingUpdate');

    #### tradition ####
    Route::get('tradition', [TraditionController::class,'index'])->name('tradition.index');
    Route::post('traditionUpdate', [TraditionController::class,'update'])->name('traditionUpdate');


    #### order ####
    Route::resource('order_ways', OrderWayController::class);


    #### sliders ####
    Route::resource('sliders', SliderController::class);

    #### Products ####
    Route::resource('products', ProductController::class);
    Route::DELETE('products.deleteImage/{id}', [ProductController::class,'deleteImage'])->name('products.deleteImage');


    #### Admins ####
    Route::resource('admins', AdminController::class);

});

