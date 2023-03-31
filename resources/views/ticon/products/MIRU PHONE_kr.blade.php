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
                <img src="{{ asset('assets/img/products/758d058d94d35c3d82d7241_39cb-post-821x512-500x500.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">MIRU PHONE</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">World Innovation Ltd(일본)</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, 윈도우(PC 브라우저)</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Eclipse, Visual Studio, PHP(Codeigniter), SQL Lite, MySQL Database</p>  
                
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Miru Phone은 다중 그룹웨어 메시징에 사용됩니다.</li>
                    <li><span>&rarr;</span>기업 커뮤니케이션 관리</li>
                    <!-- <li><span>&rarr;</span>Categorizing a group</li> -->
                    <!-- <li><span>&rarr;</span>View Recent Calls</li> -->
                    <!-- <li><span>&rarr;</span>Ad Video and Image as Ringtone</li> -->
                
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