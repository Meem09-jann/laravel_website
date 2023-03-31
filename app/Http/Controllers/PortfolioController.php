<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Constants\Ticon;
use App\Models\Portfolio;
use App\Models\User;
use Session;

class PortfolioController extends Controller
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

    //PORTFOLIO PAGE SHOW
    public function portfolio()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");
         
        //GET ALL PORTFOLIOS
        $portfolios=Portfolio::get();

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "포트폴리오";
            return view ('ticon/portfolio_kr',['data'=>$data, 'identity'=>$identity, 'portfolios'=>$portfolios]);

        }else{

            $identity = "Portfolio";
            return view ('ticon/portfolio',['data'=>$data,'identity'=>$identity, 'portfolios'=>$portfolios]);
        }

    }

    //PORTFOLIO CREATE BY TICON ADMIN
    function portfolioAdd(Request $req)
    {
        $req->validate([
        'title'=>'required|unique:portfolio,title',
        'client_name'=>'required',
        'platform'=>'required',
        'used_technology'=>'required',
        'product_description'=>'required',
        'img_url'=>'required|mimes:jpeg,jpg,png',
        ]);
        


        $data= new Portfolio;
        $data->title=$req->title; //->uNmae(db)=->name(input)
        $data->client_name=$req->client_name;
        $data->platform=$req->platform;
        $data->used_technology=$req->used_technology;
        $data->product_description=$req->product_description;

        $image=$req->file('img_url');
            //   $image_name=$image->getClientOriginalName(); 
        $image_new_name= time();
        // dd($image_new_name);
        $folder="assets/img/products/";
        $image->move($folder, $image_new_name);       
        $imageUrl= $folder. $image_new_name;

        $data->img_url=$imageUrl;
        $data->save();

        session()->flash('message','Item added successfully');
        return redirect()->back();//page url
    }

    //PORTFOLIO UPDATE BY TICON ADMIN
    function portfolioUpdate(Request $req, $id)
    {  
        $req->validate([
            'title'=>'required',
            'client_name'=>'required',
            'platform'=>'required',
            'used_technology'=>'required',
            'product_description'=>'required',
            // 'img_url'=>'required',
        ]);

    
        $data=Portfolio::find($id);
        $data->title=$req->title; //->uNmae(db)=->name(input)
        $data->client_name=$req->client_name;
        $data->platform=$req->platform;
        $data->used_technology=$req->used_technology;
        $data->product_description=$req->product_description;
    
        //UPDATE WITH IMAGE
        if( !$req->img_url== null){
            
            $req->validate([
                'img_url'=>'required|mimes:jpeg,jpg,png', 
            ]);
            
            $image=$req->file('img_url');
            $image_new_name= time();           
            $folder="assets/img/products/";
            $image->move($folder, $image_new_name);       
            $imageUrl= $folder. $image_new_name;

            $data->img_url=$imageUrl;
            $data->update();
            session()->flash('message','Item updated successfully');
            return redirect()->back();
        } else{
            //UPDATE WITHOUT IMAGE
            $data->update();
            session()->flash('message','Item updated successfully');
            return redirect()->back();
        }
    }

    //PORTFOLIO DELETE BY TICON ADMIN
    function portfolioDelete($id)
    {
          $posts=Portfolio::find($id);
          $posts->delete();
          session()->flash('dltmessage','Item deleted successfully');
          return redirect()->back();
    }


    //PORTFOLIO SHOW FROM DATABASE
    function getPortfolios($id)
    {
        //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       $portfolios=Portfolio::find($id);

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

            switch($portfolios->title) {

                    case('managR'):

                        $identity = "Manager";
                        $portfolios->client_name= "TiCON 시스템의 사내 제품";
                        $portfolios->platform="앱 애플리케이션";
                        $portfolios->used_technology="PHP (CodeIgniter),MySQL, Javascript";
                        $portfolios->product_description="중소기업을 위해 특별히 설계된 서비스로 제공되는 비즈니스 솔루션";
                    break;

                    case('BASIS SOFTEXPO GUIDE APP'):

                        $identity = "Basis Softexpo Guide App";
                        $portfolios->client_name = "방글라데시 소프트웨어 및 정보 서비스 협회 (BASIS)";
                        $portfolios->platform="안드로이드, 웹 애플리케이션";
                        $portfolios->used_technology="Java for Android platform, Codeigniter Framework and MySQL";
                        $portfolios->product_description="Expo 가이드
                                                    → 세미나 리스트
                                                    → 연사 프로파일
                                                    → 일별 업데이트 및 알림
                                                    → QR 코드 생성기 및 방문객 보고서
                                                    → 게시된 일자리
                                                    →게시된 할인
                                                    → 게시된 제안
                                                    → B2B 미팅 요청";
                    break;

                    case('Drishti'):

                        $identity = "Drishti";
                        $portfolios->client_name="방글라데시 정부, 우체국, 통신 및 정보 기술부";
                        $portfolios->platform="안드로이드";
                        $portfolios->used_technology="Machine Learning, Natural Language Processing, Own algorithm, Speach Recognition, Text To Speach(TTS), Image to Peach";
                        $portfolios->product_description="안드로이드 기반 인공 지능.
                                                    → 질문을 인식하고 실제 답변을 제공할 수 있음.
                                                    → 알람, 스케줄 리마인더를 설정할 수 있음.
                                                    → 사용자 명령 기반 인터넷에서 검색.
                                                    → 데이터 세트를 기반으로 하는 다른 서비스로 확장할 수 있습니다.";
                    break;

                    case('GoSourcing365'):

                        $identity = "GoSourcing365";
                        $portfolios->client_name="GoSourcing LLC";
                        $portfolios->platform="안드로이드, iOS 애플리케이션, 웹 API";
                        $portfolios->used_technology="PHP v.7, MySQL v.14, Kotlin, Retrofit, Picasso, Material Dialog, Circular ImageView, MVVM, Objective C, AFNetworking";
                        $portfolios->product_description="온라인 B2B 네트워킹 & 소싱 플랫폼용 안드로이드 & iOS 애플리케이션";
                    break;

                    case('GPS-Tracker'):

                        $identity = "GPS-Tracker";
                        $portfolios->client_name="HDTel";
                        $portfolios->platform="안드로이드";
                        $portfolios->used_technology="PHP v.7, MySQL v.14, Kotlin, Retrofit, Picasso, Material Dialog, MVVM";
                        $portfolios->product_description="친구 및 가족과 계속 연결됨.
                                                    → 긴급 연락 담당자 3명에게 조난 SMS 전송.
                                                    → 어린이 위치 변경에 대한 경고 메시지 받기.";
                    break;

                default:
                    $msg = 'Something went wrong.';
            }
           return view ('ticon/products/details_kr',['data'=>$data, 'identity'=>$identity, 'portfolios'=>$portfolios]);

       }else{

            switch($portfolios->title) {

                case('managR'):

                    $identity = "Manager";
                    
                break;

                case('BASIS SOFTEXPO GUIDE APP'):

                    $identity = "Basis Softexpo Guide App";
                    
                break;

                case('Drishti'):

                    $identity = "Drishti";
                    
                break;

                case('GoSourcing365'):

                    $identity = "GoSourcing365";
                    
                break;

                case('GPS-Tracker'):

                    $identity = "GPS-Tracker";

                break;

                default:
                    $msg = 'Something went wrong.';
            }
           return view ('ticon/products/details',['data'=>$data,'identity'=>$identity, 'portfolios'=>$portfolios]);
       }

    }

    function blessBit()
    {
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "BlessBit";
           return view ('ticon/products/blessBit_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "BlessBit";
           return view ('ticon/products/blessBit',['data'=>$data,'identity'=>$identity]);
       }
      
    }

    function rabbithole()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Rabbithole Prime";
            return view ('ticon/products/rabbitholePrime_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Rabbithole Prime";
            return view ('ticon/products/rabbitholePrime',['data'=>$data,'identity'=>$identity]);
        } 
      
      
    }

    function theia()
    {
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "Theia";
           return view ('ticon/products/theia_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Theia";
           return view ('ticon/products/theia',['data'=>$data,'identity'=>$identity]);
       } 
    }


    function fotoboss()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Fotoboss";
            return view ('ticon/products/fotoboss_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Fotoboss";
            return view ('ticon/products/fotoboss',['data'=>$data,'identity'=>$identity]);
        }   
    }


    function willy()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Willy";
            return view ('ticon/products/willy_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Willy";
            return view ('ticon/products/willy',['data'=>$data,'identity'=>$identity]);
        }
      
    }
    function tigerGeN()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Tiger GeN";
            return view ('ticon/products/tigerGeN_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Tiger GeN";
            return view ('ticon/products/tigerGeN',['data'=>$data,'identity'=>$identity]);
        }
    
    }

    function chBox()
    {
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "CH BOX";
           return view ('ticon/products/CH BOX_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "CH BOX";
           return view ('ticon/products/CH BOX',['data'=>$data,'identity'=>$identity]);
       }
       
    }

    function NRBTV()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "NRB TV";
            return view ('ticon/products/NRB TV_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "NRB TV";
            return view ('ticon/products/NRB TV',['data'=>$data,'identity'=>$identity]);
        }
        
    }

    function quizYard()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "QuizYard";
            return view ('ticon/products/QuizYard_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "QuizYard";
            return view ('ticon/products/QuizYard',['data'=>$data,'identity'=>$identity]);
        }
    }


    function SmartConsular()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Smart Consular";
            return view ('ticon/products/Smart Consular_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Smart Consular";
            return view ('ticon/products/Smart Consular',['data'=>$data,'identity'=>$identity]);
        }
      
    }


    function AppStore()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "App Store";
            return view ('ticon/products/App Store_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "App Store";
            return view ('ticon/products/App Store',['data'=>$data,'identity'=>$identity]);
        }
    }


    function HelloCockpit()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Hello Cockpit";
            return view ('ticon/products/Hello Cockpit_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Hello Cockpit";
            return view ('ticon/products/Hello Cockpit',['data'=>$data,'identity'=>$identity]);
        }
    }

    function RUNWAY()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Runway";
            return view ('ticon/products/RUNWAY_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Runway";
            return view ('ticon/products/RUNWAY',['data'=>$data,'identity'=>$identity]);
        }
    }


    function Sunplex()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Sunplex";
            return view ('ticon/products/Sunplex_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Sunplex";
            return view ('ticon/products/Sunplex',['data'=>$data,'identity'=>$identity]);
        }
    }


    function CHVOD()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "CH VOD";
            return view ('ticon/products/CH VOD_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "CH VOD";
            return view ('ticon/products/CH VOD',['data'=>$data,'identity'=>$identity]);
        }
    }


    function JVOD()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "J VOD";
            return view ('ticon/products/J VOD_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "J VOD";
            return view ('ticon/products/J VOD',['data'=>$data,'identity'=>$identity]);
        }
    }


    function WILLFON()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Willfon";
            return view ('ticon/products/WILLFON_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Willfon";
            return view ('ticon/products/WILLFON',['data'=>$data,'identity'=>$identity]);
        }
    }


    function VISIONFACEWATCH()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Vision Facewatch";
            return view ('ticon/products/VISION FACEWATCH_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Vision Facewatch";
            return view ('ticon/products/VISION FACEWATCH',['data'=>$data,'identity'=>$identity]);
        }
    }


    function BanchinorHiFriend()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Banchin or HiFriend";
            return view ('ticon/products/Banchin or HiFriend_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Banchin or HiFriend";
            return view ('ticon/products/Banchin or HiFriend',['data'=>$data,'identity'=>$identity]);
        }
    }

    function SBTNEAT()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Sbt Neat";
            return view ('ticon/products/SBT NEAT_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Sbt Neat";
            return view ('ticon/products/SBT NEAT',['data'=>$data,'identity'=>$identity]);
        }  
    }


    function DIMENTIONALEDU()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "5Dimentional Edu";
            return view ('ticon/products/5DIMENTIONAL EDU_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "5Dimentional Edu";
            return view ('ticon/products/5DIMENTIONAL EDU',['data'=>$data,'identity'=>$identity]);
        }
    }


    function JVISION()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "J Vision";
            return view ('ticon/products/J VISION_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "J Vision";
            return view ('ticon/products/J VISION',['data'=>$data,'identity'=>$identity]);
        }
    }


    function ICALLRING()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Icallring";
            return view ('ticon/products/ICALLRING_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Icallring";
            return view ('ticon/products/ICALLRING',['data'=>$data,'identity'=>$identity]);
        } 
    }


    function MIRU()
    {
       //GET HEADER ATTRIBUTE
       $data= $this->headerAttributeGenerate("small_header");

       //CHECK USER LANGUAGE
       if( $data->user_lan =='kr'){

           $identity = "Miru Phone";
           return view ('ticon/products/MIRU PHONE_kr',['data'=>$data, 'identity'=>$identity]);

       }else{

           $identity = "Miru Phone";
           return view ('ticon/products/MIRU PHONE',['data'=>$data,'identity'=>$identity]);
       }
    }


    function VETERINARYCLINICS()
    {//GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "수의학 클리닉";
            return view ('ticon/products/VETERINARY CLINICS_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Veterinary Clinics";
            return view ('ticon/products/VETERINARY CLINICS',['data'=>$data,'identity'=>$identity]);
        }
    }


    function TELETALK()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Teletalk Bangladesh";
            return view ('ticon/products/TELETALK BANGLADESH_kr',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Teletalk Bangladesh";
            return view ('ticon/products/TELETALK BANGLADESH',['data'=>$data,'identity'=>$identity]);
        }
      
    }
    function DISERP()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Dis Erp";
            return view ('ticon/products/DIS_ERP',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Dis Erp";
            return view ('ticon/products/DIS_ERP',['data'=>$data,'identity'=>$identity]);
        }
    }


    function INTRAERP()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Intra Erp";
            return view ('ticon/products/INTRA_ERP',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Intra Erp";
            return view ('ticon/products/INTRA_ERP',['data'=>$data,'identity'=>$identity]);
        }
    }


    function MLM()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "MLM Management System";
            return view ('ticon/products/MLM',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "MLM Management System";
            return view ('ticon/products/MLM',['data'=>$data,'identity'=>$identity]);
        }  
    }


    function CLOUDACCOUNTICA()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Cloudaccountica";
            return view ('ticon/products/CLOUDACCOUNTICA',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Cloudaccountica";
            return view ('ticon/products/CLOUDACCOUNTICA',['data'=>$data,'identity'=>$identity]);
        }
      
    }


    function CORONABOT()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Coronabot";
            return view ('ticon/products/CORONABOT',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Coronabot";
            return view ('ticon/products/CORONABOT',['data'=>$data,'identity'=>$identity]);
        }
    }


    function MLMSystem()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "MLM Management System";
            return view ('ticon/products/MLMandroid',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "MLM Management System";
            return view ('ticon/products/MLMandroid',['data'=>$data,'identity'=>$identity]);
        }
    }


    function ShipEntry()
    {
       //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "ShipEntry";
            return view ('ticon/products/ShipEntry',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "ShipEntry";
            return view ('ticon/products/ShipEntry',['data'=>$data,'identity'=>$identity]);
        }
    }


    function ShipAccess()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "ShipAccess";
            return view ('ticon/products/ShipAccess',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "ShipAccess";
            return view ('ticon/products/ShipAccess',['data'=>$data,'identity'=>$identity]);
        }
    }


    function ReservationV()
    {
        //GET HEADER ATTRIBUTE
        $data= $this->headerAttributeGenerate("small_header");

        //CHECK USER LANGUAGE
        if( $data->user_lan =='kr'){

            $identity = "Restaurant Reservation-V";
            return view ('ticon/products/R-Reservation',['data'=>$data, 'identity'=>$identity]);

        }else{

            $identity = "Restaurant Reservation-V";
            return view ('ticon/products/R-Reservation',['data'=>$data,'identity'=>$identity]);
        }   
    }
    
}
