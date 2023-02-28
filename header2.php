 <!DOCTYPE html>
<html lang="en">
  <head>
 <?php 
 include_once "base_de_datos.php";

 ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->

    <title>uagrm</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="lib/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="lib/jqvmap/jqvmap.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">
  </head>
  <body>

    <div class="sidebar">
      <div class="sidebar-header">
        <a href="" class="sidebar-logo">UAGRM</a>
      </div><!-- sidebar-header -->
      <div id="sidebarMenu" class="sidebar-body">
         
        <div class="nav-group show">
          <a href="#" class="nav-label">MENU</a>
          <ul class="nav nav-sidebar">
            <li class="nav-item">
              <a href="" class="nav-link has-sub"><i class="ri-shopping-bag-fill"></i> <span>INSCRIPCIONES</span></a>
              <nav class="nav nav-sub">
                <a href="home2.php" class="nav-sub-link">INSCRIPCIONES</a>
                <a href="adiciones.php" class="nav-sub-link">ADICIONES &amp;  </a>
                <a href="levantamiento.php" class="nav-sub-link">LEVANTAMIENTO</a>
                <a href="home2.php" class="nav-sub-link">BOLETA DE INSCRIPCION</a>
              </nav>
            </li>
           
            
            
          </ul>
        </div><!-- nav-group -->
        
      </div><!-- sidebar-body -->
      
    </div><!-- sidebar -->

    <div class="header-main px-3 px-lg-4">
      <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

      <div class="form-search me-auto">
        
        
      </div><!-- form-search -->

      <div class="dropdown dropdown-skin">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ri-settings-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
          <label>Skin Mode</label>
          <nav id="skinMode" class="nav nav-skin">
            <a href="" class="nav-link active">Light</a>
            <a href="" class="nav-link">Dark</a>
          </nav>
          <hr>
          <label>Sidebar Skin</label>
          <nav id="sidebarSkin" class="nav nav-skin">
            <a href="" class="nav-link active">Default</a>
            <a href="" class="nav-link">Prime</a>
            <a href="" class="nav-link">Dark</a>
          </nav>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->

       
      <div class="dropdown dropdown-profile ms-3 ms-xl-4">
          <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><div class="avatar online"><img src="https://via.placeholder.com/500/4c5366/fff" alt=""></div></a>
          <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <div class="dropdown-menu-body">
              <div class="avatar avatar-xl online mb-3"><img src="https://via.placeholder.com/500/4c5366/fff" alt=""></div>
              <h5 class="mb-1 text-dark fw-semibold">usuario</h5>
              <p class="fs-sm text-secondary">bienvenino</p>

             
              <hr>
              <nav class="nav">
              
                <a href="index.html"><i class="ri-logout-box-r-line"></i> SALIR</a>
              </nav>
            </div><!-- dropdown-menu-body -->
          </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </div><!-- header-main -->
	