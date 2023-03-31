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
                <img src="{{ asset('assets/img/products/fotoboss.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">FotoBoss</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Client Name :-</p>

                <p class="vertical-secondary-text animatable fadeInUp ">HD Signature, Korea</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Web Application</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp">Kravla Web Crawler, PHP(CodeIgniter), MySQL Database, JavaScript</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Unique frontend design which can be customized.</li>
                    <li><span>&rarr;</span>Full CMS with extensive functionalities with 3 level of user access.</li>
                    <li><span>&rarr;</span>We use AWS S3 for photo storage.</li>
                    <li><span>&rarr;</span>Social login/signup along with all social platform share is already integrated.</li>
                    <li><span>&rarr;</span>Detailed analytics & reporting is available.</li>

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
