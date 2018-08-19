 <!--Sort Student Modal-->
<div class="modal fade" id="sort_student_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-user"></i>
            <strong style="margin-right: 10px">Sort Student</strong>
          </h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post" action="controller/update/update_student.php">
          <div class="row">
              <div class="col-md-6 col-xs-12" style="margin-top: -24px">
                <div class="form-group has-feedback">
                    <label>Major</label>
                    <select class="form-control" name="major_id" required>
                      <option></option>
                      <?php 
                        $major_query = mysqli_query($con, "SELECT * FROM course_major")
                        or die(mysqli_error());
                        while($major_row = mysqli_fetch_array($major_query))
                        { ?>
                            <option value="<?php echo $major_row['major_id']?>"><?php echo $major_row['major_title']; ?></option>
                       <?php } ?>
                    </select>
                  <span class="glyphicon glyphicon-book form-control-feedback"></span>
                </div>    
              </div>
               <div class="col-md-6 col-xs-12" style="margin-top: -24px">
                 <div class="form-group has-feedback">
                    <label>Year Level</label>
                    <select class="form-control" name="level_id" required>
                      <option></option>
                      <?php
                        $level_query = mysqli_query($con, "SELECT * FROM level")
                        or die(mysqli_error());
                        while ($level_row = mysqli_fetch_array($level_query)) 
                        { ?>
                          <option value="<?php echo $level_row['level_id']?>"><?php echo $level_row['year_level']; ?></option>    
                      <?php } ?>
                    </select>
                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                </div>  
              </div>
          </div>

          <div class="row">
              <div class="col-md-6 col-xs-12" style="margin-top: -24px">
                <div class="form-group has-feedback">
                   <label>Semester</label>
                    <select class="form-control" name="semester" required>
                      <option></option>
                      <option>1st</option>
                      <option>2nd</option>
                    </select>
                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                </div>    
              </div>
               <div class="col-md-6 col-xs-12" style="margin-top: -24px">
                 <div class="form-group has-feedback">
                    <label>Student Status</label>
                    <select class="form-control" name="student_status" required>
                      <option></option>
                      <option>Regular</option>
                      <option>Irregular</option>
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