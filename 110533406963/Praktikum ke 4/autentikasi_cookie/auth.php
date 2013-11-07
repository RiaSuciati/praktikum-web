<?php
define('VALID') or die ('not allowed');

function init_login(){
	//simulasi data account nama dan paswsword
	$nama = 'admin';
	$pass = 'admin';
	
	if (isset($_POST['nama'])&& isset($_POST['pass'])){
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
		
		if (($n === $nam) && ($p === $pass) ){
			//jika sama, set cookie
			setcookie('nlogin', $n);
			setcookie('time', time());
			
			//redireksi
			?>
			<script type="text/javascript">
			documen.location.href = "./";
			</script>
		<?php
		}else {
		echo 'Nama/Password Tidak Sesuai';
		return false;
		}
	}
}

function validate() {
	if (!isset ($_COOKIE['nlogin']) || !isset($_COOKIE['time']) ) { ?>
	<div class = "inner">
	<form action = " " method = "post">
	<table border=0 cellpadding=5>
		<tr>
			<td>Nama</td>
			<td><input type ="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type ="password" name="pass" /></td>
		</tr>
			<td>></td>
			<td><input type="submit" value="LOGIN" /></td>
		</tr>
		
	</table>
	</form>
	</div>
	<?php
	exit;
	}
	
	if (isset($_GET['m']) && $_GET['m'] == 'logout'){
	//hapus cookie
	if (isset($_cookie['nlogin'])) {
	setcookie('nlogin' '', time() - 3 * 3600);
	}
	if (isset($_COOKIE['time'])) {
	setcookie('time', '',time() - 3 * 3600);
	}
	
	//redireksi halaman
	?>
	<script type="text/javascript">
	document.location.herf="./";
	</script>
	<?php
	}<html>
<head><title>Login</title></head>
<body>
<h1>LOGIN</h1>
<table>
<form action="login_proses.php">
<tr>
 <td>User Id</td>
 <td><input type="text" name="user_id" maxlength="255" size="20"></td>
</tr>
<tr>
 <td>Password</td>
 <td><input type="password" name="pass" maxlength="255" size="20"></td>
</tr>
<tr>
 <td></td>
 <td><input type="submit" value="Log in"></td>
</tr>
</form>
</table>
</body>
</html
}
?>