<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style>
        .service-details-bg {
            width: 60%;
            height: 600px;
        }
        
        .service-details-img {
            width: 65%;
            height: 370px;
            box-shadow: 0px 0px 32px 0px rgba(0, 0, 0, .5);
            display: block;
            margin: 0px auto;
        }
        .space li span {
         margin-right: 10px;
        }   
         .vertical-praimary-heading::after {
            bottom: -6px;
        }
        .in-house-product{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 12px;
            line-height: 1.42857143;
            color: #333;
            font-weight: 600;
        } 
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="margin-bottom: 10px;">
                <img src="{{ asset('assets/img/BlessBit.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">BlessBit</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">TiCON 시스템의 사내 제품</p>

                <p class="vertical-secondary-text animatable fadeInUp ">스트리밍 서비스 제공업체에 업계 표준 턴키 솔루션을 제공합니다. 턴키 프로젝트는 당사의 스트리밍 엔진, CMS, 그리고 클라이언트의 애플리케이션을 포함합니다.</p>
                
                <p class="vertical-secondary-text animatable fadeInUp">문의처:- <br>전화 : +821096291477(대한민국) 또는 +8801777174791(방글라데시)<br> 이메일 : info@ticonsys.com</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">웹 애플리케이션, 안드로이드, iOS, 커스텀 플레이어</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Netty, NGiNX, Docker Technology, FFmpeg, MySQL, PHP (CodeIgniter)</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>주요 OS 기반 클라이언트 애플리케이션 (안드로이드, iOS, 윈도우 등)이 있는 HLS, RTMP, RTSP, UDP</li>
                    <li><span>&rarr;</span>어댑티브 및 다중 비트레이트 스트림은 모두 동일한 콘텐츠에서 지원되지만 다른 비트레이트(고품질, 중간 품질 저품질 또는 그 이상)로 지원.</li>
                    <li><span>&rarr;</span>어댑티브 비트레이트 스트리밍 (ABR) - 비트레이트는 시청자의 사용 가능한 대역폭에 따라 자동으로 조정</li>
                    <li><span>&rarr;</span>'타임스탬프, 사용자 기반 토큰' 보안 시스템을 유지</li>
                    <li><span>&rarr;</span>캐시, 부하 분산</li>
                    <li><span>&rarr;</span>고유 등록 및 인증</li>

                    <li><span>&rarr;</span>필요한 시점에 스마트 알림이 정확히 수신</li>
                    <li><span>&rarr;</span>혼잡 없는 콘텐츠 기반 라우팅 지원</li>
                    <li><span>&rarr;</span>세션의 조작 요청 프로세스를 허용</li>
                    <li><span>&rarr;</span>시스템 내장 퍼포먼스 모니터</li>
                    <li><span>&rarr;</span>대역폭 관리가 내장된 시스템</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
