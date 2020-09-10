<?php
	if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
		$email = $_COOKIE['email'];
		$pass = $_COOKIE['pass'];
		echo "<script>
				document.getElementById('email').value='$email';
				document.getElementById('pass').value='$pass';
		</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Form Using Session and Cookies</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-form">
		<form action="validate.php" method="POST">
			<table>
				<tr>
					<h1>Login </h1>
				</tr>
				<tr>
					<th><input type="text" class="name-txt" id="email" name="email" placeholder="Enter your Email ...."></th>
				</tr>
				<tr>
					<th><input type="password" class="pass" id="pass" name="password" placeholder="Enter your Password ...."></th>
				</tr>
				<tr>
					<td><input type="checkbox" class="box" name="remember" id="box" style="margin-left: 17px;"><label for="box">Remember me?</label></td>
				</tr>
			</table>
			<input type="submit" class="btn" value="Login" name="login">
		</form>
	</div>
</body>
</html>