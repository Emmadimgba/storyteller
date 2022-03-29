<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Story Telling App</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/vertical-layout-light/style.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#">Story Teller</a>
        <a class="navbar-brand brand-logo-mini" href="#">Story Teller</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              Hi <?php echo $this->ion_auth->user()->row()->first_name ?> <?php echo $this->ion_auth->user()->row()->last_name ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
                <a href="<?php echo base_url() ?>auth/logout" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <?php
            if ($this->ion_auth->is_admin())
    {
 ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Secured/">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
    <?php } ?>
          
                      <?php
            if ($this->ion_auth->is_admin())
    {
 ?>
           <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url() ?>Secured/new_category">
              <span class="menu-title">New Category</span>
            </a>
          </li>
          
             <?php } ?>
                                <?php
            if ($this->ion_auth->is_admin())
    {
 ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Secured/all_categories">
              <span class="menu-title">View Category</span>
            </a>
          </li>
           <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url() ?>Secured/new_location">
              <span class="menu-title">New Location</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Secured/all_location">
              <span class="menu-title">View Locations</span>
            </a>
          </li>
           <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Secured/new_story">
              <span class="menu-title">New Stories</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>Secured/all_stories">
              <span class="menu-title">View Stories</span>
            </a>
          </li>
                                <?php
            if ($this->ion_auth->is_admin())
    {
 ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>auth/create_user">
              <span class="menu-title">New User</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>auth/">
              <span class="menu-title">View User</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo $this->ion_auth->user()->row()->first_name ?> <?php echo $this->ion_auth->user()->row()->last_name ?></h3>
                </div>
              </div>
            </div>
          </div>