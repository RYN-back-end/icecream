<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {
    Route::get('/', [HomeController::class,'index'])->name('/');
    Route::get('contact_us', [HomeController::class,'contactUs'])->name('contact_us');
    Route::post('postContact', [HomeController::class,'postContact'])->name('postContact');
    Route::get('products', [ProductsController::class,'index'])->name('products');
    Route::get('aboutUs', [HomeController::class,'aboutUs'])->name('aboutUs');
    Route::get('wholesale', [HomeController::class,'wholesale'])->name('wholesale');
    Route::get('order', [HomeController::class,'order'])->name('order');
    Route::get('productDetails/{id}', [ProductsController::class,'productDetails'])->name('productDetails');
});




Route::get('/clear/route', function (){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'Optimize Cleared Successfully';
});
