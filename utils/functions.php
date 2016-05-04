<?php
require_once('../inc/dbinfo.inc');
require_once('../inc/constants.inc');
class pos_functions{

  private function connect() {
		$link = mysqli_connect ( HOSTNAME, USERNAME, PASSWORD, DATABASE ) or die ( 'Could not connect: ' . mysqli_error () );
		mysqli_select_db ( $link, DATABASE ) or die ( 'Could not select database' . mysql_error () );
		return $link;
	}

  /**CRUD***/
  public function getCashierDetails($id){
    $link = $this->connect();
    $id = mysqli_real_escape_string($link,$id);
    $query = "SELECT id,
                      name
              FROM cashier
              WHERE id = '".$id."'
              LIMIT 1";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }
  public function getCashierList(){
    $link = $this->connect();
    $query = "SELECT id,
                      name
              FROM cashier
              ORDER BY name";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }

  public function addCashier($name){
    $link = $this->connect();
    $query=sprintf("INSERT INTO cashier(name)
                        VALUES('".mysqli_escape_string($link,$name)."')");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "newId"=> $link->insert_id);
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function deleteCashier($id){
    $link = $this->connect();
    $query = "DELETE FROM cashier WHERE id='".mysqli_escape_string($link,$id)."'";
    if($result = mysqli_query( $link, $query )){
        //successful
        $data = array("success"=>"true",
                      "rowsAffected"=>mysqli_affected_rows($link));
    } else {
        //failed
        $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }
  public function updateCashier($id,$name){
    $link = $this->connect();
    $query=sprintf("UPDATE cashier 
                    SET name = '".mysqli_escape_string($link,$name)."'
                    WHERE id = '".mysqli_escape_string($link,$id)."'");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "affectedRows"=> mysqli_affected_rows($link));
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function addOrderTaker($name){
    $link = $this->connect();
    $query=sprintf("INSERT INTO ordertakers(name)
                        VALUES('".mysqli_escape_string($link,$name)."')");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "newId"=> $link->insert_id);
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function getOrderTakerDetails($id){
    $link = $this->connect();
    $id = mysqli_real_escape_string($link,$id);
    $query = "SELECT id,
                      name
              FROM ordertakers
              WHERE id = '".$id."'";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }
  
  public function deleteOrderTaker($id){
    $link = $this->connect();
    $query = "DELETE FROM ordertakers WHERE id='".mysqli_escape_string($link,$id)."'";
    if($result = mysqli_query( $link, $query )){
        //successful
        $data = array("success"=>"true",
                      "rowsAffected"=>mysqli_affected_rows($link));
    } else {
        //failed
        $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }
  
  public function updateOrderTaker($id,$name){
    $link = $this->connect();
    $query=sprintf("UPDATE ordertakers 
                    SET name = '".mysqli_escape_string($link,$name)."'
                    WHERE id = '".mysqli_escape_string($link,$id)."'");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "affectedRows"=> mysqli_affected_rows($link));
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function getOrderTakerList(){
    $link = $this->connect();
    $query = "SELECT id,
                      name
              FROM ordertakers";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }


  public function addOrderItem($orderId, $foodId, $quantity, $srp){
    $link = $this->connect();
    $query=sprintf("INSERT INTO order_item(order_id,food_id,quantity,srp)
                        VALUES('".mysqli_real_escape_string($link,$orderId)."','".mysqli_real_escape_string($link,$foodId)."','".mysqli_real_escape_string($link,$quantity)."','".mysqli_real_escape_string($link,$srp)."')");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "newId"=> $link->insert_id);
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

public function getOrderItemDetails($id){
    $link = $this->connect();
    $id = mysqli_real_escape_string($link,$id);
    $query = "SELECT oi_id,
                      order_id,food_id,quantity,srp
              FROM order_item
              WHERE oi_id = '".$id."'";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }

  public function deleteOrderItem($id){
    $link = $this->connect();
    $query = "DELETE FROM order_item WHERE oi_id='".mysqli_escape_string($link,$id)."'";
    if($result = mysqli_query( $link, $query )){
        //successful
        $data = array("success"=>"true",
                      "rowsAffected"=>mysqli_affected_rows($link));
    } else {
        //failed
        $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function updateOrderItem($id,$orderId, $foodId, $quantity, $srp){
    $link = $this->connect();
    $query=sprintf("UPDATE order_item 
                    SET order_id = '".mysqli_escape_string($link,$orderId)."',
                      food_id = '".mysqli_escape_string($link,$foodId)."',
                      quantity = '".mysqli_escape_string($link,$quantity)."',
                      srp = '".mysqli_escape_string($link,$srp)."'
                    WHERE oi_id = '".mysqli_escape_string($link,$id)."'");
    if ($result = mysqli_query( $link, $query )) {
      $data = array("success"=>"true",
                    "affectedRows"=> mysqli_affected_rows($link));
    }else {
      $data = array("success"=>"false",
                      "error"=>mysqli_error($link));
    }
    return $data;
  }

  public function getOrderItemList(){
    $link = $this->connect();
    $query = "SELECT oi_id,
                      order_id,
                      food_id,
                      quantity,
                      srp
              FROM order_item";
    $result = mysqli_query ( $link, $query );
    $data = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
  }
  /***End of CRUD***/
  

  /***UTILS****/

  public function login($username,$password){
$link = $this->connect();
    $login = mysqli_real_escape_string($link,$username);
    $pword = mysqli_real_escape_string($link,$password);
    $query = "SELECT * FROM user_accounts WHERE username = '$login' AND password = '".md5($pword)."' LIMIT 1";
    $result = mysqli_query ( $link, $query );
    if(mysqli_num_rows($result) == 1){
      while ( $row = mysqli_fetch_row ( $result ) ) {
        $lid = $row[0];

        session_start();
        session_regenerate_id(TRUE);
        $_SESSION['y2kposuserid'] = $row[0];
        $_SESSION['y2kposusername'] = $row[1];
        $_SESSION['y2kposaccess_level'] = $row[3];
      }
     
      return true;
    }else{
      return false;
    }
  }

  public function addHistory($reference_id,$remarks_id){
    $link = $this->connect();
    $query=sprintf("INSERT INTO history(user_id,reference_id,remarks_id)
                        VALUES('".mysqli_real_escape_string($link,$_SESSION['userid'])."','".mysqli_real_escape_string($link,$reference_id)."','".mysqli_real_escape_string($link,$remarks_id)."')");
    $result = mysqli_query( $link, $query);
    
  }
  
  /**END OF UTILS****/
}