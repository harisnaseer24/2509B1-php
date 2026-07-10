<?php 
session_start();

if(!isset($_SESSION["role"]) || $_SESSION["role"] !="admin"){
  header("Location: ../user/login.php");
}


?>



<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
        
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face4.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="settings.php">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../User/logout.php">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/face4.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?= $_SESSION['username'] ?>
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse"aria-expanded="false"  href="#product-management" aria-controls="product-management" >
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Product Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product-management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./products.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="./addproduct.php">Add New product</a></li>
              
              </ul>
            </div>
          </li>

<li class="nav-item">
            <a class="nav-link" data-toggle="collapse"  href="#category-management" aria-expanded="false" aria-controls="category-management">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Category Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category-management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">View All</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">Add new category</a></li>
              </ul>
            </div>
          </li>
<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#order-management" aria-expanded="false" aria-controls="order-management">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Order Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="order-management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">View All</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">Pending</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">Processing</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">Completed</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./orders.php">Canceled</a></li>

              
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-management" aria-expanded="false" aria-controls="user-management">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user-management">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="./products.php">View All</a></li>

              
              </ul>
            </div>
          </li>

 <li class="nav-item">
            <a class="nav-link" href="../User/logout.php">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        
        </ul>
      </nav>