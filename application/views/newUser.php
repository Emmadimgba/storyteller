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
              <h6 class="font-weight-light">Register</h6>
<form method="post" action="<?php echo base_url(); ?>home/create_user" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">First Name</label>
                      <input type="text" name="first_name"  class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Last Name</label>
                      <input type="text" name="last_name"  class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone</label>
                      <input type="text" name="phone"  class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" name="password_confirm" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                      <button value='submit' name="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
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
