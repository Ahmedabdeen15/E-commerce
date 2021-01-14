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
}
// testing
$x=new User();
$x->login("ahmed","ahmed");