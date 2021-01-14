
<?php 
include 'DB_conf.php';
class Fav_db extends Use_db
{
    private $conn;

    public function __construct()
    {
      $this->conn=$this->getconnect();
    }
    public function InsertToFav($UseId,$ProductId)
    {
      $sql="SELECT * FROM `fav` WHERE (`userId`='".$UseId."' AND `ProductId`='".$ProductId."')";
      $res=$this->useSql($sql);
      if ($res->num_rows==0)
      {
        $sql="INSERT INTO `fav`(`userId`, `ProductId`) VALUES ('".$UseId."','".$ProductId."')";
        $this->useSql($sql);
        return 1;
      }
    }
    public function GetFavList($UseId)
    {
      $sql="SELECT * FROM `fav` WHERE `userId`='".$UseId."';";
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