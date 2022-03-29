<?php $this->load->view('includes/admin/header'); ?>     
<div class="row">
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Story</h4>
                 <?php if(isset($response)){ ?>
               <div class="alert alert-info" role="alert" id="infoMessage"><?php echo $response;?></div>
                <?php } ?>
                  <form method="post" action="<?php echo base_url() ?>Secured/new_story" class="forms-sample" enctype='multipart/form-data'>
                    <div class="form-group">
                      <label for="">Title</label>
                      <input name="title" type="text"  class="form-control" id="exampleInputUsername1" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="">Short Description</label>
                      <textarea name="short_description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Story</label>
                      <textarea name="content" class="form-control" rows="13"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Category</label>
                      <select name="category_id" class="form-control">
                          <option value="">Select category</option>
                                                    <?php 
                           foreach($categories as $categoriesrow)
  {
                          ?>
                          <option value="<?php echo $categoriesrow->id ?>"><?php echo $categoriesrow->categoryName ?></option>
                          <?php
  }
                          ?>
                      </select>
                    </div>
                      <div class="form-group">
                      <label for="">Story Location</label>
                      <select name="location_id" class="form-control">
                          <option value="">Select Location</option>
                          <?php 
                           foreach($locations as $locationsrow)
  {
                          ?>
                          <option value="<?php echo $locationsrow->id ?>"><?php echo $locationsrow->location ?></option>
                          <?php
  }
                          ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input name="image" type="file"  class="form-control" id="exampleInputUsername1" placeholder="">
                    </div>
                      <button name="submit" value="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php $this->load->view('includes/admin/footer'); ?> 