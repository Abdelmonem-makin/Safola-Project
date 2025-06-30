<?php
class billModel{

    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function Insertbill($emplname,$empladdrs,$emplphone,$empljob,$emplemail)
    {
       $this->db->query("INSERT INTO `bill`( `emp_name`,`date`,`pay`,`opt`,`opt_name`) VALUES (:emploname,:emploaddrs,:emplophone,:emplojob,:emploemail)");
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
        $this->db->query("SELECT * FROM bill");
        $result=$this->db->fetchall();
        return $result;
    
    }
    public function queryccunts($q=[])
    {
        $this->db->query("SELECT * FROM bill WHERE bill_id like '$q'");
        $result=$this->db->fetch();
        return $result;
    
    }
}