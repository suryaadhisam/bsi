<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style media="screen">
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
    figure.snip1167 {
      font-family: 'Raleway', Arial, sans-serif;
      position: relative;
      float: left;
      overflow: hidden;
      margin: 10px 1%;
      min-width: 220px;
      max-width: 310px;
      width: 100%;
      color: #333;
      text-align: left;
      box-shadow: none !important;
    }
    figure.snip1167 * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    figure.snip1167 img {
      max-width: 100%;
      height: 100px;
      width: 100px;
      border-radius: 50%;
      margin: 0 auto;
      display: block;
      z-index: 1;
      position: relative;
    }
    figure.snip1167 blockquote {
      margin: 0;
      display: block;
      border-radius: 8px;
      position: relative;
      background-color: #fafafa;
      padding: 65px 50px 30px 50px;
      font-size: 0.8em;
      font-weight: 500;
      margin: -50px 0 0;
      line-height: 1.6em;
      box-shadow: 0 0 5px rgba(0, 0, 0, 9.15);
    }
    figure.snip1167 blockquote:before,
    figure.snip1167 blockquote:after {
      font-family: 'FontAwesome';
      content: "\201C";
      position: absolute;
      font-size: 50px;
      opacity: 0.5;
      font-style: normal;
    }
    figure.snip1167 blockquote:before {
      top: 70px;
      left: 20px;
    }
    figure.snip1167 blockquote:after {
      content: "\201D";
      right: 20px;
      bottom: 0;
    }
    figure.snip1167 .author {
      padding: 15px;
      margin: 0;
      text-transform: uppercase;
      /* color: #ffffff; */
      text-align: center;
    }
    figure.snip1167 .author h5 {
      opacity: 0.8;
      margin: 0;
      font-weight: 800;
    }
    figure.snip1167 .author h5 span {
      font-weight: 400;
      text-transform: none;
      display: block;
    }
    </style>
</head>
<body>

  <main style="padding : 50px 0 0 0;">
    <div class="container">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">Guest Comments</h2>

      <hr class="my-5">

      <div class="row">
        <?php foreach ($list_comments as $row) {?>
        <div class="col-md-4">
          <figure class="snip1167">
            <img src="<?php echo base_url($row->path_img); ?>" alt="sq-sample3"/>
            <blockquote><?php echo ($row->comments); ?></blockquote>
            <div class="author">
              <h5><?php echo ($row->name); ?> <span> <?php echo ($row->country); ?></span></h5>
            </div>
          </figure>
        </div>
      <?php } ?>
      </div>

      <hr class="my-5">

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
