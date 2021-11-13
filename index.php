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
				<title>Đồng Tháp SEO | Web SEO Từ Khoá - Kiểm tra SEO miễn phí</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico" />
		<!--<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico"/>-->
		<!--<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/main.css" />-->
		<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/check.css"/>
        <meta name="description" content="Dong Thap SEO là công cụ seo từ khoá , tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top hoàn toàn miễn phí ! Cộng cụ SEO người Đồng Tháp!"/>
        <meta name="keywords" content="tăng seo trang web,cách pagerank web,lên top thứ hạng google,seo tên miền,seo website,giá trị trang web,seo đồng tháp, keywords seo,đồng tháp,sen đồng tháp"/>
        <meta property="og:title" content="Đồng Tháp SEO | Web SEO Từ Khoá - Kiểm tra SEO miễn phí"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'];?>"/>
        <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/logo.png"/>
        <meta property="og:description" content="công cụ seo từ khoá trang web, tăng lưu lượng truy cập,pagerank miễn phí,web seo người Đồng Tháp"/>
		<script async src="https://<?php echo $_SERVER['SERVER_NAME'];?>/js/data.js"></script>
		<meta property="fb:admins" content="100006476596425"/>
		<meta name="google-site-verification" content="FtEzx2thg_bVQzJrpw9qPelkgk4sh_5woYRph-wXgJE" />
		<meta name="msvalidate.01" content="3EBC3DCB69D1E23E196EAD2DB317F929" />
                <meta name="google-site-verification" content="mrOfhTwcdWs7x5U-4f79VoNtAr4iu0I0xg_dx1RF9Ss" />
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
	

	<div style=" white-space: nowrap; text-align: inherit;	text-align: left;		">
<div <?php if ($hienan !== 'hien') {
	echo 'style="display:none"';
	} else {
		echo "";
		} ?>>

<!--<table class="table-fill">
<thead>
<tr>
<th class="text-left">Web vừa kiểm tra: <b><a href="https://<?php if (file_exists("1.txt")) {
	$myfile = fopen("1.txt", "r") or die("Waiting...");

$myArray = fgets($myfile) ;
echo str_replace('', ' ',$myArray);
fclose($myfile); }?>"><?php if (file_exists("1.txt")) {
	$myfile = fopen("1.txt", "r") or die("Waiting...");

$myArray = fgets($myfile) ;
echo str_replace('', ' ',$myArray);
fclose($myfile); }?></a></b></th>
</tr>
</thead>
</table>
<br/>-->
	<table class="table-fill">
<thead>
<tr>
<th class="text-left">Hướng dẫn</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">	<b>Bước 1:</b> Nhập Link web cần kiểm tra SEO <p/>
</td>
</tr>
<tr>
<td class="text-left">	<b>Bước 2:</b> Nhấn check để hệ thống kiểm tra web của bạn<p/>
</td>
</tr>
<tr>
<td class="text-left">	<b>Bước 3:</b> Chờ kết quả hệ thống trả về</h2>
</td>

</tr>

</tbody>

	</div>
</table>
<br/>
	<!--Test - Thu nghiem-->
<table class="table-fill">
<thead>
<tr>
<th class="text-left" id="check-after">Web vừa Check</th>
</tr>
</thead>
<tbody class="table-hover">
<?php
if (file_exists("1.txt")) {
$file = fopen("1.txt","r");
$file2 = fopen("1.txt","r");
while(! feof($file))
  {
	  while(! feof($file2))
  {
  echo '<tr><td class="text-left"><a href="https://'.$_SERVER['SERVER_NAME'].'/'.fgets($file2).'.html">'.fgets($file). '</a></td></tr>';
  }
  }

fclose($file);
fclose($file2);
}
?>

</tbody>

	</div>
</table>
<br/>

<!--End - Ket thuc Test-->

	<table class="table-fill">
<thead>
<tr>
<th class="text-left">Từa khoá mới</th>
</tr>
</thead>
<div class="keyword">
<tbody class="table-hover">
<?php
if (file_exists("1.txt")) {
$file = fopen("1.txt","r");
$file2 = fopen("1.txt","r");
while(! feof($file))
  {
	  while(! feof($file2))
  {
  echo '<tr><td class="text-left"><h3><a href="https://'.$_SERVER['SERVER_NAME'].'/tags/'.fgets($file2).'/">'.fgets($file). '</a></h3></td></tr>';
  }
  }

fclose($file);
fclose($file2);
}
?>

</tbody>
</table>

<br/>
<!--<center><a href="https://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>-->

	<div class="content">© 2016 Đồng Tháp SEO


</div>
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
<!--<style>
#ShareSidebar{
	top: 15%;
	width:275px;
	Right: 0 !important;
	overflow:hidden;
	position: fixed;
	z-index: 100000;
	text-align:center;
	line-height:normal;
	_position: absolute;
	font-size:9px;
</style>
 
<style>
#ShareSidebar2{
	top: 21%;
	
	overflow:hidden;
	position: fixed;
	z-index: 100000;
	text-align:center;
	line-height:normal;
	_position: absolute;
	font-size:9px;
	}
</style>
<div id="ShareSidebar">

<div style="float:left; margin:5px 0 0 0;"><img src="http://chientruongit.esy.es/Tet/anhdao.png"/></div>
</div>
<div id="ShareSidebar2">

<div style="float:left; margin:5px 0 0 0;"><img width="200px" src="http://i.imgur.com/68iqoKD.png"/></div>
</div>-->

  
	</body>
</html>