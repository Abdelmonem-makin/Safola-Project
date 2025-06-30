<?php
class accunts extends Contorller{
   public  $qsearch;
    public function __construct()
    {
        $this->usermodal =  $this->model("accuntsmodel");
    }
  
    public function addaccunts()
    {
       
        if($_SERVER['REQUEST_METHOD']=='POST') {
            $data = [
                'emploname' => $_POST['emploname'],
                'holistart' => $_POST['start'],
                'holiend' => $_POST['end'],
                'pay' => $_POST['pay'],
                'date' => $_POST['date'],
                'emploname_err'=>'',
                'holistart_err'=>'',
                'holiend_err'=>'',
                'pay_err'=>'',
                'date_err'=>''
            ];

            if(empty($data['emploname'])){
                $data['emploname_err'] = "يجب ملاء حقل اسم العميل"; 
            }
            if(empty($data['holistart'])){
                $data['holistart_err'] = "يجب اضافة رقم الفاتوره   "; 
            }
            if(empty($data['holiend'])){
                $data['holiend_err'] = "يجب  ادخال المبلغ المتحصل  "; 
            }
            if(empty($data['pay'])){
                $data['pay_err'] = " تحديد المبلغ المتبقي "; 
            } if(empty($data['date'])){
                $data['date_err'] = "يجب تحديد التاريخ "; 
            }
            if(empty($data['emploname_err']) && empty($data['holistart_err']) && empty($data['holiend_err'])&& empty($data['pay_err'])&& empty($data['date_err'])){
               if ( $this->usermodal->insertsaccunts($data['emploname'],$data['holistart'],$data['holiend'],$data['pay'],$data['date'])) {
                $data['done'] ="تمت الاضافه بنجاح";
               }
            }
            $this->view('accunts',$data);
            
        }
        if(!isset($_SESSION["uname"])){
            redirct('admin/login');
            
        }
        else
        {
            $this->view('accunts');
        }
    }





    public function getall_Accunts()
    {
        $this->view('accuntsreport',$datt=[],$this->usermodal->getAccunts());
    }




    public function query_Accunts()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') { 
            $data = ['qsearch' => $_POST['search']];        
            $this->qsearch = $data['qsearch'];            
            $this->view('accuntequery',$this->qsearch,$this->usermodal->queryccunts($this->qsearch));
        }else{
            $this->view('accuntequery',$this->qsearch,$this->usermodal->queryccunts($this->qsearch));
        }
    }
    


}