@extends('Site.Layout.app')
@section('content')
    <div class="header-title overlay-container  white ken-burn"
         data-parallax="scroll" data-natural-height="850" data-natural-width="1920" data-position="top"
         data-image-src="http://themes.framework-y.com/gourmet/wp-content/uploads/2017/05/bg-15-1920x850.jpg"
         data-bleed="1" data-sub-height="">
        <div class="overlay-content overlaybox">
            <div class="container">
                <div class="title-base">
                    <hr class="anima"/>
                    <h1>
                        {{trans('site.our_history')}} </h1>
                    <p style="text-align: center">
                        {{trans('site.our_history_desc')}} </p>
                </div>
            </div>
        </div>
    </div>


    <div class="content container">
        <div class="row ">
            <div id="column_jFHjU" class="hc_column_cnt col-md-8   " style="">
                <div class="row">
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space s    ">
                    </div>
                    <div class="col-md-12 hc_subtitle_cnt">
                        <div class="title-base" style="" id="3ojT6">
                            <hr>
                            <h2>
                                IL SORBETTO WLL
                            </h2>
                            <p>{{trans('site.our_story_meet')}}</p>
                        </div>
                    </div>
                    <div class="col-md-12 hc_text_block_cnt">
                        <div id="PQwlq">
                            Lorem ipsum dolor sit amet consectetur adipiscin tsed
                            doeiusmod temporidunt utlabore dolorna aliqua. Utenim ad minim veni am quis nostrud
                            exercitatio llamco laboris nisi u ea commodo consequat aute irure dolor in reprehenderit in
                            voluptate velit esse cillum iatur. L sum dolor sit amet consectetur adiiscing elitsed do
                            eiusmod tempor incididunt utla bore e aliqua. Utenim ad minim veniam quis nos trud
                            exercitation Lorem ipsum dolor sit amet consectetur adipiscing elitse.
                        </div>
                    </div>
                    <div class="col-md-12 hc_space_cnt">
                        <hr class="space m">
                    </div>
                </div>
            </div>
            <div id="column_VFQZl" class="hc_column_cnt col-md-4   " style="">
                <div class="row">
                    <div class="col-md-12 hc_image_cnt"><img
                            style="height: 100px"
                            src="{{asset('assets/site/images/logo-2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

