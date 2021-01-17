<?php
include 'C:\xampp\htdocs\project\Classes\Controller\Product.php';

if(isset($_POST['submit']))
{ 
    session_start();
    $target_dir = "images/";
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
    $fileImage_path=uniqid('',true).".".$imageFileType;
    // echo $fileImage_path;
    $target_file = $target_dir . basename($fileImage_path);
    $product = new Product();
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
            if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
            {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    if($product->create($_POST['Name'],$_POST['Description'],$_POST['Price'],$_POST['Quantity'],$target_file,$_POST['Category']))
                    {
                        header("location: "."details.php");
                        if(isset($_SESSION['error']))
                        {
                            unset($_SESSION['error']);
                        }
                    }
                    else
                    {
                        $_SESSION['error']='error.....<br/>Can not enter this product';
                        header("location: "."addproduct.php");
                    
                    }
}
}
}
}
