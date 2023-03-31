<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Blog\Blog;

use App\Models\Blog\Writer;
use App\Models\Blog\Category;
use App\Models\Blog\Comment;
use App\Models\Blog\Admin;

use App\Constants\Ticon;
use Session;

class WriterController extends Controller
{
//GENERATE HEADER ATTRIBUTE
public function headerAttributeGenerate($header)
{
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
//WRITER ADD PAGE SHOW
function writerAddPageShow(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");      
    $identity="Wtiter Add";
    return view('ticon/blog/writer/writeradd',['identity'=>$identity,'data'=>$data]);//page url
}

//WRITER ADD BY ADMIN
function addNewWriter(Request $req)
{
    $req->validate([
    'firstName'=>'required',
    'lastName'=>'required',
    'email'=>'required |email|unique:writers,email',
    'password'=>'required |min:6',
    ]);

    //DATA GENERATING FOR NEW WRITER
    $data= new Writer;
    $data->firstName=ucfirst($req->firstName); 
    $data->lastName=ucfirst($req->lastName);
    $data->email=$req->email;
    $data->password= Hash::make($req->password);
   
    $data->save();

    session()->flash('message','Writer Created successfully');
    return redirect('/blog/admin/writers');//page url
}

//WRITER REGISTRATION PAGE VIEW
function writerRegisterPageShow(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");     
    $identity="Writer Register";
    return view('ticon/blog/writer/register',['identity'=>$identity,'data'=>$data]);//page url
}
//WRITER REGISTRATION //WRITER CREATE
function  writerRegister(Request $req)
{
    $req->validate([
    'firstName'=>'required',
    'lastName'=>'required',
    'email'=>'required |email|unique:writers,email',
    'password'=>'required |min:6',
    ]);

    $data= new Writer;
    $data->firstName=ucfirst($req->firstName); 
    $data->lastName=ucfirst($req->lastName);
    $data->email=$req->email;
    $data->password= Hash::make($req->password);
    $data->save();
    session()->flash('message','Account created successfully! Please login to continue!');
    return redirect('/blog/writer/login');//page url
}

//WRITER DASHBOARD SHOW
function dashboard(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");      
    $identity="Writer";
    return view('ticon/blog/writer/dashboard',['identity'=>$identity,'data'=>$data]);
}

//WRITER BLOG PAGE SHOW
function blogs(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");     
    $identity="Blogs";

    //$blogs= Blog::orderBy('id', 'DESC')->paginate(10);
    $writerId=Auth::guard('writer')->user()->id;
    $sessionWriterblogs= Writer::where('writers.id',$writerId)->first()->blogs;
    //dd($blogs);
    return view('ticon/blog/writer/blogs',['identity'=>$identity,'sessionWriterblogs'=>$sessionWriterblogs, 'data'=>$data]);
}

//WRITER PROFILE UPDATE PAGE SHOW
function profileEditPageShow(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");     
    $identity="Profile Edit";
    return view('ticon/blog/writer/writerupdate',['identity'=>$identity,'data'=>$data]);
}

//WRITER  PROFILE UPDATE
function writerProfileUpdate(Request $req, $writerId)
{
    $req->validate([
    'firstName'=>'required',
    'lastName'=>'required',   
    ]);
    //GENARATING WRITER'S UPDATED DATA
    $data=Writer::find($writerId);
    $data->firstName=ucfirst($req->firstName); 
    $data->lastName=ucfirst($req->lastName);
    $data->dob=$req->dob;
    $data->work=$req->work;
    $data->phone=$req->phone;
    $data->website=$req->website;
    $data->bio=$req->bio;
    $data->update();

    session()->flash('message','Profile updated successfully');
    return redirect('/blog/writer/dashboard');
}

//PASSWORD CHANGE PAGE SHOW
function writerSettingPage(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");      
    $identity="Settings";

    $writer= Auth::guard('writer')->user();
    return view('ticon/blog/writer/settings',['identity'=>$identity,'writer'=>$writer,'data'=>$data]);
}

//PASSWORD CHANGE       
function writerPassChange(Request $req, $writerId)
{
    $req->validate([ 'password'=>'required | min:6', ]);
    $data=Writer::find($writerId);
    $data->password= Hash::make($req->password);
    $data->update();

    session()->flash('message','Password updated successfully');
    return redirect('/blog/writer/dashboard');
}

//WRITER STATE CHANGE BY ADMIN
function writerStateChange(Request $req, $writerId, $state)
{   
    $data=Writer::find($writerId);
    $data->user_type=$state;          
    $data->update();
    session()->flash('message','State changed successfully');
    return redirect('/blog/admin/writers'); 
}


function writerLoginPageShow(Request $req)
{
    //GET HEADER ATTRIBUTE
    $data= $this->headerAttributeGenerate("small_header");     
    $identity="Writer Login";
    return view('ticon/blog/writer/writerlogin',['identity'=>$identity,'data'=>$data]);//page url
}


//WRITER LOGIN WITH AUTH 
function writerAuthenticateLogin(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    //USING WRITER GURD
    if (Auth::guard('writer')->attempt(['email'=>$request->email,'password'=>$request->password])) {
        Auth::guard('admin')->logout();
        $request->session()->regenerate();
        return redirect()->intended('/blog/writer/dashboard');
    }
    session()->flash('dltmessage','The provided credentials do not match our records!');
    return back();
}

//WRITER LOGOUT      
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/blog');
}

}
