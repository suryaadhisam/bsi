<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style media="screen">
    /* carousel */
.media-carousel
{
margin-bottom: 0;
padding: 0 40px 30px 40px;
margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left
{
left: -12px;
background-image: none;
background: none repeat scroll 0 0 #222222;
border: 4px solid #FFFFFF;
border-radius: 23px 23px 23px 23px;
height: 40px;
width : 40px;
margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right
{
right: -12px !important;
background-image: none;
background: none repeat scroll 0 0 #222222;
border: 4px solid #FFFFFF;
border-radius: 23px 23px 23px 23px;
height: 40px;
width : 40px;
margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators
{
right: 50%;
top: auto;
bottom: 0px;
margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li
{
background: #c0c0c0;
}
.media-carousel .carousel-indicators .active
{
background: #333333;
}
.media-carousel img
{
width: 250px;
height: 100px
}
/* End carousel */
    </style>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


    <div class="container" style="padding:25px 25px 100px 25px;">
      <?php foreach ($list_service_detail as $key): ?>
        <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;"><?php echo $key->varian; ?></h2>


        <div class='row'>
          <div class='col-md-12'>
            <div class="carousel slide media-carousel" id="media">
              <div class="carousel-inner">
                <div class="item  active">
                  <div class="row">
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                    <div class="col-md-4">
                      <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                    </div>
                  </div>
                </div>
              </div>
              <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
              <a data-slide="next" href="#media" class="right carousel-control">›</a>
            </div>
          </div>
        </div>

        
      <?php endforeach; ?>



    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#media').carousel({
      pause: true,
      interval: false,
    });
  });
</script>

</body>
</html>
