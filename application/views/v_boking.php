<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>

  <main style="padding : 100px 0 0 0;">
    <div class="container">
      <div class="card">
        <div class="card-body mb-4">

            <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Boking Steps</strong></h2>

            <!-- Stepper -->
            <div class="steps-form">
                <div class="steps-row setup-panel">
                    <div class="steps-step">
                        <a href="#step-9" type="button" class="btn btn-indigo btn-circle">1</a>
                        <p>Step 1</p>
                    </div>
                    <div class="steps-step">
                        <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2</p>
                    </div>
                    <div class="steps-step">
                        <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3</p>
                    </div>
                </div>
            </div>

            <form role="form" action="" method="post">

                <!-- First Step -->
                <div class="row setup-content" id="step-9">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Amount and Time</strong></h3>
                          <div class="row">

                            <div class="col-md-3">
                              <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adult (s)</button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">1</a>
                                      <a class="dropdown-item" href="#">2</a>
                                      <a class="dropdown-item" href="#">3</a>
                                      <a class="dropdown-item" href="#">4</a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Children</button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">1</a>
                                      <a class="dropdown-item" href="#">2</a>
                                      <a class="dropdown-item" href="#">3</a>
                                      <a class="dropdown-item" href="#">4</a>
                                  </div>
                              </div>
                            </div>
                          <div class="col-md-3">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Infant</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">1</a>
                                    <a class="dropdown-item" href="#">2</a>
                                    <a class="dropdown-item" href="#">3</a>
                                    <a class="dropdown-item" href="#">4</a>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="Check In" id="datepicker">
                            <!-- <p>Date: <input type="text" id="datepicker"></p> -->
                          </div>
                          </div>
                          <div class="row" style="padding : 50px 0 0 0;">
                            <div class="col">
                              <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                            </div>
                          </div>
                    </div>
                </div>

                <!-- Second Step -->
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

                <!-- Third Step -->
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
                            <input type="checkbox" class="form-check-input" id="checkbox104">
                            <label class="form-check-label" for="checkbox104">I acknowledge reading the Terms & Conditions and I agree to pay according to the terms stated.</label>
                        </div>

                        <button class="btn btn-indigo btn-rounded prevBtn float-left" type="button">Previous</button>
                        <button class="btn btn-default btn-rounded float-right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
<!-- Steps form -->
      <hr class="my-5">
      <section class="mt-5 wow fadeIn">

        <h2 class="text-center font-weight-bold pt-4 pb-5"><strong>Price</strong></h2>
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">ATV Ride</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">River Tubing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Swing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel4" role="tab">Cycling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel5" role="tab">SPA & Reflexy</a>
            </li>
        </ul>
        <br>
        <!-- Tab panels -->
        <div class="tab-content card">
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
              <div class="row">
                  <div class="col-md-6 mb-4">
                    <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                  </div>
                  <div class="col-md-6 mb-4">
                    <h3 class="h3 mb-3">ATV Ride</h3>
                    <p>This template is created with Material Design for Bootstrap (
                      <strong>MDB</strong> ) framework.</p>
                    <p>Read details below to learn more about MDB.</p>
                    <hr>
                    <p>
                      <strong>400+</strong> material UI elements,
                      <strong>600+</strong> material icons,
                      <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                      <strong>Free for personal and commercial use.</strong>
                    </p>
                  </div>
                </div>
            </div>


            <div class="tab-pane fade" id="panel2" role="tabpanel">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                </div>
                <div class="col-md-6 mb-4">
                  <h3 class="h3 mb-3">River Tubing</h3>
                  <p>This template is created with Material Design for Bootstrap (
                    <strong>MDB</strong> ) framework.</p>
                  <p>Read details below to learn more about MDB.</p>
                  <hr>
                  <p>
                    <strong>400+</strong> material UI elements,
                    <strong>600+</strong> material icons,
                    <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                    <strong>Free for personal and commercial use.</strong>
                  </p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="panel3" role="tabpanel">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                </div>
                <div class="col-md-6 mb-4">
                  <h3 class="h3 mb-3">Swing</h3>
                  <p>This template is created with Material Design for Bootstrap (
                    <strong>MDB</strong> ) framework.</p>
                  <p>Read details below to learn more about MDB.</p>
                  <hr>
                  <p>
                    <strong>400+</strong> material UI elements,
                    <strong>600+</strong> material icons,
                    <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                    <strong>Free for personal and commercial use.</strong>
                  </p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="panel4" role="tabpanel">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                </div>
                <div class="col-md-6 mb-4">
                  <h3 class="h3 mb-3">Cycling</h3>
                  <p>This template is created with Material Design for Bootstrap (
                    <strong>MDB</strong> ) framework.</p>
                  <p>Read details below to learn more about MDB.</p>
                  <hr>
                  <p>
                    <strong>400+</strong> material UI elements,
                    <strong>600+</strong> material icons,
                    <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                    <strong>Free for personal and commercial use.</strong>
                  </p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="panel5" role="tabpanel">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half" alt="">
                </div>
                <div class="col-md-6 mb-4">
                  <h3 class="h3 mb-3">SPA & Reflexy</h3>
                  <p>This template is created with Material Design for Bootstrap (
                    <strong>MDB</strong> ) framework.</p>
                  <p>Read details below to learn more about MDB.</p>
                  <hr>
                  <p>
                    <strong>400+</strong> material UI elements,
                    <strong>600+</strong> material icons,
                    <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                    <strong>Free for personal and commercial use.</strong>
                  </p>
                </div>
              </div>
            </div>
        </div>

        <hr class="my-5">

        <h2 class="my-5 h3 text-center">Facilities</h2>
        <div class="row features-small mt-5 wow fadeIn">
          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1">Free Wifi</h5>
                <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers; all browsers love MDB.
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-level-up fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Restaurant</h5>
                <p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as possible.
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-comments-o fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Active community</h5>
                <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a part of our family.
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
                <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest features which come along with
                  it.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row features-small mt-4 wow fadeIn">
          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Modularity</h5>
                <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use libraries including all features as
                  well as modules for CSS (SASS files) and JS.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Technical support</h5>
                <p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to contact us.
                </p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Flexbox</h5>
                <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6">
            <div class="row">
              <div class="col-2">
                <i class="fa fa-file-code-o fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">SASS files</h5>
                <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>
              </div>
            </div>
          </div>
        </div>


      </section>

    </div>
  </main>


  <script>
        $(document).ready(function () {
        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-indigo').addClass('btn-default');
                $item.addClass('btn-indigo');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allPrevBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                prevStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepSteps.removeAttr('disabled').trigger('click');
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i< curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-indigo').trigger('click');
      });
  </script>
  <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );
  </script>
  <script type="text/javascript">
    new WOW().init();
  </script>
</body>

</html>
