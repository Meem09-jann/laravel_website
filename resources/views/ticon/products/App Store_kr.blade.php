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

                <img src="{{ asset('assets/img/products/app-store.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">App Store</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">WIS Consortium</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">웹 기반 앱 관리</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>
                <p class="vertical-secondary-text animatable fadeInUp ">PHP (CodeIgniter), SQL Lite, MySQL Database, JavaScript, HTML, CSS</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>웹 기반 분류 안드로이드 및 iOS 앱 스토어</li>
                    <li><span>&rarr;</span>사용자 등록</li>
                    <li><span>&rarr;</span>다운로드 앱</li>   
                    <li><span>&rarr;</span>업로드 앱</li>   
                    <li><span>&rarr;</span>등록 시 이메일 확인</li>   
                    <li><span>&rarr;</span>앱 승인/거부 시 알림 이메일</li>   
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
