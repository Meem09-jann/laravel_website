@extends('layouts.masterblog')

@push('css')
    <style>
        .table_blog{
            width: 90%;
            font-size: 13px;
        }
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
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">
            
            <!-- FLASH MESSAGE-->
                @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 

            <div class="CommentsInfo">
                <div class="main-row1"  id="blog" style="padding: 20px;">
                    <div class="form-group">
                        <h4 style="color: #6c6c6c;">Comment List</h4> 
                    </div>

                    <table class="table_blog">
                        <thead style="background: #24b6e7; color: white;">
                            <tr>
                                <th width="5%"scope="col">Id</th>                       
                                <th width="8%"scope="col">Name</th>
                                <th width="8%"scope="col">Email</th>
                                <th width="10%" scope="col">Subject</th>                    
                                <th width="50%" scope="col">Body</th>
                                <th width="10%"scope="col">Website</th>
                                <th width="10%"scope="col">State</th>
                                <th scope="col">Action</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($comments as $cmnt)
                            <tr style="height:100px">
                                <td > {{$cmnt->id}}</td>
                                <td> {{$cmnt->name}}</td>
                                <td> {{$cmnt->email}}</td>
                                <td> {{$cmnt->subject}}</td>
                                <td> {{$cmnt->body}}</td>
                                <td> {{$cmnt->website}}</td>
                                <td> {{$cmnt->state}}</td>
                                <td> <a href="{{ url('/blog/page/'.$cmnt->blog->blogSlug)}}" target="_blank" class="text-white"><div class="btn btn-primary" style="background-color: #26b8e8;border-color: #26b8e8;"> <i class="fa fa-eye" aria-hidden="true"></i></div></a></td>    
                                @if($cmnt->state == "Approve")              
                                    <td><a href="{{url('/blog/admin/comment/delete/'.$cmnt->id)}}"  class="text-white"> <div class="btn btn-danger" style="background-color: #ff2222e8;border-color: #ff2222e8;"  type="submit"><i class="fa fa-trash" style="color: white"aria-hidden="true"></i></div></a></td>
                                @else   
                                    <td><a href="{{url('/blog/admin/comment/state/'.$cmnt->id.'/Approve')}}"  class="text-white"> <div class="btn btn-sucess" style="background-color: #3ed955;border-color: #3ed955;" type="submit"><i class="fa fa-check" style="color: white"aria-hidden="true"></i></div></a></td>                        
                                    <td> <a href="{{url('/blog/admin/comment/delete/'.$cmnt->id)}}"  class="text-white"><div class="btn btn-danger" style="background-color: #ff2222e8;border-color: #ff2222e8;"  type="submit"><i class="fa fa-trash" style="color: white"aria-hidden="true"></i></div></a></td>                                   
                                @endif
                            </tr> 
                        @endforeach
                        </tbody>
                    </table>
                    {{$comments->links()}}
                </div>    
            </div>     
            
        </div>
    </div>
@endsection

@push('js')
@endpush