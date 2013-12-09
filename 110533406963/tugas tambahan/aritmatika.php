<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transition//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Operasi aritmatika</title>
</head>
<body>
<h1 align = 'left'>KALKULATOR</h1>
<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "get">

        <input type = 'number' name = 'bil_1' value = "<?php echo isset ($_GET['bil_1']) ? $_GET['bil_1'] : ''; ?>">

        <select name = "operator">
        <option value = "+" <?php 
        if (@$_GET['operator'] == '+') {
        echo 'selected = "selected"';
        }
        ?>> +
        <option value = "-" <?php 
        if (@$_GET['operator'] == '-') {
        echo 'selected = "selected"';
        }
        ?>> -
        <option value = "/"
        <?php 
        if (@$_GET['operator'] == '/') {
        echo 'selected = "selected"';
        }
        ?>> /
        <option value = "*"
        <?php 
        if (@$_GET['operator'] == '*') {
        echo 'selected = "selected"';
        }
        ?>> *
        </select>

        <input type = 'number' name = 'bil_2' value = "<?php echo isset ($_GET['bil_2']) ? $_GET['bil_2'] : ''; ?>" >
        <input type = "submit" value = "="/>
	
</form>

<form>
<?php 
$bil_1 = $_GET['bil_1'];
$bil_2 = $_GET['bil_2'];
?>
<?php
if (isset ($_GET['operator'])) {
        if (@$_GET['operator'] == '+') {
        $hasil = $bil_1 + $bil_2;
        }
        elseif (@$_GET['operator'] == '-') {
        $hasil = $bil_1 - $bil_2;
        }
        elseif (@$_GET['operator'] == '/') {
        $hasil = $bil_1 / $bil_2;
        }
        elseif (@$_GET['operator'] == '*') {
        $hasil = $bil_1 * $bil_2;
        }
        }?>

        <input type = 'text' name = 'bil_2' value = '<?php echo $hasil;?>'>
</form>

</body>
</html>