<?php $this->load->view('includes/admin/header'); ?>     
<div class="row">
    <div class="content-wrapper">
          <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Stories</h4>

                   <?php 
                   $msg = $this->session->flashdata('message');
                   if(isset($msg)){ ?>
               <div class="alert alert-info" role="alert" id="infoMessage"><?php echo $msg; ?></div>
                <?php } ?>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                             Title
                          </th>
                          <th>
                            Created By
                          </th>
                          <th>
                            Category
                          </th>
                           <th>
                            Location
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Created on
                          </th>
                          <th>
                            Is published
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                                                      <?php
  $i=1;
  foreach($stories->result() as $row)
  {
      ?>
                        <tr>
                          <td>
                            <?php echo $i; ?>
                          </td>
                          <td>
                            <?php echo $row->title ?>
                          </td>
                          <td>
                             <?php echo $row->first_name ?> <?php echo $row->last_name ?>
                          </td>
                          <td>
                            <?php echo $row->categoryName ?>
                          </td>
                          <td>
                             <?php echo $row->location ?>
                          </td>
                          <td>
                              <img src="<?php echo base_url() ?>uploads/<?php echo $row->image ?>"  width="150" height="100" style="border-radius: 0% !important;"/>
                             
                          </td>
                          <td>
                             <?php echo $row->created_at ?>
                          </td>
                          <td>
                              <button type="button" class="btn <?php echo $row->is_published==0 ? 'btn-danger' : 'btn-success' ?> btn-sm"><?php echo $row->is_published==0 ? "Unpublished" :"published" ?></button>                           
                          </td>
                          <td>
                             <div class="btn-group">
                      <button type="button" class="btn btn-primary">Action</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1" style="">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="<?php echo base_url() ?>Admin/publish_story/<?php echo $row->id ?>">Publish</a>
                        <a class="dropdown-item" href="<?php echo base_url() ?>Admin/unpublish_story/<?php echo $row->id ?>">Unpublish</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                          </td>
                        </tr>
                        <?php  $i++; }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php $this->load->view('includes/admin/footer'); ?> 