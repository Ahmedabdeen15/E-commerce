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
        if($this->user_db->checklogin($User,$password))
        {
            $row=$this->user_db->checklogin($User,$password);
            $this->setObject($row);
            // return $row;
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
    function createNewUser($userFirstname,$userSecname,$username,$Password,$Email,
    $AnsfSecurityQ,$userMemberShip,$Address)
    {
        if($this->user_db->Create($userFirstname,$userSecname,$username,$Password,$Email,
        $AnsfSecurityQ,$userMemberShip,$Address))
        {
            $this->userFirstname=$userFirstname;
            $this->userSecname=$userSecname;
            $this->username=$username;
            $this->Password=$Password;
            $this->Email=$Email;
            $this->AnsfSecurityQ=$AnsfSecurityQ;
            $this->userMemberShip=$userMemberShip;
            $this->Address=$Address;
            return true;
        }
        else
            return false;
    }
    public function ForgetPassword($username,$AnsOfSecurityQ,$NewPassword)
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
}
// testing
$x=new User();
// $row=$x->login("ahmed","ahmed");
// $x->createNewUser("userFirstname","userSecname","ahmed","ahmed","Email",
// "AnsfSecurityQ","userMemberShip","Address");
// foreach($row as $key => $cont)
        // {
        //     echo "<br>$key => $cont";
        // }
// $x->ForgetPassword("ahmed","AnsfSe1curityQ1","ahmed");