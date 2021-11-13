<?php
if (file_exists("laivt_firewall.php"))
   include_once "laivt_firewall.php";   
if (file_exists("anti_dos.php"))
   include_once "anti_dos.php";   
if (file_exists("Firewall.php"))
   include_once "Firewall.php"; 
?>
<?php

$hienan = "hien"; $ttk = "style='display:none'"; 
$filename = "datawb/".$_GET["domain"].".txt";
$filename2 = "tukhoaa/".$_GET["domain"].".txt";
$filename3 = "diemweb/".$_GET["domain"].".txt";
$filename4 = "phanhoi/".$_GET["domain"].".txt";
$filename5 = "kbb/".$_GET["domain"].".txt";
$filename6 = "sohost/".$_GET["domain"].".txt";
$filename7 = "tainguyen/".$_GET["domain"].".txt";
$filename8 = "tainguyen2/".$_GET["domain"].".txt";
$filename9 = "htmlkb/".$_GET["domain"].".txt";
$filename10 = "csskb/".$_GET["domain"].".txt";
$filename11 = "imgkb/".$_GET["domain"].".txt";
$filename12 = "jskb/".$_GET["domain"].".txt";
$filename13 = "otherkb/".$_GET["domain"].".txt";
$filename14 = "jsrs/".$_GET["domain"].".txt";
$filename15 = "cssrs/".$_GET["domain"].".txt";
$filename16 = "mota/".$_GET["domain"].".txt";
$filename17 = "tieude/".$_GET["domain"].".txt";
$tenmien2 = "urlweb/".$_GET["domain"].".txt";
$tenten = $_GET['domain'];
if (file_exists($tenmien2)) {
$myfile222 = fopen($tenmien2, "r") or die("");
$dom22 = fgets($myfile222);
}
?>
<?php error_reporting(E_ALL); //Hiển thị tất cả các lỗi ?>
<?php 
if (file_exists($filename) === false ) {
include "404.php"; 
} else {
   
	

?>
<!DOCTYPE HTML>
<!--
	DongThapSEO
	dongthapseo.tk | trungnhan21.12@gmail.com
	Web SEO nguoi Dong Thap
-->
<html>
	<head>
		<title>DongThapSEO - <?php if (file_exists($filename17)) {
 include "$filename17"; } else { echo $_SERVER['SERVER_NAME']; }?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="images/ico.ico" />
		<!--<link rel="shortcut icon" href="images/ico.ico"/>-->
		<!--<link rel="stylesheet" href="css/main.css" />-->
		<link rel="stylesheet" href="css/check.css"/>
        <meta name="description" content="<?php if (file_exists($filename16)) {
 include "$filename16"; } else { echo "công cụ seo từ khoá trang web, tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top"; }?>"/>
        <meta name="keywords" content="<?php if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';


 include "$filename2"; }?>"/>
 		<meta property="og:site_name" content="DongThapSEO - <?php if (file_exists($filename17)) {
 include "$filename17"; } else { echo "Web SEO từ khoá miễn phí"; }?>" />
        <meta property="og:title" content="DongThapSEO - <?php if (file_exists($filename17)) {
 include "$filename17"; } else { echo "Web SEO từ khoá miễn phí"; }?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME']."/".$tenten;?>.html"/>
        <meta property="og:image" content="images/logo.png"/>
        <meta property="og:description" content="<?php if (file_exists($filename16)) {
 include "$filename16"; } else { echo "công cụ seo từ khoá trang web, tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top"; }?>"/>
		<script async  src="js/data.js"></script>
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
        <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>">Trang chủ</a></li>
        <li><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/tags/home/">Tra cứu</a></li>
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


	<div id="output"></div>  
<center>
<div class="ph-container">
  
    
        <a class='ph-button ph-btn-blue' onclick="submit_Form_Ajax();">Cập nhật dữ liệu</a>
  
  
   
        <a href='http://<?php echo $_SERVER['SERVER_NAME'];?>/tags/<?php echo $tenten; ?>/' class='ph-button ph-btn-green'>Xem Tag</a>
   
  
  
        <a href='/#check-after' class='ph-button ph-btn-grey'>Web vừa check</a>
    
  
		<a target="_blank" class='ph-button ph-btn-red' href="https://www.facebook.com/sharer/sharer.php?u=http://<?php echo $_SERVER['SERVER_NAME'];?>/<?php echo $tenten; ?>.html">Chia sẻ</a>
    </div>   </center> 
  <div  class="search-wrapper cf">
        <input type="text" id="domain" placeholder="Website để seo VD: http://abc.com..." value="<?php  if (file_exists($tenmien2)) { include "$tenmien2"; } ?>" required="">
        <button type="submit" onclick="submit_Form_Ajax();">Check</button>
    </div>


