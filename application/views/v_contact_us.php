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

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type=email], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }


    /* @media screen and (max-width: 600px) {
        , input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    } */

      input[type=submit]:hover {
          background-color: #E65100;
          color:
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

  <main style="padding : 50px 0 50px 0;">
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
              <?php echo $list_contact->message ?>
            </p>
          </div>


          <div style="padding:10px 0px 0px 0px;">
            <form action="<?php echo base_url(). 'Contact_Us/create_testi'; ?>" method="post">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Full Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="name" name="name" placeholder="Your name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">Email</label>
                </div>
                <div class="col-75">
                  <input type="email" id="email" name="email" placeholder="Your email..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="country">Country</label>
                </div>
                <div class="col-75">
                  <select id="country" name="country" class="form-control">
                    <?php foreach ($list_country as $key => $row): ?>
                      <option value="<?php echo $row->countryName; ?>"><?php echo $row->countryName; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="country">Gender</label>
                </div>
                <div class="col-75">
                  <select id="country" name="gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="male">Female</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="subject">Message</label>
                </div>
                <div class="col-75">
                  <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col" style="text-align:right;">
                  <input type="submit" value="Submit">
                </div>
              </div>
            </form>
          </div>

        </div>
        <div class="col-md-5" style="padding:0px 0px 0px 50px;">
          <h3 style="font-family:Impact, Charcoal, sans-serif; text-align:center;">Visit Us</h3>
          <hr>
          <div class=""  style="text-align:left; padding-bottom:50px;">
            <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Address</h5>
            <p class="brown-lighter-hover" style="font-family:Georgia, serif;">
              <?php echo $list_contact->alamat; ?>.
            </p>
            <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Email</h5>
            <p class="brown-lighter-hover" style="font-family:Georgia, serif;">
              <?php echo $list_contact->email; ?>
            </p>
            <h5 class="font-weight-bold orange-text mb-3" style="font-family:Georgia, serif;">Phone.</h5>
            <p class="brown-lighter-hover" style="font-family:Georgia, serif;">
              <?php echo $list_contact->phone; ?>
            </p>
          </div>

            <div class="pb-4" style="text-align:center;">
            <?php foreach ($list_socmed as $key => $row): ?>
              <?php if ($row->socmed_name == 'Linkedin') { ?>
            <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-linkedin mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'Google+') { ?>
            <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-google-plus mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'YouTube') { ?>
            <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-youtube mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'Skype') { ?>
            <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-skype mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'Facebook') { ?>
                <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url ?>" target="_blank" class="btn-social-icon"><i class="fa fa-facebook mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'Twitter') { ?>
             <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-twitter mr-3 fa-3x"></i></a>
              <?php } ?>

              <?php if ($row->socmed_name == 'Instagram') { ?>
            <a style="padding:0px 25px 0px 25px;" href="<?php echo $row->socmed_url; ?>" target="_blank" class="btn-social-icon"><i class="fa fa-instagram mr-3 fa-3x"></i></a>
              <?php } ?>
              <?php endforeach; ?>
            </div>
        </div>
      </div>

    </div>
  </main>



<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
</body>

</html>
