<header class="fixed-top  scroll-change wide-area" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('/')}}">
                        <img class="logo-default" src="{{asset('assets/site')}}/images/logo-2.png" alt="logo" />
{{--                        <img class="logo-retina" src="{{asset('assets/site')}}/images/logo-retina.png" alt="logo" />--}}
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="{{route('/')}}">{{trans('site.home')}}</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('products')}}">{{trans('site.menu')}}</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('aboutUs')}}">{{trans('site.our_history')}}</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('contact_us')}}">{{trans('site.contact_us')}}</a>
                        </li>

                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <div class="search-box-menu">
                            <div class="search-box scrolldown">
                                <input type="text" class="form-control" placeholder="Search for...">
                            </div>
                            <button type="button" class="btn btn-default btn-search">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                        <ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="{{asset('assets/site')}}/images/ar.png" alt="" />العربية<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{LaravelLocalization::getLocalizedURL('en')}}"><img src="{{asset('assets/site')}}/images/en.png" alt=""/>English</a></li>
                                    </ul>
                                @else
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="{{asset('assets/site')}}/images/en.png" alt="" />English<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{LaravelLocalization::getLocalizedURL('ar')}}"><img src="{{asset('assets/site')}}/images/ar.png" alt=""/>Arabic</a></li>
                                </ul>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
