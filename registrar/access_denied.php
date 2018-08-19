<?php 
include("include/style.php"); 
?>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href=""> Grading System</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
     <div class="alert alert-danger alert-dismissible" align="center">
              <p style="margin-bottom: -2px">
                Access Denied
              </p>
            </div>

    <form method="post" action="login.php">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" name="login" class="btn btn-primary btn-raised btn-block btn-flat">Sign In</button>
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
    <a href="#" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php
  include("include/script.php");
?>


