@extends('Site.Layout.app')
@section('content')
    <!-- Slider -->
    <div class="section-slider row-21 grunge-border-gray">
        <div class="flexslider visible-dir-nav advanced-slider slider text-center" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="show-scale" data-time="1000" data-timeline="asc" data-timeline-time="200">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('{{asset('assets/site')}}/images/hd-12.jpg')">
                        </div>
                        <div class="container">
                            <div class="container-middle">
                                <div class="container-inner">
                                    <img class="anima" src="{{asset('assets/site')}}/images/stars.png" alt=""/>
                                    <hr class="space s"/>
                                    <p class="text-xl text-black text-color anima text-c">ITALIAN ARTISANAL GELATO</p>
                                    <hr class="space xs"/>
                                    <p class="anima text-c">
                                        Fresh flavor for every one’s favor
                                    </p>
                                    <hr class="space s"/>
                                    <a href="#" class="btn circle-button btn-border btn-sm anima">VIEW THE MENU</a>
                                    <hr class="space visible-sm"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-slider-anima="show-scale" data-time="1000" data-timeline="asc" data-timeline-time="200">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('{{asset('assets/site')}}/images/hd-11.jpg')">
                        </div>
                        <div class="container">
                            <div class="container-middle">
                                <div class="container-inner">
                                    <img class="anima" src="{{asset('assets/site')}}/images/stars.png" alt=""/>
                                    <hr class="space s"/>
                                    <p class="text-xl text-black text-color anima text-c">Delicious ice-screems<br/>for family
                                    </p>
                                    <hr class="space xs"/>
                                    <p class="anima text-c">
                                        Food, in the end, in our own tradition, is something holy. <br/>
                                        It's not about nutrients and calories. It's about sharing.
                                    </p>
                                    <hr class="space s"/>
                                    <a href="#" class="btn circle-button btn-border btn-sm anima">VIEW THE MENU</a>
                                    <hr class="space visible-sm"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- About Us -->
    <div class="section-bg-color">
        <div class="container content">
            <div class="row">
                <div class="title-base">
                    <hr/>
                    <h2>{{trans('site.about_us')}}</h2>
                    <p>🍦 IL Sorbetto </p>
                </div>
                <h5>"
                    {{trans('site.about_desc')}}
                    "
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
        <div id="section_ef1nl" class="section-item section-empty    ">
            <div class="content container " style="">
                <div class="row ">
                    <div id="column_xEb2H" class="hc_column_cnt col-md-12   ">
                        <div class="row">
                            <div class="col-md-12 hc_subtitle_cnt">
                                <div class="title-base text-center" id="vZu15">
                                    <hr/>
                                    <h2>{{trans('site.our_categories')}}</h2>
                                    <p>{{trans('site.Great_taste')}}</p></div>
                            </div>
                            @foreach($categories as $category)
                                <div id="column_tC2Zn" class="hc_column_cnt col-md-4  text-center">
                                    <div class="row">
                                        <div class="col-md-12 hc_image_cnt">
                                            <img src="{{getFile($category->image)}}" width="270px" height="200" alt="{{$category->title}}"/></div>
                                        <div class="col-md-12 hc_space_cnt">
                                            <hr class="space xs"/>
                                        </div>
                                        <div class="col-md-12 hc_title_tag_cnt">
                                            <h4 id="w39Nr" class='text-bold text-m'>
                                                {{$category->title}}
                                            </h4>
                                        </div>
                                        <div class="col-md-12 hc_text_block_cnt">
                                            <div id="x8w8g" class='text-s'>
                                                {{\Illuminate\Support\Str::limit($category->desc,80)}}
                                            </div>
                                        </div>
                                        <div class="col-md-12 hc_space_cnt">
                                            <hr class="space m"/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

