<?php
namespace App\Constants;
use Session;
class Ticon {

    function getVisitorsIp(){
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } 
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } 
        else 
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

   public function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
        $output = NULL;
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            $ip = $_SERVER["REMOTE_ADDR"];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
        $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
        $continents = array(
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "OC" => "Australia (Oceania)",
            "NA" => "North America",
            "SA" => "South America"
        );
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case "location":
                        $output = array(
                            "city"           => @$ipdat->geoplugin_city,
                            "state"          => @$ipdat->geoplugin_regionName,
                            "country"        => @$ipdat->geoplugin_countryName,
                            "country_code"   => @$ipdat->geoplugin_countryCode,
                            "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                            "continent_code" => @$ipdat->geoplugin_continentCode
                        );
                        break;
                    case "address":
                        $address = array($ipdat->geoplugin_countryName);
                        if (@strlen($ipdat->geoplugin_regionName) >= 1)
                            $address[] = $ipdat->geoplugin_regionName;
                        if (@strlen($ipdat->geoplugin_city) >= 1)
                            $address[] = $ipdat->geoplugin_city;
                        $output = implode(", ", array_reverse($address));
                        break;
                    case "city":
                        $output = @$ipdat->geoplugin_city;
                        break;
                    case "state":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "region":
                        $output = @$ipdat->geoplugin_regionName;
                        break;
                    case "country":
                        $output = @$ipdat->geoplugin_countryName;
                        break;
                    case "countrycode":
                        $output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }
        return $output;
    }

	function prefer_language()
	{
  		// $CI =& get_instance();
		// if(isset($_SESSION['ticon_user_language'])){
		// 	//unset($_SESSION['ticon_user_language']);
		// 	return $_SESSION['ticon_user_language'];
		// }


        if(Session::has('ticon_user_language')){
			//unset($_SESSION['ticon_user_language']);
            $lang=Session::get('ticon_user_language');    
			return  $lang;
		}

	    $ip = $_SERVER['REMOTE_ADDR'];
       
		$details = $this->ip_info($ip, 'countrycode');
        // dd($details);
		if(isset($details)){ $country = $details; }else{ $country='en'; }

		if($country=='KR'){
            $type='kr';
          return  session()->put('ticon_user_language', $type );
			// return $_SESSION['ticon_user_language'] = 'kr';
		}

		// return $_SESSION['ticon_user_language'] = 'en';

        $type='en';
      return  session()->put('ticon_user_language', $type );
    }



    public function changeLanguage($type)
    {
      //echo $type;exit();
        if($type == 'kr'){

            session()->put('ticon_user_language',  $type);
            // return  $_SESSION['ticon_user_language'] = 'kr';
        }else{
            session()->put('ticon_user_language', $type);
            // return  $_SESSION['ticon_user_language'] = 'en';
        }

        // redirect($_SERVER['HTTP_REFERER']);
    }
   
}
?>