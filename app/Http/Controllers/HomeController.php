<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Authenticatable;

use App\Constants\Ticon;
use App\Models\Home;
use App\Models\User;
use App\Models\Siteuser;
use Session;
use Mail;

class HomeController extends Controller
{


    //GENERATE HEADER ATTRIBUTE
    public function headerAttributeGenerate($header){
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

    //TICON LANGUAGE CHANGE TO KOREAN
    public function languageKr()
    {

        $data=new Ticon();
        
        $lanSession=$data->changeLanguage('kr');
      

      return redirect()->back();
    
    }

    //TICON LANGUAGE CHANGE TO ENGLISH
    public function languageEn()
    {

        $data=new Ticon();

      
        $lanSession=$data->changeLanguage('en');
    

      return redirect()->back();
    
    }

    //TICON HOME PAGE SHOW
    public function homePageShow()
    {
      //GET HEADER ATTRIBUTES
      $data= $this->headerAttributeGenerate("home_header");
  
      //NOT IN USE
      $videos=Home::get();

      
      if( $data->user_lan =='kr'){
          $identity = "홈";
          return view ('ticon/home_kr',['data'=>$data,'identity'=>$identity,'videos'=>$videos]);
      }else{
          $identity = "Home";
          return view ('ticon/home',['data'=>$data,'identity'=>$identity,'videos'=>$videos]);
      }
            
    }
    

    //SITE USER STORING
    function storeSiteUser(Request $req)
    {

        
        $req->validate([
        'name'=>'required',
        'email'=>'required',
        'solution'=>'required',       
        ]);
        
      

        $data= new Siteuser;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->solution=$req->solution;

        //Saving to  Blogs
        $data->save();

        if ( $data->solution=='BlessBit Streaming Engine') {
          $this->htmlmail($data->email, $data->name, $data->solution, 'Blessbit');          
        } else {
          $this->htmlmail($data->email, $data->name, $data->solution, 'business');                
        }

        return redirect()->back();//page url
    }
    
    //SITE USER MAIL CONFIGARATION
    public function htmlmail($userEmail, $userName, $code, $mail_type)
    {

          $data =['name'=> $userName,'email'=> $userEmail,'purpose'=> $code];

          if($mail_type == 'business')
          {
              // $user='info@ticonsys.com';
            $user='info@ticonsys.com';// replace it with receiver mail id
            $email=Mail::send('email.business', ['data'=>$data] ,function($messages) use ($user, $userEmail, $userName){
            $messages->to($user);
            $messages->replyTo($userEmail, $userName);
            $messages->subject('Business Purpose');
            });

              if ($email == TRUE) 
              {
                session()->flash('dltmessage', 'Your request has been failed, please try again');
                //return redirect()->back();
                
              }
              else{
                session()->flash('message', 'Your request has been sent successfully'); 
                // return redirect()->back();
              }
          }
          else if($mail_type == 'Blessbit')
          {
            $user='info@ticonsys.com';
            $email=Mail::send($userName.',is interested in our streaming solution, he/she wants 30 Days Trial. Please reply this email to contact with the client. His/her email address is '.$userEmail. function($messages){
              $messages->to($user);
              $messages->replyTo($userEmail, $userName);
              $messages->subject('BlessBit website visitor');
              });

              if ($email==TRUE) 
                {
                  session()->flash('dltmessage', 'Your request has been failed, please try again'); 
                  
                  // return redirect()->back();
                  
                }
                else{
                  session()->flash('message', 'Your request has been sent successfully');
                  // return redirect()->back();
                }

          }
    }

    
    //TICON PRIVACY POLICY
    public function privacyPolicy()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");
       
        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "개인정보 보호 정책";
            return view ('ticon/privacyPolicy_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Privacy Policy";
            return view ('ticon/privacyPolicy',['data'=>$data,'identity'=>$identity]);
        }
          
            
    }
    //TICON TEARMS AND CONDITION
    public function termsCondition()
    {
        //GET HEADER ATTRIBUTES
        $data= $this->headerAttributeGenerate("small_header");
      
        // Check user language
        if( $data->user_lan =='kr'){
          $identity = "서비스 약관";
            return view ('ticon/termsOfService_kr',['data'=>$data,'identity'=>$identity]);
            
        }else{
          $identity = "Terms of Service";
            return view ('ticon/termsOfService',['data'=>$data,'identity'=>$identity]);
        }
              
    }

    //TICON ADMIN LOGIN BY AUTHENTICATION
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
          // $request->session()->regenerate();
            
            echo "hello";
            // return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
