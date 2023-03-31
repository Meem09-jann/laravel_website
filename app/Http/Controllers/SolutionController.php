<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
// use App\Models\Company;
use Session;


class SolutionController extends Controller
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

    //SOLUTION PAGE SHOW
    public function solutionPage()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){
 
            $identity = "솔루션";
            return view ('ticon/solution/solution_kr',['data'=>$data, 'identity'=>$identity]);
 
        }else{
 
            $identity = "Solution";
            return view ('ticon/solution/solution',['data'=>$data,'identity'=>$identity]);
        }  
  
    }

    //SOLUTION PAGE SHOW/ SPECIFIC SOLUTION
    public function aiIntegration()
	{
         //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "AI 통합";
           return view ('ticon/solution/aiIntegration_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Ai Integration";
           return view ('ticon/solution/aiIntegration',['data'=>$data,'identity'=>$identity]);
       }  
           
    }


    public function crawler()
	{
         //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "웹 크롤러";
           return view ('ticon/solution/webCarwler_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Web Crawler";
           return view ('ticon/solution/webCarwler',['data'=>$data,'identity'=>$identity]);
       }  

           
    }


    public function hr()
	{
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){
 
            $identity = "HR 솔루션";
            return view ('ticon/solution/HRSolution_kr',['data'=>$data, 'identity'=>$identity]);
 
        }else{
 
            $identity = "HR Solution";
            return view ('ticon/solution/HRSolution',['data'=>$data,'identity'=>$identity]);
        }  
     
    }


    public function trivia()
	{
        //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "트리비아 모바일 앱";
           return view ('ticon/solution/triviaMobileGame_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Trivia Mobile Apps";
           return view ('ticon/solution/triviaMobileGame',['data'=>$data,'identity'=>$identity]);
       }  
         
    }


    public function eCom()
	{
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "E-커머스 및 웹 솔루션";
           return view ('ticon/solution/eComWeb_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Commerce and Web Solution";
           return view ('ticon/solution/eComWeb',['data'=>$data,'identity'=>$identity]);
       }  
        
    }


}
