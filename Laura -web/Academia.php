﻿<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Laura wharton</title>
	</head>
	<body>	
	
	<iframe src="iframe.htm" scrolling="no" class="frame" width="100%" frameborder="0" height="220px"></iframe>

		<div id="Laura">
			<table id="Laura1">				
				<span class="title">
				Academia
				</span>
				<div style="width:70%; height:100%; background-color:"red" id="bnb">
				<br><BR>
				<?php
$mysql_host = "MainText1.db.6042894.hostedresource.com";
$mysql_database = "MainText1";
$mysql_user = "MainText1";
$mysql_password = "Ddkkggss98@";
mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database);
$query = "SELECT * FROM `text`";
$result = mysql_query($query) or die(mysql_error());
while($w=mysql_fetch_array($result)) {
if ($w['textname'] == "Academia"){
$z=$w['text'];
}
}
$z = str_replace("****", "'", $z);
print $z;
?>
				</div>

		<br><BR><br><BR><br><BR><br>
	</div>
	</table>
	<div class="Me">
		<span>
		Site Creator: Gilad Wharton Kleinman <a href="mailto:dkgs1998@yahoo.com">dkgs1998@yahoo.com</a>
		</span>
		</div>
</body>
</html>