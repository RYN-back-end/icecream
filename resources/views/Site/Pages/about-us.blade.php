@extends('Site.Layout.app')
@section('content')
    <div class="header-title overlay-container  white ken-burn"
         data-parallax="scroll" data-natural-height="850" data-natural-width="1920" data-position="top"
         data-image-src="{{getFile('assets/uploads/bg-15.png')}}"
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

    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="grid-list one-row-list" >
                        <div class="grid-box row">
                            <div class="grid-item col-md-12">
                                <div class="advs-box niche-box-blog" @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')style="text-align: right !important;"@endif>
                                    <div class="block-top">
                                        <div class="block-title" @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')style="text-align: right !important;"@endif>
                                            <h2><a href="#">{{trans('site.our_history_desc')}}</a></h2>
                                        </div>
                                    </div>
                                    <div class="text-c">
                                        <div class="btn-group social-group btn-group-icons">
                                            <a target="_blank"
                                               href="https://www.facebook.com/profile.php?id=100093193835771&mibextid=LQQJ4d"
                                               data-social="share-facebook"><i class="fa fa-facebook"></i></a>
                                            <a target="_blank" href="#" data-social="share-instagram"><i
                                                    class="fa fa-instagram"></i></a>
                                            <a target="_blank" href="tel:+97470707294" data-social="share-instagram"><i
                                                    class="im-headset"></i></a>
                                        </div>
                                    </div>
                                    <a class="img-box" href="#">
                                        <img src="{{getFile($setting->about_image)}}" alt="" style="margin-top: -68px;">
                                    </a>
                                    <p class="excerpt" >
                                        {!! $setting['about_desc_'.\Illuminate\Support\Facades\App::getLocale()] !!}
                                    </p>
                                    <hr class="space">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 widget text-c">
                    <hr class="space s">
                    <div class="list-group latest-post-list list-blog">
                        <p class="list-group-item active">{{trans('site.our_clients')}}</p>
                        @foreach($clients as $client)
{{--                            <div class="list-group-item">--}}
{{--                                <div class="row">--}}
                                    <div class="col-md-6 col-sm-6">
                                        <a class="img-box circle">
                                            <img src="{{getFile($client->image)}}" alt="">
                                        </a>
                                    </div>
{{--                                </div>--}}
{{--                            </div>--}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

