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
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/products/Craige-Parking-Deck-Sketch1-300x300.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">수의학 클리닉을 위한 윈도우 PC 기반 소프트웨어 애플리케이션</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Patuakhali 과학 기술 대학교</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">윈도우 데스크탑 애플리케이션</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp "> .net, MySQL</p>             
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>데이터 입력</li>
                    <li><span>&rarr;</span>데이터 확인/검색</li>
                    <li><span>&rarr;</span>사용자 계정 통계 설정</li>
                    <!-- <li><span>&rarr;</span>Blogging</li> -->
                    <!-- <li><span>&rarr;</span>Event</li> -->
                
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