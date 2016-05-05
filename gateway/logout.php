<?php

	session_start();
	include "../utils/functions.php";
	$db = new pos_functions();
	$db->addHistory("",$_SESSION['y2kposusername'] . " Logged out");
	$_SESSION = array();

	header("location: ../pages/index.php");
?>