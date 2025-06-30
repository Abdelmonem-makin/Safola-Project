<?php require_once '../App/viwes/includ/header.php'; ?>
<?php require_once '../App/viwes/includ/nav.php'; ?>

<div class="container-fluid">
  <div class="row">
    

    <main class="col-md-9 m-auto col-lg-10 px-md-4">

      <div class="forms m-auto">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">شاشة اضافة مبيعات</h1>
        <a href="<?php echo URL;?>admin/add" class=" btn  btn-primary"> رجوع   </a>
      </div>
<?php if(!empty($data['done'])){ echo'<div class="alert alert-primary" role="alert">
  <strong>'.  $data['done'].'</strong></div>';}?>
    <form action="" method="post">
           
                            <div class="form-group mb-3">
                                <label for="fname">اسم المنتج </label>
                                <input type="text" name="emplname" placeholder="اسم المنتج" class="form-control">
                    <?php if(!empty($data['emplname_err'])){ echo'<span class="text-danger">'. $data['emplname_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname"> تاريخ البيع</label>
                                <input type="date" name="addres" placeholder="تاريخ البيع " class="form-control">
                <?php if(!empty($data['addres_err'])){ echo'<span class="text-danger">'. $data['addres_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname"> سعر البيع  </label>
                                <input type="number" name="phone" placeholder="   سعر البيع" class="form-control">
                <?php if(!empty($data['phone_err'])){ echo'<span class="text-danger">'. $data['phone_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">رقم المنتج  </label>
                                <input type="number" name="job" placeholder=" رقم المنتج " class="form-control">
                <?php if(!empty($data['job_err'])){ echo'<span class="text-danger">'. $data['job_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">رقم هاتف العميل  </label>
                                <input type="number" name="email" placeholder=" رقم هاتف العميل  " class="form-control">
                <?php if(!empty($data['email_err'])){ echo'<span class="text-danger">'. $data['email_err'].'<span>';}?>
                            </div>
                            

                                                                         
                    

                    <div class="form-group mb-0  justify-content-between">
                        
                       <input type='submit' value='حفظ' class='btn btn-primary'>
                      
                    </div>
                   
                    </form>
    </div>
    </main> 
      <?php require_once '../App/viwes/includ/footer.php'; ?>