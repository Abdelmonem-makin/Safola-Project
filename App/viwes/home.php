<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>
<main class="container my-5">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">صافولا</h1>
    <p class="lead">نظام مبيعات شركات صاقولا </p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>admin/add" class="w-100 btn btn-lg  btn-outline-primary"> شاشات الاضافه  </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a href="<?php echo URL;?>admin/Report" class="w-100 btn btn-lg  btn-outline-primary"> شاشات التقارير  </a>
    </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
      
      
      <a  href="<?php echo URL;?>admin/Query" class="w-100 btn btn-lg  btn-outline-primary"> شاشات الاستعلام  </a>
    </div>
    </div>
    
    </div>
  </div>

 
</main>




   <?php require_once '../App/viwes/includ/footer.php'; ?>