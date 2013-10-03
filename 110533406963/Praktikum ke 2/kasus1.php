<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kasus 1</title>
</head>
<body>
<?php
$j = 6;
if($j >= 6 && $j <=12){
	echo "Sekarang jam :" . $j;
	echo "<h1>Selamat Pagi</h1>";
}
elseif($j >= 12 && $j <=18){
	echo "Sekarang jam :" . $j;
	echo "<h1>Selamat Siang</h1>";
}
elseif($j >= 18 && $j <=24){
	echo "Sekarang jam :" . $j;
	echo "<h1>Selamat Malam</h1>";
}
?>
</body>
</html>