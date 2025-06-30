<?php
class Agent extends Contorller{
    public function __construct()
    {
        $this->usermodal =  $this->model("AgentModel");
    }
  
    public function addAgent()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $data = [
                'emploname' => $_POST['emploname'],
                'holistart' => $_POST['start'],                
                'emplojob' => $_POST['job'],
                'emploname_err'=>'',
                'holistart_err'=>'',
                'job_err'=>'',
                
            ];

            if(empty($data['emploname'])){
                $data['emploname_err'] = "يجب ملاء حقل الاسم"; 
            }
            if(empty($data['holistart'])){
                $data['holistart_err'] = "يجب ملاء حقل العنوان   "; 
            }
       
            if(empty($data['emplojob'])){
                $data['job_err'] = "يجب ملاء حقل الوظيفه"; 
            }
            if(empty($data['emploname_err']) && empty($data['holistart_err']) &&  empty($data['job_err'])){
               if ( $this->usermodal->insertAgent($data['emploname'],$data['holistart'],$data['emplojob'])) {
                $data['done'] ="تمت الاضافه بنجاح";
               }
            }
            $this->view('Agen',$data);
        }
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
            
     $this->view('Agen');}
    }
    public function getall_agent()
    {
        
        
        $this->view('Agenreport',$datt=[],$this->usermodal->getAccunts());
    }


}