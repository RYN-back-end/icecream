@extends('Site.Layout.app')
@section('content')
    <div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="{{asset('assets/site')}}/images/bg-12.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>{{$product->title}}</h1>
            </div>
        </div>
    </div>
    <div class="section-bg-color section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <div class="coverflow-slider text-center" data-width="60" data-options="enableMousewheel:false">
                        @if($imagesOfProducts != null)
                            <ul>
                                <li>
                                    <a class="img-box lightbox" href="{{getFile($product->image)}}" data-lightbox-anima="show-scale">
                                        <img src="{{getFile($product->image)}}" alt="">
                                    </a>
                                </li>
                                @foreach($imagesOfProducts as $proImage)
                                    <li>
                                        <a class="img-box lightbox" href="{{getFile($proImage->image)}}" data-lightbox-anima="show-scale">
                                            <img src="{{getFile($proImage->image)}}" alt="">
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        @else
                            <li>
                                <a class="img-box lightbox" href="{{getFile($product->image)}}" data-lightbox-anima="show-scale">
                                    <img src="{{getFile($product->image)}}" alt="">
                                </a>
                            </li>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <p>
                        {{$product->desc}}
                    </p>
                    <a href="https://wa.me/+97470707294?text= من فضلك اريد طلب {{$product->title}}" class="circle-button btn btn-sm anima-button" style="border:0;background-color: #50B76A" type="button">
                        <i class="fab fa-whatsapp text-white"></i>{{trans('site.buy_now')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

