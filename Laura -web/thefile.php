<?php
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
$a=$_POST['text'];
$b=$_COOKIE["page"];
$conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$a = str_replace("\n", "<br>", $a);
$a = str_replace("'", "****", $a);
if (mysql_query ("INSERT INTO `text` (`text`, `textname`) VALUES('$a', '$b')") or die(mysql_error())){
echo "done!";
}
 ?>					