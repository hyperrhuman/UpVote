<?php
	session_start();
	$_SESSION['login']=$_GET['login'];
	$_SESSION['whoami']=$_GET['user_data'];
	// echo $_SESSION['user'];
	// echo $_SESSION['user_data'];
	header("location:index.php");
?>  