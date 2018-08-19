 <!--Sort Grade Modal-->
<div class="modal fade" id="modal_grade_update<?php echo $grade_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="icon fa fa-users"></i>
            <strong style="margin-right: 10px">Sort the Subject</strong>
          </h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post">
          <input type="hidden" name="grade_id" value="<?php echo $grade_id; ?>">
          <input type="hidden" name="level_id" value="<?php echo $grade_row['level_id']; ?>">
          <input type="hidden" name="semester" value="<?php echo $grade_row['semester']; ?>">

          <div class="row">
            <div class="col-md-9 col-xs-9" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Subject</label>
                <br />
                <input type="hidden" name="subject_id" value="<?php echo $grade_row['subject_id']; ?>">
                <strong><?php echo $grade_row['code'] ." ".$grade_row['title']; ?></strong>
                  
                 
                  <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-3 col-xs-3" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Gen. Ave.</label>
                <select class="form-control" name="gen_ave">
                  <option><?php echo $grade_row['gen_ave']; ?></option>
                  <option>1.00</option>
                    <option>1.25</option>
                    <option>1.50</option>
                    <option>1.75</option>
                    <option>2.00</option>
                    <option>2.25</option>
                    <option>2.50</option>
                    <option>2.75</option>
                    <option>3.00</option>
                    <option>5.00</option>
                    <option>0</option>
                    <option>DRP</option>
                    <option>INC</option>
                    <option>PASS</option>
                  </select>
                  <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="glyphicon glyphicon-remove-sign" style="margin-right: 10px"></i>Close
            </button>
            <button type="submit" name="update" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="glyphicon glyphicon-send" style="margin-right: 10px"></i>Submit
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<?php
  if (isset($_POST['update'])){

  $grade_id=$_POST['grade_id'];
  $subject_id = $_POST['subject_id'];
  $level_id = $_POST['level_id'];
  $semester = $_POST['semester'];
  $gen_ave = $_POST['gen_ave'];

if ($gen_ave  == '1.00'){ 
   mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Excellent' WHERE grade_id='$grade_id'")or die(mysqli_error()); 
   } else if($gen_ave == '1.25'){
   mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Very Good' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == '1.50'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Very Good' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == '1.75'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Very Good' WHERE grade_id='$grade_id'")or die(mysqli_error());
   } else if($gen_ave ==  '2.00'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Satisfactory' WHERE grade_id='$grade_id'")or die(mysqli_error());   
   } else if($gen_ave == '2.25'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Satisfactory' WHERE grade_id='$grade_id'")or die(mysqli_error());
   } else if($gen_ave == '2.50'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Satisfactory' WHERE grade_id='$grade_id'")or die(mysqli_error());
   } else if($gen_ave == '2.75'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Fair' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == '3.00'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave'
  ,remarks='Fair' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == '5.00'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Failed' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == '0'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Failed' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == 'INC'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Incomplete' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == 'DRP'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='Officially Dropped' WHERE grade_id='$grade_id'")or die(mysqli_error());
   }else if($gen_ave == 'PASS'){
  mysqli_query($con, "UPDATE grade SET subject_id='$subject_id',level_id='$level_id',semester='$semester',gen_ave='$gen_ave',remarks='PASS' WHERE grade_id='$grade_id'")or die(mysqli_error());
   } 
   ?>

  <script>
    window.location = "grade_view.php<?php echo '?id='.$get_id;  ?>";    
  </script>
<?php   
  }