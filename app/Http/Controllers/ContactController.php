<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
// use App\Models\Company;
use Session;

class ContactController extends Controller
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
    public function contact()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "문의하기";
            return view ('ticon/contact_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Contact";
            return view ('ticon/contact',['data'=>$data,'identity'=>$identity]);
        }

        
    }
}
