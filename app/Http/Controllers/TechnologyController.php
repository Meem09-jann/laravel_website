<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
// use App\Models\Company;
use Session;

class TechnologyController extends Controller
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


    //TECHNOLOGY PAGE SHOW
    public function technology()
	{
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "테크놀로지";
           return view ('ticon/technology/technology_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Technology";
           return view ('ticon/technology/technology',['data'=>$data,'identity'=>$identity]);
       }
          
    }


    public function mobileTech()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "모바일 테크놀로지";
            return view ('ticon/technology/mobileTech_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Mobile Technology";
            return view ('ticon/technology/mobileTech',['data'=>$data,'identity'=>$identity]);
        }     
             
    }


    public function wevDev()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "웹 개발";
            return view ('ticon/technology/webDev_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Web Development";
            return view ('ticon/technology/webDev',['data'=>$data,'identity'=>$identity]);
        }
             
    }


    public function streaming()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "스트리밍";
            return view ('ticon/technology/streaming_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Streaming";
            return view ('ticon/technology/streaming',['data'=>$data,'identity'=>$identity]);
        }      
           
    }

    public function ai()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "인공 지능";
            return view ('ticon/technology/aiTech_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Artificial Intelligence";
            return view ('ticon/technology/aiTech',['data'=>$data,'identity'=>$identity]);
        }    
             
    }

}
