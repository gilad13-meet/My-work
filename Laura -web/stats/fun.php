<?php
header('Content-Type: text/html; charset=windows-1255');
$to = 'laura.wharton@mail.huji.ac.il';
$s = $_POST['Subjectl'];
$e = $_POST['e'];
$m = "from: " . $_POST['name'] . "\n" . "message: " . $_POST['message'];
$headers .= "From: " . $e ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable\r\n";
mail($to, $s, $m, $headers);
header("Location: contact1.php");
    ?>