<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        
        .blog-filter-container{
            position: relative;
            display: grid;
            grid-template-columns: 3fr 1fr; 
            justify-content: center;
            text-align: center;
            grid-gap: 20px; 
            margin: 50px 10px;  
        }

        .blog-filter-container > div{
            position: relative;
            background-color:#ffffff;
        }
        
        .main-row1-img{
            background: #f1f1f1;
            margin-bottom: 20px;
            line-height: 0;
            overflow: hidden;
            position: relative;
            width: 100%;
            border-radius: 10px;
        }

        .main-row1-img img{
            width: 100%!important;
            object-fit: cover;
            object-position: top center; 
        } 
        .blog-post-title{
            float: none;
            display: block;
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
            padding: 7px 10px;
            margin: 10px 6px;
            font-size: 13;
        }

        .blog-post-cat a:nth-child(odd){
            background: #a7ffe385;
            color: #2db98c;
            border-radius: 3.5px;
        }

        /* CATEGORY FILTER SIDEBAR */
        .blog-filter{
            display:grid;
            grid-template-columns: 1fr;  
            flex-wrap: wrap;
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

        .blog-row{
            display: grid;
        }

        @media screen and (max-width: 1100px) {
            .blog-row{
                display :grid;
                grid-template-columns: 1fr;          
            }
        }

        .blog_writer_date_share{ 
            display: grid;
            grid-template-columns: 3fr 2fr;
            align-items: center;
            padding: 15 0;
            border-bottom: 1px solid #c3c3c387;
        }
        .share_blog > div{  
            padding: 0 10px;
        }

        @media screen and (max-width: 1100px) {
            .blog_writer_date_share{ 
                display: grid;
                grid-template-columns: 1fr;    
            
            }
            .share_blog{
                margin:auto;
            }
            .blog_writer_date{
                margin:auto;
            }
            .share_blog > div{                                 
                padding: 0 10px;
            }
        }

        .blog-post-Intro{
            width: 100%;
            text-align: left;
            font-size: 14;
            padding-top:60px;
            
        }
        .blog-post-details{
            width: 100%;
            text-align: left;
            font-size: 14;
            padding: 60 0;
            border-bottom: 1px  solid #c3c3c387;
        }

        .blog-post-details> p {
            color: #7a7a7a
            line-height: 2;
        }
        
        .blog-post-details img{
            max-width: 100%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;                                                                         
        }
        .blog-post-details a{
            color: #009fdb;
            font-weight: 600;
        }
        
        .blog-post-details li{
            padding: 5px;
        }

        .main-row-comment-show{
            width: 100%;
            margin: auto;
            padding: 25px 0;
        }

        .comments ui{
            width: 70%;
            /* min-height: 130px; */
            border-radius: 10px;
            
            margin: 10px auto; 
            background-color: #ffffff;
            border: 1px solid #37cef273 !important;

            /* background-color: #D9F3FF; */

        }
        .blog-comments-detail{
        
            display:flex;
            /* grid-template-columns: 1fr 6fr;                            */
            padding:10px 0;
        }

        .comments li{
            border-bottom: 1px solid #c3c3c387;                    
            margin: 10px auto;
            text-align: left; 
            overflow-wrap: anywhere;
            PADDING: 0 10PX;
        }
        .blog-comments-li> div{
            padding: 5PX 0;
            font-size: 12px;
            color: #6c6c6c;
        }
        .comment-write{
            padding: 20px 0;
            margin: auto;
        }
        
        .comment-box{
            display: flex;
            flex-direction: column;
        
            border-radius: 10px;
            padding: 20px 0px;
            margin: auto;
        }
        .comment-box> div{
            padding: 10px 0;
            text-align: center;
        }
        .comment-input{
            width: -webkit-fill-available;
            height: auto;
            vertical-align: middle;
            margin: 5px;
            padding: 15px;
            border-width: 1px;
            border-style: solid;
            border-color: #c3c3c3;
            border-radius: 5px;
        }

        .comment-full-name-email{
            width: 100%;                                        
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            justify-content: space-between;
        }

        .comment-input-name{
            width: -webkit-fill-available;
            height: auto;
            vertical-align: middle;
            margin: 5px;
            padding: 15px;
            border-width: 1px;
            border-style: solid;
            border-color: #c3c3c3;
            border-radius: 5px;
        }
        .submit{   
            color: #ffffff;
            border-color: #009fdb;
            background-color: #009fdb;
            padding: 10px 15px;
            border-radius: 5px;
            line-height: 1.85714285714286;
            border: 0;
        }
        @media screen and (max-width: 700px) {
            .comment-full-name-email{
            
            display :grid;
            grid-template-columns: 1fr;          
            }
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
        <div class="container">
            <div class="Contact-Section wrapper ispage aboutsec1">
                <div class="blog-row">
                    <!--BLOG CONTAINT START-->            
                    <div class="blog-filter-container" >
                        <div class="main-warp">
                            <!-- BLOG APPROVE MSG SHOW -->
                            @if ( $blog->state != "Approve")
                            <div class="alert-dismissable" style="padding: 0;">
                                <ul>
                                <div class="alert alert-danger alert-dismissable">  
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>    
                                    <li>Not Approved by Admin</li>
                                </div>
                                </ul>
                            </div>
                            @endif

                            <!-- BLOG IMAGE DIV  -->  
                                <div class="blog-cover-image" style="padding: 0;">
                                    <div class="main-row1-img">
                                        <img class="lazy loaded" src="{{asset($blog->coverImage)}}" data-was-processed="true" style="border-radius: 10px">                               
                                    </div>
                                    
                                </div>
                            <!-- BLOG IMAGE DIV END -->  

                            <!-- BLOG CATEGORY DIV  -->   
                                <div class="blog-post-cat" >
                                    <div class="tag">
                                        @foreach($blog->categories as $category)
                                            <a href="{{url('/blog/category/'.$category->categorySlug)}}"> {{ $category->categoryName }}</a>             
                                        @endforeach 
                                    </div>            
                                </div>
                                    
                            <!-- BLOG CATEGORY DIV END --> 

                            <!-- BLOG TITLE DIV  -->                        
                                <div class="blog-post-title">
                                    <p style="padding: 15px 0;  font-size:30px;"> 
                                        <b> {{$blog->title}} </b>
                                    </p>
                                </div>
                            <!-- BLOG TITLE DIV END -->    
                        
                            <!-- BLOG WRITER/DATE DIV  --> 
                                <div class="blog_writer_date_share">
                                    <div class="blog_writer_date" style="display:flex; flex-wrap: wrap;">
                                        <div class="writer" style="display: flex;  align-items: center;     margin-right: 10px;">
                                            <div class="blog-comments-detail-image" style="margin-left: 0;">
                                                <img  style="  border-radius: 50%;height:40px;  width:40px" class="lazy loaded" src="https://media.istockphoto.com/vectors/man-in-the-shirt-and-tie-businessman-avatar-or-male-face-icon-vector-vector-id1173599830?k=20&m=1173599830&s=170667a&w=0&h=f-xN6U2zWwcLcQw68Y5OLqL4VvStOp-8PFLE9TTHmqA=" alt="writer" data-was-processed="true">
                                            </div>
                                            <div>      
                                                <a style=" font-size: 15px; font-weight: 600px;color: #666666;padding: 0 5px;" href="{{url('/blog/writers/'.$blog->writer->id)}}">{{ $blog->writer->firstName }}{{" "}}{{ $blog->writer->lastName }}</a> <br>                           
                                            </div>  
                                        </div>

                                        <div class="date" style="   margin-right: 10px; align-self: center;">
                                            <span class="time" style="color: #7a7a7a;"> {{ date('F j, Y', strtotime($blog->date) ); }}</span>
                                        </div>

                                        <div class="tags" style="   margin-right: 10px; align-self: center;color: #7a7a7a;">
                                            
                                            <i class="fa fa-tags" style="color: #7a7a7a;font-size:15; padding: 0 5;" aria-hidden="true"></i>                           
                                            @foreach($blog->tags as $tag)
                                            {{ $loop->first ? '' : ', ' }}
                                            <a href="{{url('/blog/tag/'.$tag->tagSlug)}}"><span class="nice">{{$tag->tagName}}</span></a>
                                            @endforeach
                                        </div>

                                        <div class="comment"  style="   margin-right: 10px; align-self: center;">
                                            @php 
                                            $cmnt=0;  
                                            @endphp
                                            
                                            @foreach($blog->comments as $comment)
                                            @if($comment->state =="Approve")
                                            @php 
                                            $cmnt++;  
                                            @endphp
                                            @endif
                                            @endforeach 
                                            <a href="#all-comments"><i class="fa fa-commenting-o" style="color: #7a7a7a;font-size: 20; padding: 0 5;" aria-hidden="true"></i>                           
                                            <span class="time" style="color: #7a7a7a;">@php  echo $cmnt;  @endphp </span> 
                                            </a>
                                
                                        </div>
                                    </div>

                                    <div class="share_blog" style="display:flex; color: #8b8b8b;justify-content: flex-end;">
                                        @php
                                        $slug= $blog->blogSlug;
                                        $baseUrl="https://ticonsys.com/blog/";
                                        $title=$blog->title;
                                        $tag=$blog->tag;
                                        @endphp

                                        <span style="color: #7a7a7a;margin: auto 10;"> Share Blog on</span>
                                        <div class="share">
                                            <!-- FACEBOOK -->
                                            <a target="_blank" href="http://facebook.com/share.php?u={{ $baseUrl.$slug }}">
                                                <i class="fa fa-facebook" style="margin-top: 5px"></i>
                                            </a>
                                        </div>

                                        <div class="share">
                                            <!-- TWITTER -->
                                            <a target="_blank" href="http://twitter.com/share?text={{ $title}}>&url={{ $baseUrl.$slug }} $hashtags={{ $tag }}" >
                                                <i class="fa fa-twitter"  style="margin-top: 5px"></i>
                                            </a>
                                        </div>

                                        <div class="share">
                                            <!-- LINKED IN -->
                                            <a target="_blank" href="http://linkedin.com/shareArticle?mini=true&url={{ $baseUrl.$slug }}" >
                                                <i class="fa fa-linkedin"  style="margin-top: 5px"></i> 
                                            </a>
                                        </div>

                                        <div class="share">
                                            <!-- PINTEREST -->
                                            <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{ $baseUrl.$slug }}" >
                                                <i class="fa fa-pinterest"  style="margin-top: 5px"></i>
                                            </a>
                                        </div>    
                                    </div>
                                
                                </div>
                            <!-- BLOG WRITER/DATE DIV END-->                 
                        
                            <!--BLOG DETAILS START-->
                                <div class="blog-post-Intro" style="font-style: italic; color: #7A7A7A;" >
                                    <p> {{$blog->intro}}  </p>
                                </div>
                                
                                <div class="blog-post-details" >
                                    {!! $blog->details !!} 
                                </div>
                            <!--BLOG DETAILS END-->                  

                            <!--BLOG SHOW-COMMENT START-->
                                <div class="main-row-comment-show"  id="all-comments">
                                    <div class="comments">     
                                        <div  style="text-align: initial; font-size: 18px;"> <b>Comments</b>  
                                            <ul>@foreach($blog->comments as $comment)
                                                @if($comment->state =="Approve")
                                                <li class="blog-comments-li" style=""> 
                                                    <div class="blog-comments-detail" >
                                                        <div class="blog-comments-detail-image" style="  margin:auto 0;">
                                                            <img  style="  border-radius: 50%;height:40px;  width:40px" class="lazy loaded" src="https://secure.gravatar.com/avatar/5354fee8394cb70b6026b3597fbabeb1?s=300&amp;d=mm&amp;r=g" data-src="https://secure.gravatar.com/avatar/5354fee8394cb70b6026b3597fbabeb1?s=300&amp;d=mm&amp;r=g" alt="{{ $comment->name}}" data-was-processed="true">
                                                        </div>
                                                        
                                                        <div class="blog-comments-detail-title" style=" padding: 0 20px">
                                                            <div><a href="#" style="font-size: 15px;font-weight: 600px;color: #666666;">{{ $comment->name}}</a></div>
                                                            <div style="font-size: 12px;color: #6c6c6c"> {{ date('F j, Y', strtotime($comment->date) ); }}</div>   
                                                        </div>   
                                                    </div>

                                                    <div> {{ $comment->subject }} </div>

                                                    <div> {{ $comment->body}}</div>

                                                    <div> {{ $comment->website}}</div>

                                                    <div style="font-size:14px; color: #119cdc; text-align: right;"> <b> </b> </div>
                                                </li>  
                                                @endif
                                                @endforeach                                  
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <!--BLOG SHOW-COMMENT END--> 

                            <!--BLOG WRITE COMMENT START-->
                                <div class="comment-write">
                                    <form action="{{url('/blog/comment/'.$blog->id)}}" method="get">
                                        <div class="comment-box" id="replay">
                                            <div  style="text-align: initial; font-size: 18px;"> <b>Leave a Comment</b></div>
                                            <p style="text-align: left;color: #7a7a7a;">Your email address will not be published.</p>

                                            @csrf
                                            <div class="comment-msg">
                                                <textarea name="commentMsg" class="comment-input" placeholder="Write your comment here..." cols="45" rows="8" aria-required="true" required=""></textarea>
                                            </div>

                                            <div class="comment-subject">
                                                <input name="commentSubject" class="comment-input" placeholder="Subject" type="text" value="" aria-required="true">
                                            </div>

                                            <div class="comment-full-name-email">
                                                <div class="comment-name" >
                                                    <input  class="comment-input-name" name="commentUserName" placeholder="Your full name" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="comment-email">
                                                    <input class="comment-input-name" name="commentUserEmail"  placeholder="Your email" type="email"  required="" aria-required="true">
                                                </div>
                                                <div class="comment-website">
                                                    <input class="comment-input-name" name="commentWebsite"  placeholder="Website" type="text"  aria-required="true">
                                                </div>
                                            </div>

                                            <div class="comment-submit" style="text-align:left; margin:5px" ><input name="submitCmnt" type="submit" id="submit" class="submit" value="Post comment" style="border-radius: 50px;"></div>
                                        </div> 
                                    </form>
                                </div> 
                            <!--BLOG WRITE COMMENT END-->   
                                            
                        </div>

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
                    <!--BLOG CONTAINT END-->  
                </div>
            </div>
        </div>

    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
