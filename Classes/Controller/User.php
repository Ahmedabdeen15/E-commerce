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
            return true;
        }else{echo "no data";}
    }
    private function setObject($row)
    {
        foreach($row as $key => $cont)
        {
            // echo "<br>$key => $cont";
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
    function updateMembership($userMemberShip)
    {
        if($this->user_db->updateMembership($this->userId,$userMemberShip))
        {
            return true;
        }
    }
    function checkDiscountValue()
    {

        switch ($this->MemberShip) {
            case 0:
                return 0;
                break;
            case 1:
                return 0.10;
                break;
            case 2:
                return 0.15;
                break;
        }
    }
    function SetReport($Report)
    {
        if($this->user_db->SetReport($this->userId,$Report))
            return true;
    }
    function GetReport(){
        if($this->user_db->GetReport($this->userId))
        {
            $rep=$this->user_db->GetReport($this->userId);
            return $rep;
        }
            
    }
    function setObjectByid($UserId)
    {
        if($this->user_db->read($UserId))
        {
            $row=$this->user_db->read($UserId);
            $this->setObject($row);
        }
    }
    function blacklistuser()
    {
        if($this->user_db->blacklistuser($this->userId))
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
// $x->ChangePassword("ahmed12");
// $x->updateMembership(2);
// $x->checkDiscountValue();
// $x->SetReport("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
// $test=$x->GetReport();
// echo $test;