<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>

<head>
<link href="assets/css/material-kit.css" rel="stylesheet" />
</head>

<body class="">

  <!---------- START HEADER ---------->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#">
              EBS International Potato Center </a>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
      </div>

      <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav ml-auto">
  
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="material-icons">apps</i> About us
              </a>
            </li>
  
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="material-icons">view_day</i> Sections
              </a>
            </li>
  
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="material-icons">view_carousel</i> Examples
              </a>
            </li>
  
            <li class="button-container nav-item iframe-extern">
              <a href="#" target="_blank" class="btn  btn-rose   btn-round btn-block">
                <i class="material-icons">person</i> Sign in
              </a>
            </li>
          </ul>
        </div>
    </div>
  </nav>


  <!---------- START MAIN CONTENT ---------->

  <div class="page-header header-filter" style="background-image: url('assets/img/potato/potato-fields.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">        
          <br><br><br><br><br><br>
          <form class="form" method="" action="">
            <div class="card card-login card-hidden">
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Login</h4>

                <div class="social-line">
                  <a href="#" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-windows"></i>
                  </a>
                  <a href="#" class="btn btn-just-icon btn-link btn-white">
                    <i class="fa fa-google"></i>
                  </a>
                </div>

              </div>
              <div class="card-body ">
                <p class="card-description text-center">Or Be Classical</p>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name...">
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email...">
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password...">
                  </div>
                </span>
              </div>
              <div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
  <!---------- END MAIN CONTENT ---------->


  <!---------- START FOOTER ---------->
  <footer class="footer">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="#">
              Need help?
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, Enterprise Breeding System
      </div>
    </div>
  </footer>
  <!---------- END FOOTER ---------->

  </div>



  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script>
</body>