<?php
class accuntsmodel{
    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function insertsaccunts($name,$start,$end,$pay,$date)
    {
       $this->db->query("INSERT INTO `acccunts`( `agent_name`,`bill_num`,`mon_pay`,`mon_have`,`date`) VALUES (:emploname,:holistart,:holiend,:pay,:dateacc)");
       $this->db->bind(':emploname',$name);
       $this->db->bind(':holistart',$start);
       $this->db->bind(':holiend',$end);
       $this->db->bind(':pay',$pay);
       $this->db->bind(':dateacc',$date);
       if($this->db->execute())
       return true;
       else
        return false;
    }
    public function getAccunts()
    {
        $this->db->query("SELECT * FROM acccunts");
        $result=$this->db->fetchall();
        return $result;
    
    }
    public function queryccunts($q=[])
    {
        $this->db->query("SELECT * FROM acccunts WHERE accunts_id like '$q'");
        $result=$this->db->fetch();
        return $result;
    
    }
}