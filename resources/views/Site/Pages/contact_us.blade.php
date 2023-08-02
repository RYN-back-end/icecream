@extends('Site.Layout.app')
@section('content')
    <!-- Toastr Css -->
    <link href="{{asset('assets/main')}}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <div class="section-empty section-item">
        <div class="google-map row-15">
            <iframe class="gmap_iframe" style="width: 100%;height: 100%;"
                    src="https://maps.google.com/maps?&amp;hl=en&amp;q=جماعية بيوت الشباب القطرية&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <hr class="space visible-sm"/>
                    <h3>{{trans('site.How_to_reach_us')}}</h3>
                    <p>
                        {{trans('site.How_to_desc')}}
                    </p>
                    <hr class="space s"/>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li im-headset"></i>+(974) 70707294</li>
                                <li><i class="fa fa-facebook fa-li"></i> ilsorbetto</li>
                                <li><i class="fa fa-instagram fa-li"></i> ilsorbetto</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li>
                                    <i class="fa-li im-home-5"></i>
                                    {{trans('site.address_desc')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="space s"/>
                    <div class="text-center">
                        <div class="btn-group btn-group-icons" role="group">
                            <a class="btn btn-default"
                               href="https://www.facebook.com/profile.php?id=100093193835771&mibextid=LQQJ4d">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="btn btn-default">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h3>{{trans('site.Send_a_message')}}</h3>
                    <p style="font-size: 16px">
                        {{trans('site.contact_desc')}} ❤️
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

