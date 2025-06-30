<?php
class holidayModel{
    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function insertholi($name,$start,$end)
    {
       $this->db->query("INSERT INTO `holiday`( `emp_name`, `hol_s`,`hol_e`) VALUES (:emploname,:holistart,:holiend)");
       $this->db->bind(':emploname',$name);
       $this->db->bind(':holistart',$start);
       $this->db->bind(':holiend',$end);
       if($this->db->execute())
       return true;
       else
        return false;
    }
    public function getAccunts()
    {
        $this->db->query("SELECT * FROM holiday");
        $result=$this->db->fetchall();
        return $result;
    }
}