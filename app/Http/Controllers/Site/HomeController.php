<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Review;
use App\Models\Slider;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    use ResponseTrait;
    public function index(){
        $categories = Category::inRandomOrder()
            ->take(8)
            ->select('id','title_'.App::getLocale().' AS title','desc_'.App::getLocale().' AS desc','image')
            ->get();
        $sliders = Slider::inRandomOrder()
            ->take(5)
            ->select('id','title_'.App::getLocale().' AS title','sub_title_'.App::getLocale().' AS sub_title','image')
            ->get();
        $reviews = Review::inRandomOrder()
            ->take(6)
            ->select('id','name_'.App::getLocale().' AS name','desc_'.App::getLocale().' AS desc','written_at_'.App::getLocale().' AS written','image')
            ->get();
        return view('Site.index',compact('categories','reviews','sliders'));
    }

    public function aboutUs(){
        return view('Site.Pages.about-us');
    }


    public function contactUs(){
        return view('Site.Pages.contact_us');
    }

    public function postContact(ContactRequest $request){
        $validatedData = $request->validated();
        ContactUs::create($validatedData);
        return $this->addResponse();
    }



}
