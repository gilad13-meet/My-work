<html>
<body align="center">
<?php
if (!isset($_COOKIE["isthereapass"])){
echo ' <form action="check.php" method="POST">
<p>username<br><input type="text" name="uname"></p>
<p>password<br> <input type="password" name="p"></p>
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>';
}
else {
header('Location: filename.php');
}
?>
</body>
</html>