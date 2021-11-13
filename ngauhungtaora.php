<?php
function generatePassword($lengthVar=4) {
   $pass = '';
   $poss = '123456789abcdfghjkmnpqrstvwxyz';
   $i = 0;
   while ($i < $lengthVar) {

      $pass .= substr($poss, mt_rand(0, strlen($poss)-1), 1);
      $i++;
   } 
   return $pass;
}
?>
<?php
   $pas = generatePassword(10);
 $ngaunhien = rand(0, 10);
if ($ngaunhien == 1) {
$tenmien = ".com";
} elseif ($ngaunhien == 2) {
$tenmien = ".net";
}elseif ($ngaunhien == 3) {
$tenmien = ".info";
} elseif ($ngaunhien == 4) {
$tenmien = ".xyz";
} elseif ($ngaunhien == 5) {
$tenmien = ".tk";
}elseif ($ngaunhien == 6) {
$tenmien = ".org";
} elseif ($ngaunhien == 7) {
$tenmien = ".biz";
} elseif ($ngaunhien == 8) {
$tenmien = ".tv";
} elseif ($ngaunhien == 9) {
$tenmien = ".vn";
} elseif ($ngaunhien == 10) {
$tenmien = ".us";
} else {
$tenmien = ".com";
}
$url ="https://dongthapseo.com/set.php?u=http://".$pas."".$tenmien;
echo $url;
echo '<script type="text/javascript">   window.open("'.$url.'", "_blank"); </script>';
$delay=3; 
header("Refresh: $delay;"); 
?>