<?php

include 'DB_conf.php';
class Report_db extends Use_db {

    private $conn;

    public function __construct()
    {
      $this->conn=$this->getconnect();
    }
    public function CreateReport($userid,$Report)
    {
      $sql="INSERT INTO `report`(`TextReport`, `userId`) VALUES ('".$Report."','".$userid."')";
      $this->useSql($sql);

      $last_id = $this->conn->insert_id;
      return $last_id;
    //   $this->SetReportId($userid,$last_id);
    }
    public function GetReport($userid,$Report)
    {
      $sql="INSERT INTO `report`(`TextReport`, `userId`) VALUES ('".$Report."','".$userid."')";
      $this->useSql($sql);

      $last_id = $this->conn->insert_id;
      return $last_id;
    //   $this->SetReportId($userid,$last_id);
    }
    private function useSql($sql)
    {
      $res=$this->conn->query($sql);
      if(!$res)
        exit("query failed. ");
      return $res;
    }
}