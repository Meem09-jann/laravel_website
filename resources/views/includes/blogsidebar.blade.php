<div class="container-nav" >
    <nav>
        <div class="sidebar-menu" >
        
            <!-- Login Info-->
            <div  class="info" style="padding: 20px;">
                @if(Auth::guard('admin')->user())
                    <span style="color:white"><h4>Admin {{Auth::guard('admin')->user()->name}} </h4></span>
                    <span style="color:white;font-size: 12px;">{{Auth::guard('admin')->user()->email}}</span> 
                    <br>

                    <a href="{{url('/adminlogout')}}">  
                    <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style=" font-weight: 600;color:white">
                    Logout</span> 
                    <span class="elementor-icon-list-icon" style="color: #fd3333;">
                        <i class="fa fa-sign-out" aria-hidden="true" ></i>
                    </span>
                    </a>  
                @elseif(Auth::guard('writer')->user()) 
                    <span style="color:white"><h4>Writer {{Auth::guard('writer')->user()->firstName}} </h4></span>
                    <span style="color:white;font-size: 12px;">{{Auth::guard('writer')->user()->email}}</span>   
                    
                    <br>
                    <a href="{{url('/writerlogout')}}">  
                    <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style=" font-weight: 600;color:white">
                    Logout</span> 
                    <span class="elementor-icon-list-icon" style="color: #fd3333;">
                        <i class="fa fa-sign-out" aria-hidden="true" ></i>
                    </span>
                    </a>   
                @endif               
            </div>
            <!-- Login Info-->

            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                @if(Auth::guard('admin')->user())
                    <li class="m-t-30 " >
                        <a href="{{url('/blog/admin/dashboard')}}" class="detailed">
                        <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('/blog/admin/blogs')}}" class="detailed">
                        <span class="title">Blogs</span>
                        </a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span> -->
                    </li>
                    <li class="">
                        <a href="{{url('/blog/admin/categories')}}" class="detailed">
                            <span class="title">Category</span></a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o" style="font-size: 23px;"></i></span> -->
                    </li>
                    <li class=" ">
                        <a href="{{url('/blog/admin/comments')}}" class="detailed">
                        <span class="title">Comment</span>
                        </a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span> -->
                    </li>
                    <li class="">
                        <a href="{{url('/blog/admin/tags')}}" class="detailed">
                            <span class="title">Tag</span></a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o" style="font-size: 23px;"></i></span> -->
                    </li> 
                    <li class="">
                        <a href="{{url('/blog/admin/writers')}}" class="detailed">
                            <span class="title">Writer</span></a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o" style="font-size: 23px;"></i></span> -->
                    </li> 
                @elseif(Auth::guard('writer')->user()) 
                    <li class="m-t-30 " >
                        <a href="{{url('/blog/writer/dashboard')}}" class="detailed">
                        <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{url('/blog/writer/blogs')}}" class="detailed">
                        <span class="title">Blogs</span>
                        </a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span> -->
                    </li>
                    <li class="">
                        <a href="{{url('/blog/writer/blogadd')}}" class="detailed">
                            <span class="title">Add Blog</span></a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-plus" style="font-size: 23px;"></i></span> -->
                    </li>
                    <li class=" ">
                        <a href="{{url('/blog/writer/profile/update')}}" class="detailed">
                        <span class="title">Edit Profile</span>
                        </a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span> -->
                    </li>
                    <li class="">
                        <a href="{{url('/blog/writer/profile/settings')}}" class="detailed">
                        <span class="title">Settings</span>
                        </a>
                        <!-- <span class="icon-thumbnail"><i class="fa fa-pencil-square-o"></i></span> -->
                    </li>
                @endif
            </ul>
            <!-- END SIDEBAR MENU ITEMS-->
        </div>   
    </nav>
</div>