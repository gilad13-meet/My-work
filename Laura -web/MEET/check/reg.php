<?php
$r=$_POST['Email'];
$cx=0;
$u=$_POST['user'];
$p=md5($_POST['pass']);
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
$conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$a = str_replace("\n", "<br>", $a);
$a = str_replace("'", "****", $a);
$query = "SELECT * FROM `reg`";
$result = mysql_query($query) or die(mysql_error());
while($w=mysql_fetch_array($result)) {
if ($w['user']==$u){
$cx=$cx+1;
echo 'username already exists!<br>';
}
if ($w['pre']==$r){
$cx=$cx+1;
echo 'Email already exists!<br>';
}
if(substr($u, 0, 1)==''){
$cx=$cx+1;
echo 'bad username!<br>';}
$str = $u;
$strlen = strlen( $str );
for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $str, $i, 1 );
    if (($char==">" || $char=="<") && $cx==0){
	$cx=$cx+1;
	echo 'bad username!';
}
}
$str = $r;
$strlen = strlen( $str );
for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $str, $i, 1 );
    if (($char==">" || $char=="<") && $cx==0){
	$cx=$cx+1;
	echo 'bad email!';
}
}
}
if ($cx==0){
if (mysql_query ("INSERT INTO `reg` (`user`, `pass`, `pre`) VALUES('$u', '$p', '$r')") or die(mysql_error())){
echo 'done!';
session_start();
$_SESSION['user']=$_POST['user'];
header('Location: default.php');
}}
else{
echo '<br><a href="regs.php">back to register page</a>';}
?>