<?php
$nama = "ria";
$pasword = "ria";
$user = $_POST["user"];
$pass = $_POST["pass"];
$userstring = "^[A-Za-z]+$";
$passstring = "^[A-Za-z]+$";

if (isset($_POST["user"]) && isset($_POST["pass"]) && ($_POST["user"] =="$nama") && ($_POST["pass"] == "$pasword")){
?><script language = "JavaScript">
alert("Selamat berhasil Login")
document.location='index.php'</script><?php
}

else if (empty($_POST["user"]) || empty($_POST["pass"])){?>
<script language = "JavaScript">
alert("Isi Username dan Password Terlebih dahulu !!!")
document.location='login.php'
</script><?php
}
else if((@!eregi($userstring, $user)) || (@!eregi($passstring, $pass))){?>
<script language = "JavaScript">
alert("Username dan Password harus huruf!!!")
document.location='login.php'</script><?php
}

else if (("$user" != "$nama")||("$pass" != "$pasword")) {?>
<script language = "JavaScript">
alert("Username dan Password salah!!!")
document.location='login.php'</script><?php
}
?>



