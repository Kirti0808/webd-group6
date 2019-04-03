<?php
	require_once("session.php");
?>

<?php
	session_start();
	session_destroy();
	header("Location: student_login.php");
?>	
