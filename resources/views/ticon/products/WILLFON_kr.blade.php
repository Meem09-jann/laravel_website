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
                <img src="{{ asset('assets/img/products/willfon-1-500x500.jpg') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">WILLFON</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (Japan)</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp "> iOS, 안드로이드 </p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">SIP (Session Initial Protocol), Objective C, Visual Studio, SQL Lite, MySQL Database</p>               
                 
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <p class="vertical-secondary-text animatable fadeInUp ">Willfon은 모든 네트워크에서 태블릿을 포함한 모든 안드로이드 장치에서 무료 오디오 및 비디오 전화입니다. 3G 또는 WiFi 만 있으면 어디서나 다른 Willfon 사용자와 연결할 수 있습니다!</p>               
                <p class="vertical-secondary-text animatable fadeInUp ">Willfon 사용자는 SMS 활성화에 등록됩니다. 전화번호에는 국가 코드가 포함되어 있으므로 모든 사용자의 핀 번호가 자동으로 생성됩니다. 사용자는 또한 연락처 목록을 추가하고 Willfon 사용자는 연락처 목록을 표시합니다. 또 다른 기능은 연결 유지 서비스, 그룹 추가 등입니다.</p>               
                <p class="vertical-secondary-text animatable fadeInUp ">비즈니스, 기술, 커뮤니케이션 및 사람들 개념 - 태블릿 PC 컴퓨터를 들고 사무실이나 집에서 헬프 라인 운영자와 화상 채팅을 하는 여자의 클로즈업</p>               

            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->