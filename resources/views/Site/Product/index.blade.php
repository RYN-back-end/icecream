@extends('Site.Layout.app')
@section('content')
    <div class="header-title ken-burn white" data-parallax="scroll" data-bleed="0" data-position="top"
         data-natural-height="850" data-natural-width="1920" data-image-src="{{asset('assets/site')}}/images/bg-31.png">
        <div class="container">
            <div class="title-base">
                <hr class="anima"/>
                <h1>{{trans('site.products_menu')}}</h1>
            </div>
        </div>
    </div>
    <div class="section-empty no-paddings-grid">
        <div class="container content">
            @foreach($categories as $category)
                <div class="title-base">
                    <hr/>
                    <p>{{$category->desc}}</p>
                    <h2>{{$category->title}}</h2>
                </div>
                @if($category->products->count())
                    @foreach($category->products as $product)
                        <div class="flexslider carousel visible-dir-nav outer-navs"
                             data-options="minWidth:200,itemMargin:15,numItems:3,controlNav:true,directionNav:true"
                             @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                                 style="direction: ltr"
                            @endif
                        >
                            <ul class="slides">
                                <li>
                                    <div class="img-box adv-img adv-img-down-text">
                                        <a class="img-box img-scale-up lightbox i-center" href="{{getFile($product->image)}}">
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
                            </ul>
                        </div>
                    @endforeach
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
