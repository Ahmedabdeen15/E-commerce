<?php 
session_start();
if(isset($_POST['product']))
{
    $_SESSION['productId']=$_POST['product'];
    header("location: "."details.php");
}