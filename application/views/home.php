<?php $this->load->view('includes/header'); ?>
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                  
                                                                        <?php
  foreach($stories->result() as $row)
  {
      ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo base_url() ?>uploads/<?php echo $row->image ?>" />
                    </div>
                    <div class="down-content">
                        <a href="<?php echo base_url(); ?>home/story/<?php echo $row->id ?>"><h4><?php echo $row->title ?></h4></a>
                      
                      <p><?php echo $row->short_description ?></p>
                      
                      <ul class="post-info">
                        <li><a href="#"><?php echo $row->first_name ?></a></li>
                        <li><a href="#"><?php echo $row->created_at ?></a></li>
                        <li><a href="#"><?php echo $row->location ?></a></li>
                        <li><a href="#"><?php echo $row->categoryName ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
<?php  }  ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Location</h2>
                    </div>
                    <div class="content">
                      <ul>
                                                    <?php 
                           foreach($locations as $locationsrow)
  {
                          ?>
                          <li><a href="<?php echo $locationsrow->id ?>">- <?php echo $locationsrow->location ?></a></li>
                          <?php
  }
                          ?>
                        <li><a href="#">- Lorem ipsum dolor</a></li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                                                      <?php 
                           foreach($categories as $categoriesrow)
  {
                          ?>
                          <li><a href="<?php echo $categoriesrow->id ?>">- <?php echo $categoriesrow->categoryName ?></a></li>
                          <?php
  }
                          ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php $this->load->view('includes/footer'); ?>