{{--    <div class="section-bg-image parallax-window" data-natural-height="850" data-natural-width="1920"--}}
{{--         data-parallax="scroll" data-image-src="{{asset('assets/site')}}/images/bg-13.jpg">--}}
{{--        <div class="container content">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-10 col-center big-padding boxed-inverse">--}}
{{--                    <div class="title-base">--}}
{{--                        <hr/>--}}
{{--                        <h2>Week's promotions</h2>--}}
{{--                        <p>Take a look to the news food promotions</p>--}}
{{--                    </div>--}}
{{--                    <hr class="space xs"/>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="list-items">--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Slow roasted white</h3>--}}
{{--                                            <p>Duis aute irure dolor into</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>9.5$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Grass beef fillet</h3>--}}
{{--                                            <p>Lorem ipsum dolor sito</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>9$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Deboned king quail</h3>--}}
{{--                                            <p>Sunt in culpa qui deserunt</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>10$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="list-items">--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Steamed king crab</h3>--}}
{{--                                            <p>Duis aute irure dolor ingolo</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>9$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Roast partridge</h3>--}}
{{--                                            <p>Lorem ipsum dolor site</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>9$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-item">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-9">--}}
{{--                                            <h3>Salad of shaved fenne</h3>--}}
{{--                                            <p>Sunt in culpa qui officia</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3">--}}
{{--                                            <span>10$</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="space l"/>--}}
{{--                    <div class="row" data-anima="fade-top" data-timeline="asc" data-timeline-time="200">--}}
{{--                        <div class="col-md-2 hidden-sm">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 anima">--}}
{{--                            <a class="img-box circle lightbox"--}}
{{--                               href="{{asset('assets/site')}}/images/gallery/square-12.jpg"--}}
{{--                               data-lightbox-anima="show-scale">--}}
{{--                                <img src="{{asset('assets/site')}}/images/gallery/square-12.jpg" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 anima">--}}
{{--                            <a class="img-box circle lightbox"--}}
{{--                               href="{{asset('assets/site')}}/images/gallery/square-13.jpg"--}}
{{--                               data-lightbox-anima="show-scale">--}}
{{--                                <img src="{{asset('assets/site')}}/images/gallery/square-13.jpg" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 anima">--}}
{{--                            <a class="img-box circle lightbox"--}}
{{--                               href="{{asset('assets/site')}}/images/gallery/square-14.jpg"--}}
{{--                               data-lightbox-anima="show-scale">--}}
{{--                                <img src="{{asset('assets/site')}}/images/gallery/square-14.jpg" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 anima hidden-sm">--}}
{{--                            <a class="img-box circle lightbox"--}}
{{--                               href="{{asset('assets/site')}}/images/gallery/square-15.jpg"--}}
{{--                               data-lightbox-anima="show-scale">--}}
{{--                                <img src="{{asset('assets/site')}}/images/gallery/square-15.jpg" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2 hidden-sm">--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="section-two-blocks blocks-right bg-white">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <a class="img-box"><img src="{{asset('assets/site')}}/images/block-4.jpg" alt=""/></a>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="content">--}}
{{--                    <div class="title-base text-left">--}}
{{--                        <hr/>--}}
{{--                        <h2>Ice creams</h2>--}}
{{--                        <p>Hand made ice creams</p>--}}
{{--                    </div>--}}
{{--                    <div class="list-items">--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-17.jpg)"></i>--}}
{{--                                    <h3>Steamed king crab</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-18.jpg)"></i>--}}
{{--                                    <h3>Roast partridge</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-16.jpg)"></i>--}}
{{--                                    <h3>Salad of shaved fenne</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>10$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-19.jpg)"></i>--}}
{{--                                    <h3>Slow roasted white</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9.5$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="section-two-blocks bg-white">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <a class="img-box"><img src="{{asset('assets/site')}}/images/block-5.jpg" alt=""/></a>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="content">--}}
{{--                    <div class="title-base text-left">--}}
{{--                        <hr/>--}}
{{--                        <h2>Desserts</h2>--}}
{{--                        <p>Hand made desserts</p>--}}
{{--                    </div>--}}
{{--                    <div class="list-items">--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-20.jpg)"></i>--}}
{{--                                    <h3>Steamed king crab</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-21.jpg)"></i>--}}
{{--                                    <h3>Roast partridge</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-22.jpg)"></i>--}}
{{--                                    <h3>Salad of shaved fenne</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>10$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="list-item list-item-img">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <i class="onlycover circle icon"--}}
{{--                                       style="background-image:url({{asset('assets/site')}}/images/gallery/square-23.jpg)"></i>--}}
{{--                                    <h3>Slow roasted white</h3>--}}
{{--                                    <p>--}}
{{--                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse--}}
{{--                                        cillume.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <span>9.5$</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
