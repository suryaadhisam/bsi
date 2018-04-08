<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

</head>
<body>

    <div class="container" style="padding:100px 25px 0 25px;">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">BALI SUNSET ADVENTURE</h2>

      <?php foreach ($list_about as $row => $v) {?>
      <hr class="my-5">
      <h3 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif; text-align:center;"><?php echo $v['title'] ?></h3>
      <p style="text-align:justify; font-family:Georgia, serif;">
        <?php echo $v['sumary'] ?>
      </p>
    <?php }  ?>

    <div class="row" style="width:230px; margin:0 auto;">
      <?php echo $this->pagination->create_links(); ?>
    </div>
    </div>


    <div class="row" style="width:230px; margin:0 auto;">
      <nav aria-label="pagination example">
          <ul class="pagination pg-blue">

              <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                  </a>
              </li>

              <li class="page-item active">
                  <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>

              <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                  </a>
              </li>
          </ul>
      </nav>
    </div>

</body>

</html>
