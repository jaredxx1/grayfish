<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'fish' && $_POST['password'] == 'fish') {
    
	
         ob_start();
         session_start();
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $_POST['username'];
				  
$dir = '.././sites';
$efg = $_SERVER['REQUEST_URI']; 
$pat = explode('/',$efg);
$cds = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($pat) - 2; $i++) {
 $cds .= $pat[$i] . "/";
}
$hgf = "http://".$cds."sites/";


echo'<style>.abc{width:30%;}.hd{width:55%;}button{margin-bottom:5px;color:#fff;background-color:#000080;font-size:90%;border:7px solid #000;width:22%;height:50px;}</style>
<center>
<a href=http://tiplava.blogspot.com/ target="_blank"><button><b>Site</b></button></a>
<a href=https://github.com/graysuit/grayfish target="_blank"><button><b>Code</b></button></a>
<a href=https://tiplava.blogspot.com/p/contact-us.html target="_blank"><button><b>Contact</b></button></a>
<a href=./logout.php><button><b>Logout</b></button></a><br>
<a href=mailto:hackrefisher@gmail.com target="_blank"><button class=hd><b>hackrefisher@gmail.com</b></button></a>
<a href=https://fb.com/gray.programmerz.5 target="_blank"><button class=abc><b>Facebook</b></button></a></center>';
echo'<br><h1><center>Welcome <font color=blue>'.$_SESSION['username'].'</font> !!!<center></h1><br><br>';
if ($handle = opendir($dir)) {
while (false !== ($entry = readdir($handle))) {

$add = ucfirst(str_replace('.php', '', $entry));
if ($entry != '.' && $entry != '..' && $entry != 'post_database.php' && $entry != 'post_in_file.php' && $entry != 'meta_tags.html' && $entry != 'index.php' && $entry != 'dashboard.php' && $entry != 'logout.php') {
echo'<style>body {background-color:#D9D9D9;}</style><body>
<div><center><p style=font-size:large;>'.$add.'</center></p><center><textarea style=margin-left:-7px; cols=50 rows=2>'.$hgf.$entry.'</textarea></center></div><center><a href='.$hgf.$entry.' target="_blank"><b>Test this Link:</b> <font color=green>'.$hgf.$entry.'</font><a/></center></body><br><br>';

}
}
echo'<br><br><br><style>.abc{width:30%;}.hd{width:55%;}button{margin-bottom:5px;color:#fff;background-color:#000080;font-size:90%;border:7px solid #000;width:22%;height:50px;}</style>
<center>
<button>Version</button>
<button>User</button>
<button class=abc>Made by</button>
<br>
<button><b>2019.08</b></button>
<button><b>'.$_SESSION['username'].'</b></button></a>
<a href=https://github.com/graysuit target="_blank"><button class=abc><b>Gray Suit</b></button></a></center>';
    closedir($handle);
}
}else{header('Location: ./index.php');
}
}else {echo'Permission denied !!!';
	   
	   }
 
?>