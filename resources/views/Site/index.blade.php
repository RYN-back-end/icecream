@extends('Site.Layout.app')
@section('content')
    @if($sliders->count())
        <!-- Slider -->
        <div class="section-slider row-21 grunge-border-gray">
            <div class="flexslider visible-dir-nav advanced-slider slider text-center" data-options="animation:fade">
                <ul class="slides">
                    @foreach($sliders as $slider)
                        <li data-slider-anima="show-scale" data-time="1000" data-timeline="asc"
                            data-timeline-time="200">
                            <div class="section-slide">
                                <div class="bg-cover" style="background-image:url('{{getFile($slider->image)}}')">
                                </div>
                                <div class="container">
                                    <div class="container-middle">
                                        <div class="container-inner">
                                            <img class="anima" src="{{asset('assets/site')}}/images/stars.png" alt=""/>
                                            <hr class="space s"/>
                                            <p class="text-xl text-black text-color anima text-c">{{$slider->title}}</p>
                                            <hr class="space xs"/>
                                            <p class="anima text-c">
                                                {{$slider->sub_title}}
                                            </p>
                                            <hr class="space s"/>
                                            <a href="{{route('products')}}"
                                               class="btn circle-button btn-border btn-sm anima">{{trans('site.menu')}}</a>
                                            <hr class="space visible-sm"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- About Us -->
    <div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="title-base">
                    <hr/>
                    {{--                    <h2>{{trans('site.about_us')}}</h2>--}}
                    <h2>🍦 IL Sorbetto </h2>
                </div>
                <h5>
                    "{{$setting['second_section_'.\Illuminate\Support\Facades\App::getLocale()]}}"
                </h5>
                <br>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="im-ice-cream icon anima"></i>
                        <h3>{{trans('site.sizes')}}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="im-birthday-cake icon anima"></i>
                        <h3>{{trans('site.birthdays')}}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="im-milk-bottle icon anima"></i>
                        <h3>{{trans('site.fresh_juices')}}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                        <i class="im-cupcake icon anima"></i>
                        <h3>{{trans('site.cupcake_special')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($categories->count())
        <!-- Categories -->
        <div id="section_ef1nl" class="section-item section-empty">
            <div class="content container " style="">
                <div class="row">
                    <div class="title-base">
                        <hr/>
                        <h2>{{trans('site.our_categories')}}</h2>
                    </div>
                    <div class="col-md-6 text-center">
                        <p>{{$setting['category_desc_'.\Illuminate\Support\Facades\App::getLocale()]}}</p>
                        <hr class="space xs"/>
                        <a href="{{route('products')}}" class="btn-text">{{trans('site.explore_menu')}}</a>
                    </div>
                    <div class="col-md-6">
                        @foreach($categories as $category)
                            <div class="col-md-4 hc_image_cnt cat_div">
                                <a href="products#{{$category->title}}">
                                    <img src="{{getFile($category->image)}}"
                                         width="270px" height="200" alt="{{$category->title}}"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{--                <div class="row ">--}}
                {{--                    <div id="column_xEb2H" class="hc_column_cnt col-md-12">--}}
                {{--                        <div class="row">--}}
                {{--                            <div class="col-md-12 hc_subtitle_cnt">--}}
                {{--                                <div class="title-base text-center" id="vZu15">--}}
                {{--                                    <hr/>--}}
                {{--                                    <h2>{{trans('site.our_categories')}}</h2>--}}
                {{--                                    <p>{{trans('site.Great_taste')}}</p></div>--}}
                {{--                            </div>--}}
                {{--                            @foreach($categories as $category)--}}
                {{--                                <div id="column_tC2Zn" class="hc_column_cnt col-md-4  text-center">--}}
                {{--                                    <div class="row">--}}
                {{--                                        <div class="col-md-12 hc_image_cnt">--}}
                {{--                                            <a href="products#{{$category->title}}">--}}
                {{--                                            <img src="{{getFile($category->image)}}"--}}
                {{--                                                 width="270px" height="200" alt="{{$category->title}}"/>--}}
                {{--                                            </a>--}}
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
                {{--                                        <div class="col-md-12 hc_text_block_cnt">--}}
                {{--                                            <div id="x8w8g" class='text-s'>--}}
                {{--                                                <a href="products#{{$category->title}}">--}}
                {{--                                                {{\Illuminate\Support\Str::limit($category->desc,80)}}--}}
                {{--                                                </a>--}}
                {{--                                            </div>--}}
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
            </div>
        </div>
    @endif

    @if($tradition->title)
        <div class="section-empty no-padding-bottom">
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 text-c">
                        <hr class="space s"/>
                        <div class="title-base">
                            <hr/>
                            <h2 class="text-c text-warning">{{$tradition['title']}}</h2>
                            <p style="color: #8a6d3b">{{$tradition['sub_title']}}</p>
                        </div>
                        <p>{{$tradition['desc']}}</p>
                        <button class="btn circle-button btn-border btn btn-sm">
                            <a class="myBtn" href="{{route('aboutUs')}}">
                                {{trans('site.see_who')}}
                            </a>
                        </button>
                        <style>
                            @media (max-width: 767px) {
                                .cat_div {
                                    width: 50%;
                                    display: flex;
                                    float: left;
                                }
                            }

                            .flav_desc {
                                letter-spacing: 0px;
                            }

                            .myBtn:hover {
                                color: white;
                            }
                        </style>
                        <hr class="space s"/>
                    </div>
                    <div class="col-md-4">
                        <img src="{{getFile($tradition->image)}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <br>
    <br>


    @if($flavors->count())
        <div class="section-bg-image parallax-window" data-natural-height="850" data-natural-width="1920"
             data-parallax="scroll" data-image-src="{{asset('assets/site')}}/images/bg-13.jpg">
            <div class="container content">
                <div class="row">
                    <div class="col-md-12 col-center big-padding boxed-inverse">
                        <div class="title-base">
                            <hr/>
                            <a href="{{route('products')}}">
                                <button class="circle-button btn btn-sm">{{trans('site.explore_menu')}}</button>
                            </a>
                            <p class="flav_desc">
                                {{$setting['flavor_desc_'.\Illuminate\Support\Facades\App::getLocale()]}}
                            </p>
                            <br>
                            <h2>{{trans('site.flavor')}}</h2>
                        </div>
                        <hr class="space xs"/>
                        <div class="row">
                            @if($flavor_groups->count())
                                @foreach($flavor_groups as $group)
                                    <div class="col-md-4">
                                        <div class="list-items">
                                            @foreach($group as $flavor)
                                                <div class="list-item list-item-img">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <i class="onlycover circle icon"
                                                               style="background-image:url({{getFile($flavor->image)}})"></i>
                                                            <h3>{{$flavor->title}}</h3>
                                                            <p>{{$flavor->desc}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <hr class="space l"/>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($wholesalesRows->count())
        <div class="section-empty text-center">
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 col-center">
                        <div class="title-base">
                            <hr>
                            <h2>{{trans('site.WHOLESALE')}}</h2>
                            <p>{{trans('site.our_mission')}}</p>
                        </div>
                        <p>
                            {{$setting['wholesale_desc_'.\Illuminate\Support\Facades\App::getLocale()]}}
                        </p>
                        <a href="{{route('contact_us')}}">
                            <button class="circle-button btn btn-sm">{{trans('site.contact_us')}}</button>
                        </a>
                        <hr class="space xs">
                    </div>
                </div>
                <hr class="space xs">
                <table class="grid-table border-table fade-bottom" data-anima="" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6570559068076645">
                    <tbody>
                    <tr>
                        @foreach($wholesalesRows as $row)
                            <td>
                                <a href="#" target="_blank" rel="nofollow" data-anima="pulse-fast" data-trigger="hover" data-toggle="tooltip" data-placement="top" aid="0.6171303338748815" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;" class="">
                                    <img src="{{$row->image}}" style="height: 100%" alt="">
                                </a>
                            </td>
                        @endforeach

                    </tr>
                    </tbody></table>
            </div>
        </div>

    @endif

    @if($clients->count())
        <!-- Our Clients -->
        <div class="section-empty" style="direction: ltr">
            <div class="content">
                <div class="flexslider carousel nav-inner"
                     data-options="minWidth:120,itemMargin:0,numItems:6,controlNav:true,directionNav:false">
                    <ul class="slides">
                        @foreach($clients as $client)
                            <li>
                                <a class="img-box lightbox" href="#">
                                    <img src="{{getFile($client->image)}}" style="width: 250px;height: 150px" alt="">
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    @endif



    @if($reviews->count())
        <!-- TESTIMONIALS -->
        <div class="section-bg-image parallax-window white"
             @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                 style="direction: ltr"
             @endif
             data-natural-height="850" data-natural-width="1920" data-parallax="scroll"
             data-image-src="{{asset('assets/site')}}/images/bg-23.png">
            <div class="container content">
                <div class="row">
                    <div class="col-md-10 col-center">
                        <div class="title-base">
                            <hr/>
                            <h2>{{trans('site.what_our_clients_say')}}</h2>
                        </div>
                        <div class="flexslider carousel outer-navs"
                             data-options="controlNav:true,directionNav:true,numItems:2,itemMargin:15">
                            <ul class="slides">
                                @foreach($reviews as $review)
                                    <li>
                                        <div class="advs-box niche-box-testimonails-cloud">
                                            <p>{{$review->desc}}</p>
                                            <div class="name-box vertical-row">
                                                <i class="vertical-col fa text-l circle onlycover"
                                                   style="background-image:url('{{url(getUserImage($review->image))}}');width: 65px;height: 65px"></i>
                                                <h5 class="vertical-col subtitle">{{$review->name}}<span
                                                        class="subtxt text-white">{{$review->written}}</span></h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
