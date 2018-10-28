<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo base_url(''); ?>/assets/css/style.css" rel="stylesheet">
    <style media="screen">
    @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
      .head {
        color: #ECF0F1;
      }

      .board {
        width: 100%;
        height: auto;
        /* margin: 20px auto; */
        background: #fefefe;
        border-radius: 8px 8px 0 0;
      }

      .board .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        box-sizing: border-box;
      }

      .liner {
        height: 2px;
        background: #ddd;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        /* top: 50%; */
        z-index: 1;
      }

      .nav-tabs > li {
        width: 25%;
      }

      .nav-tabs > li:after {
        content: " ";
        position: absolute;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #aaa;
        transition: left 1s;
      }

      .nav-tabs > li.active:after {
        left: calc(50% - 10px);
        opacity: 1;
      }

      .nav-tabs > li[rel-index="-1"]:after {
        left: calc(50% + 100% - 10px);
      }

      .nav-tabs > li[rel-index="-2"]:after {
        left: calc(50% + 200% - 10px);
      }

      .nav-tabs > li[rel-index="-3"]:after {
        left: calc(50% + 300% - 10px);
      }

      .nav-tabs > li[rel-index="1"]:after {
        left: calc(50% - 100% - 10px);
      }

      .nav-tabs > li[rel-index="2"]:after {
        left: calc(50% - 200% - 10px);
      }

      .nav-tabs > li[rel-index="3"]:after {
        left: calc(50% - 300% - 10px);
      }

      .nav-tabs > li a {
        width: 70px;
        height: 70px;
        line-height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
      }

      .nav-tabs > li a:hover{
        background: transparent;
      }

      .nav-tabs > li span {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: white;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
      }

      .nav-tabs > li:nth-of-type(1) span {
        color: #3e5e9a;
        border: 2px solid #3e5e9a;
      }

      .nav-tabs > li:nth-of-type(1).active span {
        color: #fff;
        background: #3e5e9a;
      }

      .nav-tabs > li:nth-of-type(2) span {
        color: #f1685e;
        border: 2px solid #f1685e;
      }

      .nav-tabs > li:nth-of-type(2).active span {
        color: #fff;
        background: #f1685e;
      }

      .nav-tabs > li:nth-of-type(3) span {
        color: #febe29;
        border: 2px solid #febe29;
      }

      .nav-tabs > li:nth-of-type(3).active span {
        color: #fff;
        background: #febe29;
      }

      .nav-tabs > li:nth-of-type(4) span {
        color: #25c225;
        border: 2px solid #25c225;
      }

      .nav-tabs > li:nth-of-type(4).active span {
        color: #fff;
        background: #25c225;
      }

      .nav-tabs > li > a.disabled {
        opacity: 1;
      }

      .nav-tabs > li > a.disabled span {
        border-color: #ddd;
        color: #aaa;
      }

      div#step-1 {
        background: #fff;
      }

      div[role="tabpanel"]:after {
        content: "";
        display: block;
        clear: both;
      }
    </style>
