<?
//Code by Vu Thanh Lai
//Shared by: vu Thanh Lai
//Shared at: SinhVienIT.Net
//KO thanh doi 4 dong chu thich nay neu ban dc share de ton trong tac gia cung nhu ton trong cong suc cua nguoi share ! Thanks !
//---------------------------------------------------------------------------------------------------------------------------------------------------------------

include "laivt_firewall_conf.php";

//--------Function
function xoa($dir) {
    if ( $dirHandle = opendir($dir) ) {
        while ( $file = readdir($dirHandle) ) {
            if ( $file !== "." && $file !== ".." ) {
				if (basename($file)!=".htaccess")
                    @unlink($dir."/".$file);
            }
        }
        closedir($dirHandle);
        return true;
    } else {
        return false;
    }
}


//-----------Unlock
//Bo Cam bang htaccess
$ft=fopen($laivt_fw_conf['htaccess'],"w");
fclose($ft);
//Bo cam tren Firewall
xoa("laivt_firewall");

function remove_allFile($dir){
  if($handle = opendir("$dir")){
    while (false !== ($item = readdir($handle))){
     if($item != "." && $item != ".."){
       if(is_dir("$dir/$item")){
         remove_directory("$dir/$item");
       }else{
     unlink("$dir/$item");
   //echo"removing $dir/$item<br>\n";
     }
   }
  }
  closedir($handle);
 }
}
remove_allFile("iplog");

///////////////////////
if (file_exists("error_log")) {
    echo "Da don dep tap tin loi!";
include 'error_log';
unlink('error_log');
unlink('backlink/error_log');

} else {
    echo "Không phat hien loi de don dep !";
}