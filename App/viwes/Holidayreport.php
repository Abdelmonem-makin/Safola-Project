<?php require_once '../App/viwes/includ/header.php'; ?>
    
<?php require_once '../App/viwes/includ/nav.php'; ?>

<div class="container-fluid">
  <div class="row">
  
    <main class="col-md-9 m-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">  شاشة  تقرير الموزعين</h1>
        <a href="<?php echo URL;?>admin/ٌReport" class=" btn  btn-primary"> رجوع   </a>
      </div>
      <table class="table table-primary">
          <thead>
              <tr>

                   <th scope="col">رقم الموزع</th>
                   <th scope="col">اسم الموزع</th>   
                  <th scope="col">   عنوان الموزع</th>
                  <th scope="col"> نوع الموزع  </th>
                 
             
                 
              
              </tr>
          </thead>
          <tbody>

          <?php
            $data_accunts= $this->usermodal->getAccunts();
          foreach ($data_accunts as $accunt) {?>
            <tr>
                  <th scope="row"><?php echo $accunt['hol_id']?></th>
                  <td><?php echo $accunt['emp_name']?></td>
                  <td><?php echo $accunt['hol_s']?>  </td>
                  <td><?php echo $accunt['hol_e']?></td>
            
             
              </tr>

             
         <?php }?>
            
          </tbody>
      </table>
    </main> 

   <?php require_once '../App/viwes/includ/footer.php'; ?>
 