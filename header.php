<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>teste</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="./vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="">
          <img src="assets\img\gallery\partner-3.png" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Portal</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
          <form class="search-form d-none d-md-block" action="#">
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>

          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <?php
                                                                                                        echo $_SESSION['usuario'];
                                                                                                        ?></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <br>
                <?php
                echo $_SESSION['usuario'];
                ?>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i>Mensagens</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Atividade</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
              <a class="dropdown-item" href="logoute.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <?php
                echo $_SESSION['usuario'];
                ?>

              </div>
              <div class="icon-container">
                <!-- <div class="dot-indicator bg-danger"></div> -->
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Home</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <span class="menu-title">Home</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_associado.php">
              <span class="menu-title">Cadastrar usuarios</span>
              <i class="icon-book-open menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listar.php">
              <span class="menu-title">Listar</span>
              <i class="icon-chart menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chat.php">
              <span class="menu-title">Produtos</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
         
        </ul>
      </nav>

      <!-- 
        padinas adicionais do template 
      
      
      
       <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">General Pages</span>
              <i class="icon-doc menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
              </ul>
            </div>
          </li>
      <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Arquivos</span>
              <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category"><span class="nav-link">Ferramentas</span></li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icons.html">
              <span class="menu-title">Icons</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>

        -->
          