<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addFood'])){
    $name = $_POST['food_name'];
    $srp = $_POST['srp'];
    $category = $_POST['food_category'];
    $available = $_POST['available'];
    $active = $_POST['active'];
    $picture = $_POST['picture'];
    echo json_encode($db->addFood($name,$srp,$category,$available,$active,$picture));
    //http://localhost/pos/gateway/food.php?addFood=1&food_name=carbonara&srp=99&food_category=3&available=2&active=1&picture=spag.jpg

  }
  
  if(isset($_GET['getFoodDetails'])){
    $id = $_GET['food_id'];
    echo json_encode($db->getFoodDetails($id));
    //http://localhost/pos/gateway/food.php?getFoodDetails=1&food_id=1
  }
  if(isset($_GET['getFoodList'])){
    echo json_encode($db->getFoodList());
    //http://localhost/pos/gateway/food.php?getFoodList=1
  }

  if(isset($_GET['deleteFood'])){
    $id = $_GET['food_id'];
    echo json_encode($db->deleteFood($id));
  }
  //http://localhost/pos/gateway/food.php?deleteFood=1&food_id=1
  if(isset($_GET['updateFood'])){
    $id = $_POST['food_id'];
    $name = $_POST['food_name'];
    $srp = $_POST['srp'];
    $category = $_POST['food_category'];
    $available = $_POST['available'];
    $active = $_POST['active'];
    $picture = $_POST['picture'];
    echo json_encode($db->updateFood($id,$name,$srp,$category,$available,$active,$picture));
  }
  //http://localhost/pos/gateway/food.php?updateFood=1&food_id=3&food_name=pesto&srp=97&food_category=3&available=2&active=1&picture=spag.jpg
  
?>
