<?php
session_start();
$t=0;
$u=$_POST['user'];
$p=md5($_POST['pass']);
session_start();
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "SELECT * FROM `reg`";
$result = mysql_query($query) or die(mysql_error());
while($w=mysql_fetch_array($result)) {
if ($w['user']==$u && $w['pass']==$p){
$_SESSION['user']=$u;
$_SESSION['pass']=$p;
header('Location: mainpage.php');
$t=$t+1;
}}
if ($t==0){
$_SESSION['enters']=1;
header('Location: default.php');
}
?>