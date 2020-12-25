<?php
//ENGLISH DIGIT TO PERSIAN DIGIT
function englishdigit2persiandigit($englishdigitstring)
{
    $persiandigits = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $englishdigits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    for ($i = 0; $i < strlen($englishdigitstring); $i++) {
        for ($j = 0; $j < 10; $j++) {
            $englishdigitstring = str_replace($englishdigits[$j], $persiandigits[$j], $englishdigitstring);
        }
    }

    return $englishdigitstring;
}


//PERSIAN DIGIT TO ENGLISH DIGIT
function persiandigit2englishdigit($persiandigitstring)
{
    $persiandigits = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $englishdigits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    for ($i = 0; $i < strlen($persiandigitstring); $i++) {
        for ($j = 0; $j < 10; $j++) {
            $persiandigitstring = str_replace($persiandigits[$j], $englishdigits[$j], $persiandigitstring);
        }
    }
    return $persiandigitstring;
}




//RETURN CURRENT PAGE URL
$formaction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
    $formaction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


//PERSIAN CALENDAR
$timezone = "Asia/Tehran";
if (function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);





//GET IP ADDRESS
function get_ip_address()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
}


//GENERATE LINK CODE
function generate_string($strength = 21)
{
    $input = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}





//GENERATE LINK CODE
function generate_number($numlength = 21)
{
    $input = "123456789";
    $input_length = strlen($input);
    $random_number = '';
    for ($i = 0; $i < $numlength; $i++) {
        $random_digit = $input[mt_rand(0, $input_length - 1)];
        $random_number .= $random_digit;
    }
    return $random_number;
}





function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE)
{
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

// خروجی کلاس بالا بصورت زیر می باشد

// echo ip_info("173.252.110.27", "Country"); // United States
// echo ip_info("173.252.110.27", "Country Code"); // US
// echo ip_info("173.252.110.27", "State"); // California
// echo ip_info("173.252.110.27", "City"); // Menlo Park
// echo ip_info("173.252.110.27", "Address"); // Menlo Park, California, United States
// print_r(ip_info("173.252.110.27", "Location")); // Array ( [city] => Menlo Park [state] => California [country] => United States [country_code] => US [continent] => North America [continent_code] => NA )
