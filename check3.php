<?php error_reporting(E_ALL); //Hiển thị tất cả các lỗi ?>
<?php
if (file_exists("laivt_firewall.php"))
   include_once "laivt_firewall.php";  
if (file_exists("anti_dos.php"))
   include_once "anti_dos.php";    
if (file_exists("Firewall.php"))
   include_once "Firewall.php"; 
?>
<?php
$domain = fulldomain(getOriginalURL($_GET['domain']));

set_error_handler("myCustomError");






//$get55 = get_by_curl($domain);
//preg_match("/<title>(.*)<\/title>/i", $get55, $matches);

//print($matches[1] . "\n"); // "Example Web Page"


?>
 
      <?php
	  
	  $tenmien1 = str_replace("https","",$domain);
	  $tenmien2 = str_replace(":","",$tenmien1);
	  $tenmien3 = str_replace("/","",$tenmien2);
	  $tenmien4 = str_replace("http","",$tenmien3);
	  $tenmien = str_replace("www.","",$tenmien4);



	  	$filename = "/datawb/".$tenmien.".txt";

$str = strlen($description);
$str3 = strlen($title);
if ($str <= 2) {
$description = "Không có!";
} else {
	
}
if ($str3 <= 2) {
$title = "Không có tiêu đề";
} else {
	
}
$str2 = strlen($keywords);

if ($str2 <= 2) {
$keywords = "Không có!";
} else {
	
}

if (file_exists($filename)) {
    //echo "The file $filename exists";
} else {


$my_file = $tenmien.'.txt';
$handle = fopen('datawb/'.$my_file, 'w+') or die('Cannot open file:  '.$my_file); //implicitly creates file

$data = "

<tr>

<th class=\"text-left\">Thông tin trang</th>
</tr>
</thead>
<tbody class=\"table-hover\">
<tr>

<td class=\"text-left\">	<b>Tên trang :</b> $title
</td>
</tr>
<tr>
<td class=\"text-left\">	<b>Mô tả:</b> $description
</td>
</tr>
";
fwrite($handle, $data);
fclose($handle);
$my_file2 = $tenmien.'.txt';
$handle2 = fopen('tukhoaa/'.$my_file2, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2, $keywords);
fclose($handle2);
$my_file23 = $tenmien.'.txt';
$handle23 = fopen('mota/'.$my_file23, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle23, $description);
fclose($handle23);

if (strlen($title) < 1) {
	$title = $domain;
} else {
	$title = $title;
}
$my_file232 = $tenmien.'.txt';
$handle232 = fopen('tieude/'.$my_file232, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle232, $title);
fclose($handle232);

function checkPageSpeed($url){    
    if (function_exists('file_get_contents')) {    
    $result = @get_by_curl($url);
  }    
  if ($result == '') {    
  $ch = curl_init();    
  $timeout = 60;    
  curl_setopt($ch, CURLOPT_URL, $url);    
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);    
  $result = curl_exec($ch);    
  curl_close($ch);    
 }    

 return $result;    
}  

$myKEY = "";  
$url = $domain;  
$url_req = 'https://www.googleapis.com/pagespeedonline/v1/runPagespeed?url='.$url.'&screenshot=true&key='.$myKEY;  
$results = checkPageSpeed($url_req);  
$json = json_decode($results);
$obj = json_decode($results, true);

