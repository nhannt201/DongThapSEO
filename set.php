<html>
<body onLoad="setTimeout('self.close()',500)">
<iframe src="<?php echo "https://".$_SERVER['SERVER_NAME']."/getcheck.php?domain=".$_GET['u']; ?>" name="window" width="500px" height="300px"></iframe>
</body>
</html>