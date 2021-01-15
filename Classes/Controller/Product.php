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
        if($id!=0)
        {
            $this->productId=$id;
            $this->Name=$Name;
            $this->Price=$Price;
            $this->Quantity=$Quantity;
            $this->Image_path=$Image_path;
            $this->Category=$Category;
            $this->Description=$Description;
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
    function Search($search_key)
    {
        $Products_Array=$this->product_db->Search($search_key);
        // foreach($Products_Array as $Product_Array)
        // {
        //     echo $Product_Array['productId'];
        // }
        $Products_Object_Array=$this->setArrayOfObject($Products_Array);
        
        return $Products_Object_Array;
    }
    // -----------------------------------
    private function setArrayOfObject($Products_Array)
    {
        $i=0;
        foreach($Products_Array as $Product_Array)
        {
            // echo $Product_Array['Image_path'];
            $Products_Object_Array[$i]=new product();
            $Products_Object_Array[$i]->SetproductId($Product_Array['productId']);
            $Products_Object_Array[$i]->SetName($Product_Array['Name']);
            $Products_Object_Array[$i]->SetPrice($Product_Array['Price']);
            $Products_Object_Array[$i]->SetQuantity($Product_Array['Quantity']);
            $Products_Object_Array[$i]->SetImage_path($Product_Array['Image_path']);
            $Products_Object_Array[$i]->SetDescription($Product_Array['Description']);
            $Products_Object_Array[$i]->SetCategory($Product_Array['Category']);
            // echo $Products_Object_Array[$i]-> getproductId()
            //     .$Products_Object_Array[$i]-> getName()
            //     .$Products_Object_Array[$i]-> getPrice()
            //     .$Products_Object_Array[$i]-> getQuantity()
            //     .$Products_Object_Array[$i]-> getImage_path()
            //     .$Products_Object_Array[$i]-> getDescription()
            //     .$Products_Object_Array[$i]-> getCategory();
            $i++;
        }
        return $Products_Object_Array;
    }
    private function setObject($row)
    {
        foreach($row as $key => $cont)
        {
            // echo "<br>$key => $cont";
            $this->$key=$cont;
        }
    }
    // -------------------------------------
    function SetproductId($productId)
    {
        $this->productId=$productId;
    }
    function SetName($Name)
    {
        $this->Name=$Name;
    }
    function SetPrice($Price)
    {
        $this->Price=$Price;
    }
    function SetQuantity($Quantity)
    {
        $this->Quantity=$Quantity;
    }
    function SetImage_path($Image_path)
    {
        $this->Image_path=$Image_path;
    }
    function SetDescription($Description)
    {
        $this->Description=$Description;
    }
    function SetCategory($Category)
    {
    $this->Category=$Category;
    }
    // -------------------------------------
    function getproductId()
    {
        return $this->productId;
    }
    function getName()
    {
        return $this->Name;
    }
    function getPrice()
    {
        return $this->Price;
    }
    function getQuantity()
    {
        return $this->Quantity;
    }
    function getImage_path()
    {
        return $this->Image_path;
    }
    function getDescription()
    {
        return $this->Description;
    }
    function getCategory()
    {
        return $this->Category;
    }
    // ------------------------------------
}
$x=new product();
// $l=$x->create("mobile4 3a4an fyi mo4kla","samsung w 2let 2dab y3ny",9999999,6,"3andha","3andha bardo");
// // echo $l."<br>";
// // $x->Read(4);
// echo $x-> getproductId()
//     .$x-> getName()
//     .$x-> getPrice()
//     .$x-> getQuantity()
//     .$x-> getImage_path()
//     .$x-> getDescription()
//     .$x-> getCategory();
// $ar=$x->Search("Name");
// foreach($ar as $art)
// {
//     echo $art-> getproductId()
//     .$art-> getName()
//     .$art-> getPrice()
//     .$art-> getQuantity()
//     .$art-> getImage_path()
//     .$art-> getDescription()
//     .$art-> getCategory();
// }