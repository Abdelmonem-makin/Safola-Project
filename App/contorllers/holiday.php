<?php

class holiday extends Contorller{
    public function __construct()
    {
        $this->usermodal =  $this->model("holidayModel");
    }
    public function getall_holiday()
    {
        
        
        $this->view('Holidayreport',$datt=[],$this->usermodal->getAccunts());
    }
    public function addholiday()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $data = [
                'emploname' => $_POST['emploname'],
                'holistart' => $_POST['start'],
                'holiend' => $_POST['end'],
                'emploname_err'=>'',
                'holistart_err'=>'',
                'holiend_err'=>''
            ];

            if(empty($data['emploname'])){
                $data['emploname_err'] = "يجب ملاء حقل الاسم"; 
            }
            if(empty($data['holistart'])){
                $data['holistart_err'] = "يجب تحديد  تاريخ البدابه"; 
            }
            if(empty($data['holiend'])){
                $data['holiend_err'] = "يجب تحديد تاريخ النهاية"; 
            }
            if(empty($data['emploname_err']) && empty($data['holistart_err']) && empty($data['holiend_err'])){
               if ( $this->usermodal->insertholi($data['emploname'],$data['holistart'],$data['holiend'])) {
                $data['done'] ="تمت الاضافه بنجاح";
               }
            }
            $this->view('holiday',$data);
        }
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
            
     $this->view('holiday');}
    }

   



}