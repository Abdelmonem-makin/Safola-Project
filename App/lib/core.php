<?php
class core
{
    private $contorllers = "admin";
    private $method = "addadmin";
    private $param = [];


    public function __construct(){
       $url = $this->geturl();
        

        if(isset($url[0])){
            if(file_exists('../App/contorllers/'.$url[0].'.php')){
                $this->contorllers =$url[0];
                unset($url[0]);
            }
        }
        require_once '../App/contorllers/'.$this->contorllers.'.php';
        $this->contorllers = new $this->contorllers;

        if(isset($url[1])){
            if(method_exists($this->contorllers ,$url[1])){
                $this->method =$url[1];
                unset($url[1]);
            }
        }

        $this->param = $url ? array_values($url):[];

        call_user_func_array([$this->contorllers,$this->method],$this->param);
    }


    public function geturl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = rtrim($url ,'/');
            $url = explode('/', $url);
            return $url;
        }
    }

}
