<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>TUGAS 2</title>
</head>
<body>
<p>generate tabel secara fleksibel</br></p>
<?php
function Create_table($cell, $kolom)
{?>
	<table border = 1>
<?php
$c = 1;	
while ($c <= $cell){
?>	
<tr>
<?php
$k = 0;
while ($k < $kolom){
	if($c <= $cell){ 
?>	
	<td width = "40px"></td>;
	<td height = "40px"></td>;
<?php
	$c++;}
	$k++;}
?>	
	</tr>
<?php
}
?>
</table>
<?php
}
?>
<?php
Create_table(10,4);
?>
</body>
</html>