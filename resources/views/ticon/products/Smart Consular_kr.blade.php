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

                <img src="{{ asset('assets/img/smart_l.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">스마트 영사 서비스</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">서울 방글라데시 대사관</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">웹 기반 대사관 관리 시스템</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>
                <p class="vertical-secondary-text animatable fadeInUp ">PHP (CodeIgniter), SQL Lite, MySQL Database</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>멀티 레벨 사용자 액세스 제어</li>
                    <li><span>&rarr;</span>클라이언트 정보 저장</li>
                    <li><span>&rarr;</span>다른 카테고리별 정보 보고, 검색, 정렬</li>
                    <li><span>&rarr;</span>보고서를 Excel 또는 CSV 파일로 생성</li>    
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