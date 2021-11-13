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
				<title>Đồng Tháp SEO | Liên hệ - Kiểm tra SEO miễn phí</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico" />
		<link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/ico.ico"/>
		<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/main.css" />
		<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME'];?>/css/check.css"/>
        <meta name="description" content="công cụ seo từ khoá trang web, tăng truy cập trang web,seo web lên top google,tăng hạng mục website,không gian seo top"/>
        <meta name="keywords" content="tăng seo trang web,cách pagerank web,lên top thứ hạng google,seo tên miền,seo website,giá trị trang web,seo đồng tháp, keywords seo"/>
        <meta property="og:title" content="Đồng Tháp SEO | Liên hệ - Kiểm tra SEO miễn phí"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'];?>"/>
        <meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME'];?>/images/logo.png"/>
        <meta property="og:description" content="công cụ seo từ khoá trang web, tăng lưu lượng truy cập,pagerank miễn phí,web seo người Đồng Tháp"/>
		<script type="text/javascript" src="https://<?php echo $_SERVER['SERVER_NAME'];?>/js/data.js"></script>
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
<script async src="//longvan.link//www/delivery/asyncjs.php"></script>	</center>

	<div  class="search-wrapper cf">
        <input type="text" id="domain" placeholder="Website để seo VD: http://abc.com..." required="">
        <button type="submit" onclick="submit_Form_Ajax();">Check</button>
    </div>
	<div id="output"></div>  
	<div id="form-wrapper">
  
        <div id="form-inner">
 
        	<div class="se0" ><h2>Mọi chi tiết xin vui lòng liên hệ về địa chỉ: </h2><br/> <h3>Email : trungnhan21.12@gmail.com</h3><br/><h3>Facebook : fb.com/dongthapseo/</h3><br/> <b>Thông thường các email liên hệ của bạn sẽ được xử lí trong vòng 48h. Nếu có các thắc mắc bạn hãy liên hệ với Fanpage FB hoặc gửi Mail phía dưới.</b>  </div>
<li>
<div id='form' class='_form'>
  <form action='/lien-he.php' method='POST' name='addUser'>

    <fieldset>
      <legend>Name</legend>
      <input type='text' name='name' placeholder=' Name and surname' />
    </fieldset>

    <fieldset>
      <legend>Email</legend>
      <input type='text' name='email' placeholder=' Email' />
    </fieldset>


    <fieldset>
      <legend>Message:</legend>
      <textarea name='message' placeholder=' Write message..' rows="4" cols="50"></textarea><br/>
    </fieldset>


    <input type='submit' name='submit' class="button" value='SEND' />
  </form>
</div>
        </div>
  
</div>
<style>
#form-wrapper {
    width: 700px;
    height: 500px;
    margin: 0 auto;
    padding: 20px;
    position: relative;
    border: 1px solid #ddd;
    background-color: #fff;
    background-image: repeating-linear-gradient
                        (135deg,#844049,#844049,
                        #fff 50px, #fff 150px,
                        #3e4996 100px, #3e4996,
                        #fff 200px, #fff 300px);
}
 
#form-wrapper:before, #form-wrapper:after {
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 15px;
    left: 10px;
    width: 50%;
    top: 80%;
    max-width:300px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
    transform: rotate(-3deg);
}
 
#form-wrapper:after {
    transform: rotate(3deg);
    right: 10px;
    left: auto;
}
#form-wrapper .button {
    float: right;
    margin: 10px 0 0 0;
    padding: 7px 15px;
    cursor: pointer;
    color: #fff;
    font: bold 13px Tahoma, Verdana, Arial;
    text-transform: uppercase;
    overflow: visible; /* IE6/7 fix */
    border: 0;
    background-color: #7089b3;
    background-image: linear-gradient(#a5b8da, #7089b3);
    border-radius: 3px;
    text-shadow: 0 1px 0 rgba(0,0,0,.3);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5), 0 3px 0 rgba(0, 0, 0, 0.7);
}
 
#form-wrapper .button:hover {
    background-color: #a5b8da;
    background-image: linear-gradient(#7089b3, #a5b8da);
}
#form-wrapper .li{
     list-style:square;

}
 
#form-wrapper .button:active {
    background: #64799e;
    position: relative;
    top: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.7) inset;
}
#form [type=text], #form textarea {
    width: 100%;
    display: block;
}
#form [type=submit]{
    width: 100%;
    display: block;
}
._form [type=checkbox], ._form [type=checkbox]+span, ._form [type=text], ._form [type=radio], ._form [type=radio]+span, ._form [type=submit], ._form [type=text], ._form fieldset, ._form label, ._form label input+span:before, ._form legend, ._form textarea {
    -webkit-transition-property: background-color,color,border;
    transition-property: background-color,color,border;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
}
._form .input-select, ._form [type=text], ._form [type=text], ._form textarea {
    background: #f5f5f5;
}
._form .input-select, ._form .input-text, ._form [type=checkbox]+span:before, ._form [type=text], ._form [type=submit], ._form [type=text], ._form textarea {
    border-radius: 4px;
}
._form .input-select, ._form [type=text], ._form [type=text], ._form textarea {
    border: 2px solid #f5f5f5;
}
._form [type=text], ._form [type=submit], ._form [type=text] {
    padding: 0 12.5px;
}
._form .input-select, ._form [type=checkbox], ._form [type=checkbox]+span, ._form [type=text], ._form [type=radio], ._form [type=radio]+span, ._form [type=submit], ._form [type=text] {
    display: block;
    height: 50px;
    line-height: 50px;
    color: #rgba(104, 115, 199, 0.14);
}
input, textarea, keygen, select, button, meter, progress {
    -webkit-writing-mode: horizontal-tb;
}
#form * {
    font-size: 14px;
}

#form * {
    font-size: 14px;
}

div#form._form
* {
    padding: 0;
    margin: 0;
    border: 0;
    outline: 0;
    font-family: "Open Sans";
    box-sizing: border-box;
    -webkit-text-size-adjust: none;
}

</style>
	
	<?php
if (isset($_POST['submit'])) {

$myname = $_POST['name'];

$maill = $_POST['email'];

$messger = $_POST['message'];




	$to = "trungnhan21.12@gmail.com";
$subject = "Góp ý từ ".$myname;
$txt = $messger;
$headers = "From: $maill" . "\r\n" .
"CC: trungnhan21.12@gmail.com";

mail($to,$subject,$txt,$headers);

}
	?>
	<br/>
<center><a href="https://www.dmca.com/Protection/Status.aspx?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-05.png?ID=dcde88ce-ff29-4bc0-bf51-d97f46d6ee79" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>


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