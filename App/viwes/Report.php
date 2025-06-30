<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>
<main class="container my-5">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="">شاشات التقارير </h1>
   
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      <a class=" btn btn-outline-primary btn-lg" href="<?php echo URL;?>admin/getall_admin">
               
                تقرير مستخدم
              </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>accunts/getall_Accunts" class="w-100 btn btn-lg  btn-outline-primary">   تقرير حسابات </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>bill/getall_bill" class="w-100 btn btn-lg  btn-outline-primary"> تقرير مبيعات</a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>holiday/getall_holiday" class="w-100 btn btn-lg  btn-outline-primary">  تقرير موزع </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>Agent/getall_agent" class="w-100 btn btn-lg  btn-outline-primary"> تقرير موظف </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>Employee/getall_Employee" class="w-100 btn btn-lg  btn-outline-primary">   تقرير منتجات </a>
    </div>
    </div>
    <div class="col-12">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>salary/getall_salary" class="w-100 btn btn-lg  btn-outline-primary"> تقرير مستودع  </a>
    </div>
    </div>
    </div>
  </div>

 
</main>




   <?php require_once '../App/viwes/includ/footer.php'; ?>