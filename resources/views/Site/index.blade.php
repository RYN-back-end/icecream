﻿@extends('Site.Layout.app')
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
                                    <img class="anima" src="{{asset('assets/site')}}/images/stars.png" alt="" />
                                    <hr class="space s" />
                                    <p class="text-xl text-black text-color anima">ITALIAN ARTISANAL GELATO</p>
                                    <hr class="space xs" />
                                    <p class="anima">
                                        Fresh flavor for every one’s favor
                                    </p>
                                    <hr class="space s" />
                                    <a href="#" class="btn circle-button btn-border btn-sm anima">VIEW THE MENU</a>
                                    <hr class="space visible-sm" />
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
                                    <img class="anima" src="{{asset('assets/site')}}/images/stars.png" alt="" />
                                    <hr class="space s" />
                                    <p class="text-xl text-black text-color anima">Delicious ice-screems<br />for family</p>
                                    <hr class="space xs" />
                                    <p class="anima">
                                        Food, in the end, in our own tradition, is something holy. <br />
                                        It's not about nutrients and calories. It's about sharing.
                                    </p>
                                    <hr class="space s" />
                                    <a href="#" class="btn circle-button btn-border btn-sm anima">VIEW THE MENU</a>
                                    <hr class="space visible-sm" />
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
                    <hr />
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
    <!-- Categories -->
    <div id="section_ef1nl" class="section-item section-empty    ">
        <div class="content container " style="">
            <div class="row ">
                <div id="column_xEb2H" class="hc_column_cnt col-md-12   ">
                    <div class="row">
                        <div class="col-md-12 hc_subtitle_cnt">
                            <div class="title-base text-center"  id="vZu15">
                                <hr/>
                                <h2>{{trans('site.our_categories')}}</h2>
                                <p>{{trans('site.Great_taste')}}</p></div>
                        </div>
                        <div id="column_tC2Zn" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-5.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="w39Nr" class=' text-bold text-m   '
                                                                            style=''>Cheese and nouces</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="x8w8g" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space m    "/>
                                </div>
                            </div>
                        </div>
                        <div id="column_zlI3C" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-6-1.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="j2qvA" class=' text-bold text-m   '
                                                                            style=''>Cheese mix boards</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="CfjWi" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space m    "/>
                                </div>
                            </div>
                        </div>
                        <div id="column_tmk8Z" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-7-1.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="4gnLG" class=' text-bold text-m   '
                                                                            style=''>Burger food</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="BNYv3" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space m    "/>
                                </div>
                            </div>
                        </div>
                        <div id="column_cjgYa" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-8.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="b1pmj" class=' text-bold text-m   '
                                                                            style=''>Gongorzoa and melograno</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="P7IuF" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space m    "/>
                                </div>
                            </div>
                        </div>
                        <div id="column_dBZzB" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-9.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="yJggW" class=' text-bold text-m   '
                                                                            style=''>Sea food</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="eG645" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="column_hi4x2" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-10.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="CSZIt" class=' text-bold text-m   '
                                                                            style=''>Fish dishes</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="qhMZp" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="column_XTkrs" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-11.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="gfLwa" class=' text-bold text-m   '
                                                                            style=''>Forest fruits</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="hkaGV" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="column_UPAGU" class="hc_column_cnt col-md-3  text-center  " style="">
                            <div class="row">
                                <div class="col-md-12 hc_image_cnt"><img class="   " style=""
                                                                         src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/food-12.jpg"
                                                                         alt=""/></div>
                                <div class="col-md-12 hc_space_cnt">
                                    <hr class="space xs    "/>
                                </div>
                                <div class="col-md-12 hc_title_tag_cnt"><h4 id="y82fE" class=' text-bold text-m   '
                                                                            style=''>Bruschettine</h4></div>
                                <div class="col-md-12 hc_text_block_cnt">
                                    <div id="z7eAQ" class=' text-s   ' style=''>Tincidunt integer eu augue augue nunc
                                        elit dolore ortello menotpolo.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg-image parallax-window" data-natural-height="850" data-natural-width="1920" data-parallax="scroll" data-image-src="{{asset('assets/site')}}/images/bg-13.jpg">
        <div class="container content">
            <div class="row">
                <div class="col-md-10 col-center big-padding boxed-inverse">
                    <div class="title-base">
                        <hr />
                        <h2>Week's promotions</h2>
                        <p>Take a look to the news food promotions</p>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-items">
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Slow roasted white</h3>
                                            <p>Duis aute irure dolor into</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>9.5$</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Grass beef fillet</h3>
                                            <p>Lorem ipsum dolor sito</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>9$</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Deboned king quail</h3>
                                            <p>Sunt in culpa qui deserunt</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>10$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-items">
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Steamed king crab</h3>
                                            <p>Duis aute irure dolor ingolo</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>9$</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Roast partridge</h3>
                                            <p>Lorem ipsum dolor site</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>9$</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>Salad of shaved fenne</h3>
                                            <p>Sunt in culpa qui officia</p>
                                        </div>
                                        <div class="col-md-3">
                                            <span>10$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="space l" />
                    <div class="row" data-anima="fade-top" data-timeline="asc" data-timeline-time="200">
                        <div class="col-md-2 hidden-sm">
                        </div>
                        <div class="col-md-2 anima">
                            <a class="img-box circle lightbox" href="{{asset('assets/site')}}/images/gallery/square-12.jpg" data-lightbox-anima="show-scale">
                                <img src="{{asset('assets/site')}}/images/gallery/square-12.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 anima">
                            <a class="img-box circle lightbox" href="{{asset('assets/site')}}/images/gallery/square-13.jpg" data-lightbox-anima="show-scale">
                                <img src="{{asset('assets/site')}}/images/gallery/square-13.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 anima">
                            <a class="img-box circle lightbox" href="{{asset('assets/site')}}/images/gallery/square-14.jpg" data-lightbox-anima="show-scale">
                                <img src="{{asset('assets/site')}}/images/gallery/square-14.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 anima hidden-sm">
                            <a class="img-box circle lightbox" href="{{asset('assets/site')}}/images/gallery/square-15.jpg" data-lightbox-anima="show-scale">
                                <img src="{{asset('assets/site')}}/images/gallery/square-15.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 hidden-sm">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-two-blocks blocks-right bg-white">
        <div class="row">
            <div class="col-md-6">
                <a class="img-box"><img src="{{asset('assets/site')}}/images/block-4.jpg" alt="" /></a>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Ice creams</h2>
                        <p>Hand made ice creams</p>
                    </div>
                    <div class="list-items">
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-17.jpg)"></i>
                                    <h3>Steamed king crab</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-18.jpg)"></i>
                                    <h3>Roast partridge</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-16.jpg)"></i>
                                    <h3>Salad of shaved fenne</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>10$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-19.jpg)"></i>
                                    <h3>Slow roasted white</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9.5$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-two-blocks bg-white">
        <div class="row">
            <div class="col-md-6">
                <a class="img-box"><img src="{{asset('assets/site')}}/images/block-5.jpg" alt="" /></a>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <div class="title-base text-left">
                        <hr />
                        <h2>Desserts</h2>
                        <p>Hand made desserts</p>
                    </div>
                    <div class="list-items">
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-20.jpg)"></i>
                                    <h3>Steamed king crab</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-21.jpg)"></i>
                                    <h3>Roast partridge</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-22.jpg)"></i>
                                    <h3>Salad of shaved fenne</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>10$</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-item list-item-img">
                            <div class="row">
                                <div class="col-md-9">
                                    <i class="onlycover circle icon" style="background-image:url({{asset('assets/site')}}/images/gallery/square-23.jpg)"></i>
                                    <h3>Slow roasted white</h3>
                                    <p>
                                        Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <span>9.5$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS -->
    <div class="section-bg-image parallax-window white"
         @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
            style="direction: ltr"
        @endif
         data-natural-height="850" data-natural-width="1920" data-parallax="scroll" data-image-src="{{asset('assets/site')}}/images/bg-20.jpg">
        <div class="container content">
            <div class="row">
                <div class="col-md-10 col-center">
                    <div class="title-base">
                        <hr />
                        <h2>{{trans('site.what_our_clients_say')}}</h2>
                    </div>
                    <div class="flexslider carousel outer-navs" data-options="controlNav:true,directionNav:true,numItems:2,itemMargin:15">
                        <ul class="slides">
                            <li>
                                <div class="advs-box niche-box-testimonails-cloud">
                                    <p>
                                        "قمت بزيارة محل الآيس كريم هذا المساء ولقد استمتعت بتجربة رائعة. كانت النكهات والمجموعات المتاحة واسعة ومتنوعة، وتم تقديم الآيس كريم بطريقة جميلة ومرتبة. كانت النكهات التي جربتها جميعها لذيذة بشكل لا يصدق، ولم أتمكن من تحديد الأفضل بينها.
                                    </p>
                                    <div class="name-box vertical-row">
                                        <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('assets/site')}}/images/users/user-2.jpg')"></i>
                                        <h5 class="vertical-col subtitle">مريف فهد <span class="subtxt">عبر فيسبوك</span></h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box niche-box-testimonails-cloud">
                                    <p>
                                        كان الجو في المحل رائعاً، حيث كانت الموسيقى هادئة والأجواء مريحة ومثالية للاسترخاء والاستمتاع بالآيس كريم. كان العاملون في المحل متعاونين وودودين، وقدموا لي خدمة سريعة وممتازة.
                                        أوصي بشدة بزيارة هذا المحل إذا كنت تبحث عن تجربة آيس كريم لا تنسى. سأعود بالتأكيد مرة أخرى لتجربة المزيد من النكهات الرائعة
                                    </p>
                                    <div class="name-box vertical-row">
                                        <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('assets/site')}}/images/users/user-3.jpg')"></i>
                                        <h5 class="vertical-col subtitle">محمد جمال <span class="subtxt">عبر تويتر</span></h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box niche-box-testimonails-cloud">
                                    <p>
                                        "قمت بزيارة محل الآيس كريم هذا المساء ولقد استمتعت بتجربة رائعة. كانت النكهات والمجموعات المتاحة واسعة ومتنوعة، وتم تقديم الآيس كريم بطريقة جميلة ومرتبة. كانت النكهات التي جربتها جميعها لذيذة بشكل لا يصدق، ولم أتمكن من تحديد الأفضل بينها.
                                    </p>
                                    <div class="name-box vertical-row">
                                        <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('assets/site')}}/images/users/user-4.jpg')"></i>
                                        <h5 class="vertical-col subtitle">احمد طارق <span class="subtxt">عبر فيسبوك</span></h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="advs-box niche-box-testimonails-cloud">
                                    <p>

                                        كان الجو في المحل رائعاً، حيث كانت الموسيقى هادئة والأجواء مريحة ومثالية للاسترخاء والاستمتاع بالآيس كريم. كان العاملون في المحل متعاونين وودودين، وقدموا لي خدمة سريعة وممتازة.
                                        أوصي بشدة بزيارة هذا المحل إذا كنت تبحث عن تجربة آيس كريم لا تنسى. سأعود بالتأكيد مرة أخرى لتجربة المزيد من النكهات الرائعة                                    </p>
                                    <div class="name-box vertical-row">
                                        <i class="vertical-col fa text-l circle onlycover" style="background-image:url('{{asset('assets/site')}}/images/users/user-3.jpg')"></i>
                                        <h5 class="vertical-col subtitle">ابو نواف <span class="subtxt">عبر تويتر</span></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection