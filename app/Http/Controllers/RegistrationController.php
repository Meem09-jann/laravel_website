<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Constants\Ticon;
use App\Models\Registration;
use Session;

class RegistrationController extends Controller
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


    //PAGE SHOW
    public function registrationPageShow()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "Registration";
          return view ('ticon/registration_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "Registration";
          return view ('ticon/registration',['data'=>$data,'identity'=>$identity]);
      } 

      
    }

    //SITE USER STORE
    function store(Request $req)
    {
      $req->validate([

          'first_name'=>'required',
          'last_name'=>'required',
          'phone'=>'required',
          'address'=>'required',
          'occupation'=>'required',
          'institute_name'=>'required',
          'previous_experience'=>'required',
          'purpose'=>'required',
          'current_use'=>'required',
          'email'=>'required|unique:registrations,email',  
          'current_use'=>'required',        
      ]);

      $data= new Registration;
      $data->first_name=$req->first_name;
      $data->last_name=$req->last_name;
      $data->phone=$req->phone;
      $data->address=$req->address;
      $data->email=$req->email;
      
      $data->occupation=$req->occupation;             
      $data->institute_name=$req->institute_name;
      $data->previous_experience=$req->previous_experience;
      $data->purpose=$req->purpose;
      $data->current_use=$req->current_use;
      $data->created_at_mil=time();
      //   dd($data);            
      $data->save();
      
      session()->flash('message','Your request has been sent successfully');
      return redirect()->back();//page url
    }

}
