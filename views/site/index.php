<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>

<head>
  <link href="assets/css/material-kit.css?v=2.1.1" rel="stylesheet" />
</head>
<!---------- START BODY ---------->
<body class="landing-page sidebar-collapse">

  <!---------- START HEADER ---------->
  <nav class="navbar navbar-color-on-scroll   navbar-transparent   fixed-top   navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
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
            <!-- <a href="#" target="_blank" class="btn  btn-rose   btn-round btn-block"> -->
            <a href="#"  class="btn  btn-success   btn-round  btn-block">
              <i class="material-icons">person</i> Sign in
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!---------- START MAIN CONTENT ---------->
    <div class="page-header login-page header-filter" data-parallax="true" filter-color="black" style="background-image: url('assets/img/potato/landing1.jpg'); background-size: cover; background-position: top center;">
      <!-- <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/potato/landing1.jpg')"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <br><br><br><br><br><br>
            <h1 class="title">A healthy, inclusive and resilient world</h1>
            <h4>CIP is a CGIAR research center, a global research partnership for a food-secure future. CGIAR science is dedicated to reducing poverty, enhancing food and nutrition security, and improving natural resources and ecosystem services.</h4>
            <br>
            <a href="dashboard.html" target="_blank" class="btn btn-success btn-raised btn-lg">
              <i class="fa fa-play"></i> Go to Dashboard
            </a>
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
  </div>

  <!---------- CORE JS FILES ---------->
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
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script>
</body>
<!---------- END BODY ---------->