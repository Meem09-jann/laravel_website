<!DOCTYPE html>
<html lang="en">

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
        
        <!-- TEXT EDITOR -->
        <script src="{{asset('/tinymce/tinymce.min.js')}}"></script>
        <script type="text/javascript" >
            tinymce.init({

                // path_absolute: "{{URL::to('/')}}/"   
                mode:"specific_textareas",
                    editor_selector:"mceEditor",

                    height:400,


                    plugins:[
                        "advlist autolink lists link image  print preview anchor",
                        "insertdatetime media table contextmenu paste"
                    ]
                });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- TEXT EDITOR -->
        
        <style type="text/css">
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

            .nav-header{
                width: 100%;
                background-image: url(../img/bg.png);
                background-size: cover;
                background-position: center;
                position: relative;
            }
            .navbar.navbar-fixed-top {
                background: rgba(0, 0, 0, 0) -webkit-linear-gradient(left, rgb(2, 137, 212) 0%, rgb(55, 206, 242) 100%) repeat scroll 0 0;
                background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(2, 137, 212) 0%, rgb(55, 206, 242) 100%) repeat scroll 0 0;
                box-shadow: 0 0 20px -10px #000;
                padding: 0;
                border-bottom: none;
                color: #fff;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .aboutsec1 {
                padding-bottom: 0% !important;
                position: relative;
                /*background-color: #f7f7f7;*/
            }
            
            .innertextleft {
                padding: 3% 0px 10px 0px;
            }
            
            .info_innner {
                margin: 8px 15px;
                background: #fff;
                padding: 10px 0px;
                box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .4);
                display: flex;
            }
            
            .gm-style .place-card-large {
                margin-left: 222px !important;
                padding: 15px 8px 12px 11px;
            }
            
            .map {
                margin-top: 14%;
                overflow: hidden;
                width: 100%;
            }
            
            .Contact-Section.wrapper.ispage.aboutsec1 .row {
                margin-left: 0px;
                margin-right: 0px;
            }
            
                
            .p-style a {
                text-transform:capitalize;
            }

        
            @media (max-width:767.98px){
                .info_innner{
                    display:block;
                }
            }
        </style>
        @stack('css')
    </head>

    <style>
        .table_blog{
            width: 90%;
            font-size: 13px;
        }
        .container-main{
            height: 100vh;
            display:grid;
            grid-template-columns: 1fr 4fr;
            padding-top: 50px;

        }
        .container-nav{
            height: 100%; 
            min-height: 100%;
            background-color: #028ad6;
        } 
            
        .sidebar-menu{
            position: fixed;
            padding-top: 50px;
        }
        .menu-items{
            margin: 20px;
            font-size: initial;
            color: white;
            font-weight: 600;

        }
        .menu-items> li{
            padding: 15px 5px;
        }
        @media (max-width:767.98px){
            .container-main{
                display:grid;
                grid-template-columns: 1fr;
                padding-top: 50px;
            }
            .container-nav{
                display:none;
            }
        }
    </style>
    
    <body>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Topbar -->
            @include('includes.blogtopbar')
            
            

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content Start -->
                <div id="content">
                    <div class="container-main">
                    <!-- Sidebar -->
                    @include('includes.blogsidebar')
                    
                    
                    @yield('content')
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
                    
                </footer> -->
                <!-- End of Footer -->
            </div>
        </div>

        <!-- JS-->
        <script src="{{ asset('assets/js/header.js')}}"></script>
        @stack('js')
    </body>
    
</html>
