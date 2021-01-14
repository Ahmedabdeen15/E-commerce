<?php
class DB_conf
{
  private $servername="localhost";
  private $username="root";
  private $password="";
  private $dbname="project_db";
  private $conn;
// used for conncting to data-base
 function getconnect()
  {
    $this->conn= new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    if($this->conn->connect_errno)
    {
      echo "Failed to connect to MySQL: " . $this->conn -> connect_error;
      exit();
    }
    return $this->conn;
  }
}
//class used to inheart connection to other classes
abstract class Use_db extends DB_conf
  {
    private $conn;
  }