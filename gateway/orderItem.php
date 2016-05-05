<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addOrderItem'])){
    $orderId = $_POST['orderId'];
    $foodId = $_POST['foodId'];
    $quantity = $_POST['quantity'];
    $srp = $_POST['srp'];
    echo json_encode($db->addOrderItem($orderId,$foodId,$quantity,$srp));

  }
  
  if(isset($_GET['getOrderItemDetails'])){
    $id = $_GET['id'];
    echo json_encode($db->getOrderItemDetails($id));
  }

  if(isset($_GET['deleteOrderItem'])){
    $id = $_GET['id'];
    echo json_encode($db->deleteOrderItem($id));
  }

  if(isset($_GET['updateOrderItem'])){
    $id = $_POST['id'];
    $orderId = $_POST['orderId'];
    $foodId = $_POST['foodId'];
    $quantity = $_POST['quantity'];
    $srp = $_POST['srp'];
    echo json_encode($db->updateOrderItem($id,$orderId,$foodId,$quantity,$srp));
  }

  if(isset($_GET['getOrderItemList'])){
    echo json_encode($db->getOrderItemList());
  }
  
?>
