<?php 
include 'DB_conf.php';
class User_db extends Use_db
  {


    private $conn;

    public function __construct()
    {
      $this->conn=$this->getconnect();
    }

    public function getAllTable(){
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `MemberShip`, `ReportId` FROM users";
      $res=$this->useSql($sql);
      $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $Users[]=$row;
        }

        return $Users;
      }
    }
    // used to create row in db
    //use this method to create new user
     //no membership==0  ,  gold ==1  ,  platinum==2
    public function Create($userFirstname,$userSecname,$username,$Password,$Email,
                            $AnsfSecurityQ,$userMemberShip,$Address){
      $sql="SELECT * FROM users WHERE (userName ='".$username."' OR Email ='".$Email."');";
      $res=$this->useSql($sql);
      if ($res->num_rows==0)
      {

        $sql="INSERT INTO users (Firstname,Secname,userName,Email,Password,";
        $sql.="Allowance,MemberShip,AnsOfSecurityQ,Address) VALUES  ('".$userFirstname."','";
        $sql.=$userSecname."','".$username."','".$Email."','".$Password."','1','";
        $sql.=$userMemberShip."','".$AnsfSecurityQ."','".$Address."');";
        $this->useSql($sql);
        $sql="SELECT userId FROM users WHERE (userName ='".$username."' OR Email ='".$Email."');";
        $res=$this->useSql($sql);
        $row =$res->fetch_assoc();
        return $row['userId'];
      }
      else
      {
        //for testing purpose only
        echo 'duplicted data';
        return 0;
      }
    }
    public function Search($search_key)
    {
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `MemberShip`, `ReportId` FROM `users` WHERE CONCAT(`userId`, `FirstName`, `SecName`, `userName`, `Email`) LIKE '%".$search_key."%'";
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $Users[]=$row;
        }
        return $Users;
      }
    }

    public function blacklistuser($id)
    {
      $sql="UPDATE users SET Allowance='0' WHERE userId ='".$id."'";
      $this->useSql($sql);
      if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }


    }
    public function updateMembership($id,$userMemberShip)
    {
      $sql="UPDATE users SET MemberShip='".$userMemberShip."' WHERE userId ='".$id."'";
      $this->useSql($sql);
      //  echo mysqli_num_rows($res);
      echo $this->conn->affected_rows;
      if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    public function checklogin($username,$password){
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `MemberShip`, `ReportId`,`CurrentCartId` FROM users WHERE ((userName ='".$username."' OR Email ='".$username."') AND Password ='".$password."');";
      $res=$this->useSql($sql);
        $row =$res->fetch_assoc();
        $res=$this->useSql($sql);
      if (!(mysqli_num_rows($res)==0))
      {
        return $row;
      }
    }
    public function read($Id)
    {
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `Allowance`, `MemberShip`, `AnsOfSecurityQ`, `Report`, `CurrentCartId` FROM `admin` WHERE (`userId`) = '".$Id."'";
        $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        $row =$res->fetch_assoc();
        return $row;
      }

    }
    public function Update($userId,$userFirstname,$userSecname,$username
                            ,$userMemberShip,$Address,$Allowance){
      $sql="SELECT * FROM users WHERE (userId ='".$userId."');";
      $res=$this->useSql($sql);
      if ($res->num_rows>0)
      {

        $sql="UPDATE `users` SET `FirstName`='".$userFirstname."',`SecName`='".$userSecname;
        $sql.="',`userName`='".$userSecname."',`Email`='".$username."',`Address`='".$Address;
        $sql.="',`Allowance`='".$Allowance."',`MemberShip`='".$userMemberShip;
        $sql.="' WHERE userId='".$userId."';";
        $this->useSql($sql);
        if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }

      }
    }
    // ----------------------------
    function SetReport($userId,$Report){
      $sql="SELECT * FROM users WHERE (userId ='".$userId."');";
      $res=$this->useSql($sql);
      if ($res->num_rows>0)
      {
        $Report=$this->conn->real_escape_string($Report);
        $sql="UPDATE `users` SET ReportId ='".$Report."' WHERE userId='".$userId."';";
        $this->useSql($sql);
        if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }

      }
    }
    function GetReport($userId){
      $sql="SELECT ReportId FROM users WHERE (userId ='".$userId."');";
      $res=$this->useSql($sql);
      if ($res->num_rows>0)
      {
        $row =$res->fetch_assoc();
        // echo $row['ReportId']."11<br>";
        return $row['ReportId'];
    }
  }
    public function ForgetPassword($username,$AnsOfSecurityQ,$Newpassword){
      $sql="SELECT * FROM `users` WHERE (`userName`='".$username."' OR `Email`='".$username."') AND `AnsOfSecurityQ`='".$AnsOfSecurityQ."';";
      $res=$this->useSql($sql);
      if ($res->num_rows==0)
      {
        return false;
      }
      else
      {
        $sql="UPDATE `users` SET `Password`='".$Newpassword."' WHERE `userName`='".$username."' OR `Email`='".$username."' AND `AnsOfSecurityQ`='".$AnsOfSecurityQ."';";
        $res=$this->useSql($sql);
        if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }

      }
    }
    public function checkAllowance($username,$password){
      $sql="SELECT * FROM users WHERE (userName ='".$username."' OR Email ='".$username."' AND Password ='".$password."');";
      $res=$this->useSql($sql);
        $row =$res->fetch_assoc();
      if ($row['Allowance']==0)
      {
        return false;
      }
      else
      {
        return true;
      }
    }
    private function useSql($sql)
    {
      $res=$this->conn->query($sql);
      if(!$res)
        exit("query failed. ");
        return $res;
    }
    public function changePassword($userId,$Newpassword){
        $sql="UPDATE `users` SET `Password`='".$Newpassword."' WHERE `userId`='".$userId."';";
        $this->useSql($sql);
        if ($this->conn->affected_rows)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
  }
