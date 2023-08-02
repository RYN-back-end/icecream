@extends('Site.Layout.app')
@section('content')
    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary">{{trans('site.order_desc')}}</h3>
{{--                    <h4 class="text-primary">{{trans('site.order_desc')}}</h4>--}}
                    <p  style="font-size: 16px">
                        {!! $setting['order_desc_'.\Illuminate\Support\Facades\App::getLocale()] !!}
                    </p>
                    <hr class="space s"/>
                    <div class="text-center">
                        <div class="row">
                            @foreach($ways as $way)
                                <div class="col-md-4">
                                    <div class="img-box adv-img adv-img-full-content">
                                        <a class="img-box anima-scale-up" href="{{$way->link}}">
                                            <img alt="" src="{{getFile($way->image)}}">
                                        </a>
                                        <div class="caption-bg">
                                            <div class="caption">
                                                <div class="inner">
                                                    <h2><a href="{{$way->link}}"> {{$way->title}}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="text-center">
        <div class="title-base">
            <h3>{{trans('site.menu')}}</h3>
        </div>
        <img src="{{getFile($setting->menu)}}" >
    </div>
    <br>
    <br>


@endsection

