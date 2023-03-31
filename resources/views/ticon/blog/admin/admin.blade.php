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
<!-- Begin Page Content -->
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">
            
            <!-- FLASH MESSAGE-->
               @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 
            
            <div class="AdminInfo">
                <div class="main-row" id="dashboard">
                    <div  class="logout" style="padding: 20px;">
                        <div><h3>Admin {{Auth::guard('admin')->user()->name}} </h3>
                        {{Auth::guard('admin')->user()->email}}</div>       
                    </div>
                </div> 
            </div>

            <div class="main-row1"  id="blog" style="padding: 20px;">
                
                <div class="form-group">
                    <h4 style="color: #6c6c6c;">Blog List </h4> 
                </div>

                <nav class="navbar navbar-light bg-light" style="padding-top:0px">
                <form class="form-inline" action="{{ url('/blog/admin/search')}}" method="get" style="width: 90%;text-align: end;">
                    <input class="form-control mr-sm-2" type="search"  name="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                </nav>


                <table class="table_blog" id="blogTable">
                <thead style="background: #24b6e7; color: white;">
                    <tr>
                        <th width="10%"scope="col">Id</th>
                        <th width="50%" scope="col">Title</th>
                        <th width="20%" scope="col">Date</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td height="60px"  > {{$blog->id}}</td>
                    <td> {{$blog->title}}</td>
                    <td>  {{date('F j, Y', strtotime($blog->date) )}}</td>
                    <td><a href="{{ url('/blog/page/'.$blog->blogSlug)}}" target="_blank" class="text-white"> <div class="btn btn-primary" style="background-color: #26b8e8;border-color: #26b8e8;"> <i class="fa fa-eye" aria-hidden="true"></i></div></a></td>
                    
                            
                            
                    @if($blog->state == "Pending")
                    <td ><a href="{{url('/blog/admin/change/state/'.$blog->id.'/Approve')}}"  class="text-white"> <div class="btn btn-sucess" style="background-color: #3ed955;border-color: #3ed955;" type="submit"><i class="fa fa-check" style="color: white"aria-hidden="true"></i></div></a></td>
                    
                    <td ><a href="{{url('/blog/admin/change/state/'.$blog->id.'/Decline')}}"  class="text-white"> <div class="btn btn-danger" style="background-color: #ff9800;border-color: #ff9800;"  type="submit"><i class="fa fa-ban" style="color: white"aria-hidden="true"></i></div></a></td>
                    @else
                        @if($blog->state == "Approve")                             
                        <td ><a href="{{url('/blog/admin/change/state/'.$blog->id.'/Decline')}}"  class="text-white"> <div class="btn btn-danger" style="background-color: #ff9800;border-color: #ff9800;"  type="submit"><i class="fa fa-ban" style="color: white"aria-hidden="true"></i></div></a></td>
                        @else
                        <td ><a href="{{url('/blog/admin/change/state/'.$blog->id.'/Approve')}}"  class="text-white"> <div class="btn btn-sucess" style="background-color: #3ed955;border-color: #3ed955;" type="submit"><i class="fa fa-check" style="color: white"aria-hidden="true"></i></div></a></td>
                        <td ><a href="{{url('/blog/admin/delete/'.$blog->id)}}"  class="text-white"> <div class="btn btn-danger" style="background-color: #ff2222e8;border-color: #ff2222e8;"> <i class="fa fa-trash" aria-hidden="true"></i></div></a></td>
                        @endif
                    @endif
                </tr>
                @endforeach
                </tbody>

                </table>
                {{$blogs->links()}}

            </div> 
        </div>
    </div>
<!-- End Page Content -->
@endsection

@push('js')
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
        var bloglist;
        
        //WHEN THE DOCUMENT IS READY, LOAD DATA-TABLE
        $(document).ready(function () {
            
            bloglist = $('#blogTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'print'
            ]  
        });
        });
    </script>

@endpush