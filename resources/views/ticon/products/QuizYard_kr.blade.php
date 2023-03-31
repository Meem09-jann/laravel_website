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
                <img src="{{ asset('assets/img/products/quizyard.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">QuizYard</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">TiCON 시스템의 사내 제품</p>
                <p class="vertical-secondary-text animatable fadeInUp ">웹 기반 관리자 패널이있는 트리비아 모바일 게임.</p>


                 <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, iOS</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Objective C, Android Studio, JSON, PHP, MySQL Database</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>간단한 등록 프로세스를 통해 앱에 진입하는 사용자</li>
                    <li><span>&rarr;</span>매일 퀴즈를 풀고 점수를 얻을 수 있음</li>
                    <li><span>&rarr;</span>퀴즈와 마찬가지로 사용자는 포인트를 예측하고 적립 할 수 있음</li>
                    <li><span>&rarr;</span>사용자는 유효한 사용자를 QuizYard에 추천하여 포인트를 얻을 수 있음</li>
                    <li><span>&rarr;</span>적립 된 포인트를 매장에서 구매할 수있는 많은 선물로 교환</li>
                    
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