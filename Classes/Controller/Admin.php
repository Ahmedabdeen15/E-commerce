<?php
include 'C:\xampp\htdocs\project\Classes\Database\Admin_db.php';
class Admin
{
    private $userId;
    private $userFirstname;
    private $userSecname;
    private $userName;
    private $userEmail;
    private $Admin_db;
    public function __construct()
    {
      $this->Admin_db=new Admin_db();
    }
    public function login($username,$password)
    {
        if($this->Admin_db->checklogin($username,$password))
        {
            $row=$this->Admin_db->checklogin($username,$password);
            $this->setObject($row);
            return true;
        }

    }
    function Create($userFirstname,$userSecname,$username,$password,$Email,$SecurityQAns)
        {
            $id=$this->Admin_db->Create($userFirstname,$userSecname,$username,$password,$Email,$SecurityQAns);
            $this->read($id);
        }
        public function read($Id)
        {
            if($this->Admin_db->read($Id))
            {
                $row=$this->$this->Admin_db->read($Id);
                $this->setObject($row);
            }
        }
        
    // -------------------------------
    private function setObject($row)
    {
        foreach($row as $key => $cont)
        {
            // echo "<br>$key => $cont";
            $this->$key=$cont;
        }
    }
    // ----------------------------------
    /*$userId;
    private $userFirstname;
    private $userSecname;
    private $userName;
    private $userEmail; */
    function GetuserId()
    {
        return $this->userId;
    }
    function GetuserFirstname()
    {
        return $this->userFirstname;
    }
    function GetuserSecname()
    {
        return $this->userSecname;
    }
    function GetuserName()
    {
        return $this->userName;
    }
    function GetuserEmail()
    {
        return $this->userEmail;
    }
}