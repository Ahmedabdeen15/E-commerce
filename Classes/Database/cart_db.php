<?php
include 'DB_conf.php';
class cart_db extends Use_db
{
  private $conn;
  public function __construct()
  {

    $this->conn=$this->getconnect();
  }

  public function create($UserID)
  {
      $sql="INSERT INTO `carts`(`cartOwner`, `cartStatus`)";
      $sql.= "VALUES ('".$UserID."','0');";
      if($this->useSql($sql))
      {
      $last_id = $this->conn->insert_id;
      return $last_id;
      }
  }
  // list all the products I bought before
  public function Read($CartID)
  {
    $sql="SELECT * FROM `Object_In_cart` WHERE (cartId ='".$CartID."');";
    $res=$this->useSql($sql);
    if ($res->num_rows!=0)
    {
      while ($row =$res->fetch_assoc()) {
        $Products[]=$row;
      }
      return $Products;
    }
  }
  // I can add the desired product to the cart after choosing the quantity,I can add to it.
  public function insert($CartID,$ProductId,$Quantity)
  {
    $sql="SELECT * FROM `object_in_cart` WHERE ";
    $sql.="(`ProductId`='".$ProductId."' AND `cartId`='".$CartID."') ;";
    echo $sql;
    $res=$this->useSql($sql);
    if ($res->num_rows==0)
    {
    $sql="INSERT INTO `object_in_cart`(`cartId`, `ProductId`, `Quantity`,`sold`) VALUES";
    $sql.=" ('".$CartID."','".$ProductId."','".$Quantity."','0')";
    $this->useSql($sql);
    }
  }
  // chenging quantity after adding
  public function UpdateQuantity($CartID,$ProductId,$Quantity)
  {
    $sql="SELECT * FROM `object_in_cart` WHERE ";
    $sql.="(`ProductId`='".$ProductId."' AND `cartId`='".$CartID."') ;";
    // echo $sql;
    $res=$this->useSql($sql);
    if ($res->num_rows!=0)
    {
      $sql="UPDATE `object_in_cart` SET `Quantity`='".$Quantity."' WHERE ";
      $sql.="(`ProductId`='".$ProductId."' AND `cartId`='".$CartID."');";
      // echo $sql;
      $this->useSql($sql);
        return 1;
    }
  }
  // delete the hole cart
  public function DeleteCart($CartID)
  {
    $sql="DELETE FROM `carts` WHERE `cartId`='".$CartID."';";
    $this->useSql($sql);
    $sql="DELETE FROM `object_in_cart` WHERE `cartId`='".$CartID."';";
   $this->useSql($sql);
  }
  // I can delete from it.
  public function DeleteProduct($CartID,$ProductId)
  {
    $sql="DELETE FROM `object_in_cart` WHERE `cartId`='".$CartID."'And ProductId='".$ProductId."';";
    $this->useSql($sql);
  }
  // I can view list of users who bought a certain product.
  public function GetAllUserThatBoughtProduct($search_key)
  {
      $sql="SELECT * FROM `object_in_cart` WHERE `ProductId`= '".$search_key."';";
      $res=$this->useSql($sql);
      $num_rows=$res->num_rows;
      if($num_rows>0)
      {
      while ($row =$res->fetch_assoc()) {
        $cartIds[]=$row;
      }
    
      foreach($cartIds as $cartId)
      {
        $sql="SELECT * FROM `carts` WHERE `cartId`= '".$cartId['cartId']."';";
        echo $sql;
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
        if($num_rows>0)
        {
          $row =$res->fetch_assoc();
            $users[]=$row;
        }
       }
      
      return $users;
    }
  }
  public function buy($CartID)
  {
    $sql="UPDATE `Object_In_cart` SET `sold`='1' WHERE (cartId ='".$CartID."');";
    $this->useSql($sql);
    $sql="UPDATE `carts` SET `cartStatus`='1' WHERE (cartId ='".$CartID."');";
    $this->useSql($sql);
  }
  private function useSql($sql)
  {
    $res=$this->conn->query($sql);
    if(!$res)
      exit("query failed.");
    return $res;
  }
}
$ll=new cart_db();
// $CartID=$ll->create(8);
// $ll->insert($CartID,500,100);
// $ll->insert($CartID,400,50);
// $CartID=$ll->create(6);
// $ll->insert($CartID,500,100);
// $ll->insert($CartID,400,50);
// // $ll->DeleteCart($CartID);
// $ll->GetAllUserThatBoughtProduct(500);
// $ll->buy(3);



// how to print associative array
// foreach($users as $user)
      // {
      //   echo '<br>'.$user['cartOwner'].'<br>';
      // }