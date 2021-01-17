<?php
include 'C:\xampp\htdocs\project\Classes\Controller\User.php';
require_once 'C:\xampp\htdocs\project\Classes\Controller\Admin.php';
session_start();
session_unset();
$_SESSION['flag']=0;
if(isset($_POST['submit']))
{
    // unset($_SESSION['user']);
    // unset($_SESSION['user_id']);
    $User=new User();
    $Admin=new Admin();
    if($User->login($_POST['username'],$_POST['password']))
    {
        $_SESSION['flag']=0;
        $_SESSION['user_id']=$User->GetuserId();
        // echo '<br/>'.$_SESSION['user_id'].'<br/>';
        header("location: "."Index_d.php");
    }
    else if($Admin->login($_POST['username'],$_POST['password']))
    {
        $_SESSION['flag']=1;
        $_SESSION['user']=$Admin;
        $_SESSION['user_id']=$Admin->GetuserId();
        header("location: "."Index_dd.php");
    }
    else{
        $_SESSION['error']='Invalid username or password';
        header("location: "."login.php");
    }
    
}