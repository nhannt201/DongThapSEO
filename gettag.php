<?php
$domain = fulldomain($_GET['domain']);


if (!filter_var($domain, FILTER_VALIDATE_URL) === false) {
 
 $tenmien1 = str_replace("https","",$domain);
	  $tenmien2 = str_replace(":","",$tenmien1);
	  $tenmien3 = str_replace("/","",$tenmien2);
	  $tenmien4 = str_replace("http","",$tenmien3);
	  $tenmien = str_replace("www.","",$tenmien4);
	  $filename = "datawb/".$tenmien.".txt";
	  if (file_exists($filename)) {
//$myfile222 = fopen($tenmien2, "r") or die("");
//$dom22 = fgets($myfile222);
//$sver = getOriginalURL(fulldomain($domain));
$sv2 = 'http://'.$_SERVER['SERVER_NAME'].'/tags/'.$tenmien.'/';
echo "<center>Đã phân tích tên miền ".$tenmien."... Vui lòng đợi trong giây lát...</center>";
echo '<meta http-equiv="refresh" content="2;'.$sv2.'">';
} else {
	echo "<center>Tên miền bạn không được tìm thấy. Vui lòng thử lại sao!</center>";

}
} else {

	echo "<center>Tên miền không hợp lệ!</center>";

}
function fulldomain($domainb) {
 
$bits = explode('/', $domainb);
 
if ($bits[0]=='http:' || $bits[0]=='https:')
 
{
 
return $bits[0].'//'.$bits[2].'/';
 
} else {
 
return 'http://'.$bits[0].'/';
 
}
 
unset($bits);
 
}
	function getOriginalURL($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // if it's not a redirection (3XX), move along
    if ($httpStatus < 300 || $httpStatus >= 400)
        return $url;

    // look for a location: header to find the target URL
    if(preg_match('/location: (.*)/i', $result, $r)) {
        $location = trim($r[1]);

        // if the location is a relative URL, attempt to make it absolute
        if (preg_match('/^\/(.*)/', $location)) {
            $urlParts = parse_url($url);
            if ($urlParts['scheme'])
                $baseURL = $urlParts['scheme'].'://';

            if ($urlParts['host'])
                $baseURL .= $urlParts['host'];

            if ($urlParts['port'])
                $baseURL .= ':'.$urlParts['port'];

            return $baseURL.$location;
        }

        return $location;
    }
    return $url;
}

?>