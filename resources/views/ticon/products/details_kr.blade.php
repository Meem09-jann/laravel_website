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
                <img src="{{ asset($portfolios->img_url) }}"alt="" class="service-details-img">
            </div>
            
               
            
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">{{$portfolios->title}}</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">{{$portfolios->client_name}}</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">{{$portfolios->platform}}</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지:</p>

                <p class="vertical-secondary-text animatable fadeInUp">{{$portfolios->used_technology}}</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    
                   @php {{ $description=explode("->",$portfolios->product_description);}}
                   
                     for ($i=0; $i < sizeof($description); $i++) { 
                         echo "<li><span>&rarr;</span>".$description[$i]."</li>";
                     }
                    @endphp
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
