<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>

  <main style="padding : 50px 0 0 0;">
    <div class="container">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">F.A.Q</h2>

      <?php foreach ($list_faq as $row) {?>
      <hr class="my-5">
        <div class="row">
          <div class="col-lg mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;"><?php echo ($row->question); ?>?</h3>
                    <p class="brown-lighter-hover" style="text-align:justify;font-family:Georgia, serif;"><?php echo ($row->answer); ?></p>
                </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </main>


<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
