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
                <img src="{{ asset('assets/img/thea.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Theia</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">TiCON 시스템의 사내 제품</p>
                <p class="vertical-secondary-text animatable fadeInUp ">TiCON은 하드웨어 통합 다국어 챗봇을 최초로 도입했습니다. (벵골어, 영어, 한국어, 일본어 그리고 다른 언어로 확장될 수 있습니다) 당사는 빅 데이터, NLP, ML & 음성 인식 테크놀로지를 최대한 활용합니다.</p>

                 <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, iOS</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지: :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Machine Learning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS)</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>안드로이드 및 iOS에 기반 인공 지능</li>
                    <li><span>&rarr;</span>질문을 인식하고 실제 답변을 할 수 있음</li>
                    <li><span>&rarr;</span>알람, 스케줄 주의 사항을 설정할 수 있음</li>
                    <li><span>&rarr;</span>사용자 명령에 따라 인터넷에서 검색</li>
                    <li><span>&rarr;</span>데이터 세트를 기반으로 하는 다른 서비스로 확장할 수 있음</li>
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