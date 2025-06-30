<?php
class bill extends Contorller{
  public  $qsearch;
    public function __construct()
    {
        $this->Emplmodal =  $this->model("billModel");
    }


    public function query_bill()
    {
        if($_SERVER['REQUEST_METHOD']=='POST') { 
            $data = ['qsearch' => $_POST['search']];        
            $this->qsearch = $data['qsearch'];            
            $this->view('billquery',$this->qsearch,$this->Emplmodal->queryccunts($this->qsearch));
        }else{
            $this->view('billquery',$this->qsearch,$this->Emplmodal->queryccunts($this->qsearch));
        }
    }



    public function getall_bill()
    {
        
        
        $this->view('billreport',$datt=[],$this->Emplmodal->getAccunts());
    }
      public function addbill()
      {
        if($_SERVER['REQUEST_METHOD']=='POST') {
          $data = [
              'emploname' => $_POST['emplname'],
              'emploaddres' => $_POST['addres'],
              'emplophone' => $_POST['phone'],
              'emplojob' => $_POST['job'],
              'emploemail' => $_POST['email'],
              'emplname_err'=>'',
              'addres_err'=>'',
              'phone_err'=>'',
              'job_err'=>'',
              'email_err'=>'',
              'done'=>''
          ];
  
          if(empty($data['emploname'])){
              $data['emplname_err'] = "يجب ملاء حقل الاسم"; 
          }
          if(empty($data['emploaddres'])){
              $data['addres_err'] = "يجب تجدد التاريخ "; 
          }
          if(empty($data['emplophone'])){
            $data['phone_err'] = "يجب تحديد  المبلغ"; 
        }
        if(empty($data['emplojob'])){
            $data['job_err'] = "يجب ملاء حقل المتحصل"; 
        }
        if(empty($data['emploemail'])){
          $data['email_err'] = "يجب ملاء حقل المتحصل"; 
      }
          if(empty($data['emplname_err']) && empty($data['addres_err'])&& empty($data['phone_err'])&& empty($data['job_err']) && empty($data['email_err'])){
             if ( $this->Emplmodal->Insertbill($data['emploname'],$data['emploaddres'],$data['emplophone'],$data['emplojob'],$data['emploemail'])) {
              $data['done'] ="تمت الاضافه بنجاح";
             }
           
          }
          $this->view('bill',$data);
      }
        if(!isset($_SESSION["uname"])){
          redirct('admin/login');
          
      }else{
          
          
        $this->view('bill');
      }
      }
  
  }