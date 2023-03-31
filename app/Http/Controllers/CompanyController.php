<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Company;
use App\Constants\Ticon;
use App\Models\UserCV;
use Session;
use Mail;

class CompanyController extends Controller
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
      
    //COMPANY PAGE SHOW
    public function companyPageShow()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "회사";
          return view ('ticon/company_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "Company";
          return view ('ticon/company',['data'=>$data,'identity'=>$identity]);
      } 
      
              
    }

    //CV STORING
    function storeUserCv(Request $req)
    {  
        $req->validate([
        'name'=>'required',
        'email'=>'required',
        'solution'=>'required',    
        'file-upload'=>'required|mimes:pdf,doc,docx|max:20480000',    
        ]);

        $data= new UserCV;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->post=$req->solution;
        //CV FILE NAME CHANGE 
        // NAME: CURRENT TIME_APPLICANT NAME_CV 
        $cv=$req->file('file-upload');
        $cv_name=$cv->getClientOriginalName(); 
        $new_name = time().'_'.$data->name.'_'.$cv_name;

        //MOVING CV TO CV FOLDER
        $folder="assets/cv/";
        $cv->move($folder, $new_name);       
        $cvUrl= $folder. $new_name;

        $data->cv_url=$cvUrl;
       
        //Saving to  user Cv
        // $data->save();

        if($data->save()== TRUE){
         // $this->sendGridEmail($data->email, $data->name, $data->post, 'applicant', $cvUrl);
           session()->flash('message', 'Your request has been sent successfully');
            return redirect()->back();//page url
         }
        else{
            session()->flash('dltmessage', 'Your request has been failed');
            return redirect()->back();//page url
        }
        
       
    }

    //MAIL SENDING FUNCTION
    private function sendGridEmail( $userEmail, $userName, $code, $mail_type ,$cvUrl)
    {
        $sender=$userEmail;
        $senderName=$userName;

        $data =['name'=> $userName,'email'=> $userEmail,'purpose'=> $code, 'cv'=> $cvUrl];
       // $user='career@ticonsys.com';
        $user='career@ticonsys.com';
        $cv=$cvUrl;
        $email=Mail::mailer('mailgun')->send('email.cv', ['data'=>$data] ,function($messages) use ($user, $sender,$senderName, $cv){
        $messages->from($sender,$senderName);
        $messages->to($user);
        $messages->subject('CV Received from TiCON Website');
        $messages->attach($cv);
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
}