//echo $json->score."/100";
if (strlen($json->score) < 1) {
	$kbb233 = "của trang này không tồn tại!";
} else {
	$kbb233 = $json->score."/100";
}
$my_file22 = $tenmien.'.txt';
$handle22 = fopen('diemweb/'.$my_file22, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle22, $kbb233);
fclose($handle22);
/////
if (strlen($json->responseCode) < 1) {
	$kbb2233 = "404";
} else {
	$kbb2233 = $json->responseCode."/100";
}
$my_file222 = $tenmien.'.txt';
$handle222 = fopen('phanhoi/'.$my_file222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle222, $kbb2233);
fclose($handle222);
/////
if (strlen($obj['pageStats']['totalRequestBytes']) < 1) {
	$kbb = "0";
} else {
	$kbb = $obj['pageStats']['totalRequestBytes'];
}
$my_file2222 = $tenmien.'.txt';
$handle2222 = fopen('kbb/'.$my_file2222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2222, VndDot($kbb)." KB");
fclose($handle2222);
/////
if (strlen($obj['pageStats']['numberHosts']) < 1) {
	$sohost = "0";
} else {
	$sohost = $obj['pageStats']['numberHosts'];
}
$my_file22222 = $tenmien.'.txt';
$handle22222 = fopen('sohost/'.$my_file22222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle22222, VndDot($sohost)." Server Host!");
fclose($handle22222);
/////
if (strlen($obj['pageStats']['numberResources']) < 1) {
	$tainguyen = "0";
} else {
	$tainguyen = $obj['pageStats']['numberResources'];
}
$my_file222222 = $tenmien.'.txt';
$handle222222 = fopen('tainguyen/'.$my_file222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle222222, VndDot($tainguyen)." Tài Nguyên");
fclose($handle222222);
/////
if (strlen($obj['pageStats']['numberStaticResources']) < 1) {
	$tainguyen2 = "0";
} else {
	$tainguyen2 = $obj['pageStats']['numberStaticResources'];
}
$my_file2222222 = $tenmien.'.txt';
$handle2222222 = fopen('tainguyen2/'.$my_file2222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2222222, VndDot($tainguyen2)." Tài Nguyên Tĩnh");
fclose($handle2222222);
/////
if (strlen($obj['pageStats']['htmlResponseBytes']) < 1) {
	$htmlkb = "0";
} else {
	$htmlkb = $obj['pageStats']['htmlResponseBytes'];
}
$my_file22222222 = $tenmien.'.txt';
$handle22222222 = fopen('htmlkb/'.$my_file22222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle22222222, VndDot($htmlkb)." KB");
fclose($handle22222222);
/////
if (strlen($obj['pageStats']['cssResponseBytes']) < 1) {
	$csskb = "0";
} else {
	$csskb = $obj['pageStats']['cssResponseBytes'];
}
$my_file2222222222 = $tenmien.'.txt';
$handle2222222222 = fopen('csskb/'.$my_file2222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2222222222, VndDot($csskb)." KB");
fclose($handle2222222222);
/////
if (strlen($obj['pageStats']['imageResponseBytes']) < 1) {
	$imgkb = "0";
} else {
	$imgkb = $obj['pageStats']['imageResponseBytes'];
}
$my_file22222222222 = $tenmien.'.txt';
$handle22222222222 = fopen('imgkb/'.$my_file22222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle22222222222, VndDot($imgkb)." KB");
fclose($handle22222222222);
/////
if (strlen($obj['pageStats']['javascriptResponseBytes']) < 1) {
	$jskb = "0";
} else {
	$jskb = $obj['pageStats']['javascriptResponseBytes'];
}
$my_file222222222222 = $tenmien.'.txt';
$handle222222222222 = fopen('jskb/'.$my_file222222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle222222222222, VndDot($jskb)." KB");
fclose($handle222222222222);
/////
if (strlen($obj['pageStats']['otherResponseBytes']) < 1) {
	$otherkb = "0";
} else {
	$otherkb = $obj['pageStats']['otherResponseBytes'];
}
$my_file2222222222222 = $tenmien.'.txt';
$handle2222222222222 = fopen('otherkb/'.$my_file2222222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2222222222222, VndDot($otherkb)." KB");
fclose($handle2222222222222);
/////
if (strlen($obj['pageStats']['numberJsResources']) < 1) {
	$jsrs = "0";
} else {
	$jsrs = $obj['pageStats']['numberJsResources'];
}
$my_file22222222222222 = $tenmien.'.txt';
$handle22222222222222 = fopen('jsrs/'.$my_file22222222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle22222222222222, VndDot($jsrs)." ");
fclose($handle22222222222222);
/////
if (strlen($obj['pageStats']['numberCssResources']) < 1) {
	$cssrs = "0";
} else {
	$cssrs = $obj['pageStats']['numberCssResources'];
}
$my_file222222222222222 = $tenmien.'.txt';
$handle222222222222222 = fopen('cssrs/'.$my_file222222222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle222222222222222, VndDot($cssrs)." ");
fclose($handle222222222222222);

/////
$my_file2222222222222222 = $tenmien.'.txt';
$handle2222222222222222 = fopen('urlweb/'.$my_file2222222222222222, 'w+') or die('Error...'); //implicitly creates file
fwrite($handle2222222222222222, $domain);
fclose($handle2222222222222222);
}

      ?>
	  

<?php
function VndDot($strNum)
{
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);    
        }
        return $result;
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
function get_by_curl($url){
        //echo "curl:url<pre>".$url."</pre><BR>";
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 15,      // timeout on connect
        CURLOPT_TIMEOUT        => 15,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		CURLOPT_SSL_VERIFYPEER => false,
 
    );
 
    $ch      = curl_init($url);
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch,CURLINFO_EFFECTIVE_URL );
    curl_close( $ch );
 
    //$header['errno']   = $err;
   // $header['errmsg']  = $errmsg;
 
    //change errmsg here to errno
    if ($errmsg)
    {
        echo "";
    }
    return $content;
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
