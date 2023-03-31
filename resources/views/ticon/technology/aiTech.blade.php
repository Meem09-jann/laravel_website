<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <section class="technology-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="technology-d-text">
                        <h3>AI Technology</h3>
                        <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>
          <!--  <p>We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                    </div>
                </div>
            </div>

            <div class="row tech-details">
                <div class="t-tabs">
                    <div class="tab">
                        <button class="tab-toggle active">Machine Learning (ML)</button>
                    </div>
                    <div class="content active">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Machine Learning (ML)</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">TensorFlow</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Theano</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">beautifulsoup</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Mathparse</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">NumPy</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Navigation"></div>
                                    <span class="sec_fe_span com_font16">SciPy</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="ABS(Anti-Lock Brakes)"></div>
                                    <span class="sec_fe_span com_font16">Pandas</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Airbags"></div>
                                    <span class="sec_fe_span com_font16">polyglot</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="ABS(Anti-Lock Brakes)"></div>
                                    <span class="sec_fe_span com_font16">Matplotlib</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Airbags"></div>
                                    <span class="sec_fe_span com_font16">Scikit-Learn</span>
                                </li>


                            </ul>
                        </div>
                    </div>


                    <div class="tab">
                        <button class="tab-toggle">Natural Language Proccessing(NLP)</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Natural Language Proccessing(NLP)</p>
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">NumPy</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Pandas</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">NLTK</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">LSA</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>


                    <div class="tab">
                        <button class="tab-toggle">Client Application</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Client Application</p>
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">

                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Windows/ Web Application</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">iOS</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Android</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab">
                        <button class="tab-toggle">Developing Tools</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Developing Tools</p>
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Django REST framework</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Python</span>
                                </li>                                
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">AFNetworking</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Objective C</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">Android Studio</span>
                                </li>
                                <!-- <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="Navigation"></div>
                                    <span class="sec_fe_span com_font16">Open GLES</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="ABS(Anti-Lock Brakes)"></div>
                                    <span class="sec_fe_span com_font16">Objective C/C++</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="Airbags"></div>
                                    <span class="sec_fe_span com_font16">JavaScript</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">ORM’s</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">CoreData</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="http://peepep.com/static/upload/feature/4-feature.png" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">RestKitur</span>
                                </li> -->
                            </ul>
                        </div>
                    </div>


                    <div class="tab">
                        <button class="tab-toggle">Speech Recognition</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Speech Recognition(STT & TTS)</p>
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Third Party Speech Engine</span>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
@endpush

<!-- PAGE END -->
