<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IL SORBETTO WLL</title>
<meta name="description" content="icecream, icecream store,IL SORBETTO WLL, icecream online">
<script src="{{asset('assets/site')}}/scripts/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/site')}}/scripts/bootstrap/css/bootstrap.css">
<script src="{{asset('assets/site')}}/scripts/script.js"></script>
@if(\Illuminate\Support\Facades\App::getLocale() =='ar')
    <link rel="stylesheet" href="{{asset('assets/site')}}/style-ar.css">
@else
<link rel="stylesheet" href="{{asset('assets/site')}}/style.css">
@endif
<link rel="stylesheet" href="{{asset('assets/site')}}/css/content-box.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/image-box.css">
<link rel="stylesheet" href="{{asset('assets/site')}}/css/animations.css">
<link rel="stylesheet" href='{{asset('assets/site')}}/css/components.css'>
<link rel="stylesheet" href='{{asset('assets/site')}}/scripts/flexslider/flexslider.css'>
<link rel="stylesheet" href='{{asset('assets/site')}}/scripts/magnific-popup.css'>
<link rel="stylesheet" href='{{asset('assets/site')}}/scripts/social.stream.css'>
<link rel="stylesheet" href='{{asset('assets/site')}}/scripts/jquery.flipster.min.css'>
<link rel="icon" href="{{asset('assets/site')}}/images/favicon.png">
@if(\Illuminate\Support\Facades\App::getLocale() =='ar')
    <link rel="stylesheet" href="{{asset('assets/site')}}/skin-ar.css">
@else
    <link rel="stylesheet" href="{{asset('assets/site')}}/skin.css">
@endif
<!-- Toastr Css -->
<link href="{{asset('assets/main')}}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
<style>
    .toast-message{
        font-size: 15px;
    }
</style>
@yield('site-css')