</head>
<body>

  <main style="padding : 50px 0 25px 0;">
    <div class="container">
      <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Boking Steps</strong></h2>
      <div class="row">
        <div class="board">
            <ul class="nav nav-tabs">
                <div class="liner"></div>
                <li rel-index="0" class="active">
                    <a href="#step-1" class="btn" aria-controls="step-1" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-user"></i></span>
                    </a>
                </li>
                <li rel-index="1">
                    <a href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-plus"></i></span>
                    </a>
                </li>
                <li rel-index="2">
                    <a href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-heart"></i></span>
                    </a>
                </li>
                <li rel-index="3">
                    <a href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                        <span><i class="glyphicon glyphicon-ok"></i></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <br><br>
            <div role="tabpanel" class="tab-pane active" id="step-1">
              <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align:center;" ></h3>
                    <p style="text-align: center;" id="date_boking">hahaha</p>
                    <button id="step-2-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
              </div>

                <!-- <div class="col-md-12">
                  <form>
                    <div class="bg-default enquiry-form ">
                          <div class="container">
                              <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="select"></label>
                                                    <div class="select">
                                                        <select id="select_service" name="city" class="form-control" onchange="disableMenu()">
                                                          <?php foreach ($list_services as $row): ?>
                                                            <option value="[<?php echo $row->id; ?>, <?php echo $row->min_person; ?>]"><?php echo $row->varian; ?></option>
                                                          <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="datepicker"></label>
                                                    <div class="input-group">
                                                        <div class="field">
                                                          <input id="datepicker" name="datepicker" type="text" placeholder="Check In" class="form-control" required>
                                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="select"></label>
                                                    <div class="select" id="app">
                                                        <select id="select_number" name="select" class="form-control"></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="actions">
                        <button id="step-1-next" disabled = "true" type="button" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                      </div>
                    </form>
                  </div> -->
            </div>
            <script type="text/javascript">
            // $('#datepicker').datepicker({
            //   minDate:new Date(),
            //   disabledDates: [new Date()]
            //   });
            </script>

            <script type="text/javascript">
              $("#datepicker").datepicker({
              onSelect: function() {
                  var dateObject = $(this).datepicker({ dateFormat: 'yy-mm-dd' }).val();
                  var dateTime = new Date($(this).datepicker("getDate"));

                  var strDateTime =  dateTime.getFullYear() + "-" + (dateTime.getMonth()+1) + "-" + dateTime.getDate();
                  document.getElementById('date_boking').innerHTML = dateObject;
                  if (dateObject.length != 0) {
                    $('button[type=button]').prop('disabled', false);
                  }
                  console.log(strDateTime);
                }
              });
            </script>



            <div role="tabpanel" class="tab-pane" id="step-2">
                <div class="col-md-12">
                    <h3 style="text-align:center;" ></h3>
                    <p style="padding-left:520px;" id="date_boking"></p>
                    <button id="step-2-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="step-3">
                <div class="col-md-12">
                  <div class="row setup-content" id="step-11">
                      <div class="col-md-12">
                          <h3 class="font-weight-bold pl-0 my-4"><strong>Personal Information</strong></h3>
                          <div class="row">
                            <div class="col-md-6">
                              <form>
                                  <div class="form-group">
                                      <label for="formGroupExampleInput">Full Name</label>
                                      <input type="text" class="form-control" placeholder="Full Name">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">Email</label>
                                      <input type="text" class="form-control" placeholder="Email Address">
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlTextarea2">Address</label>
                                      <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">City</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">State/Province</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">Country</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">Zip Code</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">Phone</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="formGroupExampleInput2">Time Arrival</label>
                                      <input type="text" class="form-control">
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleFormControlTextarea2">Special Request</label>
                                      <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                                  </div>
                              </form>
                            </div>
                            <div class="col-md-6">
                              <div style="text-align: justify;text-justify: inter-word;">
                                This page is protected by our secure server, which encrypts all submitted information. To provide you with an additional security, all credit card information are stored on a computer that is not connected to the Internet.
                              </div>
                              <h5>We accept major credit cards:</h5>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Credit Card Type</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Issuing Bank</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Bank Country</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Credit Card Number</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">CVV Number</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Expired Date</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Card's Name</label>
                                  <input type="text" class="form-control">
                              </div>

                              <div class="form-group">
                                  <label for="formGroupExampleInput2">Billing Address</label>
                                  <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>


                          <div class="form-check" style="text-align:center;">
                            <div class="row">
                              <div class="col">
                                <label class="checkbox-inline">
                                  <input type="checkbox" value="">I acknowledge reading the Terms & Conditions and I agree to pay according to the terms stated.
                                </label>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <button id="step-3-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="step-4">
                <div class="col-md-12">
                    <button id="step-4-next" class="btn btn-lg btn-primary pull-right">Continue</button>
                </div>
            </div>
          </div>
        </div>

            <!-- <form role="form" action="" method="post">
                <div class="row setup-content" id="step-9">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Amount and Time</strong></h3>
                          <div class="row">

                            <div class="col-md-3">
                              <div class="md-form">
                                  <i class="fa fa-user prefix"></i>
                                  <input type="number" id="inputValidationEx" class="form-control validate">
                                  <label for="inputValidationEx" data-error="wrong" data-success="right" class="">Adult(s)</label>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="number" id="inputValidationEx" class="form-control validate">
                                <label for="inputValidationEx" data-error="wrong" data-success="right" class="">Children(s)</label>
                              </div>
                            </div>
                          <div class="col-md-3">
                            <div class="md-form">
                              <i class="fa fa-user prefix"></i>
                              <input type="number" id="inputValidationEx" class="form-control validate">
                              <label for="inputValidationEx" data-error="wrong" data-success="right" class="">Infant(s)</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="Check In" id="datepicker">
                          </div>
                          </div>
                          <div class="row" style="padding : 50px 0 0 0;">
                            <div class="col">
                              <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row setup-content" id="step-10">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Available Service</strong></h3>
                        <div class="row">
                          <div class="col-md-5 mb-4">
                            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                          </div>
                          <div class="col-md-7 mb-4">
                            <h3 class="h3 mb-3">ATV Ride - Tandem</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Benefit</strong></h4>
                                <ul>
                                  <li>Welcome Drink</li>
                                  <li>Paint Ball Equipment - Boots</li>
                                  <li>Sock</li>
                                  <li>Full Face Google</li>
                                  <li>Body Armour</li>
                                  <li>Army Uniform and Paint Gun</li>
                                </ul>
                              </div>
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Date 14 March 2018</strong></h5>
                                <h6 class="h6">for 1 Adult(s), 0 Children, 0 Infant(s)</h6>
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>Available Time Boking</strong>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">09:15</a>
                                        <a class="dropdown-item" href="#">10:15</a>
                                        <a class="dropdown-item" href="#">11:15</a>
                                        <a class="dropdown-item" href="#">12:15</a>
                                    </div>
                                </div>
                                <h6 class="h6">Start From</h6>
                                <h5 class="h6">IDR.</h5><h2 style="color:red;"><strong>500,000.00</strong></h2><h6 class="h6">per pax</h6>
                                <button type="button" class="btn btn-success">Book Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr class="my-5">
                        <div class="row">
                          <div class="col-md-5 mb-4">
                            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                          </div>
                          <div class="col-md-7 mb-4">
                            <h3 class="h3 mb-3">River Tubing</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Benefit</strong></h4>
                                <ul>
                                  <li>Welcome Drink</li>
                                  <li>Paint Ball Equipment - Boots</li>
                                  <li>Sock</li>
                                  <li>Full Face Google</li>
                                  <li>Body Armour</li>
                                  <li>Army Uniform and Paint Gun</li>
                                </ul>
                              </div>
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Date 14 March 2018</strong></h5>
                                <h6 class="h6">for 1 Adult(s), 0 Children, 0 Infant(s)</h6>
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>Available Time Boking</strong>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">09:15</a>
                                        <a class="dropdown-item" href="#">10:15</a>
                                        <a class="dropdown-item" href="#">11:15</a>
                                        <a class="dropdown-item" href="#">12:15</a>
                                    </div>
                                </div>
                                <h6 class="h6">Start From</h6>
                                <h5 class="h6">IDR.</h5><h2 style="color:red;"><strong>500,000.00</strong></h2><h6 class="h6">per pax</h6>
                                <button type="button" class="btn btn-success">Book Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr class="mb-5">
                        <div class="row">
                          <div class="col-md-5 mb-4">
                            <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                          </div>
                          <div class="col-md-7 mb-4">
                            <h3 class="h3 mb-3">Cycling</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Benefit</strong></h4>
                                <ul>
                                  <li>Welcome Drink</li>
                                  <li>Paint Ball Equipment - Boots</li>
                                  <li>Sock</li>
                                  <li>Full Face Google</li>
                                  <li>Body Armour</li>
                                  <li>Army Uniform and Paint Gun</li>
                                </ul>
                              </div>
                              <div class="col-md-6">
                                <h5 class="h5"><strong>Date 14 March 2018</strong></h5>
                                <h6 class="h6">for 1 Adult(s), 0 Children, 0 Infant(s)</h6>
                                  <div class="btn-group">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>Available Time Boking</strong>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">09:15</a>
                                        <a class="dropdown-item" href="#">10:15</a>
                                        <a class="dropdown-item" href="#">11:15</a>
                                        <a class="dropdown-item" href="#">12:15</a>
                                    </div>
                                </div>
                                <h6 class="h6">Start From</h6>
                                <h5 class="h6">IDR.</h5><h2 style="color:red;"><strong>500,000.00</strong></h2><h6 class="h6">per pax</h6>
                                <button type="button" class="btn btn-success">Book Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr class="my-5">
                          <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                          <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                    </div>
                </div>


            </form> -->


