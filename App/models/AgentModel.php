<?php
class AgentModel{
    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function insertAgent($name,$start,$job)
    {
       $this->db->query("INSERT INTO `agent`( `name`,`addres`,`job`) VALUES (:emploname,:holistart,:job)");
       $this->db->bind(':emploname',$name);
       $this->db->bind(':holistart',$start);
       $this->db->bind(':job',$job);
       if($this->db->execute())
       return true;
       else
        return false;
    }
    public function getAccunts()
    {
        $this->db->query("SELECT * FROM agent");
        $result=$this->db->fetchall();
        return $result;
    
    }
}