<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
       .tech-links:hover{
            text-decoration: none;
        }
	    .future-hrm {
            margin-bottom: 6%;
        }
        
        .feature-block-hrm {
            
            padding-bottom: 2%;
            padding-top: 2%;
           
        }

 
    	.product-tech-heading {
            color: #2a2a2a;
            font-size: 32px;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        
        .product-tech-heading1 {
            color: #2a2a2a;
            font-size: 32px;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        
        .product-tech-heading::after {
            content: " ";
            display: block;
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 70px;
            height: 3px;
            background-color: #147fb4;
            transform: translateX(-50%);
        }
        .crawl-feature-right{
        	padding-top: 13%;
        	padding-left: 4%;
        }
        .method-heading{
        	color: #000;
        	font-weight: 700;
        	font-size: 26px;
        }
        .method-pera{
        	color: #888;
        	font-size: 15px;
        }
        .crawl-feature-left-img{
        	width: 100%;
        }


        .indications{
            width: 100%;
            margin-top: 2%;
            margin-bottom: 2%;
        }
        .indications-1{
            display: inline-block;
            width: 32.33%;
            text-align: center;
        }

        .green-1 {
            
            display: inline-block;
            width: 24px;
            height: 11px;
            margin-right: 5px;
            background-color: #24AE61;
        }

        .red-1 {
            display: inline-block;
            width: 24px;
            height: 11px;
            margin-right: 5px;
            background-color: #ED4826;
        }

        .blue-1 {
            display: inline-block;
            width: 24px;
            height: 11px;
            margin-right: 5px;
            background-color: #3395D2;
        }
       .product-tech-heading.product-tech-heading2::after{
        display: none;
       }
       @media (max-width: 767.98px){
            .crawl-feature-right {
                padding-top: 5%;
                padding-left: 4%;
            }
        }
       @media (max-width: 500px){
            .indications-1 {
                display: inline-block;
                width: 31.33%;
                text-align: center;
                font-size: 10px;
            }
            .green-1 {
                height: 7px;
                width: 12px;
            }

            .red-1 {
                height: 7px;
                width: 12px;
            }

            .blue-1 {
                height: 7px;
                width: 12px;
            }
        }
        .tabs__section{
            background-color: #f7f7f7;
        }
        .tech-links{
            text-align: center;
        }
        #image-gallery {
        margin-bottom: 5%;
        }
        .tabs__content {

            background-color: #f7f7f7 !important;
            
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    <div class="col-md-12">
                        <div class="technology-text">
                            <!-- <p class="techno-sub-title"><span><img src="{{ asset('assets/img/title_line.png" alt="Icon.png') }}" class="title_icon"></span> OUR TECHNOLOGY</p>
                            <h2 class="t-main-title"><span style="font-weight: 900">Technology</span> <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">●</span></h2>
                            <p>Our goal is to provide a flexible, high-availability system that represents the new model for communications in today’s global infrastructure.</p> -->
                            <h3>당사의 테크놀로지</h3>
                            <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>                        
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('assets/img/technology-korean.png') }}" alt="loading" class="img-responsive t-detail-img">
                    </div>
                </div>


            </div>
            <!-- End image gallery -->
        </div>
    </section>

    <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;background-color: #f7f7f7;">
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 2%;margin-top: 3%">
                <h3 class="product-tech-heading">
                    테크놀로지 스택
                </h3>
            </div>
            <div class="row" style="clear: both;">
                
                <div class="col-md-12">
                    <div class="tabs" style="padding-top: 0px;margin-bottom: 0px;">

                        <div class="tabs__bar">
                            <div class="tabs__controls md-ripple">모바일 테크놀로지 </div>
                            <div class="tabs__controls md-ripple">웹 개발</div>
                            <div class="tabs__controls md-ripple">스트리밍</div>
                            <div class="tabs__controls md-ripple">AI</div>
                        </div>


                        <div class="tabs__content">
                        <!--Tab content of Mobile Technology starts-->
                            <div class="tabs__section">
                                <div class="GWiyheYPuCqzTaFzt4nk7">
                                    <div class="_3Gszzc96ZGJZYu_zagI2pa">

                                        <!--middleWare grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/mobile-technology')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--middleware icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M16,64h256v16h16V40c0-22.056-17.944-40-40-40H40C17.944,0,0,17.944,0,40v360h16V64z M16,40c0-13.232,10.768-24,24-24     h208c13.232,0,24,10.768,24,24v8H16V40z" fill="#696869"/>
                                                                            <path d="M0,456c0,22.056,17.944,40,40,40h208c22.056,0,40-17.944,40-40v-40H0V456z M16,432h256v24c0,13.232-10.768,24-24,24H40     c-13.232,0-24-10.768-24-24V432z" fill="#696869"/>
                                                                            <rect x="104" y="448" width="80" height="16" fill="#696869"/>
                                                                            <path d="M360,248c-26.472,0-48,21.528-48,48s21.528,48,48,48s48-21.528,48-48S386.472,248,360,248z M360,328     c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S377.648,328,360,328z" fill="#696869"/>
                                                                            <path d="M136,144c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C176,161.944,158.056,144,136,144     z M136,208c-13.232,0-24-10.768-24-24s10.768-24,24-24s24,10.768,24,24S149.232,208,136,208z" fill="#696869"/>
                                                                            <path d="M164.4,258.8c1.472-0.56,2.936-1.176,4.392-1.84l24.8,16.536l31.904-31.904l-16.536-24.8     c0.664-1.464,1.28-2.928,1.84-4.392l29.2-5.84v-45.12l-29.2-5.84c-1.128-2.92-2.456-5.84-3.968-8.728l-14.16,7.448     c1.848,3.528,3.352,7.104,4.44,10.608l1.416,4.536L224,174.56v18.88l-25.48,5.096l-1.416,4.536     c-1.088,3.504-2.584,7.072-4.44,10.608l-2.208,4.208l14.44,21.664l-13.344,13.352l-21.664-14.448l-4.2,2.208     c-3.512,1.848-7.088,3.344-10.616,4.448l-4.528,1.416L145.448,272H126.56l-5.096-25.472l-4.528-1.416     c-3.528-1.104-7.104-2.6-10.616-4.448l-4.2-2.208l-21.664,14.448l-17.984-17.992L51.16,246.224l27.264,27.264l24.8-16.536     c1.456,0.664,2.92,1.28,4.392,1.84l5.84,29.2h45.112L164.4,258.8z" fill="#696869"/>
                                                                            <path d="M32,161.44v45.12l29.2,5.84c1.128,2.92,2.456,5.84,3.968,8.728l14.16-7.448c-1.848-3.528-3.352-7.104-4.44-10.608     l-1.416-4.536L48,193.44v-18.88l25.48-5.096l1.416-4.536c1.088-3.504,2.584-7.072,4.44-10.608l2.208-4.208l-14.44-21.664     l13.352-13.352l21.672,14.448l4.2-2.216c3.504-1.84,7.072-3.336,10.6-4.44l4.528-1.416L126.552,96h18.888l5.096,25.472     l4.528,1.416c3.528,1.104,7.104,2.6,10.6,4.44l4.2,2.216l21.672-14.448l17.992,17.992l11.312-11.312l-27.256-27.264     l-24.808,16.528c-1.464-0.664-2.92-1.272-4.392-1.84L158.552,80H113.44l-5.84,29.2c-1.472,0.568-2.928,1.176-4.392,1.84     L78.4,94.512l-31.896,31.896l16.536,24.8c-0.664,1.464-1.28,2.928-1.84,4.392L32,161.44z" fill="#696869"/>
                                                                            <rect x="128" y="304" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="336" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="368" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="128" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="96" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="64" width="16" height="16" fill="#696869"/>
                                                                            <path d="M496,326.56v-61.12l-39.456-7.88c-0.92-2.312-1.936-4.6-3.032-6.856l-14.392,7c1.504,3.104,2.832,6.272,3.92,9.44     l1.504,4.328L480,278.56v34.872l-35.456,7.096l-1.504,4.328c-1.096,3.168-2.416,6.344-3.92,9.44l-2.008,4.12l20.072,30.104     l-24.664,24.664l-30.112-20.064l-4.12,2.008c-3.096,1.504-6.272,2.832-9.44,3.92l-4.328,1.504L377.44,416h-34.88l-7.096-35.456     l-4.328-1.504c-3.168-1.096-6.344-2.416-9.44-3.92l-4.12-2.008l-30.112,20.064L258.16,363.88l-11.312,11.312l38.584,38.576     l33.48-22.32c0.872,0.376,1.752,0.744,2.632,1.096L329.44,432h61.128l7.88-39.456c0.88-0.352,1.76-0.72,2.632-1.096l33.48,22.32     l43.224-43.208l-22.328-33.488c0.376-0.872,0.744-1.752,1.096-2.632L496,326.56z" fill="#696869"/>
                                                                            <path d="M242.216,221.44l22.328,33.48c-0.376,0.872-0.744,1.752-1.096,2.632L224,265.44v61.128l39.456,7.88     c0.92,2.312,1.936,4.6,3.032,6.848l14.392-7c-1.504-3.096-2.832-6.272-3.92-9.44l-1.504-4.328L240,313.44v-34.88l35.456-7.096     l1.504-4.328c1.096-3.168,2.416-6.336,3.92-9.44l2.008-4.128l-20.072-30.096l24.664-24.664l30.104,20.064l4.128-2     c3.088-1.504,6.272-2.832,9.456-3.936l4.312-1.504L342.552,176h34.888l7.088,35.44l4.312,1.504     c3.176,1.104,6.368,2.432,9.456,3.936l4.128,2l30.104-20.064l29.304,29.304l11.312-11.312l-38.584-38.576l-33.488,22.32     c-0.864-0.376-1.744-0.736-2.624-1.088L390.552,160H329.44l-7.888,39.456c-0.88,0.352-1.76,0.712-2.624,1.088l-33.488-22.32     L242.216,221.44z" fill="#696869"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--middleware icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">미들웨어</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--middleWare grid ends-->

                                        
                                        <!--Application Platform grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/mobile-technology')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Application Platform icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,165.241c-25.364,0-46,20.636-46,46c0,25.364,20.636,46,46,46s46-20.636,46-46    C138.422,185.877,117.786,165.241,92.422,165.241z M92.422,237.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26    S106.759,237.241,92.422,237.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,291.241c-25.364,0-46,20.636-46,46s20.636,46,46,46s46-20.636,46-46S117.786,291.241,92.422,291.241z     M92.422,363.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26S106.759,363.241,92.422,363.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M172.797,469.2c-1.86-1.87-4.44-2.93-7.07-2.93s-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.43-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.86,4.439,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    C175.727,473.63,174.657,471.06,172.797,469.2z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M319.006,268.93c-1.86-1.86-4.44-2.93-7.07-2.93s-5.209,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S320.866,270.79,319.006,268.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M481.997,0h-89c-5.523,0-10,4.477-10,10s4.477,10,10,10h89c5.514,0,10,4.486,10,10v184c0,5.514-4.486,10-10,10H295.691    c-2.671,0-5.231,1.068-7.109,2.967l-22.458,22.704V234c0-5.523-4.477-10-10-10h-39.773c-5.514,0-10-4.486-10-10V30    c0-5.514,4.486-10,10-10h81.979c5.523,0,10-4.477,10-10s-4.477-10-10-10h-81.979c-16.542,0-30,13.458-30,30v10H30.003    c-16.542,0-30,13.458-30,30v412c0,16.542,13.458,30,30,30h261.931c16.542,0,30-13.458,30-30V311c0-5.523-4.477-10-10-10    s-10,4.477-10,10v127H20.003V114h129.942c5.523,0,10-4.477,10-10s-4.477-10-10-10H20.003V70c0-5.514,4.486-10,10-10h156.348v154    c0,16.542,13.458,30,30,30h29.773v30c0,4.055,2.448,7.708,6.198,9.249c1.23,0.506,2.521,0.751,3.799,0.751    c2.621,0,5.196-1.031,7.112-2.968L299.865,244h182.132c16.542,0,30-13.458,30-30V30C511.997,13.458,498.539,0,481.997,0z     M301.934,458v24c0,5.514-4.486,10-10,10H30.003c-5.514,0-10-4.486-10-10v-24H301.934z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M354.817,2.93c-1.86-1.86-4.44-2.93-7.07-2.93c-2.64,0-5.21,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S356.677,4.79,354.817,2.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,301.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,301.509,258.172,301.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,349.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,349.509,258.172,349.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M364.265,94h3.483c5.523,0,10-4.477,10-10s-4.477-10-10-10h-3.483c-18.366,0-33.309,14.942-33.309,33.309V110h-0.002    c-5.523,0-10,4.477-10,10s4.477,10,10,10h0.002v39.821c0,5.523,4.477,10,10,10s10-4.477,10-10V130h13.576c5.523,0,10-4.477,10-10    s-4.477-10-10-10h-13.576v-2.691C350.956,99.971,356.926,94,364.265,94z" fill="#696969"/>
                                                                    </g>
                                                                </g>

                                                            </svg>
                                                        </span>
                                                        <!--Application Platform grid ends-->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">애플리케이션 플랫폼</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Application Platform grid ends-->

                                        
                                        <!--Backend Platform grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/mobile-technology')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Backend icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.001 480.001" style="enable-background:new 0 0 480.001 480.001;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M120,216.001c-17.673,0-32,14.327-32,32s14.327,32,32,32s32-14.327,32-32S137.674,216.001,120,216.001z M120,264.001    c-8.837,0-16-7.163-16-16c0-8.837,7.163-16,16-16s16,7.163,16,16C136.001,256.837,128.837,264.001,120,264.001z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M314.401,208.001H448c17.673,0,32-14.327,32-32v-112c0-17.673-14.327-32-32-32H296v-24c0-4.418-3.582-8-8-8H8    C3.631-0.048,0.049,3.454,0,7.824C0,7.883,0,7.941,0,8.001v408c0.003,3.442,2.206,6.496,5.472,7.584l168,56    c0.814,0.276,1.668,0.416,2.528,0.416c4.418,0,8-3.582,8-8v-48h28.448c5.672,9.867,16.171,15.964,27.552,16h208    c17.673,0,32-14.327,32-32v-80c0-17.673-14.327-32-32-32h-133.6L296,283.72v-63.44L314.401,208.001z M448,48.001    c8.837,0,16,7.163,16,16v32h-240v-32c0-8.837,7.163-16,16-16H448z M168.001,460.897L16,410.233V19.105l152,50.664V460.897z     M208.001,328.001v80h-24v-344c-0.003-3.442-2.206-6.496-5.472-7.584L57.289,16.001H280v16h-40c-17.673,0-32,14.327-32,32v112    c0,17.673,14.327,32,32,32h16v24c-0.001,4.418,3.581,8.001,7.999,8.001c1.581,0,3.126-0.468,4.441-1.345l11.56-7.712v42.112    l-11.56-7.712c-3.675-2.452-8.643-1.461-11.095,2.215c-0.877,1.315-1.345,2.86-1.345,4.441v24h-16    C222.327,296.001,208.001,310.327,208.001,328.001z M307.56,310.657c1.316,0.874,2.86,1.341,4.44,1.344h136    c8.837,0,16,7.163,16,16v80c0,8.837-7.163,16-16,16h-208c-8.837,0-16-7.163-16-16v-80c0-8.837,7.163-16,16-16h24    c4.418,0,8-3.582,8-8v-17.056L307.56,310.657z M272,217.056v-17.056c0-4.418-3.582-8-8-8h-24c-8.837,0-16-7.163-16-16v-64h240v64    c0,8.837-7.163,16-16,16H312c-1.58,0.003-3.124,0.47-4.44,1.344L272,217.056z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="160.001" width="192" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="264" y="128.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="296" y="128.001" width="144" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="240.001" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="272" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="304" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M277.656,341.657l-11.312-11.312l-16,16c-3.123,3.124-3.123,8.188,0,11.312l16,16l11.312-11.312l-10.344-10.344    L277.656,341.657z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M341.656,346.345l-16-16l-11.312,11.312l10.344,10.344l-10.344,10.344l11.312,11.312l16-16    C344.78,354.533,344.78,349.468,341.656,346.345z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="270.7" y="343.972" transform="matrix(0.3164 -0.9486 0.9486 0.3164 -131.5407 521.41)" width="50.6" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="360" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="392.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="280" y="392.001" width="160" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="392" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="424" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Backend icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">벡엔드</span>
                                                    </div>  
                                                </div>
                                            </a>
                                        </div>
                                        <!--Backend Platform grid ends-->



                                        <!--Frameworks, components Platform grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/mobile-technology')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Frameworks, components icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M497,0H15C6.716,0,0,6.716,0,15v482c0,8.284,6.716,15,15,15h482c8.284,0,15-6.716,15-15V15C512,6.716,505.284,0,497,0z     M482,482H30V30h452V482z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.599,96.4h-289.2c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h289.2c8.284,0,15-6.716,15-15v-96.4    C415.599,103.116,408.883,96.4,400.599,96.4z M385.599,192.8h-259.2v-66.4h259.2V192.8z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M207.799,289.201h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C222.799,295.917,216.083,289.201,207.799,289.201z M192.799,385.6h-66.4v-66.4h66.4V385.6z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.6,289.2h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C415.6,295.916,408.884,289.2,400.6,289.2z M385.6,385.601h-66.4v-66.4h66.4V385.601z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Frameworks, components icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">프레임워크, 컴포넌트</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Frameworks, components Platform grid ends-->

                                    </div>
                                </div>
                            </div>
                        <!--Tab content of Mobile Technology ends-->



                        <!--Tab content of web development starts-->
                            <div class="tabs__section">
                                <div class="GWiyheYPuCqzTaFzt4nk7">
                                    <div class="_3Gszzc96ZGJZYu_zagI2pa">

                                        <!--Front-End grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/web-development')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Front-End icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M16,64h256v16h16V40c0-22.056-17.944-40-40-40H40C17.944,0,0,17.944,0,40v360h16V64z M16,40c0-13.232,10.768-24,24-24     h208c13.232,0,24,10.768,24,24v8H16V40z" fill="#696869"/>
                                                                            <path d="M0,456c0,22.056,17.944,40,40,40h208c22.056,0,40-17.944,40-40v-40H0V456z M16,432h256v24c0,13.232-10.768,24-24,24H40     c-13.232,0-24-10.768-24-24V432z" fill="#696869"/>
                                                                            <rect x="104" y="448" width="80" height="16" fill="#696869"/>
                                                                            <path d="M360,248c-26.472,0-48,21.528-48,48s21.528,48,48,48s48-21.528,48-48S386.472,248,360,248z M360,328     c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S377.648,328,360,328z" fill="#696869"/>
                                                                            <path d="M136,144c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C176,161.944,158.056,144,136,144     z M136,208c-13.232,0-24-10.768-24-24s10.768-24,24-24s24,10.768,24,24S149.232,208,136,208z" fill="#696869"/>
                                                                            <path d="M164.4,258.8c1.472-0.56,2.936-1.176,4.392-1.84l24.8,16.536l31.904-31.904l-16.536-24.8     c0.664-1.464,1.28-2.928,1.84-4.392l29.2-5.84v-45.12l-29.2-5.84c-1.128-2.92-2.456-5.84-3.968-8.728l-14.16,7.448     c1.848,3.528,3.352,7.104,4.44,10.608l1.416,4.536L224,174.56v18.88l-25.48,5.096l-1.416,4.536     c-1.088,3.504-2.584,7.072-4.44,10.608l-2.208,4.208l14.44,21.664l-13.344,13.352l-21.664-14.448l-4.2,2.208     c-3.512,1.848-7.088,3.344-10.616,4.448l-4.528,1.416L145.448,272H126.56l-5.096-25.472l-4.528-1.416     c-3.528-1.104-7.104-2.6-10.616-4.448l-4.2-2.208l-21.664,14.448l-17.984-17.992L51.16,246.224l27.264,27.264l24.8-16.536     c1.456,0.664,2.92,1.28,4.392,1.84l5.84,29.2h45.112L164.4,258.8z" fill="#696869"/>
                                                                            <path d="M32,161.44v45.12l29.2,5.84c1.128,2.92,2.456,5.84,3.968,8.728l14.16-7.448c-1.848-3.528-3.352-7.104-4.44-10.608     l-1.416-4.536L48,193.44v-18.88l25.48-5.096l1.416-4.536c1.088-3.504,2.584-7.072,4.44-10.608l2.208-4.208l-14.44-21.664     l13.352-13.352l21.672,14.448l4.2-2.216c3.504-1.84,7.072-3.336,10.6-4.44l4.528-1.416L126.552,96h18.888l5.096,25.472     l4.528,1.416c3.528,1.104,7.104,2.6,10.6,4.44l4.2,2.216l21.672-14.448l17.992,17.992l11.312-11.312l-27.256-27.264     l-24.808,16.528c-1.464-0.664-2.92-1.272-4.392-1.84L158.552,80H113.44l-5.84,29.2c-1.472,0.568-2.928,1.176-4.392,1.84     L78.4,94.512l-31.896,31.896l16.536,24.8c-0.664,1.464-1.28,2.928-1.84,4.392L32,161.44z" fill="#696869"/>
                                                                            <rect x="128" y="304" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="336" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="368" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="128" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="96" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="64" width="16" height="16" fill="#696869"/>
                                                                            <path d="M496,326.56v-61.12l-39.456-7.88c-0.92-2.312-1.936-4.6-3.032-6.856l-14.392,7c1.504,3.104,2.832,6.272,3.92,9.44     l1.504,4.328L480,278.56v34.872l-35.456,7.096l-1.504,4.328c-1.096,3.168-2.416,6.344-3.92,9.44l-2.008,4.12l20.072,30.104     l-24.664,24.664l-30.112-20.064l-4.12,2.008c-3.096,1.504-6.272,2.832-9.44,3.92l-4.328,1.504L377.44,416h-34.88l-7.096-35.456     l-4.328-1.504c-3.168-1.096-6.344-2.416-9.44-3.92l-4.12-2.008l-30.112,20.064L258.16,363.88l-11.312,11.312l38.584,38.576     l33.48-22.32c0.872,0.376,1.752,0.744,2.632,1.096L329.44,432h61.128l7.88-39.456c0.88-0.352,1.76-0.72,2.632-1.096l33.48,22.32     l43.224-43.208l-22.328-33.488c0.376-0.872,0.744-1.752,1.096-2.632L496,326.56z" fill="#696869"/>
                                                                            <path d="M242.216,221.44l22.328,33.48c-0.376,0.872-0.744,1.752-1.096,2.632L224,265.44v61.128l39.456,7.88     c0.92,2.312,1.936,4.6,3.032,6.848l14.392-7c-1.504-3.096-2.832-6.272-3.92-9.44l-1.504-4.328L240,313.44v-34.88l35.456-7.096     l1.504-4.328c1.096-3.168,2.416-6.336,3.92-9.44l2.008-4.128l-20.072-30.096l24.664-24.664l30.104,20.064l4.128-2     c3.088-1.504,6.272-2.832,9.456-3.936l4.312-1.504L342.552,176h34.888l7.088,35.44l4.312,1.504     c3.176,1.104,6.368,2.432,9.456,3.936l4.128,2l30.104-20.064l29.304,29.304l11.312-11.312l-38.584-38.576l-33.488,22.32     c-0.864-0.376-1.744-0.736-2.624-1.088L390.552,160H329.44l-7.888,39.456c-0.88,0.352-1.76,0.712-2.624,1.088l-33.488-22.32     L242.216,221.44z" fill="#696869"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Front-End icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">프런트엔드</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Front-End grid ends-->

                                        
                                        <!--Back-End grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/web-development')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Back-End icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,165.241c-25.364,0-46,20.636-46,46c0,25.364,20.636,46,46,46s46-20.636,46-46    C138.422,185.877,117.786,165.241,92.422,165.241z M92.422,237.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26    S106.759,237.241,92.422,237.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,291.241c-25.364,0-46,20.636-46,46s20.636,46,46,46s46-20.636,46-46S117.786,291.241,92.422,291.241z     M92.422,363.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26S106.759,363.241,92.422,363.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M172.797,469.2c-1.86-1.87-4.44-2.93-7.07-2.93s-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.43-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.86,4.439,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    C175.727,473.63,174.657,471.06,172.797,469.2z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M319.006,268.93c-1.86-1.86-4.44-2.93-7.07-2.93s-5.209,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S320.866,270.79,319.006,268.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M481.997,0h-89c-5.523,0-10,4.477-10,10s4.477,10,10,10h89c5.514,0,10,4.486,10,10v184c0,5.514-4.486,10-10,10H295.691    c-2.671,0-5.231,1.068-7.109,2.967l-22.458,22.704V234c0-5.523-4.477-10-10-10h-39.773c-5.514,0-10-4.486-10-10V30    c0-5.514,4.486-10,10-10h81.979c5.523,0,10-4.477,10-10s-4.477-10-10-10h-81.979c-16.542,0-30,13.458-30,30v10H30.003    c-16.542,0-30,13.458-30,30v412c0,16.542,13.458,30,30,30h261.931c16.542,0,30-13.458,30-30V311c0-5.523-4.477-10-10-10    s-10,4.477-10,10v127H20.003V114h129.942c5.523,0,10-4.477,10-10s-4.477-10-10-10H20.003V70c0-5.514,4.486-10,10-10h156.348v154    c0,16.542,13.458,30,30,30h29.773v30c0,4.055,2.448,7.708,6.198,9.249c1.23,0.506,2.521,0.751,3.799,0.751    c2.621,0,5.196-1.031,7.112-2.968L299.865,244h182.132c16.542,0,30-13.458,30-30V30C511.997,13.458,498.539,0,481.997,0z     M301.934,458v24c0,5.514-4.486,10-10,10H30.003c-5.514,0-10-4.486-10-10v-24H301.934z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M354.817,2.93c-1.86-1.86-4.44-2.93-7.07-2.93c-2.64,0-5.21,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S356.677,4.79,354.817,2.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,301.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,301.509,258.172,301.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,349.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,349.509,258.172,349.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M364.265,94h3.483c5.523,0,10-4.477,10-10s-4.477-10-10-10h-3.483c-18.366,0-33.309,14.942-33.309,33.309V110h-0.002    c-5.523,0-10,4.477-10,10s4.477,10,10,10h0.002v39.821c0,5.523,4.477,10,10,10s10-4.477,10-10V130h13.576c5.523,0,10-4.477,10-10    s-4.477-10-10-10h-13.576v-2.691C350.956,99.971,356.926,94,364.265,94z" fill="#696969"/>
                                                                    </g>
                                                                </g>

                                                            </svg>
                                                        </span>
                                                        <!--Back-End grid ends-->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">백엔드</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Back-End grid ends-->

                                        
                                        <!--Database grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/web-development')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Database icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.001 480.001" style="enable-background:new 0 0 480.001 480.001;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M120,216.001c-17.673,0-32,14.327-32,32s14.327,32,32,32s32-14.327,32-32S137.674,216.001,120,216.001z M120,264.001    c-8.837,0-16-7.163-16-16c0-8.837,7.163-16,16-16s16,7.163,16,16C136.001,256.837,128.837,264.001,120,264.001z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M314.401,208.001H448c17.673,0,32-14.327,32-32v-112c0-17.673-14.327-32-32-32H296v-24c0-4.418-3.582-8-8-8H8    C3.631-0.048,0.049,3.454,0,7.824C0,7.883,0,7.941,0,8.001v408c0.003,3.442,2.206,6.496,5.472,7.584l168,56    c0.814,0.276,1.668,0.416,2.528,0.416c4.418,0,8-3.582,8-8v-48h28.448c5.672,9.867,16.171,15.964,27.552,16h208    c17.673,0,32-14.327,32-32v-80c0-17.673-14.327-32-32-32h-133.6L296,283.72v-63.44L314.401,208.001z M448,48.001    c8.837,0,16,7.163,16,16v32h-240v-32c0-8.837,7.163-16,16-16H448z M168.001,460.897L16,410.233V19.105l152,50.664V460.897z     M208.001,328.001v80h-24v-344c-0.003-3.442-2.206-6.496-5.472-7.584L57.289,16.001H280v16h-40c-17.673,0-32,14.327-32,32v112    c0,17.673,14.327,32,32,32h16v24c-0.001,4.418,3.581,8.001,7.999,8.001c1.581,0,3.126-0.468,4.441-1.345l11.56-7.712v42.112    l-11.56-7.712c-3.675-2.452-8.643-1.461-11.095,2.215c-0.877,1.315-1.345,2.86-1.345,4.441v24h-16    C222.327,296.001,208.001,310.327,208.001,328.001z M307.56,310.657c1.316,0.874,2.86,1.341,4.44,1.344h136    c8.837,0,16,7.163,16,16v80c0,8.837-7.163,16-16,16h-208c-8.837,0-16-7.163-16-16v-80c0-8.837,7.163-16,16-16h24    c4.418,0,8-3.582,8-8v-17.056L307.56,310.657z M272,217.056v-17.056c0-4.418-3.582-8-8-8h-24c-8.837,0-16-7.163-16-16v-64h240v64    c0,8.837-7.163,16-16,16H312c-1.58,0.003-3.124,0.47-4.44,1.344L272,217.056z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="160.001" width="192" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="264" y="128.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="296" y="128.001" width="144" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="240.001" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="272" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="304" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M277.656,341.657l-11.312-11.312l-16,16c-3.123,3.124-3.123,8.188,0,11.312l16,16l11.312-11.312l-10.344-10.344    L277.656,341.657z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M341.656,346.345l-16-16l-11.312,11.312l10.344,10.344l-10.344,10.344l11.312,11.312l16-16    C344.78,354.533,344.78,349.468,341.656,346.345z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="270.7" y="343.972" transform="matrix(0.3164 -0.9486 0.9486 0.3164 -131.5407 521.41)" width="50.6" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="360" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="392.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="280" y="392.001" width="160" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="392" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="424" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Database icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">데이터베이스</span>
                                                    </div>  
                                                </div>
                                            </a>
                                        </div>
                                        <!--Database grid ends-->



                                        <!--API grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/web-development')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--API icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M497,0H15C6.716,0,0,6.716,0,15v482c0,8.284,6.716,15,15,15h482c8.284,0,15-6.716,15-15V15C512,6.716,505.284,0,497,0z     M482,482H30V30h452V482z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.599,96.4h-289.2c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h289.2c8.284,0,15-6.716,15-15v-96.4    C415.599,103.116,408.883,96.4,400.599,96.4z M385.599,192.8h-259.2v-66.4h259.2V192.8z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M207.799,289.201h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C222.799,295.917,216.083,289.201,207.799,289.201z M192.799,385.6h-66.4v-66.4h66.4V385.6z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.6,289.2h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C415.6,295.916,408.884,289.2,400.6,289.2z M385.6,385.601h-66.4v-66.4h66.4V385.601z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--API icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">API</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--API grid ends-->

                                    </div>
                                </div>
                            </div>
                        <!--Tab content of web development ends-->



                         <!--Tab content of Streaming starts-->
                            <div class="tabs__section">
                                <div class="GWiyheYPuCqzTaFzt4nk7">
                                    <div class="_3Gszzc96ZGJZYu_zagI2pa">

                                        <!--API grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/streaming')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--API icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M16,64h256v16h16V40c0-22.056-17.944-40-40-40H40C17.944,0,0,17.944,0,40v360h16V64z M16,40c0-13.232,10.768-24,24-24     h208c13.232,0,24,10.768,24,24v8H16V40z" fill="#696869"/>
                                                                            <path d="M0,456c0,22.056,17.944,40,40,40h208c22.056,0,40-17.944,40-40v-40H0V456z M16,432h256v24c0,13.232-10.768,24-24,24H40     c-13.232,0-24-10.768-24-24V432z" fill="#696869"/>
                                                                            <rect x="104" y="448" width="80" height="16" fill="#696869"/>
                                                                            <path d="M360,248c-26.472,0-48,21.528-48,48s21.528,48,48,48s48-21.528,48-48S386.472,248,360,248z M360,328     c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S377.648,328,360,328z" fill="#696869"/>
                                                                            <path d="M136,144c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C176,161.944,158.056,144,136,144     z M136,208c-13.232,0-24-10.768-24-24s10.768-24,24-24s24,10.768,24,24S149.232,208,136,208z" fill="#696869"/>
                                                                            <path d="M164.4,258.8c1.472-0.56,2.936-1.176,4.392-1.84l24.8,16.536l31.904-31.904l-16.536-24.8     c0.664-1.464,1.28-2.928,1.84-4.392l29.2-5.84v-45.12l-29.2-5.84c-1.128-2.92-2.456-5.84-3.968-8.728l-14.16,7.448     c1.848,3.528,3.352,7.104,4.44,10.608l1.416,4.536L224,174.56v18.88l-25.48,5.096l-1.416,4.536     c-1.088,3.504-2.584,7.072-4.44,10.608l-2.208,4.208l14.44,21.664l-13.344,13.352l-21.664-14.448l-4.2,2.208     c-3.512,1.848-7.088,3.344-10.616,4.448l-4.528,1.416L145.448,272H126.56l-5.096-25.472l-4.528-1.416     c-3.528-1.104-7.104-2.6-10.616-4.448l-4.2-2.208l-21.664,14.448l-17.984-17.992L51.16,246.224l27.264,27.264l24.8-16.536     c1.456,0.664,2.92,1.28,4.392,1.84l5.84,29.2h45.112L164.4,258.8z" fill="#696869"/>
                                                                            <path d="M32,161.44v45.12l29.2,5.84c1.128,2.92,2.456,5.84,3.968,8.728l14.16-7.448c-1.848-3.528-3.352-7.104-4.44-10.608     l-1.416-4.536L48,193.44v-18.88l25.48-5.096l1.416-4.536c1.088-3.504,2.584-7.072,4.44-10.608l2.208-4.208l-14.44-21.664     l13.352-13.352l21.672,14.448l4.2-2.216c3.504-1.84,7.072-3.336,10.6-4.44l4.528-1.416L126.552,96h18.888l5.096,25.472     l4.528,1.416c3.528,1.104,7.104,2.6,10.6,4.44l4.2,2.216l21.672-14.448l17.992,17.992l11.312-11.312l-27.256-27.264     l-24.808,16.528c-1.464-0.664-2.92-1.272-4.392-1.84L158.552,80H113.44l-5.84,29.2c-1.472,0.568-2.928,1.176-4.392,1.84     L78.4,94.512l-31.896,31.896l16.536,24.8c-0.664,1.464-1.28,2.928-1.84,4.392L32,161.44z" fill="#696869"/>
                                                                            <rect x="128" y="304" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="336" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="368" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="128" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="96" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="64" width="16" height="16" fill="#696869"/>
                                                                            <path d="M496,326.56v-61.12l-39.456-7.88c-0.92-2.312-1.936-4.6-3.032-6.856l-14.392,7c1.504,3.104,2.832,6.272,3.92,9.44     l1.504,4.328L480,278.56v34.872l-35.456,7.096l-1.504,4.328c-1.096,3.168-2.416,6.344-3.92,9.44l-2.008,4.12l20.072,30.104     l-24.664,24.664l-30.112-20.064l-4.12,2.008c-3.096,1.504-6.272,2.832-9.44,3.92l-4.328,1.504L377.44,416h-34.88l-7.096-35.456     l-4.328-1.504c-3.168-1.096-6.344-2.416-9.44-3.92l-4.12-2.008l-30.112,20.064L258.16,363.88l-11.312,11.312l38.584,38.576     l33.48-22.32c0.872,0.376,1.752,0.744,2.632,1.096L329.44,432h61.128l7.88-39.456c0.88-0.352,1.76-0.72,2.632-1.096l33.48,22.32     l43.224-43.208l-22.328-33.488c0.376-0.872,0.744-1.752,1.096-2.632L496,326.56z" fill="#696869"/>
                                                                            <path d="M242.216,221.44l22.328,33.48c-0.376,0.872-0.744,1.752-1.096,2.632L224,265.44v61.128l39.456,7.88     c0.92,2.312,1.936,4.6,3.032,6.848l14.392-7c-1.504-3.096-2.832-6.272-3.92-9.44l-1.504-4.328L240,313.44v-34.88l35.456-7.096     l1.504-4.328c1.096-3.168,2.416-6.336,3.92-9.44l2.008-4.128l-20.072-30.096l24.664-24.664l30.104,20.064l4.128-2     c3.088-1.504,6.272-2.832,9.456-3.936l4.312-1.504L342.552,176h34.888l7.088,35.44l4.312,1.504     c3.176,1.104,6.368,2.432,9.456,3.936l4.128,2l30.104-20.064l29.304,29.304l11.312-11.312l-38.584-38.576l-33.488,22.32     c-0.864-0.376-1.744-0.736-2.624-1.088L390.552,160H329.44l-7.888,39.456c-0.88,0.352-1.76,0.712-2.624,1.088l-33.488-22.32     L242.216,221.44z" fill="#696869"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--API icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">API</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--API grid ends-->

                                        
                                        <!--Front-End grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/streaming')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Front-End icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,165.241c-25.364,0-46,20.636-46,46c0,25.364,20.636,46,46,46s46-20.636,46-46    C138.422,185.877,117.786,165.241,92.422,165.241z M92.422,237.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26    S106.759,237.241,92.422,237.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,291.241c-25.364,0-46,20.636-46,46s20.636,46,46,46s46-20.636,46-46S117.786,291.241,92.422,291.241z     M92.422,363.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26S106.759,363.241,92.422,363.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M172.797,469.2c-1.86-1.87-4.44-2.93-7.07-2.93s-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.43-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.86,4.439,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    C175.727,473.63,174.657,471.06,172.797,469.2z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M319.006,268.93c-1.86-1.86-4.44-2.93-7.07-2.93s-5.209,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S320.866,270.79,319.006,268.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M481.997,0h-89c-5.523,0-10,4.477-10,10s4.477,10,10,10h89c5.514,0,10,4.486,10,10v184c0,5.514-4.486,10-10,10H295.691    c-2.671,0-5.231,1.068-7.109,2.967l-22.458,22.704V234c0-5.523-4.477-10-10-10h-39.773c-5.514,0-10-4.486-10-10V30    c0-5.514,4.486-10,10-10h81.979c5.523,0,10-4.477,10-10s-4.477-10-10-10h-81.979c-16.542,0-30,13.458-30,30v10H30.003    c-16.542,0-30,13.458-30,30v412c0,16.542,13.458,30,30,30h261.931c16.542,0,30-13.458,30-30V311c0-5.523-4.477-10-10-10    s-10,4.477-10,10v127H20.003V114h129.942c5.523,0,10-4.477,10-10s-4.477-10-10-10H20.003V70c0-5.514,4.486-10,10-10h156.348v154    c0,16.542,13.458,30,30,30h29.773v30c0,4.055,2.448,7.708,6.198,9.249c1.23,0.506,2.521,0.751,3.799,0.751    c2.621,0,5.196-1.031,7.112-2.968L299.865,244h182.132c16.542,0,30-13.458,30-30V30C511.997,13.458,498.539,0,481.997,0z     M301.934,458v24c0,5.514-4.486,10-10,10H30.003c-5.514,0-10-4.486-10-10v-24H301.934z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M354.817,2.93c-1.86-1.86-4.44-2.93-7.07-2.93c-2.64,0-5.21,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S356.677,4.79,354.817,2.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,301.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,301.509,258.172,301.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,349.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,349.509,258.172,349.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M364.265,94h3.483c5.523,0,10-4.477,10-10s-4.477-10-10-10h-3.483c-18.366,0-33.309,14.942-33.309,33.309V110h-0.002    c-5.523,0-10,4.477-10,10s4.477,10,10,10h0.002v39.821c0,5.523,4.477,10,10,10s10-4.477,10-10V130h13.576c5.523,0,10-4.477,10-10    s-4.477-10-10-10h-13.576v-2.691C350.956,99.971,356.926,94,364.265,94z" fill="#696969"/>
                                                                    </g>
                                                                </g>

                                                            </svg>
                                                        </span>
                                                        <!--Front-End grid ends-->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">프런트엔드</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Front-End grid ends-->

                                        
                                        <!--ENGINE grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/streaming')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--ENGINE icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.001 480.001" style="enable-background:new 0 0 480.001 480.001;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M120,216.001c-17.673,0-32,14.327-32,32s14.327,32,32,32s32-14.327,32-32S137.674,216.001,120,216.001z M120,264.001    c-8.837,0-16-7.163-16-16c0-8.837,7.163-16,16-16s16,7.163,16,16C136.001,256.837,128.837,264.001,120,264.001z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M314.401,208.001H448c17.673,0,32-14.327,32-32v-112c0-17.673-14.327-32-32-32H296v-24c0-4.418-3.582-8-8-8H8    C3.631-0.048,0.049,3.454,0,7.824C0,7.883,0,7.941,0,8.001v408c0.003,3.442,2.206,6.496,5.472,7.584l168,56    c0.814,0.276,1.668,0.416,2.528,0.416c4.418,0,8-3.582,8-8v-48h28.448c5.672,9.867,16.171,15.964,27.552,16h208    c17.673,0,32-14.327,32-32v-80c0-17.673-14.327-32-32-32h-133.6L296,283.72v-63.44L314.401,208.001z M448,48.001    c8.837,0,16,7.163,16,16v32h-240v-32c0-8.837,7.163-16,16-16H448z M168.001,460.897L16,410.233V19.105l152,50.664V460.897z     M208.001,328.001v80h-24v-344c-0.003-3.442-2.206-6.496-5.472-7.584L57.289,16.001H280v16h-40c-17.673,0-32,14.327-32,32v112    c0,17.673,14.327,32,32,32h16v24c-0.001,4.418,3.581,8.001,7.999,8.001c1.581,0,3.126-0.468,4.441-1.345l11.56-7.712v42.112    l-11.56-7.712c-3.675-2.452-8.643-1.461-11.095,2.215c-0.877,1.315-1.345,2.86-1.345,4.441v24h-16    C222.327,296.001,208.001,310.327,208.001,328.001z M307.56,310.657c1.316,0.874,2.86,1.341,4.44,1.344h136    c8.837,0,16,7.163,16,16v80c0,8.837-7.163,16-16,16h-208c-8.837,0-16-7.163-16-16v-80c0-8.837,7.163-16,16-16h24    c4.418,0,8-3.582,8-8v-17.056L307.56,310.657z M272,217.056v-17.056c0-4.418-3.582-8-8-8h-24c-8.837,0-16-7.163-16-16v-64h240v64    c0,8.837-7.163,16-16,16H312c-1.58,0.003-3.124,0.47-4.44,1.344L272,217.056z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="160.001" width="192" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="264" y="128.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="296" y="128.001" width="144" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="240.001" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="272" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="304" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M277.656,341.657l-11.312-11.312l-16,16c-3.123,3.124-3.123,8.188,0,11.312l16,16l11.312-11.312l-10.344-10.344    L277.656,341.657z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M341.656,346.345l-16-16l-11.312,11.312l10.344,10.344l-10.344,10.344l11.312,11.312l16-16    C344.78,354.533,344.78,349.468,341.656,346.345z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="270.7" y="343.972" transform="matrix(0.3164 -0.9486 0.9486 0.3164 -131.5407 521.41)" width="50.6" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="360" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="392.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="280" y="392.001" width="160" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="392" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="424" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--ENGINE icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">엔진</span>
                                                    </div>  
                                                </div>
                                            </a>
                                        </div>
                                        <!--ENGINE grid ends-->



                                        <!--Player grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/streaming')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Player icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M497,0H15C6.716,0,0,6.716,0,15v482c0,8.284,6.716,15,15,15h482c8.284,0,15-6.716,15-15V15C512,6.716,505.284,0,497,0z     M482,482H30V30h452V482z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.599,96.4h-289.2c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h289.2c8.284,0,15-6.716,15-15v-96.4    C415.599,103.116,408.883,96.4,400.599,96.4z M385.599,192.8h-259.2v-66.4h259.2V192.8z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M207.799,289.201h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C222.799,295.917,216.083,289.201,207.799,289.201z M192.799,385.6h-66.4v-66.4h66.4V385.6z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.6,289.2h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C415.6,295.916,408.884,289.2,400.6,289.2z M385.6,385.601h-66.4v-66.4h66.4V385.601z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Player icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">플레이어</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Player grid ends-->

                                    </div>
                                </div>
                            </div>
                        <!--Tab content of Streaming ends-->

    
                        <!--Tab content of AI starts-->
                            <div class="tabs__section">
                                <div class="GWiyheYPuCqzTaFzt4nk7">
                                    <div class="_3Gszzc96ZGJZYu_zagI2pa">

                                        <!--Machine Learning grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/artificial-intelligence')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l" style="text-align: center;">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Machine Learning icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M16,64h256v16h16V40c0-22.056-17.944-40-40-40H40C17.944,0,0,17.944,0,40v360h16V64z M16,40c0-13.232,10.768-24,24-24     h208c13.232,0,24,10.768,24,24v8H16V40z" fill="#696869"/>
                                                                            <path d="M0,456c0,22.056,17.944,40,40,40h208c22.056,0,40-17.944,40-40v-40H0V456z M16,432h256v24c0,13.232-10.768,24-24,24H40     c-13.232,0-24-10.768-24-24V432z" fill="#696869"/>
                                                                            <rect x="104" y="448" width="80" height="16" fill="#696869"/>
                                                                            <path d="M360,248c-26.472,0-48,21.528-48,48s21.528,48,48,48s48-21.528,48-48S386.472,248,360,248z M360,328     c-17.648,0-32-14.352-32-32s14.352-32,32-32s32,14.352,32,32S377.648,328,360,328z" fill="#696869"/>
                                                                            <path d="M136,144c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C176,161.944,158.056,144,136,144     z M136,208c-13.232,0-24-10.768-24-24s10.768-24,24-24s24,10.768,24,24S149.232,208,136,208z" fill="#696869"/>
                                                                            <path d="M164.4,258.8c1.472-0.56,2.936-1.176,4.392-1.84l24.8,16.536l31.904-31.904l-16.536-24.8     c0.664-1.464,1.28-2.928,1.84-4.392l29.2-5.84v-45.12l-29.2-5.84c-1.128-2.92-2.456-5.84-3.968-8.728l-14.16,7.448     c1.848,3.528,3.352,7.104,4.44,10.608l1.416,4.536L224,174.56v18.88l-25.48,5.096l-1.416,4.536     c-1.088,3.504-2.584,7.072-4.44,10.608l-2.208,4.208l14.44,21.664l-13.344,13.352l-21.664-14.448l-4.2,2.208     c-3.512,1.848-7.088,3.344-10.616,4.448l-4.528,1.416L145.448,272H126.56l-5.096-25.472l-4.528-1.416     c-3.528-1.104-7.104-2.6-10.616-4.448l-4.2-2.208l-21.664,14.448l-17.984-17.992L51.16,246.224l27.264,27.264l24.8-16.536     c1.456,0.664,2.92,1.28,4.392,1.84l5.84,29.2h45.112L164.4,258.8z" fill="#696869"/>
                                                                            <path d="M32,161.44v45.12l29.2,5.84c1.128,2.92,2.456,5.84,3.968,8.728l14.16-7.448c-1.848-3.528-3.352-7.104-4.44-10.608     l-1.416-4.536L48,193.44v-18.88l25.48-5.096l1.416-4.536c1.088-3.504,2.584-7.072,4.44-10.608l2.208-4.208l-14.44-21.664     l13.352-13.352l21.672,14.448l4.2-2.216c3.504-1.84,7.072-3.336,10.6-4.44l4.528-1.416L126.552,96h18.888l5.096,25.472     l4.528,1.416c3.528,1.104,7.104,2.6,10.6,4.44l4.2,2.216l21.672-14.448l17.992,17.992l11.312-11.312l-27.256-27.264     l-24.808,16.528c-1.464-0.664-2.92-1.272-4.392-1.84L158.552,80H113.44l-5.84,29.2c-1.472,0.568-2.928,1.176-4.392,1.84     L78.4,94.512l-31.896,31.896l16.536,24.8c-0.664,1.464-1.28,2.928-1.84,4.392L32,161.44z" fill="#696869"/>
                                                                            <rect x="128" y="304" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="336" width="16" height="16" fill="#696869"/>
                                                                            <rect x="128" y="368" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="128" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="96" width="16" height="16" fill="#696869"/>
                                                                            <rect x="352" y="64" width="16" height="16" fill="#696869"/>
                                                                            <path d="M496,326.56v-61.12l-39.456-7.88c-0.92-2.312-1.936-4.6-3.032-6.856l-14.392,7c1.504,3.104,2.832,6.272,3.92,9.44     l1.504,4.328L480,278.56v34.872l-35.456,7.096l-1.504,4.328c-1.096,3.168-2.416,6.344-3.92,9.44l-2.008,4.12l20.072,30.104     l-24.664,24.664l-30.112-20.064l-4.12,2.008c-3.096,1.504-6.272,2.832-9.44,3.92l-4.328,1.504L377.44,416h-34.88l-7.096-35.456     l-4.328-1.504c-3.168-1.096-6.344-2.416-9.44-3.92l-4.12-2.008l-30.112,20.064L258.16,363.88l-11.312,11.312l38.584,38.576     l33.48-22.32c0.872,0.376,1.752,0.744,2.632,1.096L329.44,432h61.128l7.88-39.456c0.88-0.352,1.76-0.72,2.632-1.096l33.48,22.32     l43.224-43.208l-22.328-33.488c0.376-0.872,0.744-1.752,1.096-2.632L496,326.56z" fill="#696869"/>
                                                                            <path d="M242.216,221.44l22.328,33.48c-0.376,0.872-0.744,1.752-1.096,2.632L224,265.44v61.128l39.456,7.88     c0.92,2.312,1.936,4.6,3.032,6.848l14.392-7c-1.504-3.096-2.832-6.272-3.92-9.44l-1.504-4.328L240,313.44v-34.88l35.456-7.096     l1.504-4.328c1.096-3.168,2.416-6.336,3.92-9.44l2.008-4.128l-20.072-30.096l24.664-24.664l30.104,20.064l4.128-2     c3.088-1.504,6.272-2.832,9.456-3.936l4.312-1.504L342.552,176h34.888l7.088,35.44l4.312,1.504     c3.176,1.104,6.368,2.432,9.456,3.936l4.128,2l30.104-20.064l29.304,29.304l11.312-11.312l-38.584-38.576l-33.488,22.32     c-0.864-0.376-1.744-0.736-2.624-1.088L390.552,160H329.44l-7.888,39.456c-0.88,0.352-1.76,0.712-2.624,1.088l-33.488-22.32     L242.216,221.44z" fill="#696869"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Machine Learning icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">머신러닝</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Machine Learning grid ends-->

                                        
                                        <!--Natural Language Proccessing grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/artificial-intelligence')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l ">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Natural Language Proccessing icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,165.241c-25.364,0-46,20.636-46,46c0,25.364,20.636,46,46,46s46-20.636,46-46    C138.422,185.877,117.786,165.241,92.422,165.241z M92.422,237.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26    S106.759,237.241,92.422,237.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M92.422,291.241c-25.364,0-46,20.636-46,46s20.636,46,46,46s46-20.636,46-46S117.786,291.241,92.422,291.241z     M92.422,363.241c-14.336,0-26-11.664-26-26s11.664-26,26-26s26,11.664,26,26S106.759,363.241,92.422,363.241z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M172.797,469.2c-1.86-1.87-4.44-2.93-7.07-2.93s-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.43-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.86,4.439,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    C175.727,473.63,174.657,471.06,172.797,469.2z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M319.006,268.93c-1.86-1.86-4.44-2.93-7.07-2.93s-5.209,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S320.866,270.79,319.006,268.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M481.997,0h-89c-5.523,0-10,4.477-10,10s4.477,10,10,10h89c5.514,0,10,4.486,10,10v184c0,5.514-4.486,10-10,10H295.691    c-2.671,0-5.231,1.068-7.109,2.967l-22.458,22.704V234c0-5.523-4.477-10-10-10h-39.773c-5.514,0-10-4.486-10-10V30    c0-5.514,4.486-10,10-10h81.979c5.523,0,10-4.477,10-10s-4.477-10-10-10h-81.979c-16.542,0-30,13.458-30,30v10H30.003    c-16.542,0-30,13.458-30,30v412c0,16.542,13.458,30,30,30h261.931c16.542,0,30-13.458,30-30V311c0-5.523-4.477-10-10-10    s-10,4.477-10,10v127H20.003V114h129.942c5.523,0,10-4.477,10-10s-4.477-10-10-10H20.003V70c0-5.514,4.486-10,10-10h156.348v154    c0,16.542,13.458,30,30,30h29.773v30c0,4.055,2.448,7.708,6.198,9.249c1.23,0.506,2.521,0.751,3.799,0.751    c2.621,0,5.196-1.031,7.112-2.968L299.865,244h182.132c16.542,0,30-13.458,30-30V30C511.997,13.458,498.539,0,481.997,0z     M301.934,458v24c0,5.514-4.486,10-10,10H30.003c-5.514,0-10-4.486-10-10v-24H301.934z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M354.817,2.93c-1.86-1.86-4.44-2.93-7.07-2.93c-2.64,0-5.21,1.07-7.07,2.93c-1.87,1.86-2.93,4.44-2.93,7.07    s1.06,5.21,2.93,7.07c1.86,1.86,4.43,2.93,7.07,2.93c2.63,0,5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07    S356.677,4.79,354.817,2.93z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,301.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,301.509,258.172,301.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M258.172,349.509h-86.167c-5.523,0-10,4.477-10,10s4.477,10,10,10h86.167c5.523,0,10-4.477,10-10    S263.695,349.509,258.172,349.509z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M364.265,94h3.483c5.523,0,10-4.477,10-10s-4.477-10-10-10h-3.483c-18.366,0-33.309,14.942-33.309,33.309V110h-0.002    c-5.523,0-10,4.477-10,10s4.477,10,10,10h0.002v39.821c0,5.523,4.477,10,10,10s10-4.477,10-10V130h13.576c5.523,0,10-4.477,10-10    s-4.477-10-10-10h-13.576v-2.691C350.956,99.971,356.926,94,364.265,94z" fill="#696969"/>
                                                                    </g>
                                                                </g>

                                                            </svg>
                                                        </span>
                                                        <!--Natural Language Proccessing grid ends-->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">자연어 처리</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Natural Language Proccessing grid ends-->

                                        
                                        <!--Middleware grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/artificial-intelligence')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Middleware icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480.001 480.001" style="enable-background:new 0 0 480.001 480.001;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M120,216.001c-17.673,0-32,14.327-32,32s14.327,32,32,32s32-14.327,32-32S137.674,216.001,120,216.001z M120,264.001    c-8.837,0-16-7.163-16-16c0-8.837,7.163-16,16-16s16,7.163,16,16C136.001,256.837,128.837,264.001,120,264.001z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M314.401,208.001H448c17.673,0,32-14.327,32-32v-112c0-17.673-14.327-32-32-32H296v-24c0-4.418-3.582-8-8-8H8    C3.631-0.048,0.049,3.454,0,7.824C0,7.883,0,7.941,0,8.001v408c0.003,3.442,2.206,6.496,5.472,7.584l168,56    c0.814,0.276,1.668,0.416,2.528,0.416c4.418,0,8-3.582,8-8v-48h28.448c5.672,9.867,16.171,15.964,27.552,16h208    c17.673,0,32-14.327,32-32v-80c0-17.673-14.327-32-32-32h-133.6L296,283.72v-63.44L314.401,208.001z M448,48.001    c8.837,0,16,7.163,16,16v32h-240v-32c0-8.837,7.163-16,16-16H448z M168.001,460.897L16,410.233V19.105l152,50.664V460.897z     M208.001,328.001v80h-24v-344c-0.003-3.442-2.206-6.496-5.472-7.584L57.289,16.001H280v16h-40c-17.673,0-32,14.327-32,32v112    c0,17.673,14.327,32,32,32h16v24c-0.001,4.418,3.581,8.001,7.999,8.001c1.581,0,3.126-0.468,4.441-1.345l11.56-7.712v42.112    l-11.56-7.712c-3.675-2.452-8.643-1.461-11.095,2.215c-0.877,1.315-1.345,2.86-1.345,4.441v24h-16    C222.327,296.001,208.001,310.327,208.001,328.001z M307.56,310.657c1.316,0.874,2.86,1.341,4.44,1.344h136    c8.837,0,16,7.163,16,16v80c0,8.837-7.163,16-16,16h-208c-8.837,0-16-7.163-16-16v-80c0-8.837,7.163-16,16-16h24    c4.418,0,8-3.582,8-8v-17.056L307.56,310.657z M272,217.056v-17.056c0-4.418-3.582-8-8-8h-24c-8.837,0-16-7.163-16-16v-64h240v64    c0,8.837-7.163,16-16,16H312c-1.58,0.003-3.124,0.47-4.44,1.344L272,217.056z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="160.001" width="192" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="264" y="128.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="296" y="128.001" width="144" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="240.001" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="272" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="304" y="64.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M277.656,341.657l-11.312-11.312l-16,16c-3.123,3.124-3.123,8.188,0,11.312l16,16l11.312-11.312l-10.344-10.344    L277.656,341.657z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M341.656,346.345l-16-16l-11.312,11.312l10.344,10.344l-10.344,10.344l11.312,11.312l16-16    C344.78,354.533,344.78,349.468,341.656,346.345z" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="270.7" y="343.972" transform="matrix(0.3164 -0.9486 0.9486 0.3164 -131.5407 521.41)" width="50.6" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="360" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="248.001" y="392.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="280" y="392.001" width="160" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="392" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <rect x="424" y="344.001" width="16" height="16" fill="#696969"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Middleware icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">미들웨어</span>
                                                    </div>  
                                                </div>
                                            </a>
                                        </div>
                                        <!--Middleware grid ends-->



                                        <!--Speech Recognition grid starts -->
                                        <div class="vvEPKStznMSQ45bJabPcw col-md-3 col-sm-6 col-xs-12">

                                            <a href="{{url('/technology/artificial-intelligence')}}" class="tech-links">
                                                <div class="_3iWHUCfYpJAiSspC18r09l">
                                                    <div class="_39v3lYF5ESPfWrarECyBj-">

                                                        <!--Speech Recognition icon starts -->
                                                        <span class="SVGInline _3qBVKe1pCM9WV05lXWZkII">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M497,0H15C6.716,0,0,6.716,0,15v482c0,8.284,6.716,15,15,15h482c8.284,0,15-6.716,15-15V15C512,6.716,505.284,0,497,0z     M482,482H30V30h452V482z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.599,96.4h-289.2c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h289.2c8.284,0,15-6.716,15-15v-96.4    C415.599,103.116,408.883,96.4,400.599,96.4z M385.599,192.8h-259.2v-66.4h259.2V192.8z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M207.799,289.201h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C222.799,295.917,216.083,289.201,207.799,289.201z M192.799,385.6h-66.4v-66.4h66.4V385.6z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M400.6,289.2h-96.4c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15h96.4c8.284,0,15-6.716,15-15v-96.4    C415.6,295.916,408.884,289.2,400.6,289.2z M385.6,385.601h-66.4v-66.4h66.4V385.601z" fill="#686869"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <!--Speech Recognition icon ends -->

                                                        <span class="_2DsR8g8lShsK9x5IbpaSYf">음성 인식</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!--Speech Recognition grid ends-->

                                    </div>
                                </div>
                            </div>
                         <!--Tab content of AI ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End container -->


    <!--KEY feature stock photo-->
    <div class="container-fluid feature-block-hrm">
        <div class="container points-block" style="padding-bottom: 2%;">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 2%;">
                <h3 class="product-tech-heading" style="padding-top: 8%;">
                   	디벨롭먼트 메써돌로지
                </h3>
                <!-- <p class="method-pera">We worked on lots of models & objects/data for training. We will now present you our current achievements and ongoings.</p>  -->
            </div>
            <div class="row mglr">
                <!-- <div class="col-sm-8 crawl-feature-left">
                    <img src="{{ asset('assets/img/methodology.png') }}" alt="" class="crawl-feature-left-img">
                </div>
                <div class="col-sm-4 crawl-feature-right">
                   <h3 class="method-heading">Agile Methodology</h3>
                   <p class="method-pera">Agile Methodology is focused client process. So, it makes sure that the client is continuously involved during every stage.Agile teams are extremely motivated and self-organized so it likely to provide a better result from the development projects.Agile software development method assures that quality of the development is maintained</p> 
                </div> -->
                <div class="col-sm-12 crawl-feature-left">
                    <img src="{{ asset('assets/img/development_methodologies_kr.png') }}" alt="" class="crawl-feature-left-img">
                </div>
            </div>


            <hr>

            <div class="row mglr">
                <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 2%;">
                    <h3 class="product-tech-heading" style="padding-top: 2%;">
                        mDO - 매니지드 디벨롭먼트 오버사이트
                    </h3>
                    <!-- <div class="indications">
                        <p class="indications-1"><span class="green-1"></span> Successful</p>
                        <p class="indications-1"><span class="red-1"></span> Failed</p>
                        <p class="indications-1"><span class="blue-1"></span> Challenged</p>
                    </div> -->
                </div>

                <!-- <div class="col-sm-6" style="margin-bottom: 25px;">
                    <img src="{{ asset('assets/img/agile.png') }}" alt="" class="crawl-feature-left-img">
                </div>
                <div class="col-sm-6" style="margin-bottom: 25px;">
                    <img src="{{ asset('assets/img/waterfall.png') }}" alt="" class="crawl-feature-left-img">
                </div> -->
                
                <div class="col-sm-12" style="margin-bottom: 25px;">
                    <img src="{{ asset('assets/img/mDO_Managed_Development_Oversight_kr.png') }}" alt="" class="crawl-feature-left-img">
                </div>
                
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: 5%">
        <div class="row mglr">

            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 2%;">
                <h3 class="product-tech-heading" style="padding-top: 8%;">
                    소프트웨어 테스팅 툴
                </h3>
            </div>
            <div class="row mglr">
                <div class="col-sm-8 crawl-feature-left">
                    <img src="{{ asset('assets/img/test-tools_kr.png') }}" alt="" class="crawl-feature-left-img">
                </div>
                <div class="col-sm-4 crawl-feature-right">
                   <!-- <h3 class="method-heading">Software Testing Tools</h3> -->
                   <p class="method-pera">애플리케이션 테스트 툴을 사용하면 대기업의 애플리케이션 개발 효율성을 높일 수 있습니다. 여기에 언급된 툴이 포함되어 있지만, 테스트 사례에 국한되지는 않습니다. 테스트 툴은 애플리케이션 다양성 및 고객의 선호도에 따라 선택할 수 있습니다.</p> 
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
