<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        .indicator-control{
            display:none;
            position: absolute;
            bottom: 50% !important;
            left: 5% !important;
            z-index: 20;
            width: 15px;
            padding-left: 0px;
            margin-left: 0px;
            text-align: center;
            list-style: none;
            transform: translateY(50%);
        }

        ol.carousel-indicators.empty{
            position: static !important;
            margin-bottom: 0px;
        }
        .services-heading{
            color: #000;
            font-size: 43px;
            text-align: center;
        }
        .services-heading span{
            color: #1aa8e1;
        }
        .service-icons1{
            display: block;
            width: 90px;
            height:90px;
            transition: transform .3s ease;
            margin-bottom:15px;
        }
        .margin-bt{
            margin-bottom: 30px;
            cursor: default;
        }
        /*.margin-bt:hover .service-icons1{
            transform: scale(1.2);
        }*/
        .services-text h4{
            color: #1E3B65;
            font-size: 18px;
            font-weight: 700;
            position: relative;
            padding-bottom: 0px;
        }
        .services-text h4::after{
            content: " ";
            width: 100px;
            height: 3px;
            display:none;
            position: absolute;
            background-color: #0b95d9;
            bottom: -7px;
            left: 50%;
            transform: translateX(-50%);
        }
        .services-text p{
            font-size: 15px;
            margin-top: 4%;
        }
        .services-pera1{
            width: 93%;
            text-align: center;
            font-size: 15px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 3%;
        }
        .vertical-praimary-heading::after{
            bottom: -10px;
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="home-block-3 service_bg" id="scroll-to" style="padding-bottom: 35px;">
        <div class="container">
            <div class="row mglr">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="service-text">
                        <h2 class="block-3-heading" style="margin-top:0px;margin-bottom: 10px;"><span class="main-title" style="font-size: 43px;">서비스</span></h2>
                        <p style="font-size: 16px;line-height: 1.41">세계 수준의 유연하고 가용성 있는 서비스 시스템을 고객에게 제공합니다.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
                <div class="service_img service_match">
                        <img src="{{ asset('assets/img/ticon_service.png')}}" alt="Service Image " class="img-responsive" style="width:100%;border-radius:10px;height:100%;">
                </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <!--Vertical Slider starts here-->
                        <div class="vertical__slider--container">
                            <div id="myCarousel-1" class="vertical-slider carousel vertical slide" data-ride="carousel">
                                <div class="indicator-control">
                                    <a href="#myCarousel-1" class="btn-vertical-slider1 btn-vertical-slider__up1" data-slide="next"><i class="fa fa-long-arrow-down"></i></a>

                                    <ol class="carousel-indicators empty">
                                        <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="1"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="2"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="3"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="4"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="5"></li>
                                    </ol>
                                <a href="#myCarousel-1" class="btn-vertical-slider1 btn-vertical-slider__down1" data-slide="prev">
                                    <i class="fa fa-long-arrow-up"></i></a>
                                </div>
                                

                                <!-- Carousel items -->
                                <div class="carousel-inner service_match">

                                    <div class="item active">
                                        
                                        <div class="item__content">
                                            <h3 class="number">01</h3>
                                            <p class="vertical-praimary-heading">웹 개발</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">방글라데시와 한국의 신뢰할 수 있는 웹 개발 회사 중 하나로 전 세계에 퍼져있는 고객에게 엔드 투 엔드 웹 개발 서비스를 제공합니다.</p>
                                            <a href="{{url('service/web-development')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">02</h3>
                                            <p class="vertical-praimary-heading">모바일 앱 개발</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">방글라데시와 대한민국의 신뢰할 수 있는 모바일 앱 개발 회사로서, 우리는 네이티브 애플리케이션의 생성 및 제공에서 업계를 선도합니다. 우리는 빠르게 성장하는 스타트업과 선도기업을 위한 신뢰할 수 있는 모바일 앱 개발 파트너입니다. 실제 비즈니스 가치를 추가하고 고객 환경을 개선하며, 수익을 창출하는 모바일 솔루션을 구축할 수 있도록 지원합니다. 앱의 초기 개념화에서 앱 스토어의 최종 배포에 이르기까지 엔드 투 엔드 모빌리티 솔루션을 제공합니다.</p>
                                            <a href="{{url('service/mobile-app-development')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">03</h3>
                                            <p class="vertical-praimary-heading">커스텀 소프트웨어 개발</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">여러 가지 복잡한 수준들의 기업 솔루션을 구축하는 데 있어 견고한 기술과 깊은 전문 지식을 보유하고 있습니다. 비즈니스 프로세스 관리, 리소스 계획, 고객 관계 관리, 협업 및 기타 비즈니스 도메인에 대한 경험을 통해 고객에게 최상의 맞춤형 솔루션을 제공할 수 있습니다.</p>
                                            <a href="{{url('service/custom-software-development')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">04</h3>
                                            <p class="vertical-praimary-heading">소프트웨어 제품 개발</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">TiCON은 전체 주기(full-cycle) 소프트웨어 제품 개발 (SPD) 서비스 제공 업체이며 제품 진화의 모든 단계에서 고객을 지원합니다. – 간단한 아이디어에서 제품 구현, 지원 및 유지 보수까지.</p>
                                            <a href="{{url('service/software-product-development')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">05</h3>
                                            <p class="vertical-praimary-heading">엔터프라이즈 애플리케이션 통합</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">서로 다른 부서, 애플리케이션 및 데이터 소스를 포함하고, 직접 처리 요구, 원활한 데이터 교환 및 통합 비즈니스 규칙 실행을 해야 하는 높은 수준의 비즈니스 프로세스를 지원하고 개선할 수 있도록 기업을 지원합니다.</p>
                                            <a href="{{url('service/enterprise-application-integration')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">06</h3>
                                            <p class="vertical-praimary-heading">테크놀로지 컨설팅</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">특정 IT 관련 문제를 해결하는 것에서부터 IT에 의해 추진되는 전략적 비즈니스 혁신에 이르기까지, 여러 도메인 영역에 걸쳐 기업에 테크놀로지 컨설팅 서비스를 제공합니다. 귀사의 비즈니스, 관리 및 직원이 목표와 비즈니스 과제에 맞춰 정보 테크놀로지를 효율적이고 효과적으로 사용할 수 있도록 기능 노하우, 세부 이해, 리소스 및 심층적인 전문 지식을 갖춘 신뢰할 수 있는 IT 파트너가 되는 것을 목표로 합니다.</p>
                                            <a href="{{url('service/technology-consulting')}}" class="view-more modify-1">세부 내용</a>
                                        </div>
                                    </div>
                                    <!--/item-->
                                    <div class="slider_indicator_bottom">
                                        <span href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__up" data-slide="prev">
                                            <i class="fa fa-chevron-left"></i></span>
                                        <span href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__down" data-slide="next">
                                            <i class="fa fa-chevron-right"></i></span>
                                    </div>
                                    <!-- <a href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__down" data-slide="next">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                    <a href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__up" data-slide="prev">
                                        <i class="fa fa-chevron-left"></i>
                                    </a> -->
                                </div>
                                
                                    
                            </div>
                        </div>

                    <!--Vertical Slider ends here-->
                </div>
            </div>
        </div>
    </div>

    <div class="home-block-3" style="padding-top: 20px;padding-bottom: 30px;">
        <div class="container">
            <h3 class="services-heading animatable fadeInUp">풀사이클 소프트웨어 개발 서비스</h3>
            <p class="services-pera1 animatable fadeInUp">최신의 기술과 정보는 조직의 운영, 성장 및 확대에 중요한 역할을 하고 있으며, 대기업이든 스타트업이든 정보기술의 활용은 고객관리, 인사관리, 프로세스 추적, 공급관리, 고객사 관계 유지 등  전사적 관리 체제에 매우 도움이 되고 있습니다. 티콘시스템은 이런 흐름을 잘 이해하고 있으며, 고객이 성공하도록 다양한 제품과 솔루션을 개발 및 공급하고 있습니다.</p>
            <div class="row mglr">
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareDevelopment.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>소프트웨어 개발</h4>
                            <p>
                            다년간의 도메인 전문지식이 있는 당사는 고성능 소프트웨어, 모바일/웹 앱, 전자상거래 사이트, CMS 등 소프트웨어를 안전하고, 확장 가능한 구조로 개발하여 제공합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/AWS.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>클라우드 도입 서비스</h4>
                            <p>
                            AWS 기술파트너인, 티콘시스템의 AWS 공인전문가는 아마존 클라우드에 대한 자문, 지원, 구현, 관리 및 마이그레이션까지 AWS 클라우드 플랫폼 서비스의 다양한 컨설팅을 제공합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareConsulting.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>소프트웨어 컨설팅</h4>
                            <p>
                            티콘시스템의 숙련된 컨설턴트는 고객이 ROI(Return of Invest)를 극대화하도록 소프트웨어 프로젝트의 효과적인 계획, 실행, 공급 및 관리를 자문합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareDevelopmentExpertise.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>소프트웨어 개발 전문성</h4>
                            <p>
                            가장 적합한 기술과 세밀하게 설계한 시스템 아키텍처를 구현하는 기술컨설팅 서비스를 제공합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/ThirdpartySolutionCustomization.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>타사 솔루션 맞춤형 주문 제작</h4>
                            <p>
                            타사의 솔루션도 가장 적합한 기술과 시스템 아키텍처로 구현할 수 있도록 기술컨설팅 서비스를 제공합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareQAandTesting.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>소프트웨어 QA 및 테스트</h4>
                            <p>
                            티콘시스템의 수준 높은 전문 분석팀과 시험팀의 경험은 고객의 프로젝트를 수행하는데 소프트웨어가 정확하게 동작하도록 지원할 것입니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/MigrationandUpgrade.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>마이그레이션 및 업그레이드</h4>
                            <p>
                            티콘시스템의 전문 컨설턴트는 최신 기술, 면밀한 시스템 아키텍처 솔루션 스택으로 마이그레이션 및 업그레이드 서비스를 제공합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/ui_ux.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>소프트웨어 UI / UX 디자인</h4>
                            <p>
                            티콘시스템의 창의적인 젊은 전문가들은 수준 높은 UI/UX 디자인을 제공할 것입니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/Support&Maintenance.png')}}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>지원 및 유지관리</h4>
                            <p>
                            티콘시스템은 고객에게 애플리케이션 지원 및 유지보수 서비스를 전문적이고, 신뢰할 수 있도록 제공하고 있으며, 고객의 요청에 따라 365일 24시간 서비스도 제공하고 있습니다.
                            </p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <script>
       $('.service_match').matchHeight();
       $('.service_container').matchHeight();
        $(document).ready(function () {
            $('.btn-vertical-slider1').on('click', function () {
                
                if ($(this).attr('data-slide') == 'next') {
                    $('#myCarousel-1').carousel('next');
                }
                if ($(this).attr('data-slide') == 'prev') {
                    $('#myCarousel-1').carousel('prev')
                }

            });
        });


    </script>

    <script>
        $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 150;  // How many characters are shown by default
        var ellipsestext = "...";
        
        $('.vertical-secondary-text').each(function() {
            var content = $(this).html();
    
            if(content.length > showChar) {
    
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
    
                var html = c + ' ' + ellipsestext;
    
                $(this).html(html);
            }
    
        });
        });
    </script>
@endpush

<!-- PAGE END -->
