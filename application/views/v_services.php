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
                    <a href="<?php echo base_url($row->photo); ?>" class="imghover"><img  style="height:350px; width:auto;padding-left:100px;" src="<?php echo base_url($row->photo); ?>" class="img-fluid z-depth-1-half" alt=""></a>
                  </div>
                  <div class="col-md-6 mb-4">
                    <a href="<?php echo base_url() ?>Services/detail_service/<?php echo $row->id; ?>" target="_blank"><h3 class="h3 mb-3"><?php echo $row->varian ?></h3></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Min Person</th>
                          <th>IDR</th>
                          <th>USD</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $number_usd = $row->harga_usd;
                            $number_idr = number_format("$row->harga_idr",2,",",".");
                          ?>
                          <tr>
                              <td><?php echo $row->min_person ?></td>
                              <td><?php echo "Rp ".$number_idr ?></td>
                              <td><?php echo '$ ' . number_format($number_usd, 2);?></td>
                            </tr>
                      </tbody>
                    </table>
                    <p style="text-align:justify; font-family:Georgia, serif; padding-right:10px">
                        <?php
                          $sumary = $row->keterangan;
                          if (strlen($sumary)<=400) {
                            echo $sumary;
                          }
                          else {
                            $sumary = substr($sumary,0,400) . '...';
                            echo $sumary;
                          }
                        ?>
                      </p>
                      <button type="button" class="btn btn-lg btn-info" onclick="location.href='<?php echo base_url() ?>Services/detail_service/<?php echo $row->id; ?>'">Read More..</button>
                  </div>
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


    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
</body>

</html>
