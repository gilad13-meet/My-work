<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Laura wharton</title>
	</head>
	
	<body>	<iframe src="iframe.htm" scrolling="no" class="frame" width="100%" frameborder="0" height="220px"></iframe>
	
		<div id="Laura">
			<table id="Laura1">				
				<span class="title">
				Contact Laura
				</span>

										<?php
header('Content-Type: text/html; charset=windows-1255');
?>
<div class="contact">
laura.wharton@mail.huji.ac.il 
<br>
Tel. ++972-522-874-457	
<br>
Fax: +972-2-641-2448 
</div>
<div style="width:70%; height:100%; background-color:"red" id="form">
  <form action="fun.php" method="POST">
<label for="name">Name<br></label><input type="text" id="name" name="name">
<br>
<label for="e">Your Email<br></label><input id="e" type="text" name="e">
<br>
<label for="text">Subject<br></label><input id="text" type="text" name="Subjectl">
<br>
<label for="message">Message<br></label><textarea  id="message" name="message" rows="10" cols="50"></textarea><br>
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
</div><br><BR>
	</div>
	</table>
			<span class="Me">
		Site Creator: Gilad Wharton Kleinman <a href="mailto:dkgs1998@yahoo.com">dkgs1998@yahoo.com</a>
		</span>
</body>
</html>		
		<script type="text/javascript">
window.alert("You message was sent!");
</script>