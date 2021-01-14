
<?php 
include 'DB_conf.php';
class Fav_db extends Use_db
{
    private $conn;

    public function __construct()
    {
      $this->conn=$this->getconnect();
    }
    public function InsertToFav($UserId,$ProductId)
    {
      $sql="SELECT * FROM `fav` WHERE (`userId`='".$UserId."' AND `ProductId`='".$ProductId."')";
      $res=$this->useSql($sql);
      if ($res->num_rows==0)
      {
        $sql="INSERT INTO `fav`(`userId`, `ProductId`) VALUES ('".$UserId."','".$ProductId."')";
        $this->useSql($sql);
        if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }
      }
    }
    public function GetFavList($UserId)
    {
      $sql="SELECT * FROM `fav` WHERE `userId`='".$UserId."';";
      $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $FavProducts[]=$row;
        }
        return $FavProducts;
      }
    }
    private function useSql($sql)
    {
      $res=$this->conn->query($sql);
      if(!$res)
        exit("query failed. ");
      return $res;
    }
}