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
               
                <img src="{{ asset('assets/img/products/mas-virus-malware-iphone-ipad-e1447263267711-500x500.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">5DIMENTIONAL EDU</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Grace Global Academy Korea</p>
                
                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, iOS, 웹 애플리케이션</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Objective C, Eclipse, PHP (CodeIgniter), SQL Lite, MySQL Database</p>               
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>한국 사람들이 영어를 쉽게 배울 수 있는 영어 학습 애플리케이션</li>
                    <li><span>&rarr;</span>키워드 연습</li>
                    <li><span>&rarr;</span>스크립트 리딩, 구두 유창성</li>
                    <li><span>&rarr;</span>쓰기 연습</li>
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
