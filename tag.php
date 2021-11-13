<?php
if (file_exists("laivt_firewall.php"))
   include_once "laivt_firewall.php";   
if (file_exists("anti_dos.php"))
   include_once "anti_dos.php";   
if (file_exists("Firewall.php"))
   include_once "Firewall.php"; 
?>
<?php 

$tenmien = (getOriginalURL(fulldomain($_GET['id'])));
 $tenmien1 = str_replace("https","",$tenmien);
	  $tenmien2 = str_replace(":","",$tenmien1);
	  $tenmien3 = str_replace("/","",$tenmien2);
	  $tenmien4 = str_replace("http","",$tenmien3);
	  $tenmien = str_replace("www.","",$tenmien4);
$filename = "http://".$_SERVER['SERVER_NAME']."/urlweb/".$tenmien.".txt"; 
$filename01 = $_SERVER['DOCUMENT_ROOT']."/urlweb/".$tenmien.".txt"; 
$filename16 = $_SERVER['DOCUMENT_ROOT']."/mota/".$tenmien.".txt";
$filename17 = $_SERVER['DOCUMENT_ROOT']."/tieude/".$tenmien.".txt";
$filename22 = $_SERVER['DOCUMENT_ROOT']."/tukhoaa/".$tenmien.".txt";
//$filename166 = "/mota/".$tenmien.".txt";
//$filename177 = "/tieude/".$tenmien.".txt";
//$filename222 = "/tukhoaa/".$tenmien.".txt";
//echo $filename16;
//include "$filename22";
?>
<!DOCTYPE HTML>
<!--
	DongThapSEO
	dongthapseo.com | trungnhan21.12@gmail.com
	Web SEO nguoi Dong Thap
-->
<html>
	<head>
	<title><?php if ($_GET['id'] == "home") { echo 'Đồng Tháp SEO | Tags - Công cụ SEO từ khoá miễn phí';} elseif (!isset($_GET['id']) || ($_GET['tag'])) { echo str_replace("-"," ",$_GET['tag']).' - '.ucwords($_GET['id']).' | DongThapSeo.com';} else{ echo ucwords($_GET['id']).' | ';  include "$filename17";  }?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/images/ico.ico" />
	<!--<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/images/ico.ico"/>-->
	<!--<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/main.css" />-->
	<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/css/check.css"/>
    <meta name="description" content="<?php if (file_exists($filename16)) { include "$filename16"; } else { echo "Chúng tôi SEO ".str_replace("-"," ",$_GET['tag'])." miễn phí và dùng công cụ seo từ khoá trang web ".str_replace("-"," ",$_GET['tag']).", tăng truy cập trang web".str_replace("-"," ",$_GET['tag']).",seo web lên top google với Đồng Tháp SEO,tăng hạng mục website,không gian seo top và nó hoàn toàn miễn phí!"; }?>"/>
    <meta name="keywords" content="dong thap seo, seo tu khoa, tags, tag,<?php if (file_exists($filename22)) { include "$filename22"; }?>"/>
    <meta property="og:title" content="DongThapSEO - <?php if (file_exists($filename17)) { include "$filename17"; } else { echo "Đồng Tháp SEO | Tags - Công cụ SEO từ khoá miễn phí"; }?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME']."/tags/".$_GET['id'];?>/"/>
    <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/images/logo.png"/>
    <meta property="og:description" content="<?php if (file_exists($filename16)) { include "$filename16"; } else { echo "công cụ seo từ khoá trang web, tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top"; }?>"/>
	<script async  src="https://<?php echo $_SERVER['SERVER_NAME'];?>/js/dph.js"></script>
	<meta property="fb:admins" content="100006476596425"/>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80502987-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body class="homepage" >
	  <div class="wrapper">
            <div class="main_menu">
                <ul>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/tags/home/">Trang chủ</a></li>
        <li><a href="/gioi-thieu.php">Giới thiệu</a></li>
                    <li><a href="#">Công cụ</a>
                        <ul>
                           <!-- <li><a href="">Tạo sitemap</a></li>-->
                            <li><a href="/tools/ping-web">Ping web</a></li>
                            <li><a href="/tools/bo-dau-tieng-viet">Bỏ dấu tiếng việt</a></li>
                            <li><a href="/tools/chu-hoa-sang-chu-thuong">Chữ hoa sang chữ thường</a></li>
                           <!-- <li><a href="">Bỏ khoảng cách</a></li>-->
                        </ul>
                    </li>
                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>">Kiểm tra SEO</a></li>
                    <li><a href="/lien-he.php">Liên hệ</a></li>
                    <li><a href="#">Tin tức</a></li>
                </ul>
                <div class="clear"></div>
			   </div>
			   <?php

	if ($_GET['id'] == "home") {
$hhhh = "";

} elseif (file_exists($filename) === false ) {
 $hhhh = "display:none";
} else {
  
   echo "Tags ".$_GET['id']." này không tồn tại!";
}
	?>
			   <div style="<?php echo $hhhh; ?>">
				<div class="txtt"><h3>Công cụ seo từ khoá - Web SEO người Đồng Tháp</h3></div>
