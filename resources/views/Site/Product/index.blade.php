@extends('Site.Layout.app')
@section('content')
    <div class="header-title ken-burn white" data-parallax="scroll" data-bleed="0" data-position="top"
         data-natural-height="750" data-natural-width="1920" data-image-src="{{asset('assets/site')}}/images/bg-31.png">
        <div class="container">
            <div class="title-base">
                <hr class="anima"/>
                <h1>{{trans('site.products_menu')}}</h1>
            </div>
        </div>
    </div>
    <div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="title-base">
                    <hr/>
                    <h2>{{trans('site.our_categories')}} </h2>
                </div>
                <h5>
                    {{$setting['category_desc_'.\Illuminate\Support\Facades\App::getLocale()]}}
                </h5>
                <br>
                @if($categories->count())
                @foreach($categories as $category)
                <div class="col-md-2 col-sm-4 text-c">
                        <a href="products#{{$category->title}}">
                            <img src="{{getFile($category->image)}}"
                                 style="border-radius: 50%;margin-bottom: 10px" width="220" height="130"
                                 alt="{{$category->title}}"/>
                        </a>
                    <h4 class='text-bold text-m text-c'>
                        <a href="products#{{$category->title}}">
                            {{$category->title}}
                        </a>
                    </h4>
                </div>
                    <style>
                        @media (max-width: 767px){
                            .col-md-2{
                                width: 33%;
                                float: right;
                            }
                        }
                    </style>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <hr class="space m">
{{--    @if($categories->count())--}}
{{--        <!-- Categories -->--}}
{{--        <div id="section_ef1nl" class="section-item section-empty">--}}
{{--            <div class="content container " style="">--}}
{{--                <div class="row ">--}}
{{--                    <div id="column_xEb2H" class="hc_column_cnt col-md-12">--}}
{{--                        <div class="row">--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <div id="column_tC2Zn" class="hc_column_cnt col-md-2  text-center">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12 hc_image_cnt">--}}
{{--                                            <a href="products#{{$category->title}}">--}}
{{--                                                <img src="{{getFile($category->image)}}"--}}
{{--                                                     style="border-radius: 50%" width="220px" height="130"--}}
{{--                                                     alt="{{$category->title}}"/>--}}
{{--                                        </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12 hc_space_cnt">--}}
{{--                                            <hr class="space xs"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12 hc_title_tag_cnt">--}}
{{--                                            <h4 id="w39Nr" class='text-bold text-m'>--}}
{{--                                                <a href="products#{{$category->title}}">--}}
{{--                                                    {{$category->title}}--}}
{{--                                                </a>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12 hc_space_cnt">--}}
{{--                                            <hr class="space m"/>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
    <div class="section-empty no-paddings-grid">
        <div class="container content">
            @foreach($categories as $category)
                <div class="title-base" id="{{$category->title}}">
                    <hr/>
                    <p>{{$category->desc}}</p>
                    <h2>{{$category->title}}</h2>
                </div>
                @if($category->products->count())
                        <div class="flexslider carousel visible-dir-nav outer-navs"
                             data-options="minWidth:200,itemMargin:15,numItems:3,controlNav:true,directionNav:true"
                             @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                                 style="direction: ltr"
                            @endif
                        >
                            <ul class="slides">
                                @foreach($category->products as $product)
                                <li>
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="#">
                                            <div class="caption">
                                                <i class="im-fire-flame"></i>
                                            </div>
                                            <img src="{{getFile($product->image)}}" alt=""/>
                                        </a>
                                        <div class="caption-bottom">
                                            <h2><a href="{{route('productDetails',$product->id)}}">{{$product->title}}</a></h2>
                                            <span class="extra-content" style="background-color: black;padding: 2px">
                                                @if($product->small_price)
                                                    {{trans('site.small')}} {{$product->small_price}} {{trans('site.qar')}}
                                                    -
                                                @endif
                                                @if($product->medium_price)
                                                    {{trans('site.medium')}} {{$product->medium_price}} {{trans('site.qar')}}
                                                    -
                                                @endif
                                                @if($product->large_price)
                                                    {{trans('site.large')}} {{$product->large_price}}  {{trans('site.qar')}}
                                                @endif

                                            </span>
                                            <p>{{\Illuminate\Support\Str::limit($product->desc,80)}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                @else
                    <div id="emptyOrder" class="text-center">
                        <img src="{{asset('uploads/no-product.png')}}" style="width: 35%;height: 10%"
                             alt=" لا يوجد اي منتجات">
                    </div>
                @endif
                <hr class="space m"/>
                <hr/>
                <hr class="space m"/>
            @endforeach
        </div>
    </div>

@endsection
