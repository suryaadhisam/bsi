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
    <?php if(!empty($list_flyer)){ ?>
        <script type="text/javascript">
            $( function() {
                $( "#myModal" ).modal();
            } );
        </script>
    <?php } ?>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <!-- <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div> -->

          <!-- Modal body -->
          <div class="modal-body">
          <div class="slider">
          <div class="owl-carousel owl-one owl-theme">
                    <?php foreach ($list_flyer as $row): ?>
                    <div class="item">
                        <div class="slider-img">
                            <img src="<?php echo base_url($row->path_img); ?>" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <!-- <div class="slider-captions">
                                        <h4 class="slider-title"></h4>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

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
                        <div class="example2">
                            <marquee behavior="scroll" direction="left"><h1><font color="white"><b>BALI SUNSET ADVENTURE</b></font></h1></marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
          $('#select_service')
          .val('[1, 1]')
          .trigger('change');
          function disableMenu(){
            var a = document.getElementById("select_service").value;
            var id = a[1];
            var max_person = parseInt(a[4]);
            var arr = [];
            var limit = parseInt(max_person*20);

            $('#select_number').text('');
            for (var i = max_person; i <= limit; i=i+max_person) {
              arr[arr.length] = i;
            }
            for (var i = 0; i < arr.length; i++) {
              $('#select_number').append(`
                  <option value="${arr[i]}"> ${arr[i]} </option>
                `);
            }
            if(document.getElementById("select_service").value=="0"){
                document.getElementById("select_number").disabled = true;

            } else {
                document.getElementById("select_number").disabled = false;
            }
          }
        </script>

        <div class="">
            <div class="container">
              <div class="row">
                  <div class="col">
                      <div class="">
                          <h2 style="text-align:center;"><strong>Our Services</strong></h2>
                      </div>
                  </div>
              </div>
                <?php foreach ($list_services as $index => $key): ?>
                  <?php if ($index % 2 == 1): ?>
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                            <div class="tour-img">
                                <a href="<?php echo base_url($key->photo); ?>" class="imghover" target="_blank"> <img  alt="<?php echo $key->varian; ?>" src="<?php echo base_url($key->photo); ?>" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                            <div class="tour-block">
                                <div class="tour-content">
                                    <h2 class="mb30"><a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="title"><?php echo $key->varian; ?></a></h2>
                                    <?php $sumary = $key->keterangan;
                                          $sumary = substr($sumary,0,80) . '...';?>
                                    <p class="mb30"><?php echo $sumary ?></p>
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
                                    <?php $sumary = $key->keterangan;
                                          $sumary = substr($sumary,0,80) . '...';?>
                                    <p class="mb30"><?php echo $sumary ?></p>
                                    <a href="<?php echo base_url() ?>Services/detail_service/<?php echo $key->id; ?>" class="btn-link">Go For Details...<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                            <div class="tour-img">
                                <a href="<?php echo base_url($key->photo); ?>" class="imghover" target="_blank"> <img src="<?php echo base_url($key->photo); ?>" alt="<?php echo $key->varian; ?>" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>


        <hr>
        <!-- <div class="service-wrapper"> -->
            <div class="container">
                <!-- service-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2><strong>Facilities</strong></h2>
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
                              <div id="solTitle">
                              <a data-id="<?php echo $value->id_facility; ?>" href="<?php echo base_url() ?>Facility/detail_facility/<?php echo $value->id_facility; ?>" class="btn-link"><i id="juke"  style="font-size:48px;color:#E65100" class="<?php echo $value->fa_icon; ?>"></i></a>
                              </div>
                              <div class="service-content" id="solTitle">
                                  <a href="<?php echo base_url() ?>Facility/detail_facility/<?php echo $value->id_facility; ?>" class="btn-link"><h3 class="service-title"><?php echo $value->title ?></h3></a></div>
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
        <!-- </div> -->
        <script>
            $(document).ready(function() {
                $("#solTitle a").click(function() {
                    var id = $(this).data("id");
                    // alert(id);
                    $(document).ready(function(){      
                        $.ajax({
                            url: "<?php echo base_url(); ?>welcome/cek_facility",
                            type: "POST",
                            dataType : "json",
                            data: {"id_facility": id},
                            success : function(data) {
                                    // alert(data);
                                    if (data == 1) {
                                        return;
                                    } else {
                                        alert("Sorry detail facilities are not available");
                                        window.location = "<?php echo site_url('welcome/index'); ?>";
                                    }
 
                                },
                                error : function(data) {
                                    // do something
                                    alert("hay");
                                    // console.log(data);
                                }   
                            });
                            
                        return false;
                    });

                });
            });
        </script>

        <hr>
        <div class="bg-light">
            <div class="container">
                <div class="row">
                    <!-- testimonial-head -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb60">
                        <div class="testimonial-head">
                            <h2 class="mb40"><strong>What Our Customers Say About Our Company</strong></h2>
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
