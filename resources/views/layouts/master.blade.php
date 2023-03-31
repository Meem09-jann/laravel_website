<!DOCTYPE html>
<html lang="en">
    <!--HEAD END-->
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Web Development, Software Development, Streaming Solution, IT Consulting">

            <meta property="og:url" content="https://www.ticonsys.com/" />
            <meta property="og:type" content="article" />
            <meta property="og:title" content="TiCON System Ltd. | Lets Enjoy Power of Solution" />
            <meta property="og:description" content="Our Aim is to develop and implement powerful solution while working on innovation and unleashing creativity." />
            <meta property="og:image" content="https://www.ticonsys.com/assets/img/fbgrapf.png" />
            <meta property="fb:pages" content="421687377880161" />

            <title>{{ $identity }}</title>
            <!-- <title>TiCON System Ltd. | Lets Enjoy Power of Solution</title> -->

            <!-- Google Tag Manager -->
            <script>
                (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-TCQ5T8L');
            </script>
            <!-- End Google Tag Manager -->

            <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
            <script>
                window.OneSignal = window.OneSignal || [];
                OneSignal.push(function() {
                    OneSignal.init({
                    appId: "224927ff-a2ee-4675-a897-d93b318bd21b",
                    });
                });
            </script>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125719393-1"></script>

            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-125719393-1');
            </script>



            <!-- Facebook Pixel Code -->
            <script>
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '422490551611596');
                fbq('track', 'PageView');
            </script>
            <!-- End Facebook Pixel Code -->

            <!-- push notification -->
            <script charset="UTF-8" src="//web.webpushs.com/js/push/af5b6359e3f640291773f106b597a544_1.js" async></script>

            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon-16x16.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-144x144.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-192x192.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-36x36.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-48x48.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-72x72.ico')}}">

            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/android-icon-96x96.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-114x114.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-120x120.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-144x144.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-152x152.ico')}}">

            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-180x180.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-57x57.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-60x60.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-72x72.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-76x76.ico')}}">

            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon-precomposed.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/apple-icon.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/fav.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon-16x16.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon-32x32.ico')}}">

            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon-96x96.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/ms-icon-144x144.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/ms-icon-150x150.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/ms-icon-310x310.ico')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/ms-icon-70x70.ico')}}">

            <!-- you can also say this:  <link rel="icon" type="image/png" href="location/image.png" /> -->

            <!--CSS library and custom-->
            <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/bootstrap.min.css')}}" />
            <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/style.css')}}" />
            <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/animation.css')}}" />
            <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/loader.css')}}" />
            <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/header.css')}}" />
            <!--Font and Icons-->

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="{{ asset('assets/js/header.js')}}"></script>

            <style>
                body{
                    height: 100vh;
                }
                #wrapper{
                    height: auto;
                    min-height: 50%;
                }
                .social-icon {
                    position: absolute;
                    left: 5%;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 16px;
                    color: #fff;
                }

                .social-icon a .fa {
                    margin: 5px auto;
                }

                .icon-arrows {
                    position: relative;
                    font-size: 18px;
                }

                .icon-arrows::before {
                    content: " ";
                    display: block;
                    position: absolute;
                    top: -50px;
                    left: 50%;
                    height: 40px;
                    width: 2px;
                    background-color: #fff;
                    z-index: 1000;
                    transform: translateX(-50%);
                }

                .mast__text {
                    color: #e7e7e7;
                }

                .icon-arrows::after {
                    content: " ";
                    display: block;
                    position: absolute;
                    bottom: -50px;
                    left: 50%;
                    height: 40px;
                    width: 2px;
                    background-color: #fff;
                    z-index: 1000;
                    transform: translateX(-50%);
                }

                .dropdown-content>p>a {
                    display: block;
                }

                .header-bg-image {
                    width: 90%;
                    display: block;
                    margin: 0px auto;
                    height: 337px;
                }

                .iframe-video-prof {
                    width: 64.8%;
                    height: 245px;
                    position: absolute;
                    top: 9%;
                    left: 18.5%;
                }

                h1.mast__text.title-one {
                    font-size: 1.2vw !important;
                    text-transform: none;
                }

                h1.mast__text.title-one span {
                    color: #1e3b65;
                }

                h2.mast__title.js-spanize.title-two {
                    letter-spacing: 1px;
                    text-transform: none !important;
                    font-size: 2.7vw;
                }

                .header-box-inner {
                    position: absolute;
                    width: 100%;
                    top: 50%;
                    transform: translateY(-50%);
                }

                .navbar-fixed-top+.header-box-content {
                    padding-top: 80px;
                }

                .navbar-default .navbar-nav>li>a {
                    font-size: 14px;
                    text-transform: uppercase;
                }
                

                /* responsive menu for big device  */
                @media (min-width: 1441px){
                    .navbar-default .navbar-nav>li>a {
                        font-size: 16px!important;
                        text-transform: uppercase;
                    }
                }

                @media screen and (max-width: 1360px) and (min-width: 1160px) {
                    .navbar-default .navbar-nav>li>a{
                        font-size: 13px;
                    }
                    .nav>li>a {
                        padding-left: 10px;
                        padding-right: 10px;
                    }
                }
                @media screen and (max-width: 1159px) and (min-width: 992px) {
                    .navbar-default .navbar-nav>li>a{
                        font-size: 11px;
                    }
                    .nav>li>a {
                        padding-left: 7px;
                        padding-right: 7px;
                    }
                }



                /* navbar collapse after 991  */
                @media (min-width: 991px) {
                    #language_dropdown .dropdown-content{
                        min-width:48px;
                        right:15px;
                    }
                }
                @media (max-width: 991px) {
                
                    .navbar-header {
                        float: none;
                    }
                    .navbar-toggle {
                        display: block;
                    }
                    .navbar-collapse {
                        border-top: 1px solid transparent;
                        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
                    }
                    .navbar-collapse.collapse {
                        display: none!important;
                    }
                    .navbar-nav {
                        float: none!important;
                        margin: 7.5px -15px;
                    }
                    .navbar-nav>li {
                        float: none;
                    }
                    .navbar-nav>li>a {
                        padding-top: 10px;
                        padding-bottom: 10px;
                    }
                    .navbar-text {
                        float: none;
                        margin: 15px 0;
                    }
                    /* since 3.1.0 */
                    .navbar-collapse.collapse.in { 
                        display: block!important;
                    }
                    .collapsing {
                        overflow: hidden!important;
                    }
                    .navbar-default .navbar-nav>li>a {
                        font-size: 10px;
                        text-transform: uppercase;
                    }
                    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                        border-color: #e7e7e7;
                        background: rgba(0, 0, 0, 0) -webkit-linear-gradient(left, rgb(21, 149, 189) 0%, rgb(14, 100, 169) 100%) repeat scroll 0 0;
                        background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(21, 149, 189) 0%, rgb(14, 100, 169) 100%) repeat scroll 0 0;
                        box-shadow: 0 0 20px -10px #000;
                        padding: 15px;
                        border-bottom: none;
                        color: #fff;
                        padding-top: 10px;
                        padding-bottom: 10px;
                    }
                    .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
                        max-height: initial!important;
                    }
                    .navbar-default .navbar-nav>li>a{
                        font-size: 15px!important;
                    }
                }
                /* navbar collapse after 991  */
                /* responsive menu for big device  */
                
                @media (max-width: 960px) {
                    .navbar-default .navbar-nav>li>a {
                        font-size: 9px;
                        text-transform: uppercase;
                    }

                    .header-bg-image {
                        width: 90%;
                        display: block;
                        margin: 0px auto;
                        height: 192px;
                    }

                    .iframe-video-prof {
                        width: 61.8%;
                        height: 140px;
                        position: absolute;
                        top: 9%;
                        left: 19.5%;
                    }

                    .bg-image {
                        margin-top: 5%;
                    }

                    .navbar-fixed-top+.header-box-content {
                        padding-top: 80px;
                    }

                    .icon-arrows {
                        font-size: 12px;
                    }

                }

                .header-txt-info {
                    padding-top: 6.5%;
                }

                @media (max-width: 767.98px) {
                    .header-txt-info {
                        text-align: center;
                    }

                    .header-box-inner {
                        position: absolute;
                        width: 100%;

                    }

                    .for-responsive-txt {
                        display: block;
                        margin: 0px auto;
                        font-size: 3vw;

                    }

                    h1.mast__text.title-one {
                        font-size: 3.2vw !important;
                        text-transform: none;
                    }

                    h2.mast__title.js-spanize.title-two {
                        letter-spacing: 1px;
                        text-transform: none !important;
                        font-size: 3.5vw;
                    }


                }

                @media (min-width:1441px) {
                    .navbar-default .navbar-nav>li>a {
                        font-size: 18px;
                        text-transform: uppercase;
                    }

                    .header-txt-info {
                        padding-top: 9.5%;
                    }

                    .icon-arrows {
                        position: relative;
                        font-size: 24px;
                    }

                    .header-bg-image {
                        width: 90%;
                        display: block;
                        margin: 0px auto;
                        height: 476px;
                    }

                    .for-responsive-txt {
                        font-size: 1.3em;

                    }

                    .iframe-video-prof {
                        width: 64.8%;
                        height: 346px;
                        position: absolute;
                        top: 9%;
                        left: 18.5%;
                    }
                }

                @media (max-width: 700px) {
                    .icon-arrows {
                        font-size: 10px;
                    }

                    .header-bg-image {
                        width: 90%;
                        display: block;
                        margin: 0px auto;
                        height: 192px;
                    }

                    .iframe-video-prof {
                        width: 64.8%;
                        height: 140px;
                        position: absolute;
                        top: 9%;
                        left: 18.5%;
                    }
                }
            
                .left-heading {
                    font-size: 16px;
                }

                .scale-text {
                    min-height: 265px;
                }

                .imgfit {
                    height: inherit;
                }

                @media (max-width:576px) {
                    .new1.item {
                        background-color: #fff;
                        padding: .3%;
                        padding-bottom: 0px;
                        -webkit-box-shadow: 0px 0px 40px -12px rgba(0, 0, 0, 0.5);
                        -moz-box-shadow: 0px 0px 40px -12px rgba(0, 0, 0, 0.5);
                        box-shadow: 0px 0px 40px -12px rgba(0, 0, 0, 0.5);
                        width: 500px;
                        height: auto !important;
                        transition: transform .4s;
                        position: relative;
                        background-image: none !important;
                        margin-top: 20px;
                        margin-bottom: 20px;
                    }

                    .new1.item img {
                        width: 100%;
                        height: 200px;
                        display: block !important;
                    }
                }

                @media (max-width:440px) {
                    .new1.item img {
                        width: 100%;
                        height: 120px;
                        display: block !important;
                    }
                }
            </style>
            @stack('css')

        </head>
    <!-- HEAD END-->

    <!-- BODY START-->
        <body>

            <!-- FACEBOOK CHAT PLUGIN -->
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <script>
                    window.fbAsyncInit = function() {
                    FB.init({
                        xfbml            : true,
                        version          : 'v12.0'
                    });
                    };

                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <!-- Your Chat Plugin code -->
                    <div class="fb-customerchat"
                        attribution="install_email"
                        attribution_version="biz_inbox"
                        page_id="421687377880161">
                    </div>
            <!-- FACEBOOK CHAT PLUGIN END -->

            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        appId: '727096587624174',
                        xfbml: true,
                        version: 'v3.1'
                    });
                    FB.AppEvents.logPageView();
                };

                (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                    (document, 'script', 'facebook-jssdk'));
            </script>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCQ5T8L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            
            <noscript>
                <img height="1" width="1" src="https://www.facebook.com/tr?id=422490551611596&ev=PageView&noscript=1" alt="Image" />
            </noscript>

            <!--SITE LOADING ANIMATION -->
            @if ($identity == "Home")
            <div id="loader-wrapper">
                <div id="loader">
                    <img src="{{ asset('assets/img/header.png')}}" alt="" class="preloader-logo">
                </div>
            </div>
            @endif
            <!--SITE LOADING END -->


            <div class="container-fluid home_content-block1" style="padding-left: 0px;padding-right: 0px;">
                <div class="{{ $data->cls_header; }}" id="printout">
                    <!-- CIRCLE FOLLOWER START -->
                        <div id="follower">
                            <div id="circle1"></div>
                            <div id="circle2"></div>
                        </div>
                    <!-- CIRCLE FOLLOWER END -->


                    <!--NAVBAR START-->
                        <nav class="navbar navbar-default">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="http://localhost/ticon_website/"><img src="{{ asset('assets/img/header.png')}}" alt="Logo" class="logo"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                @if( $data->prefer_language() == 'kr' ) 
                                    <li><a href="{{url('/home')}}">홈</a></li>
                                    <li><a href="{{url('/company')}}">회사</a></li>
                                    <li class="dropdown">
                                        <a href="{{url('/service')}}">서비스</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('/solution/manager')}}">managR (SaaS)</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/web-development')}}">웹 개발</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/mobile-app-development')}}">모바일 앱 개발</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/custom-software-development')}}">커스텀 소프트웨어 개발</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/software-product-development')}}">소프트웨어 제품 개발</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/enterprise-application-integration')}}">엔터프라이즈 애플리케이션 통합</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/technology-consulting')}}">테크놀로지 컨설팅</a></p>
                                        </div>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{url('/solution')}}">솔루션</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="https://blessbit.net/" target="_blank">스트리밍 솔루션</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/ai-integration')}}">AI 통합</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/web-crawler')}}">크라블라 웹 크롤러</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/hr-solution')}}">HR 솔루션</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/trivia-mobile-apps')}}">트리비아 모바일 앱</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/ecommerce-and-web-solution')}}">E-커머스 및 웹 솔루션</a></p>
            
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('/technology')}}">테크놀로지</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('/technology/mobile-technology')}}">모바일 테크놀로지</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/web-development')}}">웹 개발</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/streaming')}}">스트리밍</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/artificial-intelligence')}}">인공 지능</a></p>
                                        </div>
                                    </li>
                                    <li><a href="{{url('/portfolio')}}">포트폴리오</a></li>
                                    <li class="dropdown">
                                        <a href="#">도입 사례 분석</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('/solution/case-study-rabbiteholebd')}}">RabbitholeBD</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/case-study-chvod')}}">CHVOD</a></p>
                                        </div>
                                    </li>
                                    <li><a href="{{url('/blog')}}" style="text-transform:none">블로그</a></li>
                                    <li><a href="{{url('/apn')}}" style="text-transform:none">AWS | TiCON</a></li>
                                    <li><a href="{{url('/emeeting')}}" style="text-transform:none">eMeeting</a></li>
                                    <li><a href="{{url('/contact')}}">문의하기</a></li>


                                    <li class="dropdown" id="language_dropdown">
                                        <a href="#" id=><img src="{{ asset('assets/img/south-korea.png')}}" id="language_item"> <span><i class="fa fa-chevron-down"></i></span></a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('changelanguageEn')}}" id="en"><img src="{{ asset('assets/img/usa.png')}}"></a></p>
                                            <p class="dropdown_element"><a href="{{url('changelanguageKr')}}" id="kr"><img src="{{ asset('assets/img/south-korea.png')}}"></a></p>
                                        </div>
                                    </li>
                                @else 
                                    <li><a href="{{url('/home')}}">Home</a></li>
                                    <li><a href="{{url('/company')}}">Company</a></li>
                                    <li class="dropdown">
                                    <a href="{{url('/service')}}">Service</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('/solution/manager')}}">managR (SaaS)</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/web-development')}}">Web Development</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/mobile-app-development')}}">Mobile App Development</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/custom-software-development')}}">Custom Software Development</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/software-product-development')}}">Software Product Development</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/enterprise-application-integration')}}">Enterprise Application Integration</a></p>
                                            <p class="dropdown_element"><a href="{{url('/service/technology-consulting')}}">Technology Consulting</a></p>
                                        </div>
                                    </li>

                                    <li class="dropdown">
                                    <a href="{{url('/solution')}}">Solution</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="https://blessbit.net/" target="_blank">Streaming Solution</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/ai-integration')}}">AI Integration</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/web-crawler')}}">Kravla Web Crawler</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/hr-solution')}}">HR Solution</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/trivia-mobile-apps')}}">Trivia Mobile Game</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/ecommerce-and-web-solution')}}">ECommerce & Web Solution</a></p>
                                            
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                    <a href="{{url('/technology')}}">Technology</a>
                                        <div class="dropdown-content">
                                        <p class="dropdown_element"><a href="{{url('/technology/mobile-technology')}}">Mobile Technology</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/web-development')}}">Web Development</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/streaming')}}">Streaming</a></p>
                                            <p class="dropdown_element"><a href="{{url('/technology/artificial-intelligence')}}">Artificial Intelligence</a></p>
                                        </div>
                                    </li>

                                    <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                                    
                                    <li class="dropdown">
                                        <a href="#">Case Study</a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('/solution/case-study-rabbiteholebd')}}">RabbitholeBD</a></p>
                                            <p class="dropdown_element"><a href="{{url('/solution/case-study-chvod')}}">CHVOD</a></p>
                                        </div>
                                    </li>
                                    <li><a href="{{url('/blog')}}" style="text-transform:none">BLOG</a></li>
                                    <li><a href="{{url('/apn')}}" style="text-transform:none">AWS | TiCON</a></li>
                                    <li><a href="{{url('/emeeting')}}" style="text-transform:none">eMeeting</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>

                                    <li class="dropdown" id="language_dropdown">
                                        <a href="#" id=""><img src="{{ asset('assets/img/usa.png')}}" id="language_item"> <span><i class="fa fa-chevron-down"></i></span></a>
                                        <div class="dropdown-content">
                                            <p class="dropdown_element"><a href="{{url('changelanguageEn')}}" id="en"><img src="{{ asset('assets/img/usa.png')}}"></a></p>
                                            <p class="dropdown_element"><a href="{{url('changelanguageKr')}}" id="kr"><img src="{{ asset('assets/img/south-korea.png')}}"></a></p>
                                        </div>
                                    </li>
                                @endif
                                </ul>
                            </div>
                        </nav>
                    <!--NAVBAR END-->


                    <!-- BLUE HEADER SECTION START -->
                        @if ($identity == "Home" || $identity == "홈")
                            <div class="container-fluid header-box-content" style="padding-left: 0px;padding-right: 0px;">
                                <div class="row mglr header-box-inner">

                                    <div class="col-sm-offset-1 col-sm-5 col-xs-offset-1 col-xs-10 col-xs-12 animatable fadeInUp header-txt-info">
                                        <h1 class="mast__text title-one"><span>T</span>echnology, <span>I</span>nnovation & <span>Co</span>mmunication <span>N</span>etwork</h1>
                                        <h2 class="mast__title js-spanize title-two">TiCON SYSTEM LIMITED</h2>
                                        @if ($identity == "Home")
                                        <p class="mast__text js-spanize for-responsive-txt">Our Aim is to develop and implement powerful solution while working on innovation and unleashing creativity.</p>
                                        @else
                                        <p class="mast__text js-spanize for-responsive-txt">티콘시스템은 기술, 혁신, 소통 및 창의력으로 고객 요구기반의 최고가치를 제공하는 맞춤형 통합솔루션 개발 기업입니다.</p>
                                        @endif
                                    </div>
                                    @foreach($videos as $video)
                                    <div class="col-sm-6 col-xs-12 bg-image animatable fadeInUp">
                                        <img src="{{asset('assets/img/Website_Design_7.png')}}" class="header-bg-image" alt="Background Image" title="">
                                        <iframe class="iframe-video-prof" src="https://www.youtube-nocookie.com/embed/ZpA32zw2NTw?rel=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <!-- <iframe src="{{$video->video_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" id="iframe"></iframe> -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="down-arrow">
                                <a href="#scroll-to" class="down-arrow-link"><i class="fa fa-angle-down"></i></a>
                            </div>

                            <div class="social-icon">
                                <center class="icon-arrows">
                                    <a href="https://www.facebook.com/TiconSystem/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/ticonsystemltd" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/ticonsys/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/ticonsys/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com/channel/UCNBApk70ExuCc9hpyzCghxA" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                    <a href="https://www.pinterest.com/TiconSystemLtd" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </center>
                            </div>
                        
                        @else
                            <!-- RENDER TITLE TEXT BY DEFAULT -->
                            <div class="header__text-box">  
                                <h1 class="mast__title js-spanize ">{{ $identity }}</h1>
                            </div>
                            <!-- RENDER TITLE END -->
                        @endif
                    <!-- BLUE HEADER SECTIN END -->
                </div>
            </div>
                    

            <!-- FLASH MESSAGE-->
            @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 


            <!-- Page Wrapper -->
            <div id="wrapper">
                <!-- Main Content Start -->
                <div id="content">
                    
                    @yield('content')
                    
                </div>
                <!-- Main Content End -->
            </div>  
        </body>
    <!-- BODY END-->

    <!-- FOOTER START-->
        @include('includes.footer') 
    <!-- FOOTER END-->

    <!-- JS START-->
        <script src="{{asset('assets/js/footer.js')}}"></script> 

        <script>
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 1) {
                    $(".navbar").addClass("navbar-fixed-top");
                } else {
                    $(".navbar").removeClass("navbar-fixed-top");
                }
            });
        

            $(document).ready(function(){
            $(".down-arrow-link").on('click', function(event) {
                if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
                } 
            });
            });
        </script>

        <!-- 
        <script type="text/javascript">
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        </script> -->

        <script>
            $(document).ready(function() {

                // Fakes the loading setting a timeout
                setTimeout(function() {
                    $('body').addClass('loaded');
                }, 1500);

            });
        

            $('.slider').slick({
                autoplay:true,
                autoplaySpeed:2000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '60px',
                variableWidth: true,
                infinite: true,
                focusOnSelect: true,
                cssEase: 'linear',
                touchMove: true,
                prevArrow: '<button class="slick-prev"> < </button>',
                nextArrow: '<button class="slick-next"> > </button>',

                responsive: [                        
                            {
                            breakpoint: 576,
                            settings: {
                                centerMode: true,
                                variableWidth: false,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                            },
                        ]
            });


            var imgs = $('.slider img');
            imgs.each(function() {
                var item = $(this).closest('.item');
                item.css({
                    'background-image': 'url(' + $(this).attr('src') + ')',
                    'background-position': 'center',
                    '-webkit-background-size': 'cover',
                    'background-size': 'cover',
                });
                $(this).hide();
            });
       

            $('.nav-tabs a').each(function() {
                    var $this = $(this);
                    $this.click(function(e) {
                        e.preventDefault();
                        $this.tab('show');
                        $('.slider5').slick("refresh");

                    });
                });
            $('.slider5').slick({
                autoplay:false,
                autoplaySpeed:1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '60px',
                variableWidth: true,
                infinite: true,
                focusOnSelect: true,
                cssEase: 'linear',
                touchMove: true,
                prevArrow: '<button class="slick-prev"> < </button>',
                nextArrow: '<button class="slick-next"> > </button>',

                        responsive: [                        
                            {
                            breakpoint: 576,
                            settings: {
                                centerMode: true,
                                variableWidth: false,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                            },
                        ]
            });


            var imgs = $('.slider img');
            imgs.each(function() {
                var item = $(this).closest('.item');
                item.css({
                    'background-image': 'url(' + $(this).attr('src') + ')',
                    'background-position': 'center',
                    '-webkit-background-size': 'cover',
                    'background-size': 'cover',
                });
                $(this).hide();
            });
       
            $('.nav-tabs a').each(function() {
                var $this = $(this);
                $this.click(function(e) {
                    e.preventDefault();
                    $this.tab('show');
                    $('.slider4').slick("refresh");

                });
            });
            $('.slider4').slick({
                autoplay: true,
                autoplaySpeed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '60px',
                variableWidth: true,
                infinite: true,
                focusOnSelect: true,
                cssEase: 'linear',
                touchMove: true,
                prevArrow: '<button class="slick-prev"> < </button>',
                nextArrow: '<button class="slick-next"> > </button>',

                //         responsive: [                        
                //             {
                //               breakpoint: 576,
                //               settings: {
                //                 centerMode: false,
                //                 variableWidth: false,
                //               }
                //             },
                //         ]
            });


            var imgs = $('.slider img');
            imgs.each(function() {
                var item = $(this).closest('.item');
                item.css({
                    'background-image': 'url(' + $(this).attr('src') + ')',
                    'background-position': 'center',
                    '-webkit-background-size': 'cover',
                    'background-size': 'cover',
                });
                $(this).hide();
            });
       
            // Gallery image hover
            $(".img-wrapper").hover(
                function() {
                    $(this).find(".img-overlay").animate({
                        opacity: 1
                    }, 600);
                },
                function() {
                    $(this).find(".img-overlay").animate({
                        opacity: 0
                    }, 600);
                }
            );

            // Lightbox
            var $overlay = $('<div id="overlay"></div>');
            var $image = $("<img>");
            var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
            var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
            var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

            // Add overlay
            $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
            $("#gallery").append($overlay);

            // Hide overlay on default
            $overlay.hide();

            // When an image is clicked
       
            // export ripple pen https://codepen.io/k-ivan/pen/yXvyxq

            class TasbSlider {
                constructor(selector) {
                    // this.currentId = 0;
                    // this.tabs
                    // this.bar
                    // this.controls
                    // this.content
                    // this.sections
                    // this.line
                    // this.width
                    // this.handlerClick
                    // this.handlerResize - null;
                    this.init(selector);
                }

                index(el) {
                    const children = el.parentNode.children;
                    let i = -1;
                    for (let _i = 0; _i < children.length; _i++) {
                        if (children[_i] === el) {
                            i = _i;
                            break;
                        }
                    }
                    return i;
                }

                dimmensions() {
                    this.setSliderLine();

                    const w = this.tabs.offsetWidth;
                    const h = this.sections[this.currentId].offsetHeight;

                    this.sections.forEach(item => {
                        item.style.width = `${w}px`;
                    });

                    this.content.style.cssText = `
            transform: translateX(-${w * this.currentId}px);
            height: ${h}px;
            width: ${w * this.sections}px;
            `;
                }

                selectTab(e) {
                    const target = e.target.closest('.tabs__controls');
                    if (!target) return;
                    this.currentId = this.index(target);

                    this.dimmensions();
                    this.setSliderLine();
                }

                setSliderLine() {
                    const {
                        offsetWidth,
                        offsetLeft
                    } = this.controls[this.currentId];

                    this.line.style.cssText = `
            width: ${offsetWidth}px;
            transform: translateX(${offsetLeft}px);
            `;
                }

                init(selector) {
                    this.tabs = document.querySelector(selector);

                    if (!this.tabs || this.tabs.activated) return;

                    this.tabs.activated = true;
                    this.currentId = 0;
                    this.bar = this.tabs.querySelector('.tabs__bar');
                    this.controls = Array.prototype.slice.call(this.bar.querySelectorAll('.tabs__controls'));
                    this.content = this.tabs.querySelector('.tabs__content');
                    this.sections = Array.prototype.slice.call(this.content.querySelectorAll('.tabs__section'));
                    this.line = Object.assign(document.createElement('span'), {
                        'className': 'tabs__line'
                    });

                    this.bar.appendChild(this.line);
                    this.setSliderLine();
                    this.dimmensions();

                    this.handlerClick = this.selectTab.bind(this);
                    this.handlerResize = this.dimmensions.bind(this);

                    this.bar.addEventListener('click', this.handlerClick);
                    window.addEventListener('resize', this.handlerResize);
                }
            }
            new TasbSlider('.tabs');
        </script>
        @stack('js')
    <!-- JS END-->
</html>
