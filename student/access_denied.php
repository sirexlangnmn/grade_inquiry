<?php
 include("include/style.php"); 
 include("include/dbcon.php"); 
?>
<body class="hold-transition skin-blue layout-top-nav">
<?php
include("student_nav1.php");
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


              <div class="col-md-4"> <!-- /.col -->              
              <?php
              include ('announcement_carousel.php')
              ?>
              </div> <!-- /.col -->
                
               <div class="col-md-4 col-xs-12">
              <div class="col-md-12 col-xs-12">
              <div class="box box-solid">  <!-- /.login-logo -->
                <div class="login-box-body">
                   <div class="alert alert-danger alert-dismissible" align="center">
              <p style="margin-bottom: -2px">
                Access Denied
              </p>
            </div>
                  <p class="login-box-msg">Sign in to start your session</p>

                  <form method="post" action="">
                    <div class="form-group has-feedback">
                      <input type="text" id="username" name="username" class="form-control" placeholder="Student No" required="">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember Me
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat">Sign In</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

                  <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                      Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                      Google+</a>
                  </div>

                  <!-- /.social-auth-links -->
                  <a href="#">I forgot my password</a><br>
                  <a href="#" class="text-center">Confirm Account</a>

                </div>
              </div>
              </div>
              </div>
                <!-- /.login-box-body -->

                <div class="col-md-8">
                  <div class="box-body"> <!-- Thumbnail -->
                      <div class="row"> 
                        <div class="col-lg-3 col-md-3 col-xs-6"> 
                          <strong>BSIT</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="../images/bsit.jpg" alt="..." width="200">
                          </div> 
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSECE</strong>
                          <div class="small-box bg-white">
                          <img  class="img-responsive" src="../images/bsece.jpg" alt="..." width="200">
                          </div>         
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSEntrep</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="../images/bsem.png" alt="..." width="200">  
                          </div>       
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-6">
                          <strong>BSIE</strong>
                          <div class="small-box bg-white">
                          <img class="img-responsive" src="../images/bsie.jpg" alt="..." width="200">
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
  include("include/footer.php");
  include("include/script.php");
?>