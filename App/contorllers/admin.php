<?php

class admin extends Contorller{
    public function __construct()
    {
        $this->usermodal =  $this->model("adminModel");
    }
    public function getall_admin()
    {
        
        
        $this->view('adduserreport',$datt=[],$this->usermodal->getAccunts());
    }
    public function home()
    {
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
       $this->view('home');}
    }
    public function add()
    {
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
       $this->view('Addpage');}
    }
    public function Query()
    {
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
       $this->view('Query');}
    }
    public function Report()
    {
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
       $this->view('Report');}
    }
    public function addadmin()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $data = [
                'name' => $_POST['username'],
                'pass' => $_POST['upassword'],
                'cpass' => $_POST['cupassword'],
                'name_err'=>'',
                'pass_err'=>'',
                'cpass_err'=>''
            ];

            if(empty($data['name'])){
                $data['name_err'] = "يجب ملاء حقل الاسم"; 
            }
            if(empty($data['pass'])){
                $data['pass_err'] = "يجب ملاء كلمة السر"; 
            }
            if($data['pass']!=$data['cpass']){
                $data['cpass_err'] = "كلمة السر غير متطابقه"; 
            }
            if(empty($data['name_err']) && empty($data['pass_err']) && empty($data['cpass_err'])){
               if ( $this->usermodal->aduser($data['name'],$data['pass'])) {
                $data['done'] ="تمت الاضافه بنجاح";
               }
            }
            $this->view('Adduser',$data);
        }
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
            
     $this->view('Adduser');}
    }

    public function login()
    {
        if(isset($_POST['login'])) {
            $data = [
                'name' => $_POST['uname'],
                'pass' => $_POST['upass'],
                'name_err'=>'',
                'pass_err'=>''
                
            ];

            if(empty($data['name'])){ $data['name_err'] = "يجب ملاء حقل الاسم"; }
            if(empty($data['pass'])){ $data['pass_err'] = "يجب ملاء حقل كلمة السر"; }
            
        
            if(empty($data['name_err']) && empty($data['pass_err'])){
              $admin =$this->usermodal->login($data['name'],$data['pass']);
                if ($admin) {
                    $_SESSION['uname'] = $admin->uname;
                  
                    redirct('admin/home');
                  }
                  else {
                    $data['name_err'] = "المستخدم غير موجود"; 
                  }
               
            }
            else {
                echo "ERROR";
            }
            $this->view('login',$data);
        }
        if(isset($_SESSION["uname"])){
            redirct('admin/home');
            
        }else{
            
       $this->view('login');}
    }


public function logout()
{
    $_SESSION['uname'] = null;
    $_SESSION['id'] = null;
    session_unset();
    session_destroy();
    redirct('show/login');
}
}