<div class="ph-clear"></div>   
	<div style=" text-align: inherit;	text-align: left;		">
	
		<?php
		

if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';


$ttk = "";
} else {
    echo "<center>Xin lỗi, trang ".$_GET['domain']." bạn yêu cầu không tồn tại!</center></br>";
	
	//echo $filename;
}

//if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  //  echo("$url is a valid URL");
//} else {
  // echo "<center>$url Xin lỗi, trang ".$_GET['domain']." bạn yêu cầu không tồn tại!</center>";
//}


		?>
			<div <?php echo $ttk;?>>

			<table class="table-fill">
<thead>
<tr>
<th class="text-left">Ảnh thu nhỏ <?php echo $_GET['domain'];?></th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">	<?php 
if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';



	echo '<center><a href="'.$dom22.'" rel="nofollow" target="_blank"><img alt="'.$dom22.'" src="http://free3.pagepeeker.com/v2/thumbs.php?size=x&amp;url='.$dom22.'"></a></center><br/>';
}
	?><p/>
</td>
</tr>
<?php if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';


 include "$filename"; }?>
<?php 
if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';



echo "<tr>
<td class=\"text-left\">	<b>Từ khoá:</b> ";
$myfile = fopen($filename2, "r") or die("Waiting...");

$myArray = explode( ',', fgets($myfile) );
foreach($myArray as $my_Array){
   echo '<a href="http://'.$_SERVER['SERVER_NAME'].'/tags/'.$tenten.'/'.str_replace(" ","-",$my_Array).'" class="tag">'.$my_Array.'</a> ';  
}
fclose($myfile);
echo "</td></tr>";
}
?>

<tr>

<th class="text-left\">Thông tin khác</th>
</tr>
<tr>
<td class="text-left">	<b>IP Server:</b>	<?php
if (file_exists($filename)) {
function host2ip($host)
{
    $host=trim($host.'.'); // clean and add root .
    $ip= gethostbyname($host);
    if($ip==$host) $ip='';// empty IP if there is no ip
    return $ip;
}
if (file_exists($tenmien2)) {
//$myfile22 = fopen($tenmien2, "r") or die("");
//$dom2 = fgets($myfile22);
//$a222 = str_replace(':2083','',$dom2);
//$a2222 = str_replace(':2082','',$a222);
//$a22222 = str_replace(':80','',$a2222);
//$a222222 = str_replace(':21','',$a22222);


    
if (strlen(host2ip($tenten)) < 1  ) {
	echo "Không thể xác định!";
} else {
	 echo host2ip($_GET['domain']);
}

}
}
?></script>
</h2>
</td>

</tr>
<tr>
<td class="text-left">	<b>Alexa:</b>	<?php if (file_exists($filename)) {

//Call the function like this

   // echo "The file $filename exists";
	//$my_file = 'file.txt';

if (file_exists($tenmien2)) {

$myfile2 = fopen($tenmien2, "r") or die("");

$dom = fgets($myfile2);
//////////////
  $tenmien1 = str_replace("https","",$dom);
	  $tenmien2 = str_replace(":","",$tenmien1);
	  $tenmien3 = str_replace("/","",$tenmien2);
	  $tenmien4 = str_replace("http","",$tenmien3);
	  $tenmien = str_replace("www.","",$tenmien4);
//if(checkDomainAvailability($dom)) {
//	print "Domain '$dom' available.";
//} else {
	//print "Domain '$dom' NOT available. Sorry!";
//}
$url=$tenmien;
$xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
$rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
$web=(string)$xml->SD[0]->attributes()->HOST;
echo " của ".ucwords($web)." có thứ hạng toàn cầu là ".VndDot($rank);
/////////////fsdf

///////////////////
fclose($myfile2);
}
} else { 
echo " Không xác định!";

}
?></script>
</h2>
</td>

</tr>
<tr>
<td class="text-left">	<b>Tình trạng máy chủ:</b>	
<?php
if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';



$wait = 1; // wait Timeout In Seconds
$host = $_GET['domain'];
$ports = [
    'http'  => 80,
];

foreach ($ports as $key => $port) {
    $fp = @fsockopen($host, $port, $errCode, $errStr, $wait);
   // echo "Ping $host:$port ($key) ==> ";
    if ($fp) {
                echo 'Hoạt động';
        fclose($fp);
    } else {
        echo 'Không hoạt động';
    }
    //echo PHP_EOL; 
}
}
?>
</script>
</h2>
</td>

