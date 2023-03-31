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
             
                <img src="{{ asset('assets/img/products/willy.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Willy</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Hardware integrated multilingual chatbot (English, Korean, Japanese and it can be extended to any other languages) utilizing power of Big Data, NLP, ML & Speech Recognition technology.</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Client Name:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (Japan)</p>

                 <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Android, iOS</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Machine Leraning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS)</p>              
                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Android & IOS base artifial intellegence.</li>
                    <li><span>&rarr;</span>Can recognize question and give real response.</li>
                    <li><span>&rarr;</span>Can set alarm, Schedule reminder.</li>
                    <li><span>&rarr;</span>Search things on internet based on user command.</li>
                    
                            
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