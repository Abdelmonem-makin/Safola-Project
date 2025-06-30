<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>
<main class="container my-5">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="">شاشات الاضافه</h1>
   
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      <a class=" btn btn-outline-primary btn-lg" href="<?php echo URL;?>admin/addadmin">
               
                اضافةمستخدم
              </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>accunts/addaccunts" class="w-100 btn btn-lg  btn-outline-primary">   اضافة حسابات </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>bill/addbill" class="w-100 btn btn-lg  btn-outline-primary"> اضافة مبيعات</a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>holiday/addholiday" class="w-100 btn btn-lg  btn-outline-primary">  اضافة موزع </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>Agent/addAgent" class="w-100 btn btn-lg  btn-outline-primary"> اضافة موظف </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>Employee/AddEmployee" class="w-100 btn btn-lg  btn-outline-primary">   اضافة منتجات </a>
    </div>
    </div>
    <div class="col-12">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>salary/addaddsalary" class="w-100 btn btn-lg  btn-outline-primary"> اضافة مستودع  </a>
    </div>
    </div>
    </div>
  </div>

 
</main>




   <?php require_once '../App/viwes/includ/footer.php'; ?>