<!DOCTYPE html>
<html>
  <head>
	<!-- TITLE -->
	<title>Admin : Ticon</title>
	<!-- META -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
		<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
		<!-- ASSET INCLUSIONS -->
    <link href="{{ asset('admin_assets/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/assets/plugins/fontello/css/fontello.css')}}" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="{{ asset('admin_assets/pages/css/themes/light.css')}}" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="{{ asset('admin_assets/assets/css/social.css')}}" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="{{ asset('admin_assets/assets/css/prediction.css')}}" rel="stylesheet" type="text/css" />
	
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script> -->



	<!--     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->




   	</head>
	<style>
		hr.menuBlockSeperator { 
			border: 0;
			margin-right:10px;
			margin-left:10px;
			height: 1px; 
			background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
			background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
		}
	</style>
  	<body class="fixed-header no-header menu-pin">

	    <!-- JQUERY -->
		<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    	<!-- BOOTSTRAP-->
    	<script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<link href="{{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- JQUERY UI -->
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
		<!-- DATA TABLES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>		
		<!-- JS PLUGIN FOR CUSTOM ALERT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <!-- BEGIN SIDE PANEL-->
    	<nav class="page-sidebar" data-pages="sidebar">
      	<!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      	<!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      	<!-- BEGIN SIDEBAR MENU HEADER-->
      		<div class="sidebar-header">
				<a href="#" target="_blank">
					<img src="{{ asset('assets/img/header.png')}}" alt="logo" class="brand" data-src="{{ asset('assets/img/header.png')}}" data-src-retina="{{ asset('assets/img/header.png')}}" width="80" height="80">
				</a>
      		</div>
			<hr style="border-top: 3px double #8c8b8b;">
      		<!-- END SIDEBAR MENU HEADER-->
      		<!-- START SIDEBAR MENU -->
      		<div class="sidebar-menu">
        	<!-- BEGIN SIDEBAR MENU ITEMS-->
	        <ul class="menu-items">
	        	<li class="m-t-30 ">
					<a href="{{url('/admin/dashboard')}}" class="detailed">
					  <span class="title">Present View</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span>
				</li>
	        	<li class=" ">
					<a href="{{ url('/admin/applicants')}}" class="detailed">
					  <span class="title">Applicants</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span>
				</li>
				<li class=" ">
					<a href="{{ url('/admin/registrations')}}" class="detailed">
					  <span class="title">Registrations</span>
					</a>
					<span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span>
				</li>
				<li class="">
					<a href="{{ url('/admin/portfolio')}}"><span class="title">Portfolio</span></a>
	                <span class="icon-thumbnail"><i class="fa fa-pencil-square-o" style="font-size: 23px;"></i></span>
				</li>
				<!-- 			
				<li class="">
					<a href="{{ asset('Admin/dashboard') }}"><span class="title">Footer</span></a>
	                <span class="icon-thumbnail"><i class="fa fa-pencil-square-o" style="font-size: 23px;"></i></span>
				</li> -->
				<li class="">
					<a href="{{ url('/adminsignOut')}}">
					<span class="title">Logout</span>
					
					<span class="icon-thumbnail"><i class="demo-icon icon-logout"></i></span>
					</a>
				</li>
			</ul>
      		<!-- END SIDEBAR MENU -->
    	</nav>
    	<!-- END SIDEBAR -->
    	<!-- END SIDEBPANEL-->
	
    	<!-- START PAGE-CONTAINER -->
    	<div class="page-container " >
			<!-- START HEADER -->
			<div class="header">
				<!-- START MOBILE SIDEBAR TOGGLE -->
				<a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
				</a>
				<!-- END MOBILE SIDEBAR TOGGLE -->
				<div class="container" style="color: #fff;text-align: center;width: 100%;padding-left:250px;">
					<h1>{{ $pageTitle }}</h1>

				</div>
			</div>
			<!-- END HEADER -->
			<!-- START PAGE CONTENT WRAPPER -->
			<div class="page-content-wrapper" style="padding:80px;">
			<div class="content">

