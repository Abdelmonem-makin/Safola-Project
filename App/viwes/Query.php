<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>
<main class="container my-5">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="">شاشات الاستعلام </h1>
   
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
   
    <div class="col-lg-6">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>accunts/query_Accunts" class="w-100 btn btn-lg  btn-outline-primary">   استعلام الحسابات </a>
    </div>
    </div>
    <div class="col-lg-6">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>bill/query_bill" class="w-100 btn btn-lg  btn-outline-primary"> استعلام المبيعات</a>
    </div>
    </div>
    
    
    <div class="col-lg-6">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>Employee/query_employee" class="w-100 btn btn-lg  btn-outline-primary">   استعلام المنتجات </a>
    </div>
    </div>
    <div class="col-lg-6">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>salary/query_salary" class="w-100 btn btn-lg  btn-outline-primary"> استعلام المستودع  </a>
    </div>
    </div>
    </div>
  </div>

 
</main>




   <?php require_once '../App/viwes/includ/footer.php'; ?>