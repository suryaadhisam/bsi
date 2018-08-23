<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">


</head>
<body>
  <div class="wrapper">

    <div class="slider">
          <div class="owl-carousel owl-one owl-theme">

            <?php foreach ($list_slider as $row): ?>
              <div class="item">
                  <div class="slider-img">
                      <img src="<?php echo base_url($row->path_img); ?>" alt=""></div>
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                              <div class="slider-captions">
                                  <h4 class="slider-title"><?php echo $row->tagline; ?></h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            <?php endforeach; ?>
          </div>
      </div>


      <div class="bg-default enquiry-form ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <form>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="select">
                                            <select id="select" name="city" class="form-control">
                                              <?php foreach ($list_services as $row): ?>
                                                <option value=""><?php echo $row->varian; ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="datepicker"></label>
                                        <div class="input-group">
                                            <input id="datepicker" name="datepicker" type="text" placeholder="Check In" class="form-control" required>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="select">
                                            <select id="select" name="select" class="form-control">
                                                <option value="">Number of Peoples</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                                <option value="">9</option>
                                                <option value="">10</option>
                                                <option value="">11</option>
                                                <option value="">12</option>
                                                <option value="">13</option>
                                                <option value="">14</option>
                                                <option value="">15</option>
                                                <option value="">16</option>
                                                <option value="">17</option>
                                                <option value="">18</option>
                                                <option value="">19</option>
                                                <option value="">20</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-12 col-md-6 col-sm-3 col-12">
                                    <button type="submit" name="singlebutton" class="btn btn-primary btn-lg">Booking Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-medium">
            <div class="container">
                <!-- tour-1 -->
                <?php foreach ($list_services as $index => $key): ?>
                  <?php if ($index % 2 == 1): ?>
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                            <div class="tour-img">
                                <a href="#" class="imghover"> <img src="<?php echo base_url($key->photo); ?>" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                            <div class="tour-block">
                                <div class="tour-content">
                                    <h2 class="mb30"><a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="title"><?php echo $key->varian; ?></a></h2>
                                    <p class="mb30">Vestibulum nec mauris interdum facilisis nequeet convallis odioses praesentet lacinia orciulla dolorerat ullamcorper sitamet meuesered egestas venenatis enimusce sed ipsum seddolor.</p>
                                    <a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="btn-link">Go For Details...<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endif; ?>
                  <!-- /.tour-1 -->
                  <!-- tour-2 -->
                  <?php if ($index % 2 == 0): ?>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                            <div class="tour-block">
                                <div class="tour-content">
                                    <h2 class="mb30"><a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="title"><?php echo $key->varian; ?></a></h2>
                                    <p class="mb30">Donec porttitor lorem utdiam iaculis euismod congue eroset lectus consectetur fermen uspendissolutpat risus utarcu dapibusat conquat quam sodenean pretium a metus euauctor.</p>
                                    <a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="btn-link">Go For Details...<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                            <div class="tour-img">
                                <a href="#" class="imghover"> <img src="<?php echo base_url($key->photo); ?>" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="space-medium service-wrapper" style="">
            <div class="container">
                <!-- service-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>Facilities</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">Here are the facilities from us, we hope that with this facility you are more comfortable and like to come to Bali Sunset Adventure</p>
                        </div>
                    </div>
                </div>
<div class="row">
                <?php foreach ($list_facility as $key => $value): ?>

                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                          <div class="service-block border-bottom border-right">
                              <div><i style="font-size:48px;color:#E65100" class="<?php echo $value->fa_icon; ?>"></i></div>
                              <div class="service-content">
                                  <h3 class="service-title"><?php echo $value->title ?></h3></div>
                                  <?php $descrip = $value->caption;
                                        $descrip = substr($descrip,0,80) . '...';?>
                              <div class="">
                                <p style="text-align:justify;"><?php  echo $descrip ?></p>
                              </div>
                          </div>
                      </div>

                <?php endforeach; ?>
</div>
            </div>
        </div>


        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <!-- testimonial-head -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb60">
                        <div class="testimonial-head">
                            <h2 class="mb40">What Our Customers Say About Our Company</h2>
                            <a href="<?php echo site_url('Comments'); ?>" class="btn-link">Read All Reviews <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.testimonial-head -->
                    <div class="col-xl-6 col-lg-6 offset-md-1 col-md-6 col-sm-12 col-12 mb60">
                        <div class="testimonial-carousel">
                            <div class="owl-carousel owl-theme testimonial-owl">

                              <?php foreach ($list_testimoni as $index => $row): ?>
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <?php $y=substr($row->comments,0,80) . '...'; ?>
                                            <p class="testimonial-text">“<?php echo $y ?>”</p>
                                            <span class="testi-meta"><strong>- <?php echo $row->name ?></strong> (<?php echo $row->country ?>)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img style="width:160px; height:160px;" src="<?php echo base_url($row->path_img); ?>" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>


                                <!-- <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“Proin dictum justo at finibus consectetur Proin odio odio molestie qui commodo sit amet euismod dictum ligula”</p>
                                            <span class="testi-meta"><strong>- Maria Young</strong> (Our Tourist)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="<?php echo base_url('uploads/images/testi_img_2.jpg'); ?>" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“Crasin leo arcuiquamnec elementum erossed tincidunt dolroin tristiquecongue Inaex pharetra euismod duieget”</p>
                                            <span class="testi-meta"><strong>- Helena Lehoux</strong> (Our Tourist)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="<?php echo base_url('uploads/images/testi_img_3.jpg'); ?>" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form>
                            <div class="search-form">
                                <input type="text" class="form-control" placeholder="Find here">
                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">close</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
  </div>
</body>

</html>
