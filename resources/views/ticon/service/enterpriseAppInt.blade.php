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
            box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, .5);
            margin: 0px auto;
            display: block;
            transition: all .3s;
   
        }
        .space li span {
         margin-right: 10px;
        } 
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="padding-left: 0px;position: relative;margin-bottom: 10px;">
               
                <img src="{{ asset('assets/img/desktopsupport.jpg') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">ENTERPRISE APPLICATION INTEGRATION</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">We help companies to support and refine high-level business processes that involve different departments, applications and data sources and require straight-through processing, seamless data interchange and integrated business rules execution.</p>
                
                <img src="{{ asset('assets/img/222ed-3.png') }}" alt="" class="img-responsive animatable fadeInUp">
                
                <ul style="list-style-type:circle;line-height: 27px; margin-top:35px;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>IT Security consulting.</li>
                    <li><span>&rarr;</span>IT Project analysis and planning.</li>
                    <li><span>&rarr;</span>Point-to-point Integration and Ad Hoc Solutions.</li>
                    <li><span>&rarr;</span>Custom middleware development.</li>
                    <li><span>&rarr;</span>Custom database connector’s development.</li>
                    <li><span>&rarr;</span>Customization, re-engineering of existing applications & frameworks.</li>
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
