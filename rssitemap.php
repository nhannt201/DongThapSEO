<?php

//echo "<p>Dang khoi tao lan 1...</p>";
//echo "<p>Dang tao tap tin sitemap1.xml...</p>";
$t = "\t";
$n = "\n";
$xml = '<?xml version="1.0" encoding="UTF-8"?>'."$n";
$xml.= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.p">'."$n";
$my_file23 = 'sitemap1.xml';
$lastmod = date('Y-m-d\TH:i:sP');
//$so1 = "1";
$handle23 = fopen($my_file23, 'w+') or die('Error...'); //implicitly creates file

 foreach (glob("./urlweb/*.txt") as $filename) {
    //foreach (glob("./last/*.txt") as $filename0) {
	$a =  str_replace("./urlweb/","",$filename);
 $a2 =  str_replace(".txt","",$a);
  $a3 =  str_replace("/","",$a2);
  //$ax =  str_replace("./last/","",$filename0);
 //$a2x =  str_replace(".txt","",$ax);
  //$a3x =  str_replace("/","",$a2x);
  //$myfile = fopen("last/".$a3x.".txt", "r") or die("2016-06-10T02:2p:37+02:00");
  //echo 'http://'.$_SERVER['SERVER_NAME'].'/'.$a3.'.html';
  $xml.= '<url>'."$n";
//

//

	$xml.= "$t".'<loc>'.'https://'.$_SERVER['SERVER_NAME'].'/'.$a3.'.html</loc>'."$n";
	//$xml.= "$t".'<lastmod>'.fgets($myfile).'</lastmod>'."$n";
	$xml.= '</url>'."$n";
//fclose($myfile);
//$so1 = $so1 + 1 ;
//echo "<p>Dang them site ".$so1."...</p>";

  
 }
  $xml.= '</urlset>';
  fwrite($handle23, $xml);
fclose($handle23);
//echo "<p>Qua trinh tao site hoan tat!</p>";


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//echo "<p>Dang khoi tao lan 2...</p>";
//echo "<p>Dang tao tap tin sitemap2.xml...</p>";

$t = "\t";
$n = "\n";
$xml2 = '<?xml version="1.0" encoding="UTF-8"?>'."$n";
$xml2.= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.p">'."$n";
$my_file232 = 'sitemap2.xml';
$lastmod = date('Y-m-d\TH:i:sP');
//$so2 = "1";
$handle232 = fopen($my_file232, 'w+') or die('Error...'); //implicitly creates file

 foreach (glob("./urlweb/*.txt") as $filename) {
   //   foreach (glob("./last/*.txt") as $filename0) {
	$a =  str_replace("./urlweb/","",$filename);
 $a2 =  str_replace(".txt","",$a);
  $a3 =  str_replace("/","",$a2);
   //$ax =  str_replace("./last/","",$filename0);
 //$a2x =  str_replace(".txt","",$ax);
  //$a3x =  str_replace("/","",$a2x);
   //$myfile = fopen("last/".$a3x.".txt", "r") or die("2016-06-10T02:2p:37+02:00");
 // echo 'https://'.$_SERVER['SERVER_NAME'].'/tags/'.$a3.'/';
  $xml2.= '<url>'."$n";
//

//

	$xml2.= "$t".'<loc>'.'https://'.$_SERVER['SERVER_NAME'].'/tags/'.$a3.'/</loc>'."$n";
	//$xml2.= "$t".'<lastmod>'.fgets($myfile).'</lastmod>'."$n";
	$xml2.= '</url>'."$n";
//fclose($myfile);
//$so2 = $so2 + 1 ;
//echo "<p>Dang them tag ".$so2."...</p>";

 // }
 }
  $xml2.= '</urlset>';
  fwrite($handle232, $xml2);
fclose($handle232);


////man3




$t = "\t";
$n = "\n";
$xml3 = '<?xml version="1.0" encoding="UTF-8"?>'."$n";
$xml3.= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.p">'."$n";
$my_file2232 = 'sitemap3.xml';
$lastmod = date('Y-m-d\TH:i:sP');
//$so2 = "1";
$handle2232 = fopen($my_file2232, 'w+') or die('Error...'); //implicitly creates file

 foreach (glob("./urlweb/*.txt") as $filename) {
   //   foreach (glob("./last/*.txt") as $filename0) {
	$a =  str_replace("./urlweb/","",$filename);
 $a2 =  str_replace(".txt","",$a);
  $a3 =  str_replace("/","",$a2);
   //$ax =  str_replace("./last/","",$filename0);
 //$a2x =  str_replace(".txt","",$ax);
  //$a3x =  str_replace("/","",$a2x);
   //$myfile = fopen("last/".$a3x.".txt", "r") or die("2016-06-10T02:2p:37+02:00");
 // echo 'https://'.$_SERVER['SERVER_NAME'].'/tags/'.$a3.'/';
  $xml3.= '<url>'."$n";
//

//

	$xml3.= "$t".'<loc>'.'https://backlink.'.$_SERVER['SERVER_NAME'].'/'.$a3.'.html</loc>'."$n";
	//$xml2.= "$t".'<lastmod>'.fgets($myfile).'</lastmod>'."$n";
	$xml3.= '</url>'."$n";
//fclose($myfile);
//$so2 = $so2 + 1 ;
//echo "<p>Dang them tag ".$so2."...</p>";

 // }
 }
  $xml3.= '</urlset>';
  fwrite($handle2232, $xml3);
fclose($handle2232);

///end man3
//echo "<p>Qua trinh tao tag hoan tat!</p>";
////////////////////////////////////////////////////////////////////////////
//echo "<p>Dang tao tap tin sitemap.xml...</p>";

$t = "\t";
$n = "\n";
$xml22 = '<?xml version="1.0" encoding="UTF-8"?>'."$n";
$xml22.= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.p">'."$n";
$my_file2322 = 'sitemap.xml';
$lastmod = date('Y-m-d\TH:i:sP');
$handle2322 = fopen($my_file2322, 'w+') or die('Error...'); //implicitly creates file

 // echo 'https://'.$_SERVER['SERVER_NAME'].'/tags/'.$a3.'/';
  $xml22.= '<sitemap>'."$n";
  
	$xml22.= "$t".'<loc>'.'https://'.$_SERVER['SERVER_NAME'].'/sitemap1.xml</loc>'."$n";
	//$xml22.= "$t".'<lastmod>'.$lastmod.'</lastmod>'."$n";
	$xml22.= '</sitemap>'."$n";
	$xml22.= '<sitemap>'."$n";
  
	$xml22.= "$t".'<loc>'.'https://'.$_SERVER['SERVER_NAME'].'/sitemap2.xml</loc>'."$n";
	//$xml22.= "$t".'<lastmod>'.$lastmod.'</lastmod>'."$n";
	$xml22.= '</sitemap>'."$n";
	
	$xml22.= '<sitemap>'."$n";
	$xml22.= "$t".'<loc>'.'https://'.$_SERVER['SERVER_NAME'].'/sitemap3.xml</loc>'."$n";
	//$xml22.= "$t".'<lastmod>'.$lastmod.'</lastmod>'."$n";
	$xml22.= '</sitemap>'."$n";
	
  $xml22.= '</sitemapindex>';
  fwrite($handle2322, $xml22);
fclose($handle2322);
echo "<p>Qua trinh tao sitemap hoan tat!</p>";

?>