<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style media="screen">
     #map {
      height: 400px;
      width: 100%;
     }
    </style>
    <script>
        function initMap() {
        var uluru = {lat: -8.552880, lng: 115.251150};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGhOIPTgiRAJqhMjo6DLVpAvWCYyPBxRk&callback=initMap">
    </script>
</head>
<body>

  <main style="padding : 100px 0 0 0;">
    <div class="container">
      <h2 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">Contact Us</h2>

      <hr class="my-5">

      <div class="row">
        <div id="map">

        </div>
      </div>

      <hr class="my-5">

      <div class="row">
        <div class="col-lg-7">
          <div class="row">
            <p class="brown-lighter-hover" style="text-align:justify;font-family:Georgia, serif;">
              We are here to answer any question you may have about <strong>Bali Sunset Adventure</strong>. Reach out to us and we'll respond as soon as we can.

              Even if there is something you have always wanted to experience and can't find it on <strong>Bali Sunset Adventure</strong>, let us know and we promise we'll do our best for you.
            </p>
          </div>
          <form>
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                <input type="text" id="inputValidationEx" class="form-control validate">
                <label for="inputValidationEx" data-error="wrong" data-success="right">Type your name</label>
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="email" id="inputValidationEx" class="form-control validate">
                <label for="inputValidationEx" data-error="wrong" data-success="right">Type your email</label>
            </div>
            <div class="md-form">
                <i class="fa fa-list-alt prefix"></i>
                <input type="text" id="inputValidationEx" class="form-control validate">
                <label for="inputValidationEx" data-error="wrong" data-success="right">Type your subject</label>
            </div>

            <div class="md-form">
                <i class="fa fa-file-text prefix"></i>
                <textarea type="text" id="textareaBasic" class="form-control md-textarea"></textarea>
                <label for="textareaBasic">Type your text</label>
            </div>
            <button class="btn btn-default btn-rounded float-right" type="submit">Submit</button>
          </form>

        </div>
        <div class="col-md-5">
          <h3 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">Visit Us</h3>
          <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Address</h5>
          <p class="brown-lighter-hover" style="text-align:justify;font-family:Georgia, serif;">
            Jl. Raya Silakarang Sukawati Gianyar.
          </p>

          <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Email</h5>
          <p class="brown-lighter-hover" style="text-align:justify;font-family:Georgia, serif;">
            cs@balisunsetadventure.com
          </p>

          <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Phone.</h5>
          <p class="brown-lighter-hover" style="text-align:justify;font-family:Georgia, serif;">
            087830056086.
          </p>

          <div class="pb-4">
            <a href="#" target="_blank">
              <i class="fa fa-facebook mr-3 fa-3x"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa fa-instagram mr-3 fa-3x"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa fa-twitter mr-3 fa-3x"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa fa-whatsapp mr-3 fa-3x"></i>
            </a>
          </div>
        </div>
      </div>





    </div>
  </main>



      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
