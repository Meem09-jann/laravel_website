<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style>
        .service-details-bg {
            width: 80%;
            height: 520px;
        }
        
        .service-details-img {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translateY(-50%);
            width: 70%;
            height: 300px;
            box-shadow: 0px 0px 14px rgba(0, 0, 0, .5);
        }
        
        .solution-slide-outer {
            background-color: #F5F5F5;
            width: 100%;
            padding: 20px 8%;
        }
        
        .solution-slide-outer>li {
            list-style-type: none;
            color: #646464;
            font-size: 12px;
        }
        
        .slick-arrow {
            top: 48%;
        }
        
        .solu-description {
            color: #646464;
            font-size: 12px;
            margin-top: 10px;
        }
        
        .solution-name {
            color: #1d1d1d;
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 10px;
            margin-top: 15px;
            text-transform: uppercase;
        }
        
        .client-designation {
            color: #646464;
            font-size: 15px;
            margin-top: 0px;
        }
        
        .heading-txt {
            padding-left: 15px;
            margin-bottom: 20px;
        }
        
        .width-res {
            width: 50%;
        }
        
        .new1.item .solution-img {
            width: 25%;
            height: 100%;
            display: block !important;
        }
        
        .new1.item {
            height: auto !important;
            padding: 10px;
            border-radius: 5px;
        }
        
        .new1.item:focus {
            outline: none;
        }
        
        @media (max-width:767.98px) {
            .width-res {
                width: 80%;
            }
        }
        
        .slick-slide:after {
            z-index: -1;
        }
        .slick-prev {
            left: 30%;
            
        }
        .slick-next {
            right: 25%;
        }
        .slick-arrow {
            box-shadow: 0px 0px 8px 0px rgba(138, 148, 152, 0.63);            
            top: 55%;
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="home-block-3">
        <div class="container">
            <div class="heading-txt">
                <!-- <p class="block-3-service"><span style="color: #0091E3;font-size: 18px;font-weight: 700;margin-right: 10px">___</span></p> -->
                <!-- <h2 class="block-3-heading"><span style="font-weight: 900"> Our Solutions</span>                 </h2> -->

                         <h3>Our Solution</h3>
                        <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>                   
                    <!-- <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">&#9679;</span> -->

            </div>
            <div class="row mglr">

                 <div class="wrap">
                    <div class="slider achieve">

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">streaming solution</p>
                                <p class="solu-description">Our streaming technology provides a high quality viewing experience for any audience and an advanced management system for broadcast operators.</p>
                                <li>- Adaptive & Multi Bitrates Supported</li>
                                <li>- Unique Registration & Authentication</li>
                                <li>- Secured input and output sources</li>
                                <li>- Bandwidth Management</li>
                                <li>- Cache, Load Balancing</li>
                                <center><a href="https://blessbit.net/" target="_blank" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution3.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">AI Integration</p>
                                <p class="solu-description">TiCON brings first Hardware integrated chatbot, in Bengali, we intent to utilize full power of Big Data, NLP, ML & Speech Recognition technology.</p>
                                
                                <li>- Speach Recognition</li>
                                <li>- Text To Speach</li>
                                <li>- Implement ML</li>
                                <li>- User Calls</li>
                                <li>- Conversation</li>
                                <center><a href="{{url('/solution/ai-integration')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
                            </div>
                        </div>
        
                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">Web Crawler</p>
                                <p class="solu-description">In-house web crawling project started initially for crawling & fetching free stock photos around the web.</p>
                                <li>- Coding Standard</li>
                                <li>- Clear Reporting</li>
                                <li>- Bypass Captcha</li>
                                <li>- Java Based</li>
                                <li>- Proxy</li>
                                <center><a href="{{url('/solution/web-crawler')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">HR Solution</p>
                                <p class="solu-description">Although mostly focused on recruitment &amp; onboarding, TiCON’s HR solution is perfect to take care all of your HR &amp; Payroll related requirements.</p>
                                <li>- Pre-employment test</li>
                                <li>- Video Interview</li>
                                <li>- Notifications</li>
                                <li>- Job Posting</li>
                                <li>- SSO</li>
                                <center><a href="{{url('solution/hr-solution')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">Trivia Mobile Game</p>
                                <p class="solu-description">Trivia app (Android & iOS) with web based admin panel.</p>
                                
                                <li>- Referral System</li>
                                <li>- Redeem Points</li>
                                <li>- Onboarding</li>
                                
                                <li>- Play Quiz</li>
                                <li>- Predict</li>
                                <center><a href="{{url('/solution/trivia-mobile-apps')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
                            </div>
                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution2.png') }} " alt="" class="solution-img"></center>
                                <p class="solution-name">ECOMMERCE & WEB SOLUTION</p>
                                <p class="solu-description">TICON can provide online marketplaces, auctions, Real Estate, News & Broadcasting, Media & Entertainment, And Social Networks & Communities.</p>
                                 <li>- Content management systems (CMS)</li>
                                <li>- Auctions and bidding platforms</li>
                                <li>- Advanced booking applications</li>
                                <li>- B2B and B2C marketplaces</li>
                                <li>- B2B connectivity portals</li>
                                <center><a href="{{url('/solution/ecommerce-and-web-solution')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">View Solution</a></center>
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

@endpush

<!-- PAGE END -->
