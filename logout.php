<?php
	
	session_start();
	session_destroy();
	echo "You have successfully logged out <br> Do you want to <a href='index.php'>login again ?</a>";
?>