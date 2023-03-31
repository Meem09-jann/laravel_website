<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\UserCV;
use App\Models\Registration;
use App\Models\Portfolio;

class UserController extends Controller
{
    function login(Request $req)
    {
        $req->validate([
            'username'=>'required' ,
            'password'=>'required '
            ]);
        $data = $req->input();
        $username = $req->input('username');
        $password = $req->input('password');
        $checkLogin = DB::table('user')->where(['username'=>$username,'pass'=>$password])->get();

        if(count($checkLogin)  >0)
        {
            $req->session()->put('user',  $checkLogin);
           return redirect()->route('ticon.admin.dashboard');
        }
        else
        {
            return redirect()->route('ticon.admin.signin')->with('incorrect','User Email and Password doesnot match');
        }
    }

    public function dashboard()
	{
        if(!session()->has('user'))
        {
            return redirect('/admin/signin');
        }
        else{

            $pageTitle= "Dashboard";      
            return view ('admin/dashboard',['pageTitle'=>$pageTitle]); 
         }   
    }

    public function applicants()
	{
        if(!session()->has('user'))
        {
            return redirect('/admin/signin');
        }
        else{
            $pageTitle= "Applicants";  
            $ApplicantCV= UserCV::orderBy('id', 'DESC')->get();


            return view ('admin/applicants',['pageTitle'=>$pageTitle,'ApplicantCV'=>$ApplicantCV]); 
         } 
            
    }
    
    function showCv( $id)
    { 
        if(!session()->has('user'))
        {
            return redirect('/admin/signin');
        }else{ 
            $pageTitle= "View CV";  
            $ApplicantCV=UserCV::where('id',$id)->get();
            // dd( $ApplicantCV);
            return view ('admin/view_Cv',['pageTitle'=>$pageTitle,'ApplicantCV'=>$ApplicantCV]); 
          }

    
    }

    function deleteCv( $id)
    { 
        if(!session()->has('user'))
        {
            return redirect('/admin/signin');
        }else{
            $posts=UserCV::find($id);            
            $posts->delete();
            return redirect()->back()->with('message','Item deleted successfully');
          }

    
    }


    public function registrations()
	{
        if(!session()->has('user'))
        {
          return redirect('/admin/signin');
        }
        else{
            $pageTitle= "Applicants";  
            $Applicant=Registration::all();
            return view ('admin/registrations',['pageTitle'=>$pageTitle,'Applicant'=>$Applicant]); 
         } 
            
    }


    public function portfolio()
	{
        if(!session()->has('user'))
        {
          return redirect('/admin/signin');
        }
        else{
        $pageTitle= "Portfolio";     
        $Portfolios=Portfolio::all(); 
        return view ('admin/edit_portfolio',['pageTitle'=>$pageTitle,'Portfolios'=>$Portfolios]);   
        }
    }

    public function logout()
	{
        if(!session()->has('user'))
        {
            return redirect('/admin');
        }
        else{
            session()->pull('user');
            // Session::forget('cart');
            return redirect('/home');
        }     
           
    }
}
