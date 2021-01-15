<?php
include 'C:\xampp\htdocs\project\Classes\Database\product_db.php';
class product
{
    private $productId;
    private $Name;
    private $Price;
    private $Quantity;
    private $Image_path;
    private $Description;
    private $Category;
     /*`Quantity`, `Image_path`, `Description`, `Category`*/
    private $product_db;
    function __construct()
    {
        $this->product_db=new  product_db();
    }
    function create($Name,$Description,$Price,$Quantity,$Image_path,$Category)
    {
        $id=$this->product_db->create($Name,$Description,$Price,$Quantity,$Image_path,$Category);
        if($id===0)
        {
            $this->Name=$Name;
            $this->Price=$Price;
            $this->Quantity=$Quantity;
            $this->Image_path=$Image_path;
            $this->Category=$Category;
            return true;
        }
    }
    function Read($id)
    {
        if($this->product_db->Read($id))
        {
            $row=$this->product_db->Read($id);
            $object=$this->setObject($row);
            return $object;
        }   
    }
    private function setObject($row)
    {
        foreach($row as $key => $cont)
        {
            // echo "<br>$key => $cont";
            $this->$key=$cont;
        }
    }
}