<div class="seoer"><h2>SEO</h2></div>
  <div  class="search-wrapper cf">
        <input type="text" id="domain" placeholder="Xem từ khoá của web VD: http://dongthapseo.com"  required="">
        <button type="submit" onclick="okokkokoko();">Xem</button>
    </div>
	<div id="output"></div>  
	</div>
<?php
		if ($_GET['id'] == "home") {


} elseif (!isset($_GET['id']) || ($_GET['tag'])) {
	/////////
	
	//	echo str_replace("-"," ",$tenmien);
		
		
	  
	  $filename2 = "https://".$_SERVER['SERVER_NAME']."/tukhoaa/".$tenmien.".txt"; 
	//	$myfile2 = fopen($filename2, "r") or die("");

//$dom = fgets($myfile2);

//echo '<div class="se0" >'.$dom.'</div>';


//fclose($myfile2);
///
///mo tieu de
echo '<div class="txtt" >';
echo '<h1>'.str_replace("-", " ",$_GET['tag']).'</h1>';
$myfile = fopen($filename17, "r") or die("Waiting...");
echo '<h2>'.fread($myfile,filesize($filename17)).'</h2>';
fclose($myfile);
echo '</div>';
///dong tieu de
//mo tu khoa
echo '<div class="se0" ><h3>';
$myfile = fopen($filename22, "r") or die("Waiting...");

$myArray = explode( ',', fgets($myfile) );
foreach($myArray as $my_Array){
  
   $chinh = str_replace("-"," ",$_GET['tag']);
   //$chinh = str_replace("/"," ",$_GET['tag']);
   if ($chinh == $my_Array) {
	   echo '<a href="http://'.$tenmien.'/'.'" >'.$my_Array.', </a> ';   
   } else {
	    echo '<a href="https://'.$_SERVER['SERVER_NAME'].'/tags/'.$tenmien.'/'.str_replace(" ","-",$my_Array).'" >'.$my_Array.', </a> ';  
   }
}
fclose($myfile);
echo '</h3></div>';
///dong tu khoa
	
	////////
 }else {
	
if (file_exists($filename01)) { // kiem tra web ton tai

		
		
	//	echo str_replace("-"," ",$tenmien);
		
		
	  
	  $filename2 = "https://".$_SERVER['SERVER_NAME']."/tukhoaa/".$tenmien.".txt"; 
	//	$myfile2 = fopen($filename2, "r") or die("");

//$dom = fgets($myfile2);

//echo '<div class="se0" >'.$dom.'</div>';


//fclose($myfile2);
///
echo '<div class="txtt" ><h1>'.$_GET['id'].'</h1></div>';
echo '<div class="se0" ><h3>Xem Tags và Hình ảnh trang này</h3></div>';
echo '<div class="se0" ><h2>';
$myfile = fopen($filename22, "r") or die("Waiting...");

$myArray = explode( ',', fgets($myfile) );
foreach($myArray as $my_Array){
$d1023 = str_replace(" ","-",$my_Array);
$d1024 = str_replace("/","",$d1023);

   echo '<a href="https://'.$_SERVER['SERVER_NAME'].'/tags/'.$tenmien.'/'.$d1024.'" >'.$my_Array.', </a> ';  
}
fclose($myfile);

echo '</h2></div>';
//echo '<center><h3><a href="https://'.$_SERVER['SERVER_NAME'].'/imgs/'.$tenmien.'">Xem hình ảnh trang này!</a></h3></center></div>';
///
	
} else {
	echo '<div class="konaki">';
	echo '<div class="se0">Trang web bạn yêu cầu hiển thị Tags không tồn tại trong dữ liệu chúng tôi!</div>';
	echo '<div class="txtt">Ô Không!</div>';
	echo '<div class="se0">Nhưng bạn có thể dùng Kiểm tra SEO để kiểm tra web của bạn :D</div>';
	echo '<br/><img src="/images/konaki.png"/>';
	echo '</div>';
}

} 
		?>
		<?php
		if ($_GET['id'] == "home") {


} else {
	//echo "<br/>
	//	<center><iframe data-aa='209181' src='https://ad.a-ads.com/209181?size=990x90' scrolling='no' style='width:990px; height:90px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
//</center>";
}
		
		?>
	<!--<center><a href="https://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>-->


  </div>
	</body>
</html>
<?php 
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
?>