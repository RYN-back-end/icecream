<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\ContactUs;
use App\Models\Flavor;
use App\Models\OrderWay;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Tradition;
use App\Models\Wholesale;
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
        $flavors = Flavor::inRandomOrder()
            ->latest()
            ->select('id','title_'.App::getLocale().' AS title','desc_'.App::getLocale().' AS desc','image')
            ->get();
        $clients = Client::latest()->get();
        $wholesalesRows = Wholesale::latest()->get();
        $flavor_groups = $flavors->chunk(ceil($flavors->count() / 3));
        $tradition = Tradition::select('id','title_'.App::getLocale().' AS title','sub_title_'.App::getLocale().' AS sub_title','desc_'.App::getLocale().' AS desc','image')->firstOrCreate();
        return view('Site.index',compact('categories','wholesalesRows','flavors','flavor_groups','reviews','sliders','clients','tradition'));
    }

    public function aboutUs(){
        $clients = Client::latest()->get();
        return view('Site.Pages.about-us',compact('clients'));
    }

    public function wholesale(){
        $clients = Client::latest()->get();
        return view('Site.Pages.wholesale',compact('clients'));
    }


    public function contactUs(){
        return view('Site.Pages.contact_us');
    }

    public function order(){
        $ways = OrderWay::latest()
            ->select('id','title_'.App::getLocale().' AS title','image','link')
            ->get();
        return view('Site.Pages.order',compact('ways'));
    }

    public function postContact(ContactRequest $request){
        $validatedData = $request->validated();
        ContactUs::create($validatedData);
        return $this->addResponse();
    }



}
