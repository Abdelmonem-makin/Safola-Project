<?php require_once '../App/viwes//includ/header.php'; ?>

<style>
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

        </style>

<main class="form-signin">
        <form action="" method="post"> 
        
        <h2 class=" fw-bold m-2">شركة صافولا</h2>
            <!-- <h1 class="h3 mb-3 fw-normal">تسجيل دخول الادمن</h1> -->

            <div class="form-group mb-2">
            <label for="floatingInput">اسم المستخدم</label>
                <input type="text" class="form-control" id="floatingInput" name="uname" placeholder="اسم المستخدم">
                <?php if(!empty($data['name_err'])){ echo'<span class="text-danger">'. $data['name_err'].'<span>';}?>
            </div>
            <div class="form-group mb-3">
            <label for="floatingPassword">كلمة السر</label>
                <input type="password" class="form-control" id="floatingPassword" name="upass"placeholder="  كلمة السر ">
                <?php if(!empty($data['pass_err'])){ echo'<span class="text-danger">'. $data['pass_err'].'<span>';}?>
            </div>

            <div class="form-group">
                <input type="submit" class=" btn btn-info bg-dark text-light" name="login"value="تسجيل دخول" >
              
            </div>
           
        </form>
</main>
    


   <?php require_once '../App/viwes/includ/footer.php'; ?>
 