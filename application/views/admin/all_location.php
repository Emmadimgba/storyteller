<?php $this->load->view('includes/admin/header'); ?>     
<div class="row">
    <div class="content-wrapper">
          <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Locations</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Location Name
                          </th>
                          <th>
                            Created At
                          </th>
                          <th>
                            Delete
                          </th>
                          <th>
                            Update
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
  $i=1;
  foreach($locations as $row)
  {
      ?>

                        <tr>
                          <td>
                           <?php echo $i ?>
                          </td>
                          <td>
                            <?php echo $row->location ?>
                          </td>
                          <td>
                            <?php echo $row->created_at ?>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm">Update</button>
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