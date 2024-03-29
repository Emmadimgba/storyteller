<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Story Telling</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/vertical-layout-light/style.css">

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                  <h3><center>Story Telling Application</center></h3>
              </div>
                <?php if(isset($message)){ ?>
               <div class="alert alert-danger" role="alert" id="infoMessage"><?php echo $message;?></div>
                <?php } ?>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="<?php echo base_url() ?>auth/login">
                <div class="form-group">
                  <input type="email" name="identity" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input name="remember" id-="remember" type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?php echo base_url()?>home/create_user" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
