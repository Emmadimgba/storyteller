<?php $this->load->view('includes/admin/header'); ?>     
<div class="row">
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New User</h4>
                 
                  <form method="post" action="<?php echo base_url(); ?>auth/create_user" class="forms-sample">
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
        </div>
</div>
<?php $this->load->view('includes/admin/footer'); ?> 