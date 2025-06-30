<?php require_once '../App/viwes/includ/header.php';

?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>

<div class="container-fluid">
  <div class="row">
   
      

    <main class="col-md-9 m-auto col-lg-10 px-md-4">
   
    <div class="forms m-auto ">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">  شاشة  اضافة حسابات</h1>
        <a href="<?php echo URL;?>admin/add" class=" btn  btn-primary"> رجوع   </a>
      </div>
    <?php if(!empty($data['done'])){ echo'<div class="alert alert-primary" role="alert">
  <strong>'.  $data['done'].'</strong></div>';}?>
    <form action="" method="post">
            <input type="hidden" name="csrftoken" value="124e4ce3b5251c2b4d12e9aaf2a3ddc620b">
                            <div class="form-group mb-3">
                                <label for="fname">اسم العميل </label>
                                <input type="text" name="emploname" placeholder="اسم  العميل" class="form-control">
                    <?php if(!empty($data['emploname_err'])){ echo'<span class="text-danger">'. $data['emploname_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname"> 
                                     رقم العميل  
                                </label>
                                <input type="text" name="start" placeholder="    رقم العميل  "
                                    class="form-control" >                                  
                                    <?php if(!empty($data['holistart_err'])){ echo'<span class="text-danger">'. $data['holistart_err'].'<span>';}?>
                            </div> 
                            <div class="form-group mb-3">
                                <label for="fname"> 
                                     سعر المنتج  
                                </label>
                                <input type="number" name="end" placeholder="   سعر المنتج      "
                                    class="form-control" >                                  
                                    <?php if(!empty($data['holiend_err'])){ echo'<span class="text-danger">'. $data['holiend_err'].'<span>';}?>
                            </div> 
                            <div class="form-group mb-3">
                                <label for="fname"> 
                                    اسم المنتج 
                                </label>
                                <input type="text" name="pay" placeholder="  اسم المنتج  "
                                    class="form-control" >                                  
                                    <?php if(!empty($data['pay_err'])){ echo'<span class="text-danger">'. $data['pay_err'].'<span>';}?>
                            </div> 
                            <div class="form-group mb-3">
                                <label for="fname"> 
                                   التاريخ العمليه
                                </label>
                                <input type="date" name="date" placeholder=" التاريخ "
                                    class="form-control" >                                  
                                    <?php if(!empty($data['date_err'])){ echo'<span class="text-danger">'. $data['date_err'].'<span>';}?>
                            </div>                                               
                  

                    <div class="form-group mb-0  justify-content-between">
                        
                       <input type='submit' value='حفظ' class='btn btn-primary'>
                      
                    </div>
                   
                    </form>
    </div>
    </main> 

   <?php require_once '../App/viwes/includ/footer.php'; ?>
 