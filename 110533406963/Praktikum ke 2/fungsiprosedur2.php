<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fungsi dan Prosedu</title>
</head>
<body>
<?php
/**
*mencetak string
*$teks nilai string
*$blod adalah argumen opsional
*/
function print_teks($teks, $bold = true){
	echo $bold ? '<b>' .$teks. '</b>' :$teks;
	}
print_teks('Indonesiaku');
//mencetak dengan huruf tebal
print_teks('indonesiaku',false);
//mencetak dengan huruf reguler
?>
</body>
</html>