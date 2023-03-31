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

                         <h3>우리의 솔루션</h3>
                        <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>                   
                    <!-- <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">&#9679;</span> -->

            </div>
            <div class="row mglr">

                 <div class="wrap">
                    <div class="slider achieve">

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">스트리밍 솔루션</p>
                                <p class="solu-description">우리의 스트리밍 테크놀로지는 모든 시청자에게 고품질의 시청 경험을 제공하고 방송 사업자들에게는 고급 관리 시스템을 제공합니다.</p>
                                <li>- 어댑티브 & 다중 비트 전송률 지원</li>
                                <li>- 고유 등록 & 인증</li>
                                <li>- 안전한 입력 및 출력 소스</li>
                                <li>- 대역폭 관리</li>
                                <li>- 캐시,로드 밸런싱</li>
                                <center><a href="https://blessbit.net/" target="_blank" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution3.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">AI 통합</p>
                                <p class="solu-description">TiCON은 하드웨어 통합 챗봇을 최초로 도입했으며, 벵골어에서는 빅데이터, NLP, ML & 음성인식 테크놀로지를 최대한 활용하려고 합니다.</p>
                                
                                <li>- 음성 인식</li>
                                <li>- 음성 텍스트</li>
                                <li>- Implement ML</li>
                                <li>- 사용자 호출</li>
                                <li>- 대화</li>
                                <center><a href="{{url('/solution/ai-integration')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
                            </div>
                        </div>
        
                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">웹 크롤러</p>
                                <p class="solu-description">사내 웹 크롤링 프로젝트는 처음에 웹에서 무료 스톡 사진을 검색하고 가져오는 것을 위해 시작되었습니다.</p>
                                <li>- 코딩 표준</li>
                                <li>- 명확한 보고</li>
                                <li>- 보안 문자 우회</li>
                                <li>- 자바 기반</li>
                                <li>- 프록시</li>
                                <center><a href="{{url('/solution/web-crawler')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">HR 솔루션</p>
                                <p class="solu-description">주로 채용 & 온보딩에 중점을 두지만, TiCON의 HR 솔루션은 HR & 급여 관련 요구사항을 모두 처리하기에 완벽한 솔루션입니다.</p>
                                <li>- 취업 전 테스트</li>
                                <li>- 비디오 인터뷰</li>
                                <li>- Notifications</li>
                                <li>- 구인 공고</li>
                                <li>- SSO</li>
                                <center><a href="{{url('solution/hr-solution')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
                            </div>

                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution1.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">트리비아 모바일 게임</p>
                                <p class="solu-description">웹 기반 관리자 패널이 있는 트리비아 앱 (안드로이드 & iOS).</p>
                                
                                <li>- 추천 시스템</li>
                                <li>- 포인트 사용</li>
                                <li>- 온보딩</li>
                                
                                <li>- Play Quiz</li>
                                <li>- 예측</li>
                                <center><a href="{{url('/solution/trivia-mobile-apps')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
                            </div>
                        </div>

                        <div class="item new1">
                            <div class="solution-slide-outer">
                                <center><img src="{{ asset('assets/img/Solution2.png') }}" alt="" class="solution-img"></center>
                                <p class="solution-name">E-커머스 & 웹 솔루션</p>
                                <p class="solu-description">TiCON은 온라인 마켓플레이스, 경매, 부동산, 뉴스 & 방송, 미디어 & 엔터테인먼트, 그리고 소셜 네트워크 & 커뮤니티를 제공할 수 있습니다.</p>
                                 <li>- 콘텐츠 관리 시스템 (CMS)</li>
                                <li>- 경매 및 입찰 플랫폼</li>
                                <li>- Advanced booking applications</li>
                                <li>- B2B 및 B2C 마켓플레이스</li>
                                <li>- B2B 연결 포털</li>
                                <center><a href="{{url('/solution/ecommerce-and-web-solution')}}" class="view-more modify-1" style="margin-top: 15px;z-index: 5;">솔루션 보기</a></center>
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
