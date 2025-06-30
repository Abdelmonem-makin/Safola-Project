<?php
class salary extends Contorller{
    public  $qsearch;
    public function __construct()
    {
        $this->usermodal =  $this->model("salarymodel");
    }
  
  public function getall_salary()
  {
      
      
      $this->view('salaryreport',$datt=[],$this->usermodal->getAccunts());
  }
    public function addaddsalary()
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
               if ( $this->usermodal->insertsalary($data['emploname'],$data['holistart'],$data['holiend'])) {
                $data['done'] ="تمت الاضافه بنجاح";
               }
            }
            $this->view('salary',$data);
        }
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }else{
            
            
     $this->view('salary');}
    }
    public function query_salary()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') { 
            $data = ['qsearch' => $_POST['search']];        
            $this->qsearch = $data['qsearch'];            
            $this->view('salaryquery',$this->qsearch,$this->usermodal->queryccunts($this->qsearch));
        }else{
            $this->view('salaryquery',$this->qsearch,$this->usermodal->queryccunts($this->qsearch));
        }
    }

}