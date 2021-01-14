<!-- userId	FirstName	SecName	userName	Email	Address	Password	Allowance	MemberShip	AnsOfSecurityQ	ReportId	CurrentCartId	 -->
<?php
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
    
}