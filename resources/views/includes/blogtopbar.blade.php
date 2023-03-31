<!--navbar Starts Here-->
<nav class="navbar navbar-default navbar-fixed-top" style="z-index: 2000;">

<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/ticon_website/"><img src="http://127.0.0.1:8000/assets/img/header.png" alt="Logo" class="logo"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        @if(Auth::guard('admin')->user())
        <li><a href="{{url('/blog/admin/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('/blog/admin/blogs')}}">Blogs</a></li>
        <li><a href="{{url('/blog/admin/categories')}}">Categories</a></li>
        <li><a href="{{url('/blog/admin/comments')}}">Comments</a></li>
        <li><a href="{{url('/blog/admin/writers')}}">Writers</a></li>
        <li><a href="{{url('/adminlogout')}}"><span class="elementor-icon-list-icon" style="color: #fd3333;"><i class="fa fa-sign-out" aria-hidden="true" ></i></span></a></li>
        @elseif(Auth::guard('writer')->user())
        <li><a href="{{url('/blog/writer/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('/blog/writer/blogs')}}">Blogs</a></li>
        <li><a href="{{url('/blog/writer/blogadd')}}">Add Blogs</a></li>
        <li><a href="{{url('/blog/writer/profile/update')}}">Edit Profile</a></li>
        <li><a href="{{url('/blog/writer/profile/settings')}}">Settings</a></li>
        <li><a href="{{url('/writerlogout')}}"><span class="elementor-icon-list-icon" style="color: #fd3333;"><i class="fa fa-sign-out" aria-hidden="true" ></i></span></a></li>
        @endif
    </ul>
</div>

</nav>
<!--navbar ends here-->