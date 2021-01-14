<?php
include 'DB_conf.php';
class Admin_db extends Use_db
  {
    private $conn;
    public function __construct()
    {
      $this->conn=$this->getconnect();
    }
    
    // used to create row in db
    //used to signup
    public function Create($userFirstname,$userSecname,$username,$password,$Email,$SecurityQAns){
      $sql="SELECT * FROM admin WHERE (userName ='".$username."' OR userEmail ='".$Email."');";
      $res=$this->useSql($sql);
      if (mysqli_num_rows($res)==0)
      {
        $sql="INSERT INTO admin (userFirstname,userSecname,userName,userEmail,userPassword,usersecqustion) VALUES  ('".$userFirstname."','".$userSecname."','".$username."','".$Email."','".$password."','".$SecurityQAns."');";
        $res=$this->useSql($sql);
        $row =$res->fetch_assoc();
        return $row['userId'];
      }
  }
    public function checklogin($username,$password){
      $sql="SELECT * FROM admin WHERE (userName ='".$username."' OR userEmail ='".$username."' AND userPassword ='".$password."');";
      $res=$this->useSql($sql);
      $row =$res->fetch_assoc();
      $res=$this->useSql($sql);
    if (mysqli_num_rows($res)==0)
    {
      return 0;
    }
    else
    {
      return $row['userId'];
    }
  }
    public function ForgetPassword($username,$AnsOfSecurityQ){
      $sql="SELECT * FROM `admin` WHERE `userName`='".$username."' OR `userEmail`='".$username."' AND `usersecqustion`='".$AnsOfSecurityQ."';";
      $res=$this->useSql($sql);
       $row =$res->fetch_assoc();
        $res=$this->useSql($sql);
      if (mysqli_num_rows($res)==0)
      {
        return 0;
      }
      else
      {
        return $row['userId'];
      }
    }
    public function read($Id)
    {
      $sql="SELECT `userId`, `userFirstname`, `userSecname`, `userName`, `userEmail` FROM `admin` WHERE (`userId`) = '".$Id."'";
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $User[]=$row;
        }
        return $User;
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
