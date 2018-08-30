<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style media="screen">
    </style>

</head>
<body>

    <div class="container" style="padding:50px 25px 0 25px;">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">OUR SERVICES</h2>

      <hr class="my-5">
      <section class="mt-5 wow fadeIn">
        <ul class="nav nav-pills nav-justified">
          <?php foreach ($list_service as $key => $value): ?>
            <li class="nav-item">
                <a class="nav-link <?php echo ($key==0) ? 'active':''; ?>" data-toggle="tab" href="#<?php echo $value->id ?>" role="tab"><?php echo $value->varian; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <br>
        <!-- Tab panels -->
        <div class="tab-content card" style="padding:5px 5px 20px 5px;">


          <?php foreach ($list_service as $key => $row): ?>
            <div class="tab-pane fade in show <?php echo ($key==0) ? 'active':''; ?>" id="<?php echo $row->id; ?>" role="tabpanel">
              <div class="row">
                  <div class="col-md-6 mb-4">
                    <img  height="40" width="530" src="<?php echo base_url($row->photo); ?>" class="img-fluid z-depth-1-half" alt="">
                  </div>
                  <div class="col-md-6 mb-4">
                    <h3 class="h3 mb-3"><?php echo $row->varian ?></h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Duration (hour)</th>
                          <th>Package Type</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1,5</td>
                          <td>Single</td>
                          <td>USD 70/Rp 900.000</td>
                        </tr>
                        <tr>
                          <td>1,5</td>
                          <td>Tandem</td>
                          <td>USD 95/Rp 1.250.000</td>
                        </tr>
                      </tbody>
                    </table>
                    <hr>
                  </div>
                  <button type="button" class="btn btn-lg btn-info" style="margin: 0 0 0 910px">Read More..</button>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>


      <hr class="my-5">

      <!--Section: Not enough-->
      <section>
        <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">Facilities</h2>
        <div class="row features-small mb-5 mt-3 wow fadeIn">
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
      </section>

    </div>


    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
