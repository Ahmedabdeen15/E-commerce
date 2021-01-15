<?php
include 'DB_conf.php';
class product_db extends Use_db
  {
    private $conn;

    public function __construct()
    {
      $this->conn=$this->getconnect();
    }

    public function create($Name,$Description,$Price,$Quantity,$Image_path,$Category)
    {
      $sql="SELECT * FROM `products` WHERE `Name`='".$Name."';";
      $res=$this->useSql($sql);
      // echo $res->num_rows."<br>";
      if ($res->num_rows===0)
      {
        echo "leh";
        $sql="INSERT INTO `products`(`Name`, `Price`, `Quantity`, `Image_path`, `Description`,`Category`)";
        $sql.= "VALUES ('".$Name."','".$Price."','".$Quantity."','".$Image_path."','".$Description."','".$Category."');";
        $this->useSql($sql);
        $sql="SELECT productId FROM products WHERE (Name ='".$Name."');";
        $res=$this->useSql($sql);
        $row =$res->fetch_assoc();
        return $row['productId'];
    }
    else
    {
        //for testing purpose only
        echo 'duplicted data';
        return "x";
    }
    return 0;
    }

    public function Read($search_key)
    {
      $sql="SELECT * FROM products WHERE (Name ='".$search_key."' OR productId='".$search_key."');";
      $res=$this->useSql($sql);
      if ($res->num_rows!=0)
      {
        $row =$res->fetch_assoc();
        return $row;
      }
      // else {
      //   // for testing perpuse only
      //   echo "<br>not found";
      //   // return 0;
      // }
    }
    public function Update($search_key,$Name,$Description,$Price,$Quantity,$Image_path,$Category)
    {
      $sql="SELECT * FROM products WHERE (Name ='".$search_key."' OR productId='".$search_key."') LIMIT 1;";
      // echo $sql;
      $res=$this->useSql($sql);
      // if ($res->num_rows!=0)
      if($this->Read($search_key))
      {
        $sql="UPDATE `products` SET`Name`='".$Name."',`Price`='".$Price."',`Quantity`='".$Quantity."',";
        $sql.="`Image_path`='".$Image_path."',`Description`='".$Description;
        $sql.="',`Category`='".$Category."' WHERE (Name ='".$search_key."' OR productId='".$search_key."');";
        // echo $sql;
        $res=$this->useSql($sql);
      }
      // else
      // {
      //   echo "not found";
      //   return 0;
      // }
    }
    public function Delete($search_key)
    {
      $sql="DELETE FROM products WHERE (Name ='".$search_key."' OR productId='".$search_key."') LIMIT 1;";
      if($this->useSql($sql))
      {
        echo "<br>not found<br>";
        return 0;
      }

    }
    // decrease  
    public function DecrementQuantity($search_key,$Quantity)
    {
      $row=$this->read($search_key);
      if($this->read($search_key))
      {
        $row['Quantity']-=$Quantity;
        $this->Update($row['productId'],$row['Name'],$row['Description'],$row['Price'],$row['Quantity'],$row['Image_path'],$row['Category']);
      }
    }
    // As a user, I can list all the products by certain categories
    public function FilterCategory($search_key)
    {
      $sql="SELECT * FROM `products` WHERE CONCAT(`Category`) LIKE '".$search_key."'";
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $Products[]=$row;
        }
      
        foreach($Products as $Product)
        {
          foreach($Product as $product=>$res)
            echo "<br>$product=$res<br>";
        }
        return $Products;
      }
    }

    public function Search($search_key)
    {
      $sql="SELECT * FROM `products` WHERE CONCAT(`Name`) LIKE '%".$search_key."%'";
      // echo $sql;
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $Products[]=$row;
        }
      
        // foreach($Products as $Product)
        // {
        //   foreach($Product as $product=>$res)
        //     echo "<br>$product=$res<br>";
        // }
        return $Products;
      }
    }
    public function getAllProducts()
    {
        $sql='SELECT * FROM `products`;';
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
        if($num_rows>0)
        {
        while ($row =$res->fetch_assoc()) {
            $Products[]=$row;
      }
      return $Products;
    }
    }
    public function getCategories()
    {
      $Products=$this->getAllProducts();
      $Categorys[]=$Products[0]['Category'];
      foreach($Products as $product)
      {
        // echo "1<br>".$product['Category'];
        $flag=0;
          foreach($Categorys as $Category)
          {
              if($product['Category']==$Category)
              {
                  $flag=1;
                  break;
              }
             }
              if($flag!=1)
              {
                $Categorys[]=$product['Category'];
                // echo $product['Category'];
              }
              
              
      }
      // foreach($Categorys as $Category)
      //         {
      //           echo "<br>1".$Category;
      //         }
      return $Categorys;
    }
    private function useSql($sql)
    {
      $res=$this->conn->query($sql);
      if(!$res)
        exit("query failed.");
      return $res;
    }
  }
  // testing the class
  // $lol=new product_db();
  // $lol->create("Name2","Description","Price","Quantity","Image_path","category2");
  // $lol->DecrementQuantity(2);
  // $lol->Update(1,"Name","Description","Price","Quantity","Image_path");
  // $lol->Delete(1);
  // $lol->Update(1,"Name","Description","Price","Quantity","Image_path");
  // $lol->getCategories();
  
/*// 
      $row =$res->fetch_assoc();
      echo "<br>".$row['Name']."<br>";
      foreach($row as $product=>$res)
        echo "<br>$product=$res<br>";
        // */