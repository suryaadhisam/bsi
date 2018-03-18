<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <script type="text/javascript"> //<![CDATA[ 
    var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
    document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
    //]]>
    </script>
    <style>
      .nav-tabs {
        border: 0;
        padding: .7rem;
        margin-left: 1rem;
        margin-right: 1rem;
        margin-bottom: -20px;
        background-color: #FF9800;
        z-index: 2;
        position: relative;
        border-radius: 2px;
      }

      .nav{
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
      }

      /* ul, menu, dir {
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 40px;
      } */

      .nav-justified .nav-item {
          /* -ms-flex-preferred-size: 0; */
          /* flex-basis: 0; */
          /* -webkit-box-flex: 1; */
          /* -ms-flex-positive: 1; */
          /* flex-grow: 1; */
          /* text-align: center; */
      }
    </style>
    <style>
      body{
  font-family: 'Roboto';
  text-align: center;
  background: #f1f1f1;
}

h3{
  color: #555;
}

#presentation{
  width: 480px;
  height: 120px;
  padding: 20px;
  margin: auto;
  background: #FFF;
  margin-top: 10px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  transition: all 0.3s;
  border-radius: 3px;
}

#presentation:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  transition: all 0.3s;
  transform: translateZ(10px);
}

#floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 5px #666;
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 38px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

#container-floating:hover{
  height: 400px;
  width: 90px;
  padding: 30px;
}

#container-floating:hover .plus{
  animation: plus-in 0.15s linear;
  animation-fill-mode: forwards;
}

.edit{
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  padding: 0;
  opacity: 0;
  margin: auto;
  line-height: 65px;
  transform: rotateZ(-70deg);
  transition: all 0.3s;
  animation: edit-out 0.3s;
}

#container-floating:hover .edit{
  animation: edit-in 0.2s;
   animation-delay: 0.1s;
  animation-fill-mode: forwards;
}

@keyframes edit-in{
    from {opacity: 0; transform: rotateZ(-70deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

@keyframes edit-out{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(-70deg);}
}

@keyframes plus-in{
    from {opacity: 1; transform: rotateZ(0deg);}
    to {opacity: 0; transform: rotateZ(180deg);}
}

@keyframes plus-out{
    from {opacity: 0; transform: rotateZ(180deg);}
    to {opacity: 1; transform: rotateZ(0deg);}
}

.nds{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: fixed;
  z-index: 300;
  transform:  scale(0);
  cursor: pointer;
}

.nd1{
  background: #d3a411;
  right: 40px;
  bottom: 120px;
  animation-delay: 0.2s;
    animation: bounce-out-nds 0.3s linear;
  animation-fill-mode:  forwards;
}

.nd3{
  background: #3c80f6;
  right: 40px;
  bottom: 180px;
  animation-delay: 0.15s;
    animation: bounce-out-nds 0.15s linear;
  animation-fill-mode:  forwards;
}

.nd4{
  background: #ba68c8;
  right: 40px;
  bottom: 240px;
  animation-delay: 0.1s;
    animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

.nd5{
  background-image: url('https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27');
  background-size: 100%;
  right: 40px;
  bottom: 300px;
  animation-delay: 0.08s;
  animation: bounce-out-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

@keyframes bounce-nds{
    from {opacity: 0;}
    to {opacity: 1; transform: scale(1);}
}

@keyframes bounce-out-nds{
    from {opacity: 1; transform: scale(1);}
    to {opacity: 0; transform: scale(0);}
}

#container-floating:hover .nds{

  animation: bounce-nds 0.1s linear;
  animation-fill-mode:  forwards;
}

#container-floating:hover .nd3{
  animation-delay: 0.08s;
}
#container-floating:hover .nd4{
  animation-delay: 0.15s;
}
#container-floating:hover .nd5{
  animation-delay: 0.2s;
}

.letter{
  font-size: 23px;
  font-family: 'Roboto';
  color: white;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0;
  top: 0;
  bottom: 0;
  text-align: center;
  line-height: 40px;
}

