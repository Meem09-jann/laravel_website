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

            <div class="WritersInfo">
                <div class="main-row1"  id="blog" style="padding: 20px;">
                    
                    <div class="form-group" style=""> 
                        <h4 style="color: #6c6c6c; ">Add new Writer <button name="addwriter" class="btn-success btn" style=" padding: 4px 8px;"> <a href="{{url('/blog/admin/writer/create')}}">Add Writer</a></button></h4> 
                    </div>

                    <div class="form-group" >
                        <h4 style="color: #6c6c6c;">Writers List </h4> 
                    </div>
                
                    <table class="table_blog">
                        <thead style="background: #24b6e7; color: white;">
                            <tr>
                                <th width="10%"scope="col">Id</th>                                  
                                <th width="20%" scope="col">First Name</th>
                                <th width="20%" scope="col">Last Name</th>
                                <th width="30%" scope="col">Email</th>
                                <th width="10%" scope="col">Writer Type</th>
                                <th width="30%" scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($writers as $writer)
                        <tr>
                            <td  height="50px" > {{$writer->id}}</td>
                            <td > {{$writer->firstName}}</td>
                            <td > {{$writer->lastName}}</td>
                            <td > {{$writer->email}}</td>
                            <td > {{$writer->user_type}}</td>   
                            @if($writer->user_type == "active")
                            <td ><a href="{{url('/blog/admin/writer/state/'.$writer->id.'/inactive')}}"  class="text-white"> 
                                <div class="btn btn-danger" style="background-color: #ff9800;border-color: #ff9800;"  type="submit">
                                <i class="fa fa-ban" style="color: white"aria-hidden="true"></i>
                                </div>
                                </a>                                       
                            </td>
                            @else   
                            <td ><a href="{{url('/blog/admin/writer/state/'.$writer->id.'/active')}}"  class="text-white"> 
                                <div class="btn btn-sucess" style="background-color: #3ed955;border-color: #3ed955;" type="submit">
                                <i class="fa fa-check" style="color: white"aria-hidden="true"></i>
                                </div></a>
                            </td> 
                            @endif                          
                        </tr>
                        @endforeach
                        </tbody>
                    
                    </table>
                    {{ $writers->links() }}

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush