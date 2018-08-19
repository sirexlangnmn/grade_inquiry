 <!-- Modal Subject Update -->
<div class="modal fade" id="modal_subject_update<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-book"></i><strong style="margin-right: 10px">&nbsp;Update Subject Detail</strong></h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post" action="controller/update/update_subject.php">
          <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Subject Code</label>
                <input type="hidden" name="subject_id" value="<?php echo $row['subject_id']; ?>">
                <input type="text" name="code" class="form-control" value="<?php echo $row['code']; ?>" required>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Subject Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
                 <label>Unit</label>
                 <select class="form-control" name="unit" required>
                  <option><?php echo $row['unit']; ?></option>
                  <option disabled>-- Choose Unit Here --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                 </select>
                 <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Pre-requisites</label>
                <select class="form-control" name="pre_requisites" required>
                  <option value="<?php echo $pre_requisites; ?>"><?php echo $row['pre_requisites']; ?></option>
                   <option></option>
                  <?php
                    $pre_query = mysqli_query($con, "SELECT code, title FROM subject")
                    or die(mysqli_error());
                    while ($pre_row = mysqli_fetch_array($pre_query)) { ?>
                    <option value="<?php echo $pre_row['code']?>"><?php echo $pre_row['title']; ?></option>    
                  <?php } ?>
                  </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Year Level</label>
                <select class="form-control" name="level_id" required>
                  <option value="<?php echo $level_id; ?>"><?php echo $row['year_level']; ?></option>
                  <?php
                    $level_query = mysqli_query($con, "SELECT * FROM level WHERE level_id != '$level_id'")
                    or die(mysqli_error());
                    while ($level_row = mysqli_fetch_array($level_query)) { ?>
                    <option value="<?php echo $level_row['level_id']?>"><?php echo $level_row['year_level']; ?></option>    
                  <?php } ?>
                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Semester</label>
                <select class="form-control" name="semester" required>
                  <option><?php echo $row['semester']; ?></option>
                  <option>1st</option>
                  <option>2nd</option>
                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Course</label>
                <select class="form-control" name="course_id" required>
                  <option value="<?php echo $course_id; ?>"><?php echo $row['code']; ?></option>
                  <?php 
                    $course_query = mysqli_query($con, "SELECT * FROM course WHERE course_id != '$course_id'")
                    or die(mysqli_error());
                    while($course_row = mysqli_fetch_array($course_query))
                    { ?>
                        <option value="<?php echo $course_row['course_id']?>"><?php echo $course_row['code']; ?></option>
                   <?php } ?>
                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Major</label>
               <select class="form-control" name="major_id" required>
                  <option value="<?php echo $major_id; ?>"><?php echo $row['major_title']; ?></option>
                  <?php 
                    $major_query = mysqli_query($con, "SELECT * FROM course_major WHERE major_id != '$major_id'")
                    or die(mysqli_error());
                    while($major_row = mysqli_fetch_array($major_query))
                    { ?>
                        <option value="<?php echo $major_row['major_id']?>"><?php echo $major_row['major_title']; ?></option>
                   <?php } ?>
                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>
          </div>

          
          <div class="modal-footer">
            <button name="update" type="submit" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="glyphicon glyphicon-floppy-disk" style="margin-right: 10px"></i>Save
            </button>
            <button type="button" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="glyphicon glyphicon-remove-sign" style="margin-right: 10px"></i>Close
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>