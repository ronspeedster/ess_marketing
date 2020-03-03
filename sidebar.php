<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="img/logo-theme-builder.png" type="image/gif" sizes="16x16">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <style type="text/css">
  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    opacity: 0.7 !important; /* Firefox */
  }    
    .bg-gradient-primary {
    background-color: #252525 !important;
    background-image: none !important;
    background-size: cover !important;
  }
    nav ul{
      position: sticky !important;
      top: 0;
      z-index: 99;
      white-space: normal;
    }
    nav ul li a{
      white-space: normal !important;
    }
    body, input, textarea{
      /*font-family: 'Arial', sans-serif !important;*/
      /*font-size: 12.5px !important;*/
      scroll-behavior: smooth !important;
    }
  </style> 
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <nav>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="mx-3">ESS Markting</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Utilities
      </div>
        <!-- Nav Items - Equipments -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#equipments" aria-expanded="true" aria-controls="equipments">
                <i class="fas fa-toolbox"></i>
                <span>Areas & Products</span>
            </a>
            <div id="equipments" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Customize Areas:</h6>
                    <a class="collapse-item" href="areas.php"><i class="fas fa-plus-square"></i> Add Areas</a>
                    <a class="collapse-item" href="location_and_time.php"><i class="fas fa-clock"></i> Add Travel Time</a>
                    <a class="collapse-item" href="accounts.php"><i class="far fa-user"></i> Add Accounts</a>
                    <h6 class="collapse-header">Customize Areas:</h6>
                    <a class="collapse-item" href="products.php"><i class="fas fa-utensils"></i> Add Products</a>
                    <a class="collapse-item" href="categories.php"><i class="fas fa-certificate"></i> Add Categories</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - View Processes -->
        <li class="nav-item active">
            <a class="nav-link" href="processess.php">
                <i class="fas fa-eye"></i>
                <span>View sProcesses</span></a>
        </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    </nav>
    <!-- End of Sidebar -->