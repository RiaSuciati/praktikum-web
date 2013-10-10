<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login Form </title>
</head>
<style type="text/css">
#apDiv1 {
    position:absolute;
    width:350px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #00FFFF;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 140px;
    top: 240px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
	font-size: 28px;
	font-weight:bold;
	font-family:Verdana;
	color: #0000FF;
	
}
body {
    background-color: #0000FF;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 441px;
    top: 411px;
}

</style>
<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="apDiv1">
	<div id="header" align="center">
	<br>FORM LOGIN
	</div>
  <div>
    <div align="center"><strong><br>User Name :</strong>   
    <br>
    <input type="text" name="user" size="30" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong> 
    <br>
    <input type="password" name="pass" size="30" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value=" LOGIN " >
      </div>

</form>
<div id="apDiv4">
<?php
// digunakan untuk pengecheckkan apakah isi dari inputan user dan password berupa string dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass']))
{   
    if (($_POST['user']=='riasuciati')AND($_POST['pass']=='ria'))
    {
        echo '<h2><center>Selamat anda telah berhasil Masuk dengan User :</h2><center>'.$_POST['user'];
    }
    else
    {
        echo "<script>alert ('Username atau Password yang Anda masukkan Salah');</script>";
    }
}

?>
</div>
<script type="text/javascript">
function error1(){
alert('Masukkan User Name dan Password Terlebih Dahulu ');
}
function check()
{
if(form1.pass.value == "" || form1.user.value=="")
{
error1();
}
}

function Huruf(evt)
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>
</body>
</html>
