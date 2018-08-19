<div class="header-wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                      <?php foreach($list_contact as $row) {?>
                        <div class="col-xl-9 col-lg-7 col-md-9 d-none d-xl-block d-sm-block">
                            <div class="top-header-content">
                                <ul class="list-none">
                                    <li><i class="fa fa-envelope top-header-icon"></i><?php echo $row->email ?></li>
                                    <li><i class="fa fa-phone top-header-icon"></i><?php echo $row->phone ?></li>
                                </ul>
                            </div>
                        </div>
                        <?php }  ?>
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                            <div class="top-header-content">
                                <div class="top-social">
                                  <?php foreach ($list_socmed as $row) {
                                     if ($row->socmed_name == 'Facebook') { ?>
                                      <a href="<?php echo $row->socmed_url ?>" target="_blank" class="btn-social-icon"><i class="fa fa-facebook"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'Twitter') { ?>
                                   <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-twitter"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'Instagram') { ?>
                                  <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-instagram"></i></a>
                                    <?php } ?>

                                  <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">
                            <a href="#" class="search-icon" data-toggle="modal" data-target="#exampleModal">
                           <i class="fa fa-search"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                            <div class="logo"> <a href="index.html"><img src="<?php echo base_url('uploads/images/logo.png'); ?>" alt=""> </a> </div>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                            <div class="navigation">
                                <div id="navigation">
                                    <ul>
                                        <li class="active"><a href="<?php echo site_url('Welcome') ?>">Home</a></li>
                                        <li><a href="<?php echo site_url('About') ?>">About</a></li>
                                        <li><a href="<?php echo site_url('Services') ?>">Services</a></li>
                                        <li><a href="<?php echo site_url('Boking') ?>">Booking</a></li>
                                        <li><a href="<?php echo site_url('FAQ') ?>">F.A.Q</a></li>
                                        <li><a href="<?php echo site_url('Comments') ?>">Comment</a></li>
                                        <li><a href="about.html">Gallery</a></li>
                                        <li><a href="<?php echo site_url('Contact_Us') ?>">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
