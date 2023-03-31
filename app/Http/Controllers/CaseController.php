<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
// use App\Models\Company;
use Session;


class CaseController extends Controller
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

    //CHVOD PAGE SHOW
    public function chvod()
	{
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "CHVOD 케이스 스터디";
           return view ('ticon/caseStudy/chvod_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Case Study of CHVOD";
           return view ('ticon/caseStudy/chvod',['data'=>$data,'identity'=>$identity]);
       }     
            
    }
    //RABBITHOLE PAGE SHOW
    public function rabbitHole()
	{
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "RabbiteholeBD 케이스 스터디";
           return view ('ticon/caseStudy/rabbitHole_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Case Study of RabbiteholeBD";
           return view ('ticon/caseStudy/rabbitHole',['data'=>$data,'identity'=>$identity]);
       }
    
    }
}
