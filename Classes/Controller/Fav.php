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
        $temp->SetProductId($$row['ProductId']);
        return $temp;
    }
    public function GetFavList($UserId)
    {
        $tempFavList=$this->fav_db->GetFavList($UserId);
        $i=0;
        foreach($tempFavList as $row)
        {
            $FavList[$i]=new FavProducts();
            $FavList[]=$this->createObject($row);
        }
    }
    public function SetUserId($UserId)
    {
        $this->user_id=$UserId;
    }
    public function SetProductId($ProductId)
    {
        $this->ProductId=$ProductId;
    }
    public function InsertToFav($UserId,$ProductId)
    {
        if($this->fav_db->InsertToFav($UserId,$ProductId))
        {
            return true;
        }
    }
}