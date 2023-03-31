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
                <img src="{{ asset('assets/img/products/shutterstock_305259533-500x500.jpg') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">RUNWAY</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Kite Innovation Limited</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">웹 기반 커리어 마켓플레이스</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp "> PHP (CodeIgniter), SQL Lite, MySQL Database</p>                

               
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <p class="vertical-secondary-text animatable fadeInUp">Runway는 누구나 자신을 탐색할 수 있는 취업포털입니다. 일자리를 찾고, 직원을 찾고, 프리랜서로 자신만의 창의력을 보여줄 수 있는 쉬운 사이트입니다. 사용하기 쉽고 이곳에서 많은 양의 일자리를 찾을 수 있습니다. 그것은 학생들에게도 도움이 됩니다. 그들은 책을 찾고 자기 판단을 위해 다양한 유형의 테스트를 할 수 있습니다.</p>


            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->