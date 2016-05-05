<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addOrder'])){
    $date = $_POST['date'];
    $status = $_POST['status'];
    $ordertaker = $_POST['ordertaker'];
    $takeout = $_POST['takeout'];
    $tno = $_POST['tableno'];
    echo json_encode($db->addOrder($date,$status,$ordertaker,$takeout,$tno));
    //http://localhost/pos/gateway/orders.php?addOrder=1&date=2016-04-09&status=1&ordertaker=2&takeout=0

  }
  
  if(isset($_GET['getOrderDetails'])){
    $id = $_GET['id'];
    echo json_encode($db->getOrderDetails($id));
    //http://localhost/pos/gateway/orders.php?getOrderDetails=1&id=1
  }
  if(isset($_GET['getOrderList'])){
    echo json_encode($db->getOrderList());
    //http://localhost/pos/gateway/orders.php?getOrderList=1
  }
  if(isset($_GET['deleteOrder'])){
    $id = $_GET['id'];
    echo json_encode($db->deleteOrder($id));
    //http://localhost/pos/gateway/orders.php?deleteOrder=1&id=1
  }
  if(isset($_GET['updateOrder'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $status = $_POST['status'];
    $ordertaker = $_POST['ordertaker'];
    $takeout = $_POST['takeout'];
     $tno = $_POST['tableno'];
    echo json_encode($db->updateOrder($id,$date,$status,$ordertaker,$takeout,$tno));
    //http://localhost/pos/gateway/orders.php?updateOrder=1&id=2&date=2016-04-16&status=1&ordertaker=1&takeout=1&tableno=2
  }
  
?>
