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
                <img src="{{ asset('assets/img/products/willy.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Willy</p>
                <p class="vertical-secondary-text animatable fadeInUp ">빅데이터, NLP, ML & 음성인식 테크놀로지의 파워를 활용한 하드웨어 통합 다국어 챗봇(영어, 한국어, 일본어 및 다른 언어로 확장 가능)</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (일본)</p>

                 <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, iOS</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Machine Leraning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS)</p>       
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>안드로이드 & iOS 기반 인공 지능.</li>
                    <li><span>&rarr;</span>질문을 인식하고 실제 응답을 줄 수 있음.</li>
                    <li><span>&rarr;</span>알람, 일정 알림을 설정할 수 있음.</li>
                    <li><span>&rarr;</span>사용자 명령 기반 인터넷에서 물건을 검색.</li>
                                  
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