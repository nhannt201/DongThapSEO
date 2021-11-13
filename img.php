<?php $hienan = "hien"; ?>
<?php
if (file_exists("laivt_firewall.php"))
   include_once "laivt_firewall.php";   
if (file_exists("anti_dos.php"))
   include_once "anti_dos.php";   
if (file_exists("Firewall.php"))
   include_once "Firewall.php"; 
?>
<?php
$tenmien = getOriginalURL(fulldomain($_GET['web']));
$tenten = $_GET['web'];
$tenmien1 = str_replace("https","",$tenmien);
	  $tenmien2 = str_replace(":","",$tenmien1);
	  $tenmien3 = str_replace("/","",$tenmien2);
	  $tenmien4 = str_replace("http","",$tenmien3);
	  $tenmien2 = str_replace("www.","",$tenmien4);
$filename = "http://".$_SERVER['SERVER_NAME']."/urlweb/".$tenmien2.".txt"; 
$filename01 = $_SERVER['DOCUMENT_ROOT']."/urlweb/".$tenmien2.".txt"; 
?>
<!DOCTYPE HTML>
<!--
	DongThapSEO
	dongthapseo.com | trungnhan21.12@gmail.com
	Web SEO nguoi Dong Thap
-->
<html lang="vi">
	<head>
				<title>Hình Ảnh | <?php if ($_GET['web'] == "") { echo "Công cụ xem ảnh";} else {echo ucwords($tenten);}?> - Kiểm tra SEO miễn phí</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico" />
		<!--<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico"/>-->
		<!--<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/main.css" />-->
		<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/check.css"/>
        <meta name="description" content="công cụ seo <?php if ($_GET['web'] == "") { echo "hình ảnh trang web";} else {echo "web ".ucwords($tenten);}?>, tăng truy cập trang web,seo <?php if ($_GET['web'] == "") { echo "hình ảnh trang em";} else {echo "web ".ucwords($tenten);}?> lên top google,tăng hạng mục website,không gian seo top, tăng seo thứ hạng hình ảnh"/>
        <meta name="keywords" content="<?php if ($_GET['web'] == "") { echo "công cụ xem ảnh,seo hình ảnh,";} else {echo "tăng seo trang ".$tenten;}?>,tăng seo trang web,cách pagerank web,lên top thứ hạng google,seo tên miền,seo website,giá trị trang web,seo đồng tháp, keywords seo"/>
        <meta property="og:title" content="Hình Ảnh | <?php echo ucwords($tenten); ?> - Kiểm tra SEO miễn phí"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'];?>"/>
        <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/logo.png"/>
        <meta property="og:description" content="công cụ seo từ khoá trang web, tăng lưu lượng truy cập,pagerank miễn phí,web seo người Đồng Tháp"/>
		<script async  src="https://<?php echo $_SERVER['SERVER_NAME'];?>/js/data.js"></script>
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
	
	<div style="width:100%">
<!--<script type='text/javascript'> window.onload = detectarCarga; function detectarCarga() { document.getElementById("imgLOAD").style.display="none"; } </script>
<div id="imgLOAD" style="position:fixed" align="center">
Loading...
		</div><script type="text/javascript" src="js/data.js"></script>-->

  <div style=" width:100%;float:center;">
  
	<header id="header">
  <div id="header-content">
    <div id="header-logo">
      <h1 class="logo">Đồng Tháp SEO</h1>
    </div>
    <nav id="header-nav" role="navigation">
      <ul class="nav">
        <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>">Trang chủ</a></li>
        <li><a href="https://<?php echo $_SERVER['SERVER_NAME'];?>/tags/home/">Tra cứu</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="/lien-he.php">Liên hệ</a></li>
      </ul>
    </nav>
    <div id="header-nav-toggle" class="is-hidden">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>
