@include('admin/header')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<table  id="datatable" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">

<style type="text/css">
	table,tr,td{
		text-align: center;
	}


    .dataTables_wrapper {
        position: relative;
        clear: both;
        *zoom: 1;
        zoom: 1;
        margin-top: 5%;
    }
    #datatable_paginate a.paginate_button.previous {
        width: 88px;
    }

    #datatable_paginate a.paginate_button.previous.next {
        width: 56px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button{
        color: #76cbee;
        background-color: #fff;
        border: 1px solid #76cbee;
        border-radius: 5px;
        transition: all .3s !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
        border:1px solid #76cbee !important;
    }
    input[type=search] {
        -webkit-appearance: push-button;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
    .dataTables_wrapper .dataTables_paginate .paginate_button:focus{
        color: #fff !important;
        background-color: #76cbee !important;
        background: #76cbee !important;
        border:1px solid #76cbee !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        color: #fff !important;
        background-color: #76cbee !important;
        background: #76cbee !important;
        border:1px solid #76cbee !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        cursor: default !important;
    }

    .table-bordered>thead {
        background-color: rgb(13, 144, 157);
        
        color: #fff;
        padding: 10px 0px;
    }

    .table>thead>tr>th {
        color: #fff;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
    }

    .table-bordered>tfoot {
        background-color: #F7F7F8;
    }

    .table-bordered>tfoot>tr>th {
        border: none;
        vertical-align: bottom;
    }

    .table-bordered>tfoot>tr {
        border: none;
    }

    .table-bordered {
        border: none;
    }

    .table>tbody>tr>td:first-child {
        border-left: 1px solid #ddd;
    }

    .table>tbody>tr>td:last-child {
        border-right: 1px solid #ddd;
    }

    .table>tbody>tr:last-child>td {
        border-bottom: 1px solid #ddd;
    }

    .card caption {
        padding-top: 14px;
        padding-bottom: 14px;
        padding-left: 15px;
        color: #fff;
        background-color: #004f40;
        font-size: 18px;
        font-weight: 500;
    }


    /* date picker input filed*/

    .form-control[disabled].fch,
    .form-control[readonly].fch,
    .form-control.fch {
        height: 44px;
        background-color: #fff;
        color: rgb(20, 20, 20);
    }

    .ad-on {
        background-color: #004f40;
        color: #fff;
    }

    .btn-success i {
        margin-right: 5px;
    }

    .start,
    .end {
        padding: 1px 15px;
    }
    table.dataTable thead .sorting_asc:after {
        opacity: 0;
    }
    table.dataTable thead .sorting:after{
        opacity: 0;
    }

    table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after{
        opacity: 0;
    }
    .table thead tr th[class*='sorting_']:not([class='sorting_disabled']){
        color: #000;
    }
    @media (max-width: 991px){
        .page-container .page-content-wrapper .content {
            overflow-x: scroll;
            height: auto;
        }
        .page-container .page-content-wrapper{
            padding: 40px 10px !important;
        }
    }
</style>
        <!-- error -->
        @if(Session::has('message'))
        <div class="alert alert-danger " >
        <span class="close" data-dismiss="alert" >×</span>
        <strong style="text-align:center; color: red;">{{Session::get('message')}}</strong>
        </div>
        @endif
        <!-- error -->

        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Occupation</th>
                <th>Institute</th>
                <th>Registration Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Applicant as $data)
            <tr>
                <td > {{ $data->first_name}}{{" "}}{{ $data->last_name}}</td>
                <td > {{ $data->email}}</td>
                <td > {{ $data->phone}}</td>
                <td > {{ $data->occupation}}</td>
                <td > {{ $data->institute_name}}</td>
                <td > {{ $data->created_at}}</td>
                <td > <div class="btn btn-success" style="background-color: #62cb62;border-color: #5ec75e;"> <a href ="#"  class="text-white"><i class="fa fa-eye" ></i></a></div></td>
               
            </tr>
            @endforeach
           
 		</tbody>
    </table>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#datatable').DataTable();
	} );
</script>
@include('admin/footer')