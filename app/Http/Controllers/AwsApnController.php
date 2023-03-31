<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
use App\Models\Siteuser;

use Session;
use Mail;

class AwsApnController extends Controller
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

    //AWS PAGE VIEW
    public function index()
   	{
        //GET HEADER ATTRIBUTES
        $data= $this->headerAttributeGenerate("small_header");      

        // Check user language
           
            if( $data->user_lan =='kr'){

                $identity = "AWS 파트너 네트워크";
               return view ('ticon/awsApn_kr',['data'=>$data, 'identity'=>$identity]);
              
            }else{
                $identity = "AWS PARTNER NETWORK";
                return view ('ticon/awsApn',['data'=>$data, 'identity'=>$identity]);
            }
            
    }

    //STORE SITE USER WITH MAIL
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

        //MAIL FUNCTION
        if ( $data->solution=='BlessBit Streaming Engine') {
          $this->htmlmail($data->email, $data->name, $data->solution, 'Blessbit');          
        } else {
          $this->htmlmail($data->email, $data->name, $data->solution, 'business');                
        }
        
        return redirect()->back();//page url
    }

    //MAILLING FUNCTION
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
              }
              else{
               session()->flash('message', 'Your request has been sent successfully'); 
               // return redirect()->back();
              }
          }
          else if($mail_type == 'Blessbit')
          {
            $user='info@ticonsys.com'; // replace it with receiver mail id
            $email=Mail::send($userName.',is interested in our streaming solution, he/she wants 30 Days Trial. Please reply this email to contact with the client. His/her email address is '.$userEmail. function($messages){
              $messages->to($user);
              $messages->replyTo($userEmail, $userName);
              $messages->subject('BlessBit website visitor');
              });

              if ($email==TRUE) 
                {
                  session()->flash('dltmessage', 'Your request has been failed, please try again'); 
                  
                }
                else{
                  session()->flash('message', 'Your request has been sent successfully');
                  // return redirect()->back();
                }

          }
    }

}
