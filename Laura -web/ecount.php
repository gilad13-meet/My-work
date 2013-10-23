<?php
date_default_timezone_set('Asia/Jerusalem');
$num = date("m/d/y G:i:s");;
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
$country = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']); 
$conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$country=str_replace("'",".",$country);
if (mysql_query ("INSERT INTO `enters` (`number`, `number1`) VALUES('$country', '$num')") or die(mysql_error())){
header('Location: http://www.laurawharton.com/Homepage.htm');
}
 ?>			