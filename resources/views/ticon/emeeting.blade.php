
<!-- EMEETING PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        body {
            overflow-x: hidden;
        }

        .demo {
            background: #eee;
        }

        a:hover,
        a:focus {
            outline: none;
            text-decoration: none;
        }
        .mast__title{
            text-transform:inherit;
        }
        .header__text-box img{
            width:300px;
            /* height:100px; */
        }
    </style>
@endpush

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabs.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabstyles.css') }}" />

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container">
     <br>
        <div class="row tech-details">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <section>
                                    <div class="tabs tabs-style-iconbox">
                                        <nav>
                                            <ul>
                                                <li><a href="#section-iconbox-1" class="icon icon-home"><span>eMeeting</span></a></li>
                                                <li><a href="#section-iconbox-2" class="icon icon-gift"><span>Education</span></a></li>
                                                <li><a href="#section-iconbox-3" class="icon icon-upload"><span>Health</span></a></li>
                                                <li><a href="#section-iconbox-4" class="icon icon-coffee"><span>Business</span></a></li>
                                            </ul>
                                        </nav>
                                        <div class="content-wrap">
                                            <section id="section-iconbox-1"><img src="{{ asset('assets/img/Conference_Page-1.1.png') }}" alt=""></section>
                                            <section id="section-iconbox-2"><img src="{{ asset('assets/img/Conference_Page-2.2.png') }}" alt=""></section>
                                            <section id="section-iconbox-3"><img src="{{ asset('assets/img/Conference_Page-3.1.png') }}" alt=""></section>
                                            <section id="section-iconbox-4"><img src="{{ asset('assets/img/Conference_Page-4.png') }}" alt=""></section>
                                        </div><!-- /content -->
                                    </div><!-- /tabs -->
                                </section>
                                <section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 1) {
            $(".navbar").addClass("navbar-fixed-top");
        } else {
            $(".navbar").removeClass("navbar-fixed-top");
        }
    });
    

    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
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
    
    // ----------------- Variables

    wrapper = $(".t-tabs");
    tabs = wrapper.find(".tab");
    tabToggle = wrapper.find(".tab-toggle");

    // ----------------- Functions

    function openTab() {
        var content = $(this).parent().next(".content"),
            activeItems = wrapper.find(".active");

        if (!$(this).hasClass('active')) {
            $(this).add(content).add(activeItems).toggleClass('active');
            wrapper.css('min-height', content.outerHeight());
        }
    };

    // ----------------- Interactions

    tabToggle.on('click', openTab);

    // ----------------- Constructor functions

    $(window).load(function() {
        tabToggle.first().trigger('click');
    });
    </script>
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/cbpFWTabs.js') }}"></script>
    <script>
    (function() {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });

    })();
    </script>
@endpush

<!-- EMEETING PAGE END -->
