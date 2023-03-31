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
        .in-house-product{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 12px;
            line-height: 1.42857143;
            color: #333;
            font-weight: 600;
        } 
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="margin-bottom: 10px;">
                <img src="{{ asset('assets/img/BlessBit.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">BlessBit</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">In House Product Of TiCON System Limited</p>

                <p class="vertical-secondary-text animatable fadeInUp ">We provide industry standard turnkey solution to streaming service provider. Turnkey project included our streaming Engine, CMS, and Client’s Application.</p>
                
                <p class="vertical-secondary-text animatable fadeInUp">Contact us :- <br>Phone: +821096291477(Korea) or +8801777174791(Bangladesh)<br> Email:- info@ticonsys.com</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Web Aplication, Android, iOS, Custom Player</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Netty, NGiNX, Docker Technology, FFmpeg, MySQL, PHP (CodeIgniter)</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>HLS, RTMP, RTSP, UDP with major OS based client application ( Android , iOS, Windows etc ).</li>
                    <li><span>&rarr;</span>Both adaptive and multi bitrate streams are supported with the same content but in different bitrates(high quality, medium quality low quality or more ).</li>
                    <li><span>&rarr;</span>Adaptive Bitrate Streaming (ABR) - bitrate is adjusted automatically based on viewer's available bandwidth.</li>
                    <li><span>&rarr;</span>Maintain ‘timestamp, token with users based’ secured system.</li>
                    <li><span>&rarr;</span>Cache, Load Balancing.</li>
                    <li><span>&rarr;</span>Unique Registration & Authentication.</li>

                    <li><span>&rarr;</span>Receive smart notifications exactly at the right moments when you need them.</li>
                    <li><span>&rarr;</span>Congestion-free Contents based routing supported.</li>
                    <li><span>&rarr;</span>Request Manipulation processes of the session are allowed.</li>
                    <li><span>&rarr;</span>System built in performance Monitor.</li>
                    <li><span>&rarr;</span>System built in bandwidth management.</li>
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
