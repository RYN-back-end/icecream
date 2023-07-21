<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
{
    public function index(){
        $categories = Category::with(['products' => function($q){
            $q->select('id','category_id','image','title_'.App::getLocale().' AS title','desc_'.App::getLocale().' AS desc',
                'large_price','medium_price','small_price');
        }])->select('id','image','title_'.App::getLocale().' AS title','desc_'.App::getLocale().' AS desc')
            ->get();
        return view('Site.Product.index',compact('categories'));
    }


    public function productDetails($product_id){
        $product = Product::findOrFail($product_id)
            ->select('id','image','title_'.App::getLocale().' AS title','desc_'.App::getLocale().' AS desc',
            'large_price','medium_price','small_price')
            ->first();
        $imagesOfProducts = ProductImage::where('product_id',$product_id)->get();
        return view('Site.Product.product-details',compact('product','imagesOfProducts'));
    }
}
