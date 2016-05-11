<?php
  include "../utils/functions.php";
  $db = new pos_functions();
  if(isset($_POST['loginFlag'])){
    $u = $_POST['input-uname'];
    $p = $_POST['input-pw'];
    if($db->login($u,$p)){
       $db->addHistory("",$_SESSION['y2kposusername'] . " Logged in");
      header("location: ../pages/index.php");
    }else{
      header("location: ../pages/login.php?loginFailed=1");
    }
  }
?>