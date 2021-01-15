<?php
include 'C:\xampp\htdocs\project\Classes\Database\cart_db.php';
class cart
{
    private $cartOwner;
    private $cartId;
    private $cart_products;
    private $cart_db;
    function __construct()
    {
        $this->product_db=new  cart_db();
    }
    function create($UserID)
    {
        $this->cartId=$this->product_db->create($UserID);
        $this->cartOwner;
        return $this->cartId;
    }
    function insert($CartID,$ProductId,$Quantity)
    {
        $this->product_db->insert($CartID,$ProductId,$Quantity);
    }
    function UpdateQuantity($CartID,$ProductId,$Quantity)
    {
        if($this->product_db->UpdateQuantity($CartID,$ProductId,$Quantity))
        {
            return true;
        }
    }
    function buy($CartID)
    {
        $this->product_db->buy($CartID);
    }
    function GetAllUserThatBoughtProduct($search_key)
    {
        $Users=$this->product_db->GetAllUserThatBoughtProduct($search_key);
        foreach($Users as $user)
      {
        echo '<br>'.$user.'<br>';
      }
    }
    function DeleteCart()
    {
        $this->product_db->DeleteCart($this->cartId);
    }
    function DeleteProduct($ProductId)
    {
        $this->product_db->DeleteProduct($this->cartId,$ProductId);
    }
    function Read()
    {
        $this->cart_products=$this->product_db->Read($this->CartID);
    }
}