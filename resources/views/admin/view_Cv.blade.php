@include('admin/header')
<style type="text/css">
	.user-info{
		color: #666;
		font-size: 17px;
		font-weight: 500;
		text-align: center;
		margin-bottom: 25px;
	}
	.user-info span{
		color: #666;
		font-size: 18px;
		font-weight: 600;
	}
</style>
<div class="row">
	@foreach($ApplicantCV as $cv)
	<div class="col-sm-4"><h2 class="user-info"><span>Name: </span>{{ $cv->name}}</h2></div>
	<div class="col-sm-4"><h2 class="user-info"><span>Email: </span>{{ $cv->email}}</h2></div>
	<div class="col-sm-4"><h2 class="user-info"><span>Post: </span>{{ $cv->post}}</h2></div>
	<div >{{ $CV=$cv->cv_url}}</div>
	@endforeach
</div>

<!-- <iframe width="100%" style="height:80vh;" src=""https://docs.google.com/viewer?url={{asset($CV)}}&embedded=true"></iframe> -->
	<iframe width="100%" style="height:80vh;" src="https://docs.google.com/viewer?url=https://www.ticonsys.com/{{asset($CV)}}&embedded=true"></iframe>
@include('admin/footer')