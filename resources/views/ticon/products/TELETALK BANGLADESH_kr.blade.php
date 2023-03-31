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
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->

    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="margin-bottom: 10px;">
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/products/logistics-mobile-apps-500x500.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Teletalk Bangladesh를 위한 모바일 애플리케이션</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Teletalk Bangladesh</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">iPhone, 안드로이드 및 윈도우</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Java for Android platform, Swift language for IOS, Visual studio for Windows Platform, Yii2 Framework and MySQL</p>     
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Tele Tune 정보를 구독</li>
                    <li><span>&rarr;</span>부재중 통화 알림(MCA) 가입 정보</li>
                    <li><span>&rarr;</span>한 번의 클릭으로 모바일 TV 즐기기</li>
                    <li><span>&rarr;</span>SMS 푸시 풀 서비스 정보</li>
                    <li><span>&rarr;</span>음성 기반 서비스 정보</li>
                    <li><span>&rarr;</span>학교, 대학, 의과대학, e-SIF, e-FF 등 지원 세부사항</li>
                    <li><span>&rarr;</span>모바일 금융 서비스 & 유틸리티 청구서 결제 정보</li>
                    <li><span>&rarr;</span>클릭 한 번으로 모든 모집 & SMS 기반 결과 관련 정보 제공</li>
                
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