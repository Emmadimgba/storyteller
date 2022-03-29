<?php $this->load->view('includes/admin/header'); ?>     
<div class="row">
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Location</h4>
                  <?php if(isset($response)){ ?>
               <div class="alert alert-info" role="alert" id="infoMessage"><?php echo $response;?></div>
                <?php } ?>
               <form method="post" action="<?php echo base_url() ?>Secured/new_location" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Location Name</label>
                      <input type="text" name="location" required class="form-control" id="exampleInputUsername1" placeholder="Location Name">
                    </div>
                   <button name="submit" value='Submit' type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php $this->load->view('includes/admin/footer'); ?> 