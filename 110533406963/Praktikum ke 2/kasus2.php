<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kasus 2</title>
</head>
<body>
<p>Generate Tabel</br></p>
<?php
function Create_table($baris, $kolom)
{
	echo ("<table border =\"1\">\n");
	
for ($b = 0; $b < $baris; $b++){
	echo ("<tr height = \"40px\">\n");

for($k = 0; $k < $kolom; $k++){
	echo ("<td width = \"40px\"></td>\n");
}
	echo("</tr>");
}
	echo ("</table>\n");
}
Create_table(3,4);
?>
</body>
</html>