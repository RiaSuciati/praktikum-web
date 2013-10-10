<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Studi Kasus 2</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>"method="post">
Jenis kelamin<br/>
<input type="checkbox" name="hobby[]" value="Membaca" checked
		<?php
		if($_POST['hobby[]']=='Membaca'){
			echo 'checked="checked"';}
		?>/>Membaca

		<input type="checkbox" name="hobby[]" value="Olahraga" checked
		<?php
		if($_POST['hobby[]']=='Olahraga'){
			echo 'checked="checked"';}
		?>/>Olahraga

		<input type="checkbox" name="hobby[]" value="Menyanyi" checked
		<?php
		if($_POST['hobby[]']=='Menyanyi'){
			echo 'checked="checked"';}
		?>/>Menyanyi <br />

<input type="submit" value="OK"/>
</form>

<?php
//ekstraksi nilai
if (isset($_POST['hobby'])){
	foreach ($_POST['hobby'] as $key => $val){
	echo $key. '->'. $val. '<br/>';
	}
}
?>

</body>
</html>