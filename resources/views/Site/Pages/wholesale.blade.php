@extends('Site.Layout.app')
@section('content')
    <!-- Toastr Css -->
    <link href="{{asset('assets/main')}}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <div class="section-empty section-item">
        <div class="container content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary">{{trans('site.WHOLESALE')}}</h3>
                    <h4 class="text-primary">{{trans('site.for_business_inquiries')}}</h4>
                    <p style="font-size: 16px">
                        {!! $setting['wholesale_desc_'.\Illuminate\Support\Facades\App::getLocale()] !!}
                    </p>
                    <hr class="space s"/>
                    <form action="{{route('postContact')}}" id="contactForm"
                          class="form-box" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 15px">
                                <p>{{trans('site.name')}}</p>
                                <input id="name" name="name" placeholder="" type="text"
                                       class="form-control form-value">
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px">
                                <p>{{trans('site.email')}}</p>
                                <input id="email" name="email" placeholder="" type="email"
                                       class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <p>{{trans('site.phone')}}</p>
                                <input id="phone" name="phone" placeholder="" type="text"
                                       class="form-control form-value">
                            </div>
                        </div>
                        <hr class="space s"/>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{trans('site.Message')}}</p>
                                <textarea id="messagge" name="message"  class="form-control form-value"></textarea>
                                <hr class="space s"/>
                                <button class="circle-button btn" id="sendBtn" type="submit"><i
                                        class=""></i>{{trans('site.send')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($clients->count())
        <!-- Our Clients -->
        <div class="section-empty" style="direction: ltr">
            <div class="content">
                <div class="title-base">
                    <hr/>
                    <h2>{{trans('site.our_clients')}}</h2>
                </div>
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
    <script>
        $("form#contactForm").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#contactForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#sendBtn').html('<span style="margin-right: 4px;color: white"> {{trans('site.wait')}} </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
                },
                success: function (data) {
                    if (data.status == 200) {
                        toastr.success("{{trans('site.we_received')}}");
                        $('#contactForm')[0].reset();
                        $('#sendBtn').html("{{trans('site.send')}}").attr('disabled', false);
                    } else {
                        toastr.error('Oops There is an error');
                    }
                },
                error: function (data) {
                    if (data.status == 500) {
                        $('#sendBtn').html("{{trans('site.send')}}").attr('disabled', false);
                        toastr.error('Oops There is an error');
                    } else if (data.status == 422) {
                        $('#sendBtn').html("{{trans('site.send')}}").attr('disabled', false);
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value);
                                });
                            }
                        });
                    }
                },//end error method
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
    <!-- Toastr Js -->
    <script src="{{asset('assets/main')}}/toastr/toastr.min.js"></script>

@endsection

