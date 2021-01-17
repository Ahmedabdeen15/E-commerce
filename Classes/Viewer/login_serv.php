<?php
include 'C:\xampp\htdocs\project\Classes\Controller\User.php';
require_once 'C:\xampp\htdocs\project\Classes\Controller\Admin.php';


if(isset($_POST['submit']))
{
    // unset($_SESSION['user']);
    // unset($_SESSION['user_id']);
    $User=new User();
    $Admin=new Admin();
    if($User->login($_POST['username'],$_POST['password']))
    {
        session_start();
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        $_SESSION['user']=$User;
        $_SESSION['user_id']=$User->GetuserId();
        // echo '<br/>'.$_SESSION['user_id'].'<br/>';
        header("location: "."Index_d.php");
    }
    else if($Admin->login($_POST['username'],$_POST['password']))
    {
        $_SESSION['user']=$Admin;
        $_SESSION['user_id']=$Admin->GetuserId();
        header("location: "."Index_dd.php");
    }
    else{
        echo "Error";
    }
    
}