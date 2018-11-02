<style media="screen">
.responsive {
  width: 30%;
  max-width: 400px;
  height: auto;
}
</style>
<div class="header-wrapper">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                      <?php //foreach($list_contact as $row) {?>
                        <div class="col-xl-9 col-lg-7 col-md-9 d-none d-xl-block d-sm-block">
                            <div class="top-header-content">
                                <ul class="list-none">
                                    <li><i class="fa fa-envelope top-header-icon"></i><?php echo $list_contact->email ?></li>
                                    <li><i class="fa fa-phone top-header-icon"></i><?php echo $list_contact->phone ?></li>
                                </ul>
                            </div>
                        </div>
                        <?php //}  ?>
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-8 d-none d-block d-sm-block">
                            <div class="top-header-content">
                                <div class="top-social">
                                  <?php foreach ($list_socmed as $row) { ?>
                                    <?php if ($row->socmed_name == 'Linkedin') { ?>
                                  <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-linkedin"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'Google+') { ?>
                                  <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-google-plus"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'YouTube') { ?>
                                  <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-youtube"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'Skype') { ?>
                                  <a href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-skype"></i></a>
                                    <?php } ?>

                                    <?php if ($row->socmed_name == 'Facebook') { ?>
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
                    </div>

                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-12">
                          <?php foreach ($logo as $row): ?>
                            <div class="logo"> <a href="<?php echo site_url('Welcome') ?>"><img class="responsive" src="<?php echo base_url($row->path); ?>" alt=""> </a> </div>
                          <?php endforeach; ?>
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-9 col-sm-12 col-12">
                            <div class="navigation">
                                <div id="navigation">
                                    <ul>
                                        <li class="active"><a href="<?php echo site_url('Welcome') ?>">Home</a></li>
                                        <li><a href="<?php echo site_url('About') ?>">About</a></li>
                                        <li><a href="<?php echo site_url('Services') ?>">Services</a></li>
                                        <li><a href="<?php echo site_url('FAQ') ?>">F.A.Q</a></li>
                                        <li><a href="<?php echo site_url('Comments') ?>">Comment</a></li>
                                        <li><a href="<?php echo site_url('Gallery') ?>">Gallery</a></li>
                                        <li><a href="<?php echo site_url('Contact_Us') ?>">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
