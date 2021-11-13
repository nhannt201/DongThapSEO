<?php
if (!isset($_GET['web'])) {
$tenmien = $_GET['web'];
$w = $_GET['r'];
} else {
	

?>
 document.write('<div class="widget" style="width: <?php if (!isset($w)) { echo $w.'px;';} else { echo '';}?> height: auto;margin-right: auto; margin-left: auto;">');
document.write('<div class="widget-header" style="text-align: left; color: #FFF; cursor: pointer; font: bold 14px Arial,sans-serif;padding: 8px; background-color: #5bc0de; border-radius: 0px 0px 0px 0px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">');
document.write('<i><img alt="facebook" src="http://www.google.com/s2/favicons?domain=http://luutru360.com"></i>');
document.write('<a style="text-decoration: none; color: #FFF; font-weight: bold; position: absolute; padding-left: 5px;" href="http://kiemtrawebsite.com/luutru360.com.html">Luutru360.com</a>');
document.write('</div>');
document.write('<div class="widget-body" style="text-align: left; font: 12px Arial,sans-serif; color: #71696C; display: block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; padding: 10px 10px 5px; border-width: 0px 2px 2px; border-style: solid; border-color: #EEE; border-radius: 0px 0px 0px 0px;">');
document.write('<div style="padding-bottom: 4px;"><b>GiĂ¡ trá»‹:</b> 8,976,240 VNÄ</div>');
document.write('<div style="padding-bottom: 4px;"><b>Thá»© háº¡ng Google:</b> 0 trĂªn 10</div>');
document.write('<div style="padding-bottom: 4px;"><b>Thá»© háº¡ng Alexa:</b> #4,045,080</div>');
document.write('<div class="widget-footer" style="padding: 6px 0px 0px; border-top: 1px solid #eee;">');
document.write('<a href="http://kiemtrawebsite.com/luutru360.com.html" style="color: #136DCE; text-decoration: none;">Click Ä‘á»ƒ xem thĂ´ng tin chi tiáº¿t &raquo;&raquo;</a>');
document.write('</div>');
document.write('</div>');
document.write('</div>');
<?php
}
?>
