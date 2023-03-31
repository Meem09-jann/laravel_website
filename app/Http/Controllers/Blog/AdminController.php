<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Constants\Ticon;

use App\Models\Blog\Blog;
use App\Models\Blog\Writer;
use App\Models\Blog\Category;
use App\Models\Blog\Comment;
use App\Models\Blog\Admin;
use App\Models\Blog\Tag;
use Session;
class AdminController extends Controller
{


        //GENERATE HEADER ATTRIBUTE
        function headerAttributeGenerate($header){
            $data=new Ticon();
            //EXTRACT VISITORS IP
            $visitorsIp =$data->getVisitorsIp();
            //FETCH VISITOR'S COUNTRY USING IP
            $visitorsCountry = $data->ip_info( $visitorsIp , "countrycode" );
            //SEND POP ORDER BASED ON COUNTRY
            if($visitorsCountry == "Bangladesh" )
            {
                $data->showAwsBanner = 1;
            }
            else
            {
                $data->showAwsBanner = 0;
            }
            $data->alert= 'abc';
            $data->cls_header = $header;
            $data->user_lan=$data->prefer_language();
            return $data;
        }


        //ADMIN DASHBOARD
        function dashboard(Request $req)
        {
            //GET HEADER ATTRIBUTE
            $data= $this->headerAttributeGenerate("small_header");
            $identity="Admin";
            $blogs= Blog::orderBy('id', 'DESC')->paginate(8);

            return view('ticon/blog/admin/admin',['identity'=>$identity,'blogs'=>$blogs, 'data'=>$data]);
        }


        //ADMIN BLOGS PAGE
        function blogs(Request $req)
        {
            //GET HEADER ATTRIBUTE
            $data= $this->headerAttributeGenerate("small_header");
            $identity="Blog";

            $blogs= Blog::orderBy('id', 'DESC')->paginate(8);
            return view('ticon/blog/admin/blogs',['identity'=>$identity,'blogs'=>$blogs, 'data'=>$data]);
        }



        //WRITERS TABLE
        function writers(Request $req)
        {
          //GET HEADER ATTRIBUTE
          $data= $this->headerAttributeGenerate("small_header");
          $identity="Writers";

          $writers= Writer::orderBy('id', 'DESC')->paginate(8);
          return view('ticon/blog/admin/writers',['identity'=>$identity,'writers'=>$writers, 'data'=>$data]);
        }



        //COMMENTS TABLE
        function comments(Request $req)
        {

          //GET HEADER ATTRIBUTE
          $data= $this->headerAttributeGenerate("small_header");
          $identity="Comments";

          
          $comments= Comment::orderBy('id', 'DESC')->paginate(8);
          //$cmntlinks= BlogCmntLink::join('comments','blog_comment.cmntId','=','comments.id')->select('comments.*','blog_comment.blogId')->orderBy('id', 'DESC')->paginate(8);

          return view('ticon/blog/admin/comments',['identity'=>$identity,'comments'=>$comments, 'data'=>$data]);
        }



        //CATEGORY TABLE
        function categories(Request $req)
        {
            //GET HEADER ATTRIBUTE
            $data= $this->headerAttributeGenerate("small_header");
            $identity="Categories";

            $categories= Category::orderBy('id', 'DESC')->paginate(8);
            return view('ticon/blog/admin/categories',['identity'=>$identity,'categories'=>$categories, 'data'=>$data]);
        }


        //TAGS TABLE
        function tags(Request $req)
        {
            //GET HEADER ATTRIBUTE
            $data= $this->headerAttributeGenerate("small_header");
            $identity="Tags";

            $tags= Tag::orderBy('id', 'DESC')->paginate(8);
            return view('ticon/blog/admin/tags',['identity'=>$identity,'tags'=>$tags, 'data'=>$data]);
        }



        function adminLoginPageShow(Request $req)
        {
            //GET HEADER ATTRIBUTE
            $data= $this->headerAttributeGenerate("small_header");     
            $identity="Admin Login";
            return view('ticon/blog/admin/adminlogin',['identity'=>$identity,'data'=>$data]);//page url
        }



        // LOGIN WITH AUTH USING ADMIN GUARD
        function adminAuthenticateLogin(Request $request)
        {
          $credentials = $request->validate([
              'email' => ['required', 'email'],
              'password' => ['required'],
          ]);

            if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
            {
              Auth::guard('writer')->logout();
              $request->session()->regenerate();
              return redirect()->intended('/blog/admin/dashboard');
            }
            session()->flash('dltmessage','The provided credentials do not match our records!');
            return back();
        }


        // ADMIN LOGOUT
        function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/blog');
        }

}
