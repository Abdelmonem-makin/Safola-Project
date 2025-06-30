<?php
class EmployeeModel{

    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function InsertEmployee($emplname,$empladdrs,$emplphone,$empljob,$emplemail)
    {
       $this->db->query("INSERT INTO `employee`( `emplname`,`empladdrs`,`emplphone`,`empljob`,`emplemail`) VALUES (:emploname,:emploaddrs,:emplophone,:emplojob,:emploemail)");
       $this->db->bind(':emploname',$emplname);
       $this->db->bind(':emploaddrs',$empladdrs);
       $this->db->bind(':emplophone',$emplphone);
       $this->db->bind(':emplojob',$empljob);
       $this->db->bind(':emploemail',$emplemail);
       if($this->db->execute())
       return true;
       else
        return false;
    }

    public function getAccunts()
    {
        $this->db->query("SELECT * FROM employee");
        $result=$this->db->fetchall();
        return $result;
    
    }
    public function queryccunts($q=[])
    {
        $this->db->query("SELECT * FROM employee WHERE EmployeeID like '$q'");
        $result=$this->db->fetch();
        return $result;
    
    }
}