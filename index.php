<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MaterialAdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="assets/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="assets/dist/css/ripples.min.css">
  <link rel="stylesheet" href="assets/dist/css/MaterialAdminLTE.min.css">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/all-md-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue layout-top-nav">

<?php
include("student/student_nav.php");
?>

<div class="container">
<div class="content-wrapper"><!--main content-->   
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible">
              <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-user"></i>
                QCPU Grade Inquiry
              </h4>
            </div>
            <div class="box-body"><!-- /.box-header -->
              <div class="col-md-4"> <!-- /.col -->
                <div class="box box-solid"> <!-- Contact Us -->  
                  <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Contact Us!</h3>
                  </div>
                    <div class="box-body">
                     <b>Address</b>
                     <p>San Bartolome, Novaliches, Quezon City</p>
                     <hr>

                      <b>School</b>
                      <p>Quezon City Polytechnic University</p>
                      <hr>

                      <b>Cp. nos.:</b>
                      <p>0909.820.2040</p>
                      <hr>

                      <b>Email Address:</b>
                      <p>potolin.federex@gmail.com</p>
                    </div>
                </div><!-- Contact Us -->

                     <!-- Mission and Vision -->   
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Mission</h3>
                  </div>
                  <div class="box-body" style="text-align: justify;">
                    To provide education that will awaken full understanding of
                     the essence of the natural resources of the country, 
                     and the potentials of the human resources of the nation.
                  </div>
                </div> 
              
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Vision</h3>
                  </div>
                  <div class="box-body" style="text-align: justify;">
                   The constituents of the Philippines as a whole,
                    while starting in Quezon City in particular, 
                    enjoy the good life mainly as a result of their
                    native talent, gained wisdom, and hardwork.
                  </div>
                </div>
                     <!-- Mission and Vision -->  
     
              </div> <!-- /.col -->
               <div class="col-md-8">
                  <?php
                    include("student/dashboard_carousel.php");
                  ?>

                  <div class="box-body"> <!-- Thumbnail -->
                      <div class="row"> 
                        <div class="col-lg-3 col-md-3 col-xs-6"> 
                          <strong>BSIT</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="images/bsit.jpg" alt="..." width="200">
                          </div> 
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSECE</strong>
                          <div class="small-box bg-white">
                          <img  class="img-responsive" src="images/bsece.jpg" alt="..." width="200">
                          </div>         
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSEntrep</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="images/bsem.png" alt="..." width="200">  
                          </div>       
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSIE</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="images/bsie.jpg" alt="..." width="200">
                          </div> 
                        </div>
                      </div>
                  </div> <!-- Thumbnail -->
                </div>      
            </div>
    

        </div>
      </div>
  </section>
</div><!-- /.content-wrapper --> <!-- /main content-->
</div>

<?php 
include("registrar/include/footer.php");
?>




<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="assets/dist/js/material.min.js"></script>
<script src="assets/dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
