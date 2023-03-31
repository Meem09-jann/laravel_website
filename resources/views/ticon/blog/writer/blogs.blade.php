@extends('layouts.masterblog')
@push('css')
    <style>
        .container-main{
        height: 100vh;
        display:grid;
        grid-template-columns: 1fr 4fr;
        padding-top: 50px;

        }
        .container-nav{
            height: 100%; 
            min-height: 100%;
            background-color: #028ad6;
        } 
            
        .sidebar-menu{
            position: fixed;
            padding-top: 50px;
        }
        .menu-items{
            margin: 20px;
            font-size: initial;
            color: white;
            font-weight: 600;

        }
        .menu-items> li{
            padding: 15px 5px;
        }
        @media (max-width:767.98px){
            .container-main{
                display:grid;
                grid-template-columns: 1fr;
                padding-top: 50px;
            }
            .container-nav{
                display:none;
            }

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
            
                
            <div class="BlogInfo">
          
                <div class="main-row1"  id="blog" style="padding: 20px;">

                    <div class="form-group">
                        <h4 style="color: #6c6c6c;">Blog List </h4> 
                    </div>
                    <table class="table">
                        <thead style="background: #24b6e7; color: white;">
                        <tr>
                        
                            <th scope="col">Blog Title</th>                          
                            <th scope="col">Date</th>
                            <th scope="col">Tags</th>
                            <th scope="col">View</th>
                            <th scope="col">State</th>
                            <th scope="col">Action</th>
                        
                        </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($sessionWriterblogs as $blog)
                            
                            <tr>
                                <td > {{$blog->title}}</td>
                                <td > {{ date('F j, Y', strtotime($blog->date) ); }}</td>
                                <td > {{ $blog->tags ->pluck('tagName')->implode(', ') }}</td>
                                <td><a href="{{ url('/blog/page/'.$blog->blogSlug)}}" target="_blank" class="text-white"> <div class="btn btn-primary" style="background-color: #26b8e8;border-color: #26b8e8;"> <i class="fa fa-eye" aria-hidden="true"></i></div></a></td>
                               
                                @if($blog->state == "Approve")
                                    <td> <div class="btn btn-sucess" style="background-color: #3ed955;border-color: #3ed955;" type="submit"><i class="fa fa-check" style="color: white"aria-hidden="true"></i></div></td>
                                @elseif($blog->state == "Decline")
                                    <td> <div class="btn btn-danger" style="background-color: #ff2222e8;border-color: #ff2222e8;"  type="submit"><i class="fa fa-ban" style="color: white"aria-hidden="true"></i></div></td>
                                @else
                                    <td> <div class="btn btn-warning" style="background-color: #ff9800;border-color: #ff9800;" type="submit"><i class="fa fa-eye-slash" style="color: white"aria-hidden="true"></i></div></td>
                                @endif
                                @if($blog->state == "Pending")
                                <td><a href="{{url('/blog/writer/update/'.$blog->id)}}" class="text-white"> <div class="btn btn-primary" style="background-color: #26b8e8;border-color: #26b8e8;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div></a></td>
                                @endif
                            </tr>
                          
                            @endforeach
                        </tbody>
                    </table>
                   

                </div>  
            </div>
                         
            
            </div>
        </div>     
    <!-- End Page Content -->
@endsection

@push('js')
@endpush
    