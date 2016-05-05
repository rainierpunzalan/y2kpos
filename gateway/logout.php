<?php

  session_start();
  include "../utils/functions.php";
  $db = new pos_functions();
  $db->addHistory("",$_SESSION['username'] . " Logged out");
$_SESSION = array();

header("location: ../pages/index.php");
?>