<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

</head>
<body>



    <div class="container" style="padding:25px 25px 100px 25px;">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">BALI SUNSET ADVENTURE</h2>

      <?php foreach ($list_about as $row) {?>
      <hr class="my-5">
      <h3 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif; text-align:center;"><?php echo $row->title ?></h3>
      <p style="text-align:justify; font-family:Georgia, serif;">
        <?php echo $row->sumary ?>
      </p>
    <?php }  ?>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    </div>





</body>

</html>
