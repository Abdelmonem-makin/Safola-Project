<?php
class database{
private $host = DB_HOST;
private $user = DB_USER;
private $pass = DB_PASSWORD;
private $dbname = DB_NAME;

private $pdo;
private $stmt;

public function __construct(){
    $dsn ='mysql:host='.$this->host.';dbname='.$this->dbname;
    try{
        $this->pdo =new PDO($dsn,$this->user,$this->pass);
       
    }
    catch(PDOException $e)
    {
        die('not connect <br>' .$e->getMessage());
    }

    
}

public function __destruct(){
    if($this->stmt !== null){
        $this->stmt = null;
    }
    if($this->pdo !==null){
        $this->pdo = null;
    }
}
 
public function query($sql){
    $this->stmt = $this->pdo->prepare($sql);
}
public function bind($param, $value,$type = null){
    if(is_null($type)){
        switch(true){
            case is_int($value);
            $type =pdo::PARAM_INT;
            break;
            case is_bool($value);
            $type =pdo::PARAM_BOOL;
            break;
            case is_null($value);
            $type =pdo::PARAM_NULL;
            break;
            default:
            $type =pdo::PARAM_STR;

           }
    }

    $this->stmt->bindvalue($param, $value,$type);
}

public function execute(){
    $this->stmt->execute();
    return true;
}

public function fetchall()
{
    $this->stmt->execute();
    $resalts=  $this->stmt->fetchall();
    return $resalts;
}

public function fetch()
{
    $this->stmt->execute();
    $resalts=  $this->stmt->fetch(PDO::FETCH_OBJ);
    return $resalts;
}

public function rowcount()
{
    
    $resalts=  $this->stmt->rowcount();
    return $resalts;
}
}
