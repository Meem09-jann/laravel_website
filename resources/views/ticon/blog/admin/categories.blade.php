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
            
            <div class="main-row1"  id="blog" style="padding: 20px;">
                <form action="{{url('/categoryAdd')}}" method="post" >
                    @csrf
                    <div class="form-group" style="">
                        <h4 style="color: #6c6c6c;">Add new Category</h4>
                    <div style="display: flex;">
                        <input type="text" class="form-control" name="categoryName" style="width:50%;" placeholder="Enter new category name">

                        <button name="addCategory" class="btn-success btn" style="margin: 0 50;">Add Category</button>
                    </div>
                    </div>
                </form>

                <div class="form-group">
                    <h4 style="color: #6c6c6c;">Category List </h4> 
                </div>

                <table class="table_blog">
                    <thead style="background: #24b6e7; color: white;">
                        <tr>
                            <th width="10%"scope="col">Id</th>
                            <th width="30%" scope="col">Name</th>
                            <th width="30%" scope="col">Slug</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $categogy)
                        <tr>
                        <form action="action.php" method="post" >
                            <td height="50px" > {{$categogy->id}}</td>
                            <td > {{$categogy->categoryName}}</td>
                            <td > {{$categogy->categorySlug}}</td>
                            <td ><a href="{{url('/blog/admin/category/edit/'.$categogy->id)}}"  class="text-white"> <div class="btn btn-success" style="background-color: #62cb62;border-color: #5ec75e;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></div></a></td>
                            <td > <a href="{{url('/blog/admin/category/delete/'.$categogy->id)}}"  class="text-white"><div class="btn btn-danger" style="background-color: #ff2222e8;border-color: #ff2222e8;"> <i class="fa fa-trash" aria-hidden="true"></i></div></a></td>
                        </form>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{$categories->links()}}

            </div>
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush