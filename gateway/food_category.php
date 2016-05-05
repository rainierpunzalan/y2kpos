<?php
  include "../utils/functions.php";
  $db = new pos_functions();

  if(isset($_GET['addFoodCategory'])){
    $name = $_POST['name'];
    echo json_encode($db->addFoodCategory($name));
    //http://localhost/pos/gateway/food_category.php?addFoodCategory=1&name=meat

  }
  
  if(isset($_GET['getFoodCategoryDetails'])){
    $id = $_GET['id'];
    echo json_encode($db->getFoodCategoryDetails($id));
    //http://localhost/pos/gateway/food_category.php?getFoodCategoryDetails=1&id=1
  }
  if(isset($_GET['getFoodCategoryList'])){
    echo json_encode($db->getFoodCategoryList());
    //http://localhost/pos/gateway/food_category.php?getFoodCategoryList=1
  }

  if(isset($_GET['deleteFoodCategory'])){
    $id = $_GET['id'];
    echo json_encode($db->deleteFoodCategory($id));
    //http://localhost/pos/gateway/food_category.php?deleteFoodCategory=1&id=1
  }
  if(isset($_GET['updateFoodCategory'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    echo json_encode($db->updateFoodCategory($id,$name));
    //http://localhost/pos/gateway/food_category.php?updateFoodCategory=1&id=2&name=bread
  }
  
?>
