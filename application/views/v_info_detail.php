<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

</head>
<body>
    <div class="container" style="padding:25px 25px 100px 25px;">
      <?php foreach ($detail_info as $key): ?>
        <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;"><?php echo $key->judul; ?></h2>
      <?php endforeach; ?>

    <?php foreach ($detail_info as $key): ?>
      <p style="text-align:justify; font-family:Georgia, serif;padding:25px 0px 25px 0px;">
        <?php echo $key->deksripsi; ?>
      </p>
    <?php endforeach; ?>

    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
  </div>

</body>
</html>
