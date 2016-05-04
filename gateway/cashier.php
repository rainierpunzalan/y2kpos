<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addCashier'])){
    $name = $_POST['name'];
    echo json_encode($db->addCashier($name));

  }
  
  if(isset($_GET['getCashierDetails'])){
    $id = $_GET['id'];
    echo json_encode($db->getCashierDetails($id));
  }


  if(isset($_GET['getCashierList'])){
    echo json_encode($db->getCashierList());
  }

  if(isset($_GET['deleteCashier'])){
    $id = $_GET['id'];
    echo json_encode($db->deleteCashier($id));
  }
  if(isset($_GET['updateCashier'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    echo json_encode($db->updateCashier($id,$name));
  }
  
?>
