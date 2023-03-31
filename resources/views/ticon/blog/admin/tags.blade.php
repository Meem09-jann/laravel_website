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

            <div class="tagInfo">
                <div class="main-row1"  id="blog" style="padding: 20px;">
                    <div class="form-group" >
                        <h4 style="color: #6c6c6c;">Tag List </h4> 
                    </div>
                
                    <table class="table_blog">
                        <thead style="background: #24b6e7; color: white;">
                            <tr>
                                <th width="10%"scope="col">Id</th>                                  
                                <th width="20%" scope="col">Tag Name</th>
                                <th width="20%" scope="col">Edit</th>
                                <th width="20%" scope="col">Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td  height="50px" > {{$tag->id}}</td>
                            <td> {{$tag->tagName}}</td>   
                            <td><button id="delete_{{$tag->id}}" class="dltTag btn btn-danger" style="margin-right:0px;margin-left:0px;"><i class="fa fa-times" aria-hidden="true" onclick="dltTag({{$tag->id}});"></i></button></td> 
                            <td><button id="edit_{{$tag->id}}" class="editTag btn btn-success" style="margin-right:0px;margin-left:0px;" onclick="editTag({{$tag->id}});"><i class="fa fa-check" aria-hidden="true"></i></button></td>                   
                        </tr>
                        @endforeach
                        </tbody>
                    
                    </table>
                    {{ $tags->links() }}

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
    <script>
        
        function editTag(var id)
        {
            $.confirm({
                title: 'Edit Tag',
                content: '',
                content: '' +
                        '<form  action="{{url('hrm/approveLeaveByManager/')}}" id="edit_tag" method="post" style="width: 90%;" class="formName">' +
                        '<div class="form-group">' +
                        '<label>Add optional comment</label>' +
                        '<input type="hidden" name="Id"  value="'+ id +'" />' +
                        '<input type="text" name="tagName" placeholder="'+name+'" class="name form-control">' +
                        '</div>' +
                        '</form>',
                
                buttons: {
                    
                    deleteUser: {
                        text: 'Approve',
                        btnClass: 'btn-green',
                        action: function () {
                            
                            document.getElementById("edit_tag").submit();
                        }
                    },
                    Cancel: {
                                text: 'Cancel',
                                btnClass: 'btn-red',
                            },
                    
                }

            });
        }
        $(document).on('click', ".editTag", function () {
        var Id = $(this).attr("id").split("_")[1];
        
        $.confirm({
            title: 'Approve Application?',
            content: 'Are you sure to Approve',
            content: '' +
                    '<form  action="" id="leave_comment_apprv" method="post" style="width: 90%;" class="formName">' +
                    '<div class="form-group">' +
                    '<label>Add optional comment</label>' +
                    '<input type="hidden" name="Id"  value="'+ Id +'" />' +
                    '<textarea type="text" name="leave_comment" placeholder="Comment" class="name form-control"></textarea>' +
                    '</div>' +
                    '</form>',
            
            buttons: {
                deleteUser: {
                    text: 'Approve',
                    btnClass: 'btn-green',
                    action: function () {
                        document.getElementById("leave_comment_apprv").submit();
                    }
                },
                Cancel: {
                            text: 'Cancel',
                            btnClass: 'btn-red',
                        },
                
            }

        });
    });
    </script>
    

@endpush