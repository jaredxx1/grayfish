 <?php

 $a = "http://".$_SERVER["SERVER_NAME"]."/";
 $b = $_SERVER["HTTP_REFERER"];
if ($a == $b){header('Location: ./admin/index.php');}
else{if ($b == null){header('Location: ./admin/index.php');}
else{echo'<h1><center>If you are owner of this site, try to open this Link manually: <font color=blue>'.$a.'</font><br>Referals from other sites are NOT accepted.<br>You were refered by: <font color=red>'.$b.'</font>';}
	}
?> 