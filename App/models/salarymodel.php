<?php
class salarymodel{
    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function insertsalary($name,$start,$end)
    {
       $this->db->query("INSERT INTO `salary`( `emp_name`,`job_degry`,`salary`) VALUES (:emploname,:holistart,:holiend)");
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
        $this->db->query("SELECT * FROM salary");
        $result=$this->db->fetchall();
        return $result;
    }
    public function queryccunts($q=[])
    {
        $this->db->query("SELECT * FROM salary WHERE salary_id like '$q'");
        $result=$this->db->fetch();
        return $result;
    
    }
}