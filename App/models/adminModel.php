<?php
class adminModel{

    private $db;
    public function __construct()
    {
       $this->db = new database();
    }

    public function aduser($name,$password)
    {
       $this->db->query("INSERT INTO `admin`( `uname`, `password`) VALUES (:uname,:upassword)");
       $this->db->bind(':uname',$name);
       $this->db->bind(':upassword',$password);
       if($this->db->execute())
       return true;
       else
        return false;
    }

    public function login($name,$password)
    {
        $this->db->query("SELECT * FROM admin WHERE uname= :uname AND password = :upassword");
        $this->db->bind(':uname',$name);
        $this->db->bind(':upassword',$password);
        $row = $this->db->fetch();
        if($row)
       return $row;
       else
        return false;
    }
    public function getAccunts()
    {
        $this->db->query("SELECT * FROM admin");
        $result=$this->db->fetchall();
        return $result;
    
    }
}