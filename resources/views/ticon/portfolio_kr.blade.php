
<!-- PORTFOLIO PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .border-img {
            width: 100%;
            padding: 1px;
            background-color: #bfbfbfc4;
            border-radius: 0px;
            box-shadow: 0px 0px 14px rgba(0, 0, 0, .14);
        }

        .image {
            margin-bottom: 5%;
        }

        .g_title {
            margin-top: 10px;
        }
        .cuadro_intro_hover {
            border: 2px solid #ffffff;
            border-radius: 4%;
            padding: 0px;
            position: relative;
            overflow: hidden;
            height: auto;
        }
        img.img-responsive.product-pi {
            height: 250px;
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <section id="gallery">
        <div class="container">
            <div id="image-gallery">

                <div class="row">
                    <div class="col-md-12">
                        <div class="G-Title" style="text-align: center;">
                            <h1 class="animatable bounceIn">주요 개발 프로젝트</h1>
                            <p class="animatable fadeInUp">아래로 스크롤 하시면 자세한 내용을 보실 수 있습니다.</p>
                        </div>
                    </div>
                </div>


                <div class="row" style="display:flex; flex-wrap: wrap;">

                    <!-- BlessBit -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/BlessBit.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">BlessBit</h3>
                                    <p class="overlay-text">스트리밍 솔루션</p>
                                    <a href="{{url('/product/bless-bit')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>BlessBit</strong></p>
                    </div>

                    <!-- Rabbithole -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/rabbithole.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Rabbithole Prime</h3>
                                    <p class="overlay-text">스포츠 & 엔터테인먼트</p>
                                    <a href="{{url('/product/rabbithole-prime')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Rabbithole Prime</strong></p>
                    </div>

                    <!-- Theia -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/thea.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">THEIA</h3>
                                    <p class="overlay-text">인공 지능</p>
                                    <a href="{{url('/product/theia')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>THEIA</strong></p>
                    </div>

                    <!-- Fotoboss -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/fotoboss.png') }}" class="product-pi img-responsive" alt="">
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Fotoboss</h3>
                                    <p class="overlay-text">웹 크롤러</p>
                                    <a href="{{url('/product/fotoboss')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Fotoboss</strong></p>
                    </div>

                    <!-- Willy -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/willy.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Willy</h3>
                                    <p class="overlay-text">인공 지능</p>
                                    <a href="product/page/Willy" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Willy</strong></p>
                    </div>

                    <!-- Tigergen -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/tigergen.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Tiger Gen</h3>
                                    <p class="overlay-text">라이브 TV</p>
                                    <a href="{{url('/product/tiger-gen')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Tiger Gen</strong></p>
                    </div>


                    <!-- CH BOX -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/085-096-H01-500x500.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">CH BOX</h3>
                                    <p class="overlay-text">IP TV</p>
                                    <a href="{{url('/product/ch-box')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>CH BOX</strong></p>
                    </div>


                    <!-- FROM DATA BASE TABLE PORTFOLIO -->
                    @foreach ($portfolios as $portfolio)

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{$portfolio->img_url}}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">{{$portfolio->title}} </h3>
                                    <p class="overlay-text">{{$portfolio->client_name}}</p>
                                    <a href="portfolio/product/{{$portfolio->id}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong> {{ strtoupper($portfolio->title); }} </strong></p>
                    </div>
                    @endforeach

                    <!-- NRB TV -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/nrb.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">NRB TV</h3>
                                    <p class="overlay-text">라이브 TV</p>
                                    <a href="{{url('/product/nrb-tv')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>NRB TV</strong></p>
                    </div>

                    <!-- Quizyard -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/quizyard.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Quizyard</h3>
                                    <p class="overlay-text">트리비아 앱</p>
                                    <a href="{{url('/product/quiz-yard')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>QUIZYARD</strong></p>
                    </div>

                    <!-- Smart Consular Service -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/smart.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Smart Consular Service</h3>
                                    <p class="overlay-text">영사 시스템 자동화</p>
                                    <a href="{{url('/product/smart-consular')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Smart Consular Service</strong></p>
                    </div>

                    <!-- App Store -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/app-store.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">App Store</h3>
                                    <p class="overlay-text">안드로이드 및 iOS 앱 스토어</p>
                                    <a href="{{url('/product/app-store')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>App Store</strong></p>
                    </div>

                    <!-- Hello Cockpit -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/hellocockpit.png') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Hello Cockpit</h3>
                                    <p class="overlay-text">교육 웹사이트</p>
                                    <a href="{{url('/product/hello-cockpit')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Hello Cockpit</strong></p>
                    </div>

                    <!-- Runway -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/shutterstock_305259533-500x500.jpg') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">RUNWAY</h3>
                                    <p class="overlay-text">안드로이드, iOS, 웹 기반 콘텐츠 관리</p>
                                    <a href="{{url('/product/runway')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>RUNWAY</strong></p>
                    </div>

                    <!-- Sunplex -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/sunplex.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Sunplex</h3>
                                    <p class="overlay-text">웹 기반 콘텐츠 관리</p>
                                    <a href="{{url('/product/sunplex')}}" class="view-more">세부 내용 &rarr;</a>
                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Sunplex</strong></p>
                    </div>

                    <!-- CH VOD -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/chvod-1-500x500.jpg') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">CH VOD</h3>
                                    <p class="overlay-text">VOD 콘텐츠</p>
                                    <a href="{{url('/product/ch-vod')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>CH VOD</strong></p>
                    </div>

                    
                    <!-- J VOD -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/0f3a82d5-3393-4f4a-93e7-ed0dfe51ef93-500x500.jpg') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">J VOD</h3>
                                    <p class="overlay-text">VOD</p>
                                    <a href="{{url('/product/j-vod')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>J VOD</strong></p>
                    </div>


                    <!-- WILLFON -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/willfon-1-500x500.jpg') }}" class="product-pi img-responsive" alt="">

                            <div class="caption">

                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">WILLFON</h3>
                                    <p class="overlay-text">무료 오디오 및 비디오 전화</p>
                                    <a href="{{url('/product/willfon')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>WILLFON</strong></p>
                    </div>

                    <!-- VISION FACEWATCH -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/mobile_technology-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">VISION FACEWATCH</h3>
                                    <p class="overlay-text">안드로이드, iOS 애플리케이션</p>
                                    <a href="{{url('/product/vision-facewatch')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>VISION FACEWATCH</strong></p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/33665611_l-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">Banchin/HiFriend</h3>
                                    <p class="overlay-text">안드로이드, iOS, 웹 기반 콘텐츠 관리</p>
                                    <a href="{{url('/product/banchin-or-hifriend')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>Banchin/HiFriend</strong></p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/maxresdefault.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">SBT NEAT</h3>
                                    <p class="overlay-text">안드로이드, 윈도우(PC 브라우저)</p>
                                    <a href="{{url('/product/sbt-neat')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>SBT NEAT</strong></p>
                    </div>
                
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/mas-virus-malware-iphone-ipad-e1447263267711-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">5DIMENSIONAL EDU</h3>
                                    <p class="overlay-text">안드로이드, iOS, 웹 기반 콘텐츠 관리</p>
                                    <a href="{{url('/product/5-dimentional-edu')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>5DIMENSIONAL EDU</strong></p>
                    </div>



                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/software-development-1-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">J VISION</h3>
                                    <p class="overlay-text">안드로이드, iOS, 웹 기반 콘텐츠 관리</p>
                                    <a href="{{url('/product/j-vision')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>J VISION</strong></p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/mobile-marketing_web-2244x1122-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">ICALLRING</h3>
                                    <p class="overlay-text">안드로이드</p>
                                    <a href="{{url('/product/icallring')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>ICALLRING</strong></p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/758d058d94d35c3d82d7241_39cb-post-821x512-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">MIRU PHONE</h3>
                                    <p class="overlay-text">안드로이드, 윈도우(PC 브라우저)</p>
                                    <a href="{{url('/product/miru-phone')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>MIRU PHONE</strong></p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/Craige-Parking-Deck-Sketch1-300x300.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">수의학 클리닉을 위한 윈도우 PC 기반 소프트웨어 애플리케이션</h3>
                                    <p class="overlay-text">Patuakhali 과학 기술 대학교y</p>
                                    <a href="{{url('/product/veterinary-clinics')}}" class="view-more">Details &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>수의학 클리닉을 위한 윈도우 PC 기반 소프트웨어 애플리케이션</strong></p>
                    </div>


    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
                        <div class="cuadro_intro_hover ">
                            <img src="{{ asset('assets/img/products/logistics-mobile-apps-500x500.png') }}" class="img-responsive product-pi">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h3 class="overlay-heading">managR</h3>
                                    <p class="overlay-text">TELETALK BANGLADESH</p>
                                    <a href="{{url('/product/teletalk-bangladesh')}}" class="view-more">세부 내용 &rarr;</a>

                                </div>
                                <span class="top-left"></span>
                                <span class="top-right"></span>
                                <span class="bottom-left"></span>
                                <span class="bottom-right"></span>
                            </div>
                        </div>
                        <p class="g_title" style="text-align: center"><strong>텔레토크 방글라데시를 위한 모바일 애플리케이션</strong></p>
                    </div>

                </div>
                <!-- End row -->
            </div>
            <!-- End image gallery -->
        </div>
    </section>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PORTFOLIO PAGE END -->