.reminder{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  line-height: 40px;
}

.profile{
  border-radius: 50%;
  width: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 20px;
}
    </style>
</head>
<body>

  <!--Main layout-->
  <main>
    <div class="container">
      <section class="mt-5 wow fadeIn">
        <div class="row">
          <div class="col-md-12 ">
            <ul class="nav nav-tabs nav-justified">
                <style>
                  a {
                    color: white;
                  }

                  a.hover{
                    color: white;
                  }
                </style>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-bicycle"></i> ATV Ride</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-bicycle"></i> Cycling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel3" role="tab"><i class="fa fa-bicycle"></i> River Tubing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel4" role="tab"><i class="fa fa-bicycle"></i> Spa & Refleksi</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content card">
                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <br/>
                <div class="row">
                  <div class="col-md-4 mb-2">
                    <img class="img-fluid img-thumbnail" src="<?php echo base_url();?>/assets/img/home/1.jpg">
                  </div>
                  <div class="col-md-7 mb-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.
                    </p>
                    <button type="button" class="btn btn-warning btn-sm">Read More</button>
                  </div>
                </div>
                </div>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <div class="tab-pane fade" id="panel2" role="tabpanel">
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.</p>
                </div>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <div class="tab-pane fade" id="panel3" role="tabpanel">
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.</p>
                </div>
                <!--/.Panel 3-->
                <!--Panel 3-->
                <div class="tab-pane fade" id="panel4" role="tabpanel">
                    <br>
                    <p>yyLorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                        reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                        porro voluptate odit minima.</p>
                </div>
                <!--/.Panel 3-->
            </div>
          </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <!-- <hr class="my-5"> -->

      <!--Section: Main features & Quick Start-->
      <section>

        <!-- <h3 class="h3 text-center mb-5">Book Now!</h3> -->

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-12 col-md-12 px-4">

            
<!-- Card -->
<div class="card mx-xl-5">

<!-- Card body -->
<!-- <div class="card-body"> -->

    <!-- Default form subscription -->
    <!-- <form>
        <h3 class="h3 text-center">Book Now!</h3>
        <br/>
        <div class="row">
          <div class="col-md-4">
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Date</label>
            <input type="date" class="form-control" id="theDate">
          </div>
          <div class="col-md-2">
          <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Adult</label>
            <input type="number" id="defaultFormCardNameEx" class="form-control" value="0">
          </div>
          <div class="col-md-2">
          <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Children</label>
            <input type="number" id="defaultFormCardNameEx" class="form-control" value="0">
          </div>
          <div class="col-md-2">
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Infant</label>
            <input type="number" id="defaultFormCardNameEx" class="form-control" value="0">
          </div>
          <div class="col-md-2">
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Family</label>
            <input type="number" id="defaultFormCardNameEx" class="form-control" value="0">
          </div>
        </div>

        <div class="text-center py-4 mt-3">
            <button class="btn btn-outline-orange" type="submit">Search<i class="fa fa-search ml-2"></i></button>
        </div>
    </form> -->
    <!-- Default form subscription -->

<!-- </div> -->
<!-- Card body -->

</div>
<!-- Card -->
                  

          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <!-- <hr class="my-5">


      <hr class="mb-5"> -->


    </div>
  </main>


<div id="container-floating">

  <div class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Simone"></div>
  <div class="nd4 nds" data-toggle="tooltip" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <p class="letter">C</p>
  </div>
  <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder"><img class="reminder" src="//ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_reminders_speeddial_white_24dp.png" /></div>
  <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
    <p class="letter">E</p>
  </div>

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus">+</p>
    <img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>




      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  
  <script language="JavaScript" type="text/javascript">
  TrustLogo("https://balisunsetadventure.com/assets/img/comodo_secure_seal_76x26_transp.png", "CL1", "none");
  </script>
  <a  href="https://ssl.comodo.com" id="comodoTL">Comodo SSL</a>
  <script>
    // get today value
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;


    document.getElementById('theDate').value = today;
  </script>
</body>

</html>