<section>
  <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center; padding-top:50px;">Facilities</h2>
  <div class="row features-small mb-5 mt-3 wow fadeIn">

    <div class="row">
      <?php foreach ($list_facility as $key => $value): ?>
        <?php if ($value->state == 1) { ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
              <div class="service-block border-bottom border-right">
                  <div><a href="<?php echo base_url() ?>Facility/detail_facility/<?php echo $value->id_facility; ?>" class="btn-link"><i style="font-size:48px;color:#E65100" class="<?php echo $value->fa_icon; ?>"></i></a></div>
                  <div class="service-content">
                      <a href="<?php echo base_url() ?>Facility/detail_facility/<?php echo $value->id_facility; ?>" class="btn-link"><h3 class="service-title"><?php echo $value->title ?></h3></a></div>
                      <?php $descrip = $value->caption;
                            $descrip = substr($descrip,0,80) . '...';?>
                  <div class="">
                    <p style="text-align:justify;"><?php  echo $descrip ?></p>
                  </div>
              </div>
          </div>
        <?php } ?>
      <?php endforeach; ?>
      <hr>
      <?php foreach ($list_facility as $key => $value): ?>
        <?php if ($value->state == 2) { ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
              <div class="service-block border-bottom border-right">
                  <div><a href="#" class="btn-link"><i style="font-size:48px;color:#0000FF" class="<?php echo $value->fa_icon; ?>"></i></a></div>
                  <div class="service-content">
                      <a href="<?php echo base_url() ?>Facility/detail_facility/<?php echo $value->id_facility; ?>" class="btn-link"><h3 class="service-title"><?php echo $value->title ?></h3></a></div>
                      <?php $descrip = $value->caption;
                            $descrip = substr($descrip,0,200);?>
                  <div class="">
                    <p style="text-align:justify;"><?php  echo $descrip ?></p>
                  </div>
              </div>
          </div>
        <?php } ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

    </div>
  </main>

  <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
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
  <script type="text/javascript">
      $(function() {
        // Nav Tab stuff



        $('.nav-tabs > li > a').click(function() {
            if($(this).hasClass('disabled')) {
                return false;
            } else {
                var linkIndex = $(this).parent().index() - 1;
                $('.nav-tabs > li').each(function(index, item) {
                    $(this).attr('rel-index', index - linkIndex);
                });
            }
        });
        $('#step-1-next').click(function() {
            // Check values here
            var isValid = true;

            if(isValid) {
                $('.nav-tabs > li:nth-of-type(2) > a').removeClass('disabled').click();
            }
        });
        $('#step-2-next').click(function() {
            // Check values here
            var isValid = true;

            if(isValid) {
                $('.nav-tabs > li:nth-of-type(3) > a').removeClass('disabled').click();
            }
        });
        $('#step-3-next').click(function() {
            // Check values here
            var isValid = true;

            if(isValid) {
                $('.nav-tabs > li:nth-of-type(4) > a').removeClass('disabled').click();
            }
        });
      });
  </script>
  <script>
    // $( function() {
    // $( "#datepicker" ).datepicker();
    //   minDate: 0;
    // } );
  </script>
</body>

</html>
