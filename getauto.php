<form action="" method="get">
<input type="text" name="u"><br>
  <input type="submit" value="Check">
</form>
<?
if(isset($_GET['u'])) {

	$request_url = fulldomain(getOriginalURL($_GET['u']));
	
		$request_url2 = fulldomain(getOriginalURL($_GET['u']));

 //$file = fopen("data.txt",'a');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request_url);	// The url to get links from
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	// We want to get the respone
	$result = curl_exec($ch);
 
	$regex='|<a.*?href="http://(.*?)"|';
	preg_match_all($regex,$result,$parts);
	$links=$parts[1];
		$nkk = 0;
	foreach($links as $link){
 
//fwrite($file,$link."|");
 
		//echo $link."<br>";
		if(strcmp(fulldomain(getOriginalURL($link)),$request_url2)==0){
  //  echo "Ten giong nhau";
    }elseif(fulldomain(getOriginalURL($link)) == "http:///"){
  //  echo "Ten giong nhau";
    }else{
	$urll = "http://".$_SERVER['SERVER_NAME']."/set.php?u=".fulldomain(getOriginalURL($link));
echo '<script type="text/javascript">   window.open("'.$urll.'", "_blank"); </script>';

	//$nkk = $nkk + 1;
	echo ($link)."|";
    }

	}
	curl_close($ch);
//fclose($file)
}
 ?>
 <?php
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
	curl_setopt($ch, CURLOPT_TIMEOUT,        30);
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

