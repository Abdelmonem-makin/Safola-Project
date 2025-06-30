<header class="navbar navbar-expand  navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?php echo URL;?>admin/home"><h5> شركة صافولا</h5></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="navbar-nav me-auto px-3">
        <li class="nav-item dropdown">
                <a class="nav-link text-light dropdown-toggle " href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                echo "$_SESSION[uname]"
                ?>  
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  
                    <a class="dropdown-item text-dark fw-bold" href="<?php echo URL;?>show/logout">تسجيل خروج</a>
                </div>
          </li>
  </ul>
</header>
