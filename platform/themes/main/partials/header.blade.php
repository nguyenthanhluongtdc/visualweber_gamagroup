<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="{{ app()->getLocale() }}"><![endif]-->
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}"
        rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --color-1st: {{ theme_option('primary_color', '#bead8e') }};
            --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
        }

    </style>

    {!! Theme::header() !!}

    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}


    <header class="header header-desktop" id="header">
        <div class="header-deskop-wrap">
            <div class="header-top">
            <a class="header-logo" href="{{ route('public.index') }}">
                <img src="{{ theme::asset()->url('images/logo.png') }}" alt="logo">
            </a>
        </div>
        <div class="header-menu container header-menu-wrap">
            <nav class="main-menu">
                {!! Menu::renderMenuLocation('main-menu', [
    'options' => ['class' => 'menu sub-menu--slideLeft'],
    'view' => 'main-menu',
]) !!}
            </nav>
            <ul class="language-search">
                <li class="lang lang-vi font-helve-light font15">
                    <a rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">

                        <span>VN</span>
                    </a>
                </li>
                <li class="lang lang-en font-helve-light font15">
                    <a rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">

                        <span>EN</span>
                    </a>
                </li>

                <li class="nav-item dropdown dmenu">
                    <div class="search-btn c-search-toggler open-search">
                        <i class="fa fa-search"></i>

                    </div>
                </li>
                
            </ul>
            
        </div>
        <div class="search-deskop">
                <form action="{{ route('public.search') }}" method="get" class="form-search container">
                    <input type="text" name="q" value="{{ request()->input('q') }}" placeholder="{{ __('Type to search...') }}" class="input-search-home"
                        autocomplete="off">

                        <div class="closer-search">
                    <i class="fas fa-times"></i>
                    </div>
                </div>
                </form>
               
            </div>
    </header>
    <header class="header-mobie">
        <div class="container header-mobie-content">
            <div class="left">
                <a class="header-logo" href="{{ route('public.index') }}">
                    @if (theme_option('logo'))
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                            alt="{{ theme_option('site_title') }}">
                    @endif

                </a>
            </div>
            <div class="right">
                <ul class="language-search">
                    <li class="lang lang-vi font-helve font18">
                        <a rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">

                            <span>VN</span>
                        </a>
                    </li>
                    <li class="lang lang-en  font-helve font18">
                        <a rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">

                            <span>EN</span>
                        </a>
                    </li>

                    <li class="">
                        <div class="search-btn search-btn-mobie c-search-toggler">
                            <i class="fa fa-search"></i>
                            
                        </div>
                    </li>
                    <li class="open-menu-mobie"><i class="fas fa-bars"></i></li>
                </ul>
            </div>
            <nav class="list-menu-mobie">
                {!! Menu::renderMenuLocation('main-menu', [
    'options' => ['class' => 'menu sub-menu--slideLeft'],
    'view' => 'main-menu',
]) !!}
            </nav>
        </div>
        <div class="search-mobie-wrap">
            <form action="{{ route('public.search') }}" method="get" class="form-search-mobie container">
                                <div class="wrap">
                                    <input type="text" name="q" placeholder="{{ __('Type to search...') }}"
                                        class="input-search-home" autocomplete="off">
                                    <div class="c-search-toggler close-search">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </form>
            </div>
    </header>

    <div id="page-wrap">
