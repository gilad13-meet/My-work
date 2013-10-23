<html>
<body align="center">
<?php
if (isset($_COOKIE["isthereapass"])){
echo'
<form action="thefile.php" method="POST">

<TEXTAREA name="text" rows="40" cols="120">';
$v=$_POST['page'];
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "SELECT * FROM `text`";
$result = mysql_query($query) or die(mysql_error());
while($w=mysql_fetch_array($result)) {
if ($w['textname'] == $v){
$z=$w['text'];
}}
$z = str_replace("****", "'", $z);
$z = str_replace("<br>", "\n", $z);
echo $z;
setcookie("page", $v, time()+36000);
echo' </textarea></p>
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>';
}
else {
echo 'you cant enter this page!!!!';
}


?>
</body>
</html>
</html>