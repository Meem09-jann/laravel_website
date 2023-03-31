<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
// use App\Models\Company;
use Session;


class ServiceController extends Controller
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


    //SERVICE PAGE SHOW
    public function service()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "서비스";
          return view ('ticon/service/service_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "Service";
          return view ('ticon/service/service',['data'=>$data,'identity'=>$identity]);
      }
      
           
    }


    //SERVICE mANAGER PAGE SHOW
    public function managR()
	{
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "매니저";
          return view ('ticon/solution/managR_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "managR";
          return view ('ticon/solution/managR',['data'=>$data,'identity'=>$identity]);
      }  
            
    }

    public function wevDev()
    {
        //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "웹 개발";
           return view ('ticon/service/webdev_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Wev Development";
           return view ('ticon/service/webdev',['data'=>$data,'identity'=>$identity]);
       }
              
    }
    
    public function mobileDev()
    {
        //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "모바일 앱 개발";
           return view ('ticon/service/mobiledev_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "MOBILE APP DEVELOPMENT";
           return view ('ticon/service/mobiledev',['data'=>$data,'identity'=>$identity]);
       }
                   
    }

    public function customSoftDev()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "커스텀 소프트웨어 개발";
          return view ('ticon/service/customsoftdev_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "CUSTOM SOFTWARE DEVELOPMENT";
          return view ('ticon/service/customsoftdev',['data'=>$data,'identity'=>$identity]);
      }
       
    }

    public function softwareProductionDev()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "소프트웨어 제품 개발";
          return view ('ticon/service/softwareProductionDev_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "SOFTWARE PRODUCT DEVELOPMENT";
          return view ('ticon/service/softwareProductionDev',['data'=>$data,'identity'=>$identity]);
      }

              
    }

    public function enterpriseApp()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "엔터프라이즈 애플리케이션 통합";
          return view ('ticon/service/enterpriseAppInt_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "ENTERPRISE APPLICATION INTEGRATION";
          return view ('ticon/service/enterpriseAppInt',['data'=>$data,'identity'=>$identity]);
      } 
              
    }

    public function techConsulting()
    {
      //GET HEADER ATTRIBUTE
      $data= $this->headerAttributeGenerate("small_header");

      //CHECK USER LANGUAGE
      if( $data->user_lan =='kr'){

          $identity = "테크놀로지 컨설팅";
          return view ('ticon/service/technologyConsulting_kr',['data'=>$data, 'identity'=>$identity]);

      }else{

          $identity = "TECHNOLOGY CONSULTING";
          return view ('ticon/service/technologyConsulting',['data'=>$data,'identity'=>$identity]);
      }        
    }
}
