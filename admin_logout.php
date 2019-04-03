<?php
	require_once("session.php");
?>

<?php
	session_start();
	session_destroy();
	header("Location: admin_login.php");
?>	
