<?php
if (isset($_GET['domain'])) {
$request_url = fulldomain($_GET['domain']);
$domainnet  = $_GET['domain'];
} else { 
$request_url = "https://dongthapseo.com";
$domainnet  = "Dongthapseo.com";
}

		
	
?>
	<html lang="vi">
<head>
<title>BackLink - <?php echo ucwords($domainnet); ?> - Đồng Tháp SEO</title>
<meta charset="UTF-8">
</head>
<body>
<center>
<?php
echo '<h2>BackLink từ '.ucwords($domainnet).'</h2><p>Đây là những gì chúng ta thu thập được từ trang này :3 --><p>';
$urlContent = file_get_contents($request_url);

$dom = new DOMDocument();
@$dom->loadHTML($urlContent);
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");

for($i = 0; $i < $hrefs->length; $i++){
    $href = $hrefs->item($i);
    $url = $href->getAttribute('href');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    // validate url
    if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo '<h3>ID là '.$i.' : <a href="'.$url.'">'.$url.'</a></h3><p>';
    }
 if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo '<h3>Trang này bao gồm các trang: '.$url.'</h3>';
echo '<img alt="https://hoiquantinhoc.vn/" src="http://free3.pagepeeker.com/v2/thumbs.php?size=x&amp;url='.$request_url.'">';
    }
}
?>
<h2>Cám ơn bạn đã ghé thăm BackLink của trang này :D <p> Nếu cần thiết hãy click vào để xem trang rõ hơn :3</h2>
</center>
</body>
</html>
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