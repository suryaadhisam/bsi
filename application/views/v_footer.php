<div class="footer">
            <div class="container">
                <div class="row ">
                    <!-- footer-logo -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                      <?php foreach ($logo as $row): ?>
                        <div> <a href="<?php echo site_url('Welcome') ?>"><img style="width:800px;height:auto;" src="<?php echo base_url($row->path); ?>" alt=""> </a> </div>
                      <?php endforeach; ?>
                    </div>
                    <!-- /.footer-logo -->
                    <!-- footer-links -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">About Bali Sunset Adventure</h3>
                            <ul class="angle list-none">
                              <?php foreach ($list_info as $key => $value): ?>
                                <li><a href="<?php echo base_url() ?>Info/detail_info/<?php echo $value->id_info; ?>" target="_blank"><?php echo $value->judul ?></a></li>
                              <?php endforeach; ?>
                                <li><a href="<?php echo base_url('Contact_us'); ?>" target="_blank">Contact Us</a></li>
                                <li><a href="<?php echo base_url('About'); ?>" target="_blank">Comment</a></li>
                                <li><a href="<?php echo base_url('About'); ?>" target="_blank">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-links -->
                    <!-- footer-tours -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 ">
                        <div class="footer-widget ">
                            <h3 class="footer-title ">Services</h3>
                            <ul class="angle list-none">
                              <?php foreach ($list_services as $key => $value) { ?>
                                <li><a href="<?php echo base_url() ?>Services/detail_service/<?php echo $value->id; ?>" target="_blank"><?php echo $value->varian; ?></a>
                              <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-Tours -->
                    <!-- footer-post -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                        <div class="footer-widget">
                            <h3 class="footer-title">Contact Info</h3>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span> <span class="ft-contact-text"><?php echo $list_contact->alamat; ?></span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone "></i></span> <span class="ft-contact-text"><?php echo $list_contact->phone; ?></span></div>
                            <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-envelope "></i></span> <span class="ft-contact-text"><?php echo $list_contact->email; ?></span></div>
                            <div class="social-icon ">
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
                    <!-- /.footer-post -->
                </div>
                <!-- tiny-footer -->
            </div>
            <div class="tiny-footer ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <p>Copyright © All Rights Reserved 2019</p>
                        </div>
                    </div>
                    <!-- /. tiny-footer -->
                </div>
            </div>
        </div>
