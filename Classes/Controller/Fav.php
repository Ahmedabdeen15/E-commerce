<?php
include 'C:\xampp\htdocs\project\Classes\Database\Fav_db.php';
class FavProducts{
    private $userId;
    private $ProductId;
    private $fav_db;

    public function __construct()
    {
      $this->fav_db=new Fav_db();
    }
    private function createObject($row)
    {
        $temp=new FavProducts();
        $temp->SetUserId($row['userId']);
        $temp->SetProductId($row['ProductId']);
        return $temp;
    }
    public function GetFavList($UserId)
    {
        $tempFavList=$this->fav_db->GetFavList($UserId);
        $i=0;
        foreach($tempFavList as $row)
        {
            $FavList[$i]=new FavProducts();
            $FavList[$i]=$this->createObject($row);
            // $FavList[$i]->SetUserId($row['userId']);
            // $FavList[$i]->SetProductId($row['ProductId']);
            // echo $FavList[$i]->GetUserId()."<br/>";
            // echo $FavList[$i]->GetProductId()."<br/>";
            $i++;
        }
        
        return $FavList;
    }
    public function SetUserId($UserId)
    {
        $this->userId=$UserId;
    }
    public function SetProductId($ProductId)
    {
        $this->ProductId=$ProductId;
    }
    public function GetUserId()
    {
       return $this->userId;
    }
    public function GetProductId()
    {
        return $this->ProductId;
    }
    public function InsertToFav($UserId,$ProductId)
    {
        if($this->fav_db->InsertToFav($UserId,$ProductId))
        {
            return true;
        }
    }
}
// ----------------------------
// $x=new FavProducts();
// $x->InsertToFav("5514","99");
// $x->InsertToFav("5514","22");
// $x->InsertToFav("888","554");
// $ar=$x->GetFavList(5514);
// foreach($ar as $art)
// {
//     echo $art->GetUserId()."<br/>";
//     echo $art->GetProductId()."<br/>";
// }