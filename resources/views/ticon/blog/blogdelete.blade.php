@extends('layouts.masterblog')

@push('css')
    <style>
        form{
            background-color: white;
            padding: 30px 80px;
            border-radius: 2px;
        }
        
        .formclass{
            width:50%;
            min-width: fit-content;
            margin: auto;
        }
        #loginbtn{
            width:100%;
            margin: 10 0;
            padding: 10px;
            background-color: #2fc4ee;
            border-color: #2ec2ed;
            font-weight: 600;
            font-size: 15;
        }
        .form-control{
            margin-bottom: 20px;
            border: 1px solid #2cc0ec;
        }
        .form-group{
            margin-bottom: 20px;
        
        }
        label{
            color:#767676;
        }
        input{
            border: 1px solid #56b556c9;
        }
    </style>
@endpush

@section('content')
    <!-- Main Container Start -->
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">
        
            <!-- FLASH MESSAGE-->
                @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 
            

            <div class="formclass">

            @foreach($blogs as  $blog) 
            <form action="{{url('/blogDelete/'.$blog->id)}}" method="post">
                
                <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Delete Blog</h3>
                @csrf     
                
                <div class="form-group">  
                    <input type="hidden" class="form-control" name="cateID" value="{{$blog->id}}" >
                </div>

                <div class="form-group">
                    <!-- <h6 style="color: #939393;font-size: 10px;">Title of the Blog</h6> -->
                    <b>Title:</b>
                    <div  style="padding: 10px;" >
                    {{$blog->title}}
                    </div>
                    <b>Intro:</b>
                    <div style="padding: 10px;" >
                    {{$blog->intro}}
                    </div>
                    <b>State:</b>
                    <div style="padding: 10px;" >
                    {{$blog->state}}
                    </div>
                    <b>Image:</b>
                    <div  style="height: 100%; width: 100%!important; object-fit: cover; border-radius: 15px; padding: 10px" >
                    <img class="lazy loaded" style="    width: 300px;height: auto;" src="{{asset($blog->coverImage)}}" data-src="#" alt="Blog-Cover_Image" data-was-processed="true">
                    </div>
                </div>

                <div class="form-group" style="font-size: 12;">
                    <h6 style="color: #939393;font-size: 10px;">This Blog will delete permanently </h6>
                    <button type="submit" name="dltBtn" id="dltBtn" class="btn btn-danger">Delete</button>
                    <a href="{{url('/blog/admin')}}"  style="font-weight: 700;color: #a1a1a1;font-size: 14 ">Back</a>      
                </div>

            </form>
            @endforeach
            </div>
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush