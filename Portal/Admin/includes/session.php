<?php
	session_start();
	if(!isset($_SESSION['SESS_ID']))
	{
		header("Location:index.php");
		exit;
	}
?>