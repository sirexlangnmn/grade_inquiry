  <?php
    
    include('include/dbcon.php');
    
    if (isset($_POST['submit']))
    {
        $student_no = $_POST['student_no'];
        $password   = $_POST['password'];
        $cpassword  = $_POST['cpassword'];
      
        $query=mysqli_query($con, "SELECT * FROM students WHERE student_no = '$student_no' ")or die(mysql_error());
        $count=mysqli_num_rows($query);

        if ($count  > 0)
        {
          $exist = "";
        }
        else
        {
          $exist ='ID Number not Found!';
        }
                    
        if($cpassword!=$password)
        {
          $a="Password do not Match";
        }
        else
        {
          $a = "";
        }
    }
  ?>


<!-- Confirm Account Modal -->
<div class="modal fade" id="confirmAccountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="icon fa fa-users"></i><strong style="margin-right: 10px">
            Confirm Account</strong>
          </h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="text" name="student_no" value="<?php if (isset($_POST['submit'])){echo $student_no;} ?>" class="form-control" placeholder="Student No" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>    
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>


          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>      
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>

           <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" class="form-control" placeholder="Confirmed Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>      
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>
      
          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group">
                  <input type="text" readonly="" class="form-control" name="image" placeholder="Upload Picture">
                  <input type="file" name="image">
                  <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                </div>
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>

          <div class="modal-footer">
            <button type="button" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="icon fa fa-user-plus" style="margin-right: 10px"></i>Close
            </button>
            <button type="submit" name="submit" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="icon fa fa-user-plus" style="margin-right: 10px"></i>Confirm
            </button>
          </div>

          <?php 
            if(isset($_POST['submit']))
            {
              $student_no = $_POST['student_no'];
              $password   = $_POST['password'];
              $cpassword  = $_POST['cpassword'];

              $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $image_name = addslashes($_FILES['image']['name']);
              $image_size = getimagesize($_FILES['image']['tmp_name']);

              move_uploaded_file($_FILES["image"]["tmp_name"], "registrar/upload/" . $_FILES["image"]["name"]);
              $location = "upload/" . $_FILES["image"]["name"];
                  

              if($password == $cpassword && $count == 1){ ?>
              
              <?php  
                mysqli_query($con, "UPDATE students SET password = '$password' , photo = '$location' , status = 'Active' WHERE student_no = '$student_no' ")or die(mysqli_error());
              ?>

                <script type="text/javascript">
                 window.location='success.php'; 
                </script>

              <?php
              }
              else
              {
                echo " ";
              }
            }
          ?>
        </form>
      </div>

    </div>
  </div>
</div>