</tr>
<tr>
<td class="text-left">	<b>Điểm tốc độ:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename3";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Mã phản hồi:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename4";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Dung lượng:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename5";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Số host:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename6";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Số tài nguyên:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename7";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Số tài nguyên tĩnh:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename8";
 
}


?>


</td>

</tr>
<tr>
<td class="text-left">	<b>Dung lượng html:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename9";
 
}


?>


</td>

</tr>
<tr>

<td class="text-left">	<b>Dung lượng css:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename10";
 
}


?>


</td>

</tr>
<tr>

<td class="text-left">	<b>Dung lượng ảnh:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename11";
 
}


?>


</td>

</tr>
<tr>

<td class="text-left">	<b>Dung lượng JavaScript:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename12";
 
}


?>


</td>
</tr>
<tr>

<td class="text-left">	<b>Dung lượng khác:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename13";
 
}


?>


</td>
</tr>

<tr>

<td class="text-left">	<b>Tài nguyên JavaScript:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename14";
 
}


?>


</td>
</tr>
<tr>

<td class="text-left">	<b>Tài nguyên Css:</b>	
<?php
if (file_exists($filename)) {
  
 include "$filename15";
 
}


?>


</td>
</tr>
<tr>
<td class="text-left">	<b>Whois:</b><?php if (file_exists($filename)) {
   // echo "The file $filename exists";
	//$my_file = 'file.txt';


$dsdsa = get_by_curl( "http://www.whois.net.vn/whois.php?domain=".$_GET['domain']."&act=getwhois ");

$ads2 =  str_replace("Access to Public Interest Registry WHOIS information is provided to assist persons in determining the contents of a domain name registration record in the Public Interest Registry registry database. The data in this record is provided by Public Interest Registry for informational purposes only, and Public Interest Registry does not guarantee its accuracy. This service is intended only for query-based access. You agree that you will use this data only for lawful purposes and that, under no circumstances will you use this data to(a) allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising or solicitations to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names or modify existing registrations. All rights reserved. Public Interest Registry reserves the right to modify these terms at any time. By submitting this query, you agree to abide by this policy.","
Access to Public Interest Registry WHOIS information 
is provided to assist persons in determining the contents of a domain name 
registration record in the Public Interest Registry registry database. 
The data in this record is provided by Public Interest Registry for 
informational purposes only, and Public Interest Registry does not guarantee its accuracy. 
This service is intended only for query-based access. 
You agree that you will use this data only for lawful purposes and that,
 under no circumstances will you use this data to(a) allow, enable, 
or otherwise support the transmission by e-mail, telephone, or facsimile
 of mass unsolicited, commercial advertising or solicitations to entities other than 
 the data recipient's own existing customers; or (b) enable high volume, automated,
 electronic processes 
that send queries or data to the systems of Registry Operator, a Registrar,
 or Afilias except as reasonably necessary to register domain names or modify 
 existing registrations. All rights reserved. Public Interest Registry reserves 
 the right to modify these terms at any time. 
By submitting this query, you agree to abide by this policy.",$dsdsa);

$ads3 = str_replace("Access to AFILIAS WHOIS information is provided to assist persons in determining the contents of a domain name registration record in the Afilias registry database. The data in this record is provided by Afilias Limited for informational purposes only, and Afilias does not guarantee its accuracy.  This service is intended only for query-based access. You agree that you will use this data only for lawful purposes and that, under no circumstances will you use this data to(a) allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising or solicitations to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names or modify existing registrations. All rights reserved. Afilias reserves the right to modify these terms at any time. By submitting this query, you agree to abide by this policy.","
Access to AFILIAS WHOIS information is provided to assist persons in determining the contents 
of a domain name registration record in the Afilias registry database. 
The data in this record is provided by Afilias Limited for informational purposes only,
 and Afilias does not guarantee its accuracy.  
This service is intended only for query-based access. 
You agree that you will use this data only for lawful purposes and that, under no circumstances will
 you use this data to(a) allow, enable, or otherwise support the transmission by e-mail, 
 telephone, or facsimile of mass unsolicited, commercial advertising 
or solicitations to entities other than the data recipient's own existing customers; or
 (b) enable high volume, automated, electronic processes that send queries or data to the systems 
 of Registry Operator, a Registrar, 
 or Afilias except as reasonably necessary to register domain names or modify existing registrations. 
All rights reserved. Afilias reserves the right to modify these terms at any time.
 By submitting this query, you agree to abide by this policy.",$ads2);
 $ads4 = str_replace("Access to WHOIS information is provided to assist persons in determining the contents of a domain name registration record in the registry database. The data in this record is provided by The Registry Operator for informational purposes only, and accuracy is not guaranteed.  This service is intended only for query-based access. You agree that you will use this data only for lawful purposes and that, under no circumstances will you use this data to(a) allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising or solicitations to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names or modify existing registrations. All rights reserved. Registry Operator reserves the right to modify these terms at any time. By submitting this query, you agree to abide by this policy.","Access to WHOIS information is provided to assist persons in determining the contents
 of a domain name registration record in the registry database.
 The data in this record is provided by The Registry Operator for informational
 purposes only, and accuracy is not guaranteed.  This service is intended only
 for query-based access. You agree that you will use this data only for lawful purposes 
 and that, under no circumstances will you use this data to(a) allow, enable, or otherwise 
 support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial 
 advertising or solicitations to entities other than the data recipient's own existing customers; 
 or (b) enable high volume, automated, electronic processes that send queries or data to the systems 
 of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names
 or modify existing registrations. All rights reserved. Registry Operator reserves the right to
 modify these terms at any time. By submitting this query, you agree to abide by this policy.",$ads3);
 
 $ads5 = str_replace("Access to .IN WHOIS information is provided to assist persons in determining the contents of a domain name registration record in the .IN registry database. The data in this record is provided by .IN Registry for informational purposes only, and .IN does not guarantee its accuracy.  This service is intended only for query-based access. You agree that you will use this data only for lawful purposes and that, under no circumstances will you use this data to(a) allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising or solicitations to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names or modify existing registrations. All rights reserved. .IN reserves the right to modify these terms at any time. By submitting this query, you agree to abide by this policy.
","Access to .IN WHOIS information is provided to assist persons in determining the contents of
 a domain name registration record in the .IN registry database. The data in this record is provided by .
 IN Registry for informational purposes only, and .IN does not guarantee its accuracy.  This service is 
 intended only for query-based access. You agree that you will use this data only for lawful purposes
 and that, under no circumstances will you use this data to(a) allow, enable, or otherwise support the 
 transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising or solicitations 
 to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, 
 electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias 
 except as reasonably necessary to register domain names or modify existing registrations. All rights reserved.
 .IN reserves the right to modify these terms at any time. By submitting this query, you agree to abide by
 this policy.
",$ads4);
$ads6 = str_replace("TERMS OF USE: The information in the Whois database is collected through ICANN-accredited registrars. Jiangsu bangning science & technology Co., Ltd(â��BANGNINGâ��)Â make this information available to you and do not guarantee its accuracy or completeness. By submitting a whois query, you agree to abide by the following terms of use: you agree that you may use this data only for lawful purposes and that under no circumstances will you use this data to:  (1) to allowï¼� enableï¼� or otherwise support the transmission of mass unsolicitedï¼� commercial advertising or solicitations via direct mailï¼� electronic mailï¼� or by telephone; (2) in contravention of any applicable data and privacy protection acts; or (3) to enable high volumeï¼� automatedï¼� electronic processes that apply to BANGNING (or its computer systems). Compilationï¼� repackagingï¼� disseminationï¼� or other use of the WHOIS database in its entiretyï¼� or of a substantial portion thereofï¼� is not allowed without BANGNING prior written permission. You agree not to use electronic processes that are automated and high-volume to access or query the whois database except as reasonably necessary to register domain names or modify existing registrations. BANGNING reserves the right to restrict your access to the whois database in its sole discretion to ensure operational stability.  BANGNING may restrict or terminate your access to the whois database for failure to abide by these terms of use. BANGNING reserves the right to modify these terms at any time without prior or subsequent notification of any kind.","TERMS OF USE: The information in the Whois database is collected through ICANN-accredited registrars.
 Jiangsu bangning science & technology Co., Ltd(â��BANGNINGâ��)Â make this information available to you 
 and do not guarantee its accuracy or completeness. By submitting a whois query, you agree to abide by 
 the following terms of use: you agree that you may use this data only for lawful purposes and that under 
 no circumstances will you use this data to:  (1) to allowï¼� enableï¼� or otherwise support the transmission
 of mass unsolicitedï¼� commercial advertising or solicitations via direct mailï¼� electronic mailï¼� or
 by telephone; (2) in contravention of any applicable data and privacy protection acts; or (3) to enable 
 high volumeï¼� automatedï¼� electronic processes that apply to BANGNING (or its computer systems). 
 Compilationï¼� repackagingï¼� disseminationï¼� or other use of the WHOIS database in its entiretyï¼� or
 of a substantial portion thereofï¼� is not allowed without BANGNING prior written permission. You agree 
 not to use electronic processes that are automated and high-volume to access or query the whois database 
 except as reasonably necessary to register domain names or modify existing registrations. BANGNING reserves 
 the right to restrict your access to the whois database in its sole discretion to ensure operational stability.
 BANGNING may restrict or terminate your access to the whois database for failure to abide by these terms of use.
 BANGNING reserves the right to modify these terms at any time without prior or subsequent notification of any kind. 
",$ads5);
$ads7 = str_replace("TERMS OF USE:","TERMS OF USE: <br/>",$ads6);
$ads8 = str_replace("registrars.","registrars. <br/>",$ads7); 
$ads8 = str_replace("available to you and do not","available to you and do not<br/>",$ads8);
$ads8 = str_replace("of use:","of use:<br/>",$ads8);
$ads8 = str_replace("this data","this data<br/>",$ads8);
$ads8 = str_replace("commercial advertising","commercial advertising<br/>",$ads8);
$ads8 = str_replace("applicable data","applicable data<br/>",$ads8);
$ads8 = str_replace("that apply to BANGNING","that apply to BANGNING<br/>",$ads8);
$ads8 = str_replace("WHOIS database in its","WHOIS database in its<br/>",$ads8);
$ads8 = str_replace("BANGNING prior written permission.","BANGNING prior written permission.<br/>",$ads8);
$ads8 = str_replace("You agree","You agree<br/>",$ads8);
$ads8 = str_replace("whois database except as","whois database except as<br/>",$ads8);
$ads8 = str_replace("the right to restrict","the right to restrict<br/>",$ads8);
$ads8 = str_replace("BANGNING may restrict or","BANGNING may restrict or<br/>",$ads8);
$ads8 = str_replace("BANGNING reserves the right to","BANGNING reserves the right to<br/>",$ads8);
$ads8 = str_replace("Access to .IN WHOIS information is provided to assist persons in determining the contents of a domain name registration record in the .IN registry database. The data in this record is provided by .IN Registry for informational purposes only, and .IN does not guarantee its accuracy.  This service is intended only for query-based access. You agree
","Access to .IN WHOIS information is provided to assist persons in determining the contents of a domain name 
registration record in the .IN registry database. The data in this record is provided by .IN Registry for 
informational purposes only, and .IN does not guarantee its accuracy.  This service is intended only for query-
based access. You agree
",$ads8);
$ads8 = str_replace(" to(a) allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile of mass unsolicited, commercial advertising
"," to(a) allow, enable, or otherwise support the transmission by e-mail, telephone,
 or facsimile of mass unsolicited, commercial advertising
",$ads8);
$ads8 = str_replace(" or solicitations to entities other than the data recipient's own existing customers; or (b) enable high volume, automated, electronic processes that send queries or data to the systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain names or modify existing registrations. All rights reserved. .IN reserves the right to modify these terms at any time. By submitting this query, you agree to abide by this policy.
"," or solicitations to entities other than the data recipient's own existing customers; 
or (b) enable high volume, automated, electronic processes that send queries or data to the 
systems of Registry Operator, a Registrar, or Afilias except as reasonably necessary to register domain
 names or modify existing registrations. All rights reserved. .IN reserves the right to modify these terms 
 at any time. By submitting this query, you agree to abide by this policy.
",$ads8);
$ads8 = str_replace("contents of a domain name registration","contents of a domain name registration<br/>",$ads8);
$ads8 = str_replace("and .IN does not guarantee its","and .IN does not guarantee its<br/>",$ads8);
$ads8 = str_replace(".IN Registry for informational",".IN Registry for informational<br/>",$ads8);
$ads8 = str_replace("telephone, or facsimile","telephone, or facsimile<br/>",$ads8);
$ads8 = str_replace("own existing customers; or (b) enable high volume,","own existing customers; or (b) enable high volume,<br/>",$ads8);
$ads8 = str_replace(" Registry Operator, a Registrar,"," Registry Operator, a Registrar,<br/>",$ads8);
$ads8 = str_replace("All rights reserved.","All rights reserved.<br/>",$ads8);
$ads8 = str_replace("  existing registrations. ","  existing registrations. <br/>",$ads8);
$ads8 = str_replace("For more information on Whois status codes, please visit https://www.icann.org/resources/pages/epp-status-codes-2014-06-16-en.","For more information on Whois status codes, please visit 
https://www.icann.org/resources/pages/epp-status-codes-2014-06-16-en.",$ads8);
$ads8 = str_replace("Terms of Use: Users accessing the Donuts WHOIS service must agree to use the data only for lawful purposes, and under under no circumstances use the data to: Allow, enable, or otherwise support the transmission by e-mail, telephone, or facsimile
","Terms of Use: Users accessing the Donuts WHOIS service must agree to use the data only for lawful
 purposes, and under under no circumstances use the data to: Allow, enable, or otherwise support the
 transmission by e-mail, telephone, or facsimile
",$ads8);
$ads8 = str_replace(" or solicitations to entities other than the registrar's own existing customers. Enable high volume, automated, electronic processes that send queries or data to the systems of Donuts or any ICANN-accredited registrar, except as reasonably necessary to register domain names or modify existing registrations. When using the Donuts Whois service, please consider the following: The Whois service is not a replacement for standard EPP commands to the SRS service. Whois is not considered authoritative for registered domain objects. The Whois service may be scheduled for downtime during production or OT&E maintenance periods. Queries to the Whois services are throttled. If too many queries are received from a single IP address within a specified time, the service will begin to reject further queries for a period of time to prevent disruption of Whois service access.
"," or solicitations to entities other than the registrar's own existing customers. 
Enable high volume, automated, electronic processes that send queries or data to the systems 
of Donuts or any ICANN-accredited registrar, except as reasonably necessary to register domain names
 or modify existing registrations. When using the Donuts Whois service, please consider the following: 
 The Whois service is not a replacement for standard EPP commands to the SRS service. 
 Whois is not considered authoritative for registered domain objects. The Whois service may be scheduled
 for downtime during production or OT&E maintenance periods. Queries to the Whois services are throttled.
 If too many queries are received from a single IP address within a specified time, the service will begin 
 to reject further queries for a period of time to prevent disruption of Whois service access.
",$ads8);
$ads8 = str_replace("existing customers. ","existing customers. <br/>",$ads8);
$ads8 = str_replace("send queries or data to the systems  ","send queries or data to the systems  <br/>",$ads8);
$ads8 = str_replace("necessary to register domain names","necessary to register domain names <br/>",$ads8);
$ads8 = str_replace("please consider the following:","please consider the following:<br/>",$ads8);
$ads8 = str_replace("commands to the SRS service.","commands to the SRS service.<br/>",$ads8);
$ads8 = str_replace("The Whois service may be scheduled","The Whois service may be scheduled<br/>",$ads8);
$ads8 = str_replace("Whois services are throttled.","Whois services are throttled.<br/>",$ads8);
$ads8 = str_replace("Allow, enable, or otherwise support","Allow, enable, or otherwise support<br/>",$ads8);
$ads8 = str_replace("WHOIS service must agree to use the data only","WHOIS service must agree to use the data only<br/>",$ads8);
$ads8 = str_replace("send queries or data to the systems of Donuts or","send queries or data to the systems of Donuts or<br/>",$ads8);
$ads8 = str_replace("to reject further queries for a period","to reject further queries for a period<br/>",$ads8);
$ads8 = str_replace("IP address within a specified","IP address within a specified<br/>",$ads8);

 echo $ads8;
}
?><p/>
</td>
</tr>


</tbody>

	</div>
</table>
<br/>
	<!--<center><a href="http://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>-->

</div>
		

	<!--<table class="table-fill">
<thead>
<tr>
<th class="text-left">Keywords mới</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">	<h3><a href="#">Akira</a></h3>	
</td>

</tr>
<tr>
<td class="text-left">	<h3><a href="#">Akira</a></h3>	
</td>

</tr><tr>
<td class="text-left">	<h3><a href="#">Akira</a></h3>	
</td>

</tr>
<tr>
<td class="text-left">	<h3><a href="#">Akira</a></h3>	
</td>

</tr>


</tr>

</tbody>
</table>


<br>-->

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
	
function checkDomainAvailability($domain) {
    if(preg_match('/[;\&\|\>\<]/', $domain)) exit; //Could be a hack attempt
    
     exec("whois " . escapeshellarg($domain), $output); //:CAREFUL:
     $result = implode("\n", $output);
    
    return (strpos($result, 'No match for domain') !== false);
}
?>
