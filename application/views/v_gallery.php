<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
    <style media="screen">
    /* body{
background-color: #152836
} */
        h2{color:#fff;margin-bottom:40px;text-align:center;font-weight:100;}
        .demo-gallery > ul {
        margin-bottom: 0;
        }
        .demo-gallery > ul > li {
          float: left;
          margin-bottom: 15px;
          margin-right: 20px;
          width: 200px;
        }
        .demo-gallery > ul > li a {
        border: 3px solid #FFF;
        border-radius: 3px;
        display: block;
        overflow: hidden;
        position: relative;
        float: left;
        }
        .demo-gallery > ul > li a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
        }
        .demo-gallery > ul > li a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
        }
        .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
        opacity: 1;
        }
        .demo-gallery > ul > li a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
        }
        .demo-gallery > ul > li a .demo-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
        }
        .demo-gallery > ul > li a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
        }
        .demo-gallery .justified-gallery > a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
        }
        .demo-gallery .justified-gallery > a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
        }
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
        opacity: 1;
        }
        .demo-gallery .justified-gallery > a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
        }
        .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
        }
        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
        }
        .demo-gallery .video .demo-gallery-poster img {
        height: 48px;
        margin-left: -24px;
        margin-top: -24px;
        opacity: 0.8;
        width: 48px;
        }
        .demo-gallery.dark > ul > li a {
        border: 3px solid #04070a;
        }
        .home .demo-gallery {
        padding-bottom: 80px;
        }
    </style>
</head>
<body>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


    <div class="container" style="padding:25px 25px 100px 25px;">
      <h3 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">BALI SUNSET ADVENTURE</h3>
      <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                <?php foreach ($list_photo as $key => $value): ?>
                  <?php $url = base_url().$value->url ?>
                  <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="<?php echo $url; ?>" data-src="<?php echo $url; ?>" data-sub-html="<h4><?php echo $value->title ?></h4><p><?php echo $value->sumary ?>.</p>">
                      <a href="">
                          <img class="img-responsive" src="<?php echo $url; ?>">
                      </a>
                  </li>
                <?php endforeach; ?>
            </ul>
        </div>



      <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery();
            });
        </script>

</body>

</html>
