<?php $this->load->view('includes/header'); ?>
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo base_url() ?>uploads/<?php echo $stories->result()[0]->image ?>" />
                    </div>
                    <div class="down-content">
                      <a href="blog-details.html"><h4>
                      <?php echo $stories->result()[0]->title  ?>
                      </h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $stories->result()[0]->created_at  ?></a></li>
                        <li><a href="#"><?php echo $stories->result()[0]->categoryName  ?></a></li>
                        <li><a href="#"><?php echo $stories->result()[0]->location  ?></a></li>
                      </ul>
                        <p>
                            <?php echo $stories->result()[0]->content  ?>
                        </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Similar Story</h2>
                    </div>
                    <div class="content">
                      <ul>
                                                                                                  <?php
  foreach($stories->result() as $row)
  {
      ?>
                        <li><a href="blog-details.html">
                          <h5><?php echo $row->title ?></h5>
                          <span><?php echo $row->created_at ?></span>
                        </a></li>
                        <?php  }  ?>

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