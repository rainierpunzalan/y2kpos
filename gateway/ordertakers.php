<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addOrderTaker'])){
    $name = $_POST['name'];
    echo json_encode($db->addOrdertaker($name));

  }
  
  if(isset($_GET['getOrderTakerDetails'])){
    $id = $_GET['id'];
    echo json_encode($db->getOrderTakerDetails($id));
  }

  if(isset($_GET['deleteOrderTaker'])){
    $id = $_GET['id'];
    echo json_encode($db->deleteOrderTaker($id));
  }

  if(isset($_GET['updateOrderTaker'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    echo json_encode($db->updateOrderTaker($id,$name));
  }

  if(isset($_GET['getOrderTakerList'])){
    echo json_encode($db->getOrderTakerList());
  }
  
?>
