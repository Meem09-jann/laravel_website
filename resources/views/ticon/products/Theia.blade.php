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

                <p class="vertical-secondary-heading animatable fadeInUp ">In House Product Of TiCON System Limited</p>
                <p class="vertical-secondary-text animatable fadeInUp ">TiCON brings first Hardware integrated multilingual chatbot (Bengali, English, Korean, Japanese and it can be extended to any other languages) we intent to utilize full power of Big Data, NLP, ML & Speech Recognition technology.</p>

                 <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Android, iOS</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Machine Learning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS)</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Android & IOS base Artificial Intelligence.</li>
                    <li><span>&rarr;</span>Can recognize question and give real response.</li>
                    <li><span>&rarr;</span>Can set Alarm, Schedule Reminder.</li>
                    <li><span>&rarr;</span>Search things on internet based on user command.</li>
                    <li><span>&rarr;</span>It can be extended to any other services based on Data Set.</li>
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