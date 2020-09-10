<?php
	session_start();
	echo "Welcome ". $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
	.container {
		height: auto;
		width: 200px;
	}
	a{
		text-decoration: none;
	}
	ul li{
		background-color: #131517;
		list-style: none;
		color: #eee;
		padding: 20px;
		height: auto;
		margin-left: -40px;
	}
	li:hover{
		background-color: #515a5a;
	}
</style>
<body>
	<div class="container">
		<ul>
			<li>Menu</li>
			<li>Home</li>
			<a href='logout.php' onclick="return confirm('Do you really wanna to logout?')"><li>Logout</li></a>
		</ul>
	</div>
</body>
</html>