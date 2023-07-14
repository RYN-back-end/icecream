<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="{{\Illuminate\Support\Facades\App::getLocale()}}" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}">
<!--<![endif]-->
<head>
    @include('Site.Layout.assets.css')
</head>
<body>
<div id="preloader"></div>
<div class="footer-parallax-container">
    @include('Site.Layout.inc.header')
    @yield('content')
</div>
<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
@include('Site.Layout.inc.footer')
</body>
</html>
