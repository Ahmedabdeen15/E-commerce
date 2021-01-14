<!-- userId	FirstName	SecName	userName	Email	Address	Password	Allowance	MemberShip	AnsOfSecurityQ	ReportId	CurrentCartId	 -->
<?php
include 'C:\xampp\htdocs\project\Classes\Database\User_db.php';
class User
{
    private $userId;
    private $FirstName;
    private $SecName;
    private $userName;
    private $Email;
    private $Address;
    private $Allowance;
    private $MemberShip;
    private $CurrentCartId;
    private $ReportId;
    private $user_db;
    function __construct()
    {
        $this->user_db=new User_db();
    }
    function login($User,$password)
    {
        if($this->user_db->checklogin($User,$password) && $this->user_db->checkAllowance($User,$password) === true)
        {
            $row=$this->user_db->checklogin($User,$password);
            $this->setObject($row);
            // return $row;
            return true;
        }else{echo "no data";}
    }
    private function setObject($row)
    {
        foreach($row as $key => $cont)
        {
            echo "<br>$key => $cont";
            $this->$key=$cont;
        }
    }
    function register($userFirstname,$userSecname,$username,$Password,$Email,
    $AnsfSecurityQ,$userMemberShip,$Address)
    {
        $userId=$this->user_db->Create($userFirstname,$userSecname,$username,$Password,$Email,
        $AnsfSecurityQ,$userMemberShip,$Address);
        if($userId)
        {
            $this->FirstName=$userFirstname;
            $this->SecName=$userSecname;
            $this->userName=$username;
            $this->Password=$Password;
            $this->Email=$Email;
            $this->MemberShip=$userMemberShip;
            $this->Address=$Address;
            $this->userId=$userId;
            return true;
        }
        else
            return false;
    }
    function ForgetPassword($username,$AnsOfSecurityQ,$NewPassword)
    {
        if($this->user_db->ForgetPassword($username,$AnsOfSecurityQ,$NewPassword))
        {
            return true;
        }
        else
        {         
            return false;

        }
    }
    function ChangePassword($NewPassword)
    {
       $this->user_db->changePassword($this->userId,$NewPassword);
    }
    public function updateMembership($userMemberShip)
    {
        if($this->user_db->updateMembership($this->userId,$userMemberShip))
        {
            return true;
        }
    }
    
}
// testing
$x=new User();
$x->login("ahmed","ahmed12");
// $x->createNewUser("userFirstname","userSecname","ahmed","ahmed","Email",
// "AnsfSecurityQ","userMemberShip","Address");
// foreach($row as $key => $cont)
        // {
        //     echo "<br>$key => $cont";
        // }
// $x->ForgetPassword("ahmed","AnsfSe1curityQ1","ahmed");
$x->ChangePassword("ahmed12");
$x->updateMembership(2);