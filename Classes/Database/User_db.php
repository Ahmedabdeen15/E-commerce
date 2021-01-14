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
      $res=$this->useSql($sql);
      // echo mysqli_num_rows($res);
      if (mysqli_num_rows($res)==0)
      {
        $this->userAllowance=0;

        echo "id not found";
      }

    }
    public function updateMembership($id,$userMemberShip)
    {
      $sql="UPDATE users SET Allowance='".$userMemberShip."' WHERE userId ='".$id."'";
      $res=$this->useSql($sql);
      // echo mysqli_num_rows($res);
      if (mysqli_num_rows($res)==0)
      {
        $this->userMemberShip=$userMemberShip;
        echo "id not found";
      }

    }
    public function checklogin($username,$password){
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `MemberShip`, `ReportId`,`CurrentCartId` FROM users WHERE (userName ='".$username."' OR Email ='".$username."' AND Password ='".$password."');";
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
      $sql="SELECT `userId`, `FirstName`, `SecName`, `userName`, `Email`, `Address`, `MemberShip`,`CurrentCartId`, `ReportId` FROM `users` WHERE (`userId`) = '".$Id."'";
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
        return 1;
      }
    }
    private function SetReportId($userId,$ReportId){
      $sql="SELECT * FROM users WHERE (userId ='".$userId."');";
      $res=$this->useSql($sql);
      if ($res->num_rows>0)
      {

        $sql="UPDATE `users` SET (ReportId) ='".$ReportId."') WHERE userId='".$userId."';";
        $this->useSql($sql);
        return 1;
      }
    }
    public function CreateReport($userid,$Report)
    {
      $sql="INSERT INTO `report`(`TextReport`, `userId`) VALUES ('".$Report."','".$userid."')";
      $this->useSql($sql);
      $last_id = $this->conn->insert_id;
      $this->SetReportId($userid,$last_id);
    }
    public function InsertToFav($UseId,$ProductId)
    {
      $sql="SELECT * FROM `fav` WHERE `userId`='".$UseId."' AND `ProductId`='".$ProductId."'";
      $res=$this->useSql($sql);
      if ($res->num_rows>0)
      {
        $sql="INSERT INTO `fav`(`userId`, `ProductId`) VALUES ('".$UseId."','".$ProductId."')";
        $this->useSql($sql);
        return 1;
      }
    }
    public function GetFavList($UseId)
    {
      $sql="SELECT * FROM `fav` WHERE `userId`='".$UseId."';";
      $res=$this->useSql($sql);
        $num_rows=$res->num_rows;
      if($num_rows>0)
      {
        while ($row =$res->fetch_assoc()) {
          $FavProducts[]=$row;
        }
        return $FavProducts;
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
        return true;
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
    
  }
