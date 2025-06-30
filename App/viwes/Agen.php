<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>

<div class="container-fluid m-auto">
  <div class="row">
    <!-- <nav id="sidebarMenu" class=" col-md-3 col-lg-2 d-md-block bg-white  sidebar collapse">
        <div class="position-sticky px-2 ">

          <ul class="nav flex-column  p-0 ">
       
          <li class="nav-item  py-2">
              <a class="nav-link " href="<?php echo URL;?>admin/addadmin">
                <i class="bi bi-house-door-fill"></i>
                اضافةمستخدم
              </a>
            </li>
            <li class="nav-item  bg-primary rounded   py-2">
              <a class="nav-link text-light fw-bold" href="<?php echo URL;?>Agent/addAgent">
                <span data-feather="users"></span>
                اضافة موظف
              </a>
            </li>
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo URL;?>accunts/addaccunts">
                <span data-feather="users"></span>
                اضافة حسابات
              </a>
            </li>

            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo URL;?>storge/getall_storge">
                <span data-feather="users"></span>
                اضافة مبيعات
              </a>
            </li>

            <li class="nav-item py-2">
              <a class="nav-link " href="<?php echo URL;?>holiday/addholiday">
                <span data-feather="users"></span>
                اضافة موزع
               
              </a>
            </li>
    
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo URL;?>bill/addbill">
                <span data-feather="users"></span>
                اضافة منتجات
              </a>
            </li>
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo URL;?>store/addstore">
                <span data-feather="users"></span>
                اضافة مستودع
              </a>
            </li>
           
           
          </ul>

         
        
        </div>
      </nav> -->
      

    <main class="col-md-12 m-auto col-lg-10 ">
      
    <div class="forms  m-auto">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">   شاشة اضافة موظف</h1>
        <a href="<?php echo URL;?>admin/add" class=" btn  btn-primary"> رجوع   </a>
      </div>
    <?php if(!empty($data['done'])){ echo'<div class="alert alert-primary" role="alert">
  <strong>'.  $data['done'].'</strong></div>';}?>
    <form action="" method="post">
            <input type="hidden" name="csrftoken" value="124e4ce3b5251c2b4d12e9aaf2a3ddc620b">
                            <div class="form-group mb-3">
                                <label for="fname">اسم الموظف </label>
                                <input type="text" name="emploname" placeholder="ادخل اسم الموظف " class="form-control">
                    <?php if(!empty($data['emploname_err'])){
                        echo'<span class="text-danger">'. $data['emploname_err'].'<span>';}?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname"> 
                                   عنوان الموظف 
                                </label>
                                <input type="text" name="start" placeholder="    ادخل عنوان الموظف  "
                                    class="form-control" >                                  
                                    <?php if(!empty($data['holistart_err'])){ echo'<span class="text-danger">'. $data['holistart_err'].'<span>';}?>
                            </div> 
                         
                            <div class="form-group mb-3">
                                <label for="fname">نوع الوظيفه  </label>
                                <input type="text" name="job" placeholder=" نوع الوظيفه   " class="form-control">
                <?php if(!empty($data['job_err'])){ echo'<span class="text-danger">'. $data['job_err'].'<span>';}?>
                            </div>                                             
                    

                        
                       <input type='submit' value='حفظ' class='btn btn-dark'>
                      
                   
                    </form>
    </div>
    </main> 

   <?php require_once '../App/viwes/includ/footer.php'; ?>
 