</div>
<div style="width:5%;float:left;">
<hr/>
<!--<div id="nav">
	<ul id="navbar">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Gallery<span id="arrow"> &rsaquo;&rsaquo;</span></a>
				<ul>
					<li><a href="#">Drop1<span id="arrow"> &rsaquo;&rsaquo;</span></a>
						<ul>
							<li><a href="#">Drop1 of 1</a></li>
							<li><a href="#">Drop2 of 1</a></li>
							<li><a href="#">Drop3 of 1</a></li>
							<li><a href="#">Drop4 of 1</a></li>
							<li><a href="#">Drop5 of 1</a></li>
						</ul>
					</li>
					<li><a href="#">Drop2<span id="arrow"> &rsaquo;&rsaquo;</span></a>
						<ul>
							<li><a href="#">Drop1 of 2</a></li>
							<li><a href="#">Drop2 of 2</a></li>
							<li><a href="#">Drop3 of 2</a></li>
							<li><a href="#">Drop4 of 2</a></li>
							<li><a href="#">Drop5 of 2</a></li>
						</ul>
					</li>
					<li><a href="#">Drop3<span id="arrow"> &rsaquo;&rsaquo;</span></a>
						<ul>
							<li><a href="#">Drop1 of 3</a></li>
							<li><a href="#">Drop2 of 3</a></li>
							<li><a href="#">Drop3 of 3</a></li>
							<li><a href="#">Drop4 of 3</a></li>
							<li><a href="#">Drop5 of 3<span id="arrow">&rsaquo;&rsaquo;</span></a>
								<ul>
									<li><a href="#">Level3</a></li>
									<li><a href="#">Level3</a></li>
									<li><a href="#">Level2</a></li>
									<li><a href="#">Level3</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Drop4</a></li>
				</ul>
			</li>
			<li><a href="#">Xã hội<span id="arrow"> &nbsp;&nbsp;&rsaquo;&rsaquo;</span></a>
				<ul>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Vkontakte</a></li>
					<li><a href="#">Google Plus</a></li>
					<li><a href="#">Facebook</a></li>
				</ul>
			</li>
			<li><a href="#">Liên hệ</a></li>
			<li><a href="#">Giới thiệu</a></li>
			<li><a href="#">Liên kết</a></li>
			<li><a href="#">Liên kết</a></li>
		</ul>
		</div>
	<div style="text-align: center;">
<img src="images/logo.png" width="10"/>
</div>-->
 </div>
  
  <div style=" height:80%;width:90%;float:left;background-color: rgba(255, 255, 255, 0.9);">
	<center>
<ins data-revive-zoneid="71" data-revive-id="01c96dccef53d8a42d06a3299af62928"></ins>
<script async src="//longvan.link//www/delivery/asyncjs.php"></script>	</center>

	<div  class="search-wrapper cf">
        <input type="text" id="domain" placeholder="Website để seo VD: http://abc.com..." required="">
        <button type="submit" onclick="submit_Form_Ajax();">Check</button>
    </div>
	<div id="output"></div>  
<div class="anh anh anh">

		<?php
		if (file_exists($filename01)) { // kiem tra web ton tai
		//$url = "http://luutru360.com";
//$content=file_get_contents($url);
//if (preg_match("/<img[^>]+>/i", $content, $matches)) 
//{
  //  echo "<br />";
    //echo $matches[0];
//}

include ('simple_html_dom.php');

//$html = file_get_html($tenmien);

$url = getOriginalURL($tenmien);
$context = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla compatible')));
$response = file_get_contents($url, false, $context);
$html = str_get_html($response);

    foreach( $html->find('img') as $image ){
     
      
		
		if (strlen(strstr($image->src, "http://")) > 0) {
    // echo $image->src;
	//  echo "<br>";
	
	if (file_exists($image->src)) {
	
	} else {
	echo '<img src="'.$image->src.'">';
	}

  } elseif (strlen(strstr($image->src, "data:image")) > 0) {
     //echo $image->src;
	  //echo "<br>";
	echo '<img src="'.$image->src.'">';
	   } elseif (strlen(strstr($image->src, "//")) > 0) {
    // echo $image->src;
	  //echo "<br>";
	 	if (file_exists($image->src)) {
	 	
	} else {
		echo '<img src="'.$image->src.'">';

	}
  } else {
   // echo "http://".$tenmien."/".$image->src;
  
   if (file_exists($tenmien.'/'.$image->src)) {
   
	} else {
		 echo '<img src="'.$tenmien.'/'.$image->src.'">';

	}
  }
  
    }
		} elseif ($_GET['web'] == "") {
			echo "<center><h2>Công cụ xem hình ảnh từ trang web</h2><br/>";
			echo "<img src='/images/logo.png'/></center>";
		}else {
			echo "<center><h2>Không tìm thấy tên miền này trong danh sách!</h2><br/>";
			echo "<img src='/images/logo.png'/></center>";
		}

		?>
	 <center><h2><?php echo $tenmien; ?></h2><br><!--<a href="https://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>--></center>

  </div>

	<div class="content">© 2016 Đồng Tháp SEO


</div>
</center>

	</div>
	<footer>

<div class="footer">
   <a href="https://www.facebook.com/dongthapseo/"><div class="social">&#62220;</div></a>
  <div class="social">&#62217;</div>
  <div class="social">&#62223;</div>
  <div class="social">&#62232;</div>
  <div class="social">&#62235;</div>
 <div class="social">&#62226;</div>
  <div class="social">&#62214;</div>

</div>
 </footer>
	</div>
	 <!--<div style="background-color:#aaa; height:400px;width:10%;float:left;">
	 <hr>
      <div id="menu">
 <ul>
 <li><a href="#">Trang chủ</a></li>
 <li><a href="#">Tin tức</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 <li><a href="#">TextLink</a></li>
 </ul>
</div>
<hr>
  </div>-->



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