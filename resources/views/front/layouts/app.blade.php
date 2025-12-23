<!doctype html>
<html class="no-js" lang="en" dir="ltr" lang="{{ app()->getLocale() }}">

<head>
    <!-- CSS & JS -->
    {{-- @include('front.layouts.preload') --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/fevicon.ico') }}">
    <!-- CSS ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <!-- optico Icons -->
    <link rel="stylesheet" href="{{ asset('front/css/pbminfotech-base-icons.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/shortcode.css') }}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/base.css') }}">
    <!-- root CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/demo-1.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/rs6.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"
        type="text/css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />

    <!-- Toastr -->
    <link href="{{ asset('dist/plugin/toastr/toastr.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('dist/plugin/toastr/jquery.min.js') }}" lang="Javascript" type="text/javascript"></script>
    <script src="{{ asset('dist/plugin/toastr/toastr.min.js') }}" lang="Javascript" type="text/javascript"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            // "newestOnTop": false,
            // "positionClass": "toast-bottom-center",
            // "preventDuplicates": false,
            // "onclick": null,
            // "showDuration": "300",
            // "hideDuration": "1000",
            // "timeOut": "5000",
            // "extendedTimeOut": "1000",
            // "showEasing": "swing",
            // "hideEasing": "linear",
            // "showMethod": "fadeIn",
            // "hideMethod": "fadeOut"
        }
    </script>

    @yield('css')
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper">


        <!-- Header -->
        {{-- @include('front.layouts.header') --}}

        <?php $page = Route::current()->getName(); ?>

        <!-- Header Main Area -->
        <header class="site-header header-style-3">
            <div class="pre-header">
                <div class="container-fluid">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="pbmit-pre-header-left">
                            <ul class="pbmit-contact-info">
                                <li>
                                    <i class="pbmit-base-icon-letter"></i>
                                    <a href="emailto:support@roopya.com">Email Address :<span>
                                            support@roopyaa.com</span></a>
                                </li>
                                <li>
                                    <i class=" pbmit-base-icon-placeholder-1"></i>
                                    <a href="#"> Office Address :<span> 702, Silicon Tower, Opp Axis Bank, Law
                                            Garden,
                                            EllisBridge Ahmedabad- 380006</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pbmit-pre-header-right d-flex">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook ">
                                    <a href="https://facebook.com" target="_blank"><span>
                                            <i class="pbmit-base-icon-facebook-squared"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter ">
                                    <a href="https://twitter.com" target="_blank"><span>
                                            <i class="pbmit-base-icon-twitter"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-linkedin ">
                                    <a href="https://linkedin.com" target="_blank"><span>
                                            <i class="pbmit-base-icon-linkedin-squared"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-instagram ">
                                    <a href="https://instagram.com" target="_blank"><span>
                                            <i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-header-menu d-flex justify-content-between">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <div class="site-branding">
                                    <a href="{{ route('home.index') }}">
                                        <img class="logo-img" alt="Emphires"
                                            src="{{ asset('front/images/logo.png') }}" />
                                    </a>
                                </div>
                                <div class="site-navigation">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                                <i class="pbmit-base-icon-menu-1"></i>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li @if ($page == 'home.index') class="active" @endif> <a
                                                        href="{{ route('home.index') }}">Home</a></li>
                                                <li class="dropdown">
                                                    <a href="#">Our Company</a>
                                                    <ul>
                                                        <li><a href="{{ route('web.startup') }}">Startup Launchpad</a>
                                                        </li>
                                                        <li><a href="{{ route('web.capitalraising') }}">Capital Rising Solutions</a></li>
                                                        <li @if ($page == 'web.freebies') class="active" @endif><a
                                                                href="{{ route('web.freebies') }}">Freebies/ Join
                                                                Team</a></li>
                                                        <li @if ($page == 'web.investor') class="active" @endif><a
                                                                href="{{ route('web.investor') }}">Investors</a></li>
                                                    </ul>
                                                </li>
                                                <li @if ($page == 'web.roopyaatradebizz') class="active" @endif><a
                                                        href="{{ route('web.roopyaatradebizz') }}">Roopyaa
                                                        Tradebizz</a></li>
                                                <li @if ($page == 'web.itservices') class="active" @endif><a
                                                        href="{{ route('web.itservices') }}">IT Services</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="pbmit-right-box ms-auto">
                                    <a class="pbmit-btn pbmit-btn-hover-blackish" href="{{ route('web.contact') }}">MAKE APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($page == 'home.index')
                <!-- START Slider Demo 3 REVOLUTION SLIDER 6.5.25 -->
                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_3_wrapper" data-alias="slider-demo-3" data-source="gallery"
                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_3" style="" data-version="6.5.25">
                        <rs-slides>
                            <rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide"
                                data-thumb="{{ asset('front/assets/n-slider-05-100x50.jpg') }}" data-anim="ms:600;"
                                data-in="o:0;" data-out="a:false;">
                                <img src="{{ asset('front/revolution/slider') }}" alt=""
                                    title="n-slider-05.jpg" width="1920" height="810"
                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                    data-lazyload="{{ asset('front/revolution/images/n-slider-05.jpg') }}"
                                    data-bg="p:center top;" data-no-retina>
                                <rs-layer id="slider-2-slide-3-layer-0" data-type="text" data-color="#0c121d"
                                    data-rsp_ch="on" data-xy="x:c;yo:368px,368px,263px,140px;"
                                    data-text="s:70,70,50,28;l:80,80,55,32;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                                    data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;"
                                    style="z-index:9;font-family:'Nunito';">Think Advantage
                                </rs-layer>
                                <a href="{{ route('web.contact') }}"> <rs-layer id="slider-2-slide-3-layer-3"
                                        class="rev-btn" data-type="button" data-color="#0c121d" data-rsp_ch="on"
                                        data-xy="x:c;xo:-120px,-120px,-80px,0;yo:475px,475px,350px,190px;"
                                        data-text="w:normal;s:13,13,12,12;l:24,24,55,40;ls:1px;fw:800;"
                                        data-dim="minh:0px,0px,none,none;"
                                        data-padding="t:17,17,0,0;r:50,50,35,20;b:17,17,0,0;l:50,50,35,20;"
                                        data-border="bos:solid;boc:#0c121d;bow:2px,2px,2px,2px;bor:6px,6px,6px,6px;"
                                        data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:2020;sp:1000;sR:2020;"
                                        data-frame_999="o:0;st:w;sR:5980;"
                                        data-frame_hover="c:#fff;bgc:#0aadeb;boc:#0aadeb;bor:6px,6px,6px,6px;bos:solid;bow:2px,2px,2px,2px;"
                                        style="z-index:10;background-color:rgba(255,255,255,0);font-family:'Nunito';text-transform:uppercase;">Contact
                                        Us
                                    </rs-layer></a>
                                <rs-layer id="slider-2-slide-3-layer-8" data-type="text"
                                    data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on"
                                    data-xy="x:c;xo:0,0,0,18px;yo:235px,235px,138px,60px;"
                                    data-text="w:normal;s:13,13,15,11;l:24,24,30,24;ls:3px,3px,2px,1px;fw:700;a:center;"
                                    data-vbility="t,t,t,f"
                                    data-padding="t:5,5,3,2;r:20,20,13,8;b:5,5,3,2;l:20,20,13,8;"
                                    data-border="bor:3px,3px,3px,3px;" data-frame_0="y:-50,-50,-31,-19;"
                                    data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;"
                                    style="z-index:11;background-color:#00aced;font-family:'Muli';box-shadow:0px 9px 35px 0px rgba(26, 47, 106, 0.07);">We
                                    are
                                </rs-layer>
                                <rs-layer id="slider-2-slide-3-layer-12" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;"
                                    data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;"
                                    style="z-index:14;font-family:'Roboto';">
                                </rs-layer>
                                <rs-layer id="slider-2-slide-3-layer-20" class="pbmit-text-stroke" data-type="text"
                                    data-color="rgba(255, 255, 255, 0)" data-rsp_ch="on"
                                    data-xy="x:c;yo:278px,278px,194px,100px;"
                                    data-text="s:70,70,50,28;l:80,80,55,32;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                                    data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;"
                                    style="z-index:8;font-family:'Nunito';">Value your
                                    people
                                </rs-layer>
                            </rs-slide>
                            <rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide"
                                data-thumb="{{ asset('front/revolution/images/n-slider-06-100x50.jpg') }}"
                                data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
                                <img src="{{ asset('front/revolution/images/dummy.png') }}" alt=""
                                    title="n-slider-06.jpg" width="1920" height="810"
                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                    data-lazyload="{{ asset('front/revolution/images/n-slider-06.jpg') }}"
                                    data-bg="p:center top;" data-no-retina>
                                <rs-layer id="slider-2-slide-4-layer-0" data-type="text" data-color="#0c121d"
                                    data-rsp_ch="on" data-xy="x:c;yo:368px,368px,263px,140px;"
                                    data-text="s:70,70,50,28;l:80,80,55,32;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                                    data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;"
                                    style="z-index:9;font-family:'Nunito';">Think Advantage
                                </rs-layer><a href="{{ route('web.contact') }}"><rs-layer
                                        id="slider-2-slide-4-layer-3" class="rev-btn" data-type="button"
                                        data-color="#0c121d" data-rsp_ch="on"
                                        data-xy="x:c;xo:-120px,-120px,-80px,0;yo:475px,475px,350px,190px;"
                                        data-text="w:normal;s:13,13,12,12;l:24,24,55,40;ls:1px;fw:800;"
                                        data-dim="minh:0px,0px,none,none;"
                                        data-padding="t:17,17,0,0;r:50,50,35,20;b:17,17,0,0;l:50,50,35,20;"
                                        data-border="bos:solid;boc:#0c121d;bow:2px,2px,2px,2px;bor:6px,6px,6px,6px;"
                                        data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:2020;sp:1000;sR:2020;"
                                        data-frame_999="o:0;st:w;sR:5980;"
                                        data-frame_hover="c:#fff;bgc:#0aadeb;boc:#0aadeb;bor:6px,6px,6px,6px;bos:solid;bow:2px,2px,2px,2px;"
                                        style="z-index:10;background-color:rgba(255,255,255,0);font-family:'Nunito';text-transform:uppercase;">Contact
                                        Us
                                    </rs-layer></a>
                                <rs-layer id="slider-2-slide-4-layer-8" data-type="text"
                                    data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on"
                                    data-xy="x:c;xo:0,0,0,18px;yo:235px,235px,138px,60px;"
                                    data-text="w:normal;s:13,13,15,11;l:24,24,30,24;ls:3px,3px,2px,1px;fw:700;a:center;"
                                    data-vbility="t,t,t,f"
                                    data-padding="t:5,5,3,2;r:20,20,13,8;b:5,5,3,2;l:20,20,13,8;"
                                    data-border="bor:3px,3px,3px,3px;" data-frame_0="y:-50,-50,-31,-19;"
                                    data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;"
                                    style="z-index:11;background-color:#00aced;font-family:'Muli';box-shadow:0px 9px 35px 0px rgba(26, 47, 106, 0.07);">WE
                                    ARE ALL ABOUT PEOPLE
                                </rs-layer>
                                <rs-layer id="slider-2-slide-4-layer-12" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;"
                                    data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;"
                                    style="z-index:14;font-family:'Roboto';">
                                </rs-layer>
                                <rs-layer id="slider-2-slide-4-layer-20" class="pbmit-text-stroke" data-type="text"
                                    data-color="rgba(255, 255, 255, 0)" data-rsp_ch="on"
                                    data-xy="x:c;yo:278px,278px,194px,100px;"
                                    data-text="s:70,70,50,28;l:80,80,55,32;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                                    data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;"
                                    style="z-index:8;font-family:'Nunito';">Value your
                                    people
                                </rs-layer></rs-slide>
                        </rs-slides>
                    </rs-module>
                    <script></script>

                </rs-module-wrap>
            @endif

            <!-- END REVOLUTION SLIDER -->
        </header>
        <!-- Header Main Area End Here -->



        <!-- Body -->
        @yield('content')

        <!-- Footer -->
        {{-- @include('front.layouts.footer') --}}
        <!-- Footer -->
        <footer class="footer site-footer pbmit-bg-color-light">

            <div class="pbmit-footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-first-widget pbmit-widget">
                                <p class="footer-logo">
                                    <img src="{{ asset('front/images/logo.png') }}" class="img-fluid w-auto"
                                        alt="" />
                                </p>
                                <p class="text text-justify">We are on a mission to help the nation and its people
                                    create
                                    structured wealth and scalable growth plans through smart trading and procurement,
                                    value-driven funding and incubation, and free-of-cost tax management.

                                </p>
                                <p class="text text-justify">Since 2010, we have been part of numerous success stories,
                                    while facilitating businesses funded by Roopyaa in realizing concrete & steady
                                    progress.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-two-widget pbmit-widget">
                                <h2 class="widget-title">Information</h2>
                                <div class="menu-services-menu-container">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <ul id="menu-services-menu" class="menu">
                                                <li id="menu-item-1" class="menu-item">
                                                    <a href="{{ route('home.index') }}">Home</a>
                                                </li>
                                                <li id="menu-item-2" class="menu-item">
                                                    <a href="{{ route('web.startup') }}">Startup Launchpad</a>
                                                </li>
                                                <li id="menu-item-3" class="menu-item">
                                                    <a href="{{ route('web.roopyaatradebizz') }}">Roopyaa
                                                        Tradebizz</a>
                                                </li>
                                                <li id="menu-item-4" class="menu-item">
                                                    <a href="{{ route('web.capitalraising') }}">Capital Raising</a>
                                                </li>
                                                <li id="menu-item-6" class="menu-item">
                                                    <a href="{{ route('web.itservices') }}">IT Services</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6 col-lg-6">
                                            <ul>
                                              
                                                <li id="menu-item-7" class="menu-item">
                                                    <a href="{{ route('web.freebies') }}">Freebies/ Join Team</a>
                                                </li>
                                                <li id="menu-item-8" class="menu-item">
                                                    <a href="{{ route('web.investor') }}">Investors</a>
                                                </li>
                                                <li id="menu-item-9" class="menu-item">
                                                    <a href="{{ route('web.contact') }}">Contact</a>
                                                </li>
                                                <li id="menu-item-10" class="menu-item">
                                                    <a href="{{ route('sitemap') }}">Sitemap</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-four-widget pbmit-widget">
                                <h2 class="widget-title mt-4">FOLLOW US ON</h2>
                                <div class="footer-support">
                                    <h5 class="footer-support-inner">
                                        <span>Talk To Our Support </span> +91 99786 07608
                                    </h5>
                                </div>
                                <div class="footer-support mt-3">
                                    <h6 class="">
                                        <span>Mail </span> info@roopyaa.com
                                    </h6>
                                </div>
                                <ul class="pbmit-social-links pt-3">
                                    <li class="pbmit-social-li pbmit-social-facebook ">
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-twitter ">
                                        <a href="https://www.twitter.com/" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-twitter"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-linkedin ">
                                        <a href="https://in.linkedin.com/" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-instagram ">
                                        <a href="https://instagram.com/" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pbmit-footer-widget-area-bottom">
                <div class="container">
                    <div class="pbmit-footer-widget-area-bottom-inner bg-white">
                        <div class="row">

                            <div class="col-md-6 ">

                                <p class="mb-3">Copyright ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> <span> Roopyaa</span> All Rights Reserved.
                                </p>
                            </div>

                        </div>
                    </div>
                    <a href="#" class="scroll-to-top show">
                        <i class="pbmit-base-icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </footer>
        <!-- Footer End -->



    </div>
    <!-- End Go Top -->

    <!-- Essential JS -->

    <!-- Search Box Start Here -->
    <div class="pbmit-search-overlay">
        <div class="pbmit-icon-close"></div>
        <div class="pbmit-search-outer">
            <form class="pbmit-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s"
                    placeholder="Type Word Then Press Enter">
                <button type="submit"><i class="pbmit-base-icon-search-1"></i></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- JS
       ============================================ -->
    <!-- jQuery JS -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <!-- jquery Appear JS -->
    <script src="{{ asset('front/js/jquery.appear.js') }}"></script>
    <!-- Numinate JS -->
    <script src="{{ asset('front/js/numinate.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('front/js/swiper.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('front/js/circle-progress.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('front/js/aos.js') }}"></script>
    <!-- Scripts JS -->
    <script src="{{ asset('front/js/scripts.js') }}"></script>
    <!-- Revolution JS -->
    <script src="{{ asset('front/revolution/rslider.js') }}"></script>
    <script src="{{ asset('front/revolution/rbtools.min.js') }}"></script>
    <script src="{{ asset('front/revolution/rs6.min.js') }}"></script>

    @yield('footer')

</body>

</html>
