<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        .aboutsec1 {
            padding-bottom: 0% !important;
            position: relative;
            /*background-color: #f7f7f7;*/
        }
        
        .innertextleft {
            padding: 3% 0px 10px 0px;
        }
        
        .info_innner {
            margin: 8px 15px;
            background: #fff;
            padding: 10px 0px;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .4);
            display: flex;
        }
        
        .gm-style .place-card-large {
            margin-left: 222px !important;
            padding: 15px 8px 12px 11px;
        }
        
        .map {
            margin-top: 14%;
            overflow: hidden;
            width: 100%;
            /* padding: 10px;*/
            /*box-shadow: 0px 0px 14px 0px rgba(0,0,0,.5);*/
        }
        
        .Contact-Section.wrapper.ispage.aboutsec1 .row {
            margin-left: 0px;
            margin-right: 0px;
        }
        
        .p-style a {
            text-transform:capitalize;
        }
        @media (max-width:767.98px){
            .info_innner{
                display:block;
            }
        }

        .blog-filter-container{
            position: relative;
            /* height: 33013.8px; */
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;  
            justify-content: center;
            text-align: center;
            grid-gap: 20px; 
            margin: 50px 10px;
            grid-auto-rows: minmax(200px, auto);
            
        }

        .blog-filter-container > div{
            position: relative;
            background-color:#ffffff;
        
        }   
        
        .blog-filter-container-preview{
            display: flex;
            flex-direction: column;
            /* border: #dfeafb 1px solid;
            box-shadow: 0 5px 15px 0 rgb(209 223 229); */
            border-radius: 15px;
            justify-content: flex-start;
            /* grid-template-rows: 3fr 2fr 1fr 1fr 3fr 1fr; */
        }
        
        .blog-post-image-bg{                          
            /* margin-bottom: 20px; */
            line-height: 0;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: auto;
            
        }

        .blog-post-image-bg img{
            height: 100%;
            width: 100%!important;
            object-fit: cover;
            border-radius: 15px;
        }  
        .blog-post-title{
            /* margin: 5px 0 0 0!important; */
            line-height: 24px!important;
            font-size: 15px!important;
            font-weight: 600;
            float: none;
            display: block;
            text-align: left;
        }
        .blog-post-date{
            display:flex;
            padding: 15px  0;
            text-align:left;
            font-size: 12px;
        
        }

        .pgafu-post-short-content{
            /* padding: 5px  0; */
            color: #858585;
            font-size: 10px;
            font-weight: 300;
            text-align: left;
        
        }


        .blog-post-cat > .tag{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin: 5 0;                           
        }
        .blog-post-cat a{
            background: #8bcaf782;
            color: #1978a9;
            border-radius: 3.5px;
            padding: 4px 6px;
            margin: 8px 4px;
            font-size: 12;
        }
        .blog-post-cat a:nth-child(odd){
            background: #a7ffe385;
            color: #2db98c;
            border-radius: 3.5px;
        }
        .row-main{
            display: grid;
            grid-template-columns: 3fr 1fr;  
        }
        .blog-filter{
            display:grid;
            grid-template-columns: 1fr;  
            flex-wrap: wrap;
        }
        .blog-filter li.pgafu-active-filtr a {
            background: #525252;
            color: #fff;
        }
        .blog-filter li a {
            text-decoration: none;
            font-size: 15px;
            display: block;
            position: relative;
            cursor: pointer;
            color: rgb(139 139 139);
            padding: 10px 0px;
            line-height: normal;
            margin: auto 0;
        }
        .blog-filter-cat{
            height: 50px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #c3c3c387;
        }
        .count{
            background-color: #e5e5e5; 
            width:30px;  
            text-align: center;   
            height: 25px; 
            border-radius: 50px;
            margin: auto 0;
        }
        .login{
            margin-block: auto;
            display: flex; 
            justify-content: space-between;
        }
        @media screen and (max-width: 975px) {
            .row-main{
                display: grid;
                grid-template-columns: 1fr;          
            }
        }
            @media screen and (max-width: 660px) {
            .blog-filter-container{
                position: relative;  
                display:grid;
                grid-template-columns: 1fr;          
            }
            .blog-post-image-bg{                                     
                width: 100%;
                height: auto;           
            }
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container">

        <div class="Contact-Section wrapper ispage aboutsec1">
            
            <!-- WELCOME ROW START -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="innertextleft">
                        <div>
                        <p class="block-3-service"><span style="color: #0091E3;font-size: 18px;font-weight: 700;margin-right: 10px">___</span></p>
                            <h2 class="block-3-heading" style="margin-bottom: 35px;">Welcome to our <span style="font-weight: 900">Blog</span> <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">&#9679;</span></h2>
                            <p style="font-size: 16px;line-height: 1.41">Here we'll share informative guides, inspirational case studies and latest from the TiCON office.</p>
                        </div>

                        <div class="login" >
                            <div style="margin-block: auto;">
                               <p style="font-size: 16px;line-height: 1.41"> Blogs from writer <b style="">{{ucfirst($selectedWriter->firstName)}}{{" "}}{{ucfirst($selectedWriter->lastName)}}</b>.</p>
                            </div>
                            <div>
                                <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style="color: #9b9898;font-weight: 600; font-size: 12; ">
                                    Start writing blog today! </span>          
                                    <a href="{{ url('/blog/writer/login')}}" style="color: white;"><button class="btn btn-primary" style="color: #fff; font-weight: 600; background-color: #1dace3;border-color: #1dace3;margin: 10px;width: 80px;">Login</button></a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- WELCOME ROW END -->

            <!-- BLOG CONTAINT ROW START -->
            <div class="row-main">   

                <!--BLOG PREVIEW START-->                  
                <div class="blog-filter-container">

                    <!-- COUNT FOR TOTAL APPROVED BLOGS-->
                    @foreach($selectedWriter->blogs as $blog)
                    @if($blog->state == "Approve")
                
                    <div class="blog-filter-container-preview"> 
                        <!-- BLOG IMAGE DIV  -->
                        <div class="blog-post-image-bg" >
                            <a href="{{ url('/blog/'.$blog->blogSlug)}}"> 
                            <img class="lazy loaded" src="{{asset($blog->coverImage)}}" data-src="#" alt="Blog-Cover_Image" data-was-processed="true">
                            </a>
                        </div>
                        <!-- BLOG IMAGE DIV END -->    

                        <!-- BLOG CATEGORY DIV  -->   
                        <div class="blog-post-cat" >               
                            <div class="tag">
                                @foreach($blog->categories as $category)
                                <a href="{{ url('blog/category/'.$category->categorySlug)}}"> {{ $category->categoryName }}</a>        
                                @endforeach 
                            </div>              
                        </div>       
                        <!-- BLOG CATEGORY DIV END -->    

                        <!-- BLOG TITLE DIV  -->                        
                        <div class="blog-post-title">
                            <p><b>{{$blog->title}}</b></p>
                        </div>
                        <!-- BLOG TITLE DIV END -->    
                            
                        <!-- BLOG INTRO DIV  -->   
                        <div class="blog-post-intro" style="text-align: center;overflow-wrap: anywhere;" >
                            <div class="pgafu-post-short-content">{{$blog->intro}}</div> 
                        </div>
                        <!-- BLOG INTRO DIV END -->   

                        <!-- BLOG WRITER/DATE DIV  -->   
                        <div class="blog-post-date-and-writer" style="text-align: left;">
                            <!-- WRITER INFORMATION -->
                            <a href="{{ url('blog/writers/'.$blog->writer->id)}}">
                                <div class="blog-comments-detail-image" style="margin-right: 10px;">
                                    <img  style="  border-radius: 50%;height:40px;  width:40px" class="lazy loaded" src="https://media.istockphoto.com/vectors/man-in-the-shirt-and-tie-businessman-avatar-or-male-face-icon-vector-vector-id1173599830?k=20&m=1173599830&s=170667a&w=0&h=f-xN6U2zWwcLcQw68Y5OLqL4VvStOp-8PFLE9TTHmqA=" alt="writer" data-was-processed="true">
                                </div>
                            </a>
                        
                            <div  style="align-self: self-end;">
                                <b><a style="font-width:500px ;" href="{{ url('blog/writers/'.$blog->writer->id)}}">{{ ucfirst($blog->writer->firstName) }}{{" "}}{{ ucfirst($blog->writer->lastName) }}</a></b>
                                <br>
                                <!-- BLOG DATE -->
                                <span class="time" style="color: #8b8b8b;"> {{ date('F j, Y', strtotime($blog->date) ); }}</span>
                            </div>                        
                        </div>
                        <!-- BLOG WRITER/DATE DIV END -->        
                    </div>
                    @endif
                    @endforeach
                </div>
                <!--BLOG PREVIEW END-->    

                <!--BLOG CATEGORY FILTER START-->
                <div class="blog-filter-wrp" style="margin: 50px 30px;">

                    <h4 style="font-weight: 600;margin-bottom: 15px">Categories</h4>
                    <ul class="blog-filter">         
                        <!-- TOTAL BLOG COUNT SHOW -->
                        <li class="blog-filter-cat" data-filter="blog-filter-cat"><a href="{{ url('/blog')}}">All</a>
                            <div class="count" style=" ">
                                <h6> {{$totalApproveBlogs}}</h6>  
                            </div>
                        </li>
                        
                        <!-- CATEGORY WISE BLOG COUNT SHOW -->
                        @foreach($categories as $category)  
                        <li class="blog-filter-cat" data-filter="blog-filter-cat">
                            <a href="{{ url('blog/category/'.$category->categorySlug)}}">{{$category->categoryName}}</a>
                            <div class="count" style=" ">
                                @php 
                                $totalBlogsInSpecificCategory=0;  
                                @endphp

                                <!-- FEATCING ALL APPROVE BLOGS FOR SPECIFIC CATEGORY -->
                                @foreach($category->blogs as $blog)
                                    @if(($blog->state == "Approve") )
                                    <!-- INCREASING COUNT -->
                                    @php $totalBlogsInSpecificCategory++  @endphp
                                    @endif 
                                @endforeach 

                                <!-- SHOW CATEGORY WISE BLOG COUNT -->
                                <h6>@php  echo $totalBlogsInSpecificCategory;  @endphp </h6>  
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--BLOG CATEGORY FILTER END-->

            </div>
            <!-- BLOG CONTAINT ROW END -->

        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
