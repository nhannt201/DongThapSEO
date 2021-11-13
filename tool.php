<?php $hienan = "hien"; ?>
<?php
if (file_exists("laivt_firewall.php"))
   include_once "laivt_firewall.php";   
if (file_exists("anti_dos.php"))
   include_once "anti_dos.php";   
if (file_exists("Firewall.php"))
   include_once "Firewall.php"; 
?>
<!DOCTYPE HTML>
<!--
	DongThapSEO
	dongthapseo.com | trungnhan21.12@gmail.com
	Web SEO nguoi Dong Thap
-->
<html lang="vi">
	<head>
				<title>Công cụ SEO | <?php if ($_GET['congcu'] == "bo-dau-tieng-viet") {
	echo "Bỏ dấu tiếng Việt - Đồng Tháp SEO";
} elseif ($_GET['congcu'] == "ping-web") {
echo "Ping Web - Đồng Tháp SEO";
} elseif ($_GET['congcu'] == "chu-hoa-sang-chu-thuong") {
	echo "Chữ hoa sang chữ thường - Đồng Tháp SEO";
}else {echo "Web SEO từ khoá - Kiểm tra SEO miễn phí";}?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico" />
		<!--<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico"/>-->
		<!--<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/main.css" />-->
		<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/check.css"/>
        <meta name="description" content="công cụ <?php if ($_GET['congcu'] == "bo-dau-tieng-viet") {
	echo "loại bỏ dấu tiếng việt, ";
} elseif ($_GET['congcu'] == "ping-web") {
echo "ping web đến công cụ tìm kiếm, ";
} elseif ($_GET['congcu'] == "chu-hoa-sang-chu-thuong") {
	echo "chuyển chữ hoa sang chữ thường, ";
}?>seo từ khoá trang web, tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top"/>
        <meta name="keywords" content="ping trang web,loai bo dau tieng viet,chu hoa sang chu thuong,tăng seo trang web,cách pagerank web,lên top thứ hạng google,seo tên miền,seo website,giá trị trang web,seo đồng tháp, keywords seo"/>
        <meta property="og:title" content="Công cụ SEO | <?php if ($_GET['congcu'] == "bo-dau-tieng-viet") {
	echo "Bỏ dấu tiếng Việt - Đồng Tháp SEO";
} elseif ($_GET['congcu'] == "ping-web") {
echo "Ping Web - Đồng Tháp SEO";
} elseif ($_GET['congcu'] == "chu-hoa-sang-chu-thuong") {
	echo "Chữ hoa sang chữ thường - Đồng Tháp SEO";
}else {echo "Web SEO từ khoá - Kiểm tra SEO miễn phí";}?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'];?>"/>
        <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/logo.png"/>
        <meta property="og:description" content="ping trang web,loai bo dau tieng viet,chu hoa sang chu thuong,công cụ seo từ khoá trang web, tăng lưu lượng truy cập,pagerank miễn phí,web seo người Đồng Tháp"/>
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
        <li><a href="/gioi-thieu.php">Giới thiệu</a></li>
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
<script async src="//longvan.link//www/delivery/asyncjs.php"></script>	
	</center>

	<div  class="search-wrapper cf">
        <input type="text" id="domain" placeholder="Website để seo VD: http://abc.com..." required="">
        <button type="submit" onclick="submit_Form_Ajax();">Check</button>
    </div>
	<div id="output"></div>  
	
<?php
if ($_GET['congcu'] == "bo-dau-tieng-viet") {
	echo '<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="50" name="textx">
Mời bạn nhập nội dung
</textarea><input name="btn_1" type="submit"  class="button"></form></div>';
} elseif ($_GET['congcu'] == "ping-web") {
	echo '<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="20" name="textx">
Mời bạn nhập địa chỉ url sitemap VD : http://www.domain.com/sitemap.xml
</textarea><input name="btn_2" type="submit"  class="button"></form></div>';
} elseif ($_GET['congcu'] == "chu-hoa-sang-chu-thuong") {
	echo '<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="20" name="textx">
Mời bạn nhập nội dung...
</textarea><input name="btn_3" type="submit"  class="button"></form></div>';
} else {
	echo "<center><h1>Các loại công cụ:</h1>
<div class='ph-container'>

        <a class='ph-button ph-btn-blue' href='/tools/bo-dau-tieng-viet'>Bỏ dấu tiếng việt</a>
    </div> <div class='ph-container'>

        <a class='ph-button ph-btn-grey' href='/tools/ping-web'>Ping Web</a>
    </div>  <div class='ph-container'>

        <a class='ph-button ph-btn-red' href='/tools/chu-hoa-sang-chu-thuong'>Chữ hoa sang chữ thường</a>
    </div></center> ";
}
if (isset($_POST['btn_1'])) {

$textx = $_POST['textx'];

echo '<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="50" name="textx">'.stripunicode($textx).'</textarea></form></div>';
} elseif (isset($_POST['btn_2'])) {
	$textx = $_POST['textx'];
	$sitemapUrl = $textx;

// cUrl handler to ping the Sitemap submission URLs for Search Engines…


//Google
$url = "http://www.google.com/webmasters/sitemaps/ping?sitemap=".$sitemapUrl;
$returnCode = myCurl($url);
echo "<p>Google Sitemaps has been pinged (return code: $returnCode).</p>";

//Bing / MSN
$url = "http://www.bing.com/ping?siteMap=".$sitemapUrl;
$returnCode = myCurl($url);
echo "<p>Bing / MSN Sitemaps has been pinged (return code: $returnCode).</p>";

//ASK
$url = "http://submissions.ask.com/ping?sitemap=".$sitemapUrl;
$returnCode = myCurl($url);
echo "<p>ASK.com Sitemaps has been pinged (return code: $returnCode).</p>";
}elseif (isset($_POST['btn_3'])) {

$textx = $_POST['textx'];
echo 'Chữ hoa sang thường:<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="50" name="textx">'.mb_strtolower($textx, 'UTF-8').'</textarea></form></div>';

echo 'Chữ thường sang hoa:<div class="bdtv"><form action="" name="bdtv" method="post">
<textarea rows="4" cols="50" name="textx">'.mb_strtoupper($textx, 'UTF-8').'</textarea></form></div>';
}
?>
<!--<center><a href="https://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>-->

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

function stripunicode($str){ 
    if(!$str) return false;
    $unicode = array('a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
                     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                     'd'=>'đ','D'=>'Đ',
                     'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                     'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                     'i'=>'í|ì|ỉ|ĩ|ị',
                     'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
                     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                     'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                     'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                     'y'=>'ý|ỳ|ỷ|ỹ|ỵ','Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ');
    foreach($unicode as $khongdau=>$codau) {
        $arr=explode("|",$codau);$str = str_replace($arr,$khongdau,$str);
    }
return $str;
}
function myCurl($url){
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  return $httpCode;
}

?>