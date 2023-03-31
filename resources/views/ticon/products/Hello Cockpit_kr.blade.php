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

                <img src="{{ asset('assets/img/products/hellocockpit.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Hello Cockpit</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Kite Innovation Limited</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">교육 및 진로 생활에 있어 청소년을 위한 웹 기반 기회 플랫폼. </p>


                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">PHP (CodeIgniter), SQL Lite, MySQL Database, JavaScript</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>신규 및 중고 도서 온라인 구매/판매.</li>
                    <li><span>&rarr;</span>학생을 위한 시험 준비 도구 키트.</li>
                    <li><span>&rarr;</span>온라인 유학 지원.</li>
                    <li><span>&rarr;</span>효과적인 에드테크 솔루션</li>    
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
