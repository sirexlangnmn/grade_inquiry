 <!--Modal User Insert-->
<div class="modal fade" id="modal_subject_insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="icon fa fa-users"></i><strong style="margin-right: 10px">Add Subject</strong></h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post" action="controller/insert/insert_subject.php">

           <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Subject Code</label>
                <input type="text" name="code" class="form-control" required>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Subject Title</label>
                <input type="text" name="title" class="form-control" required>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>
          </div>

           <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
               <label>Unit</label>
                 <select class="form-control" name="unit" required>
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
                  <option disabled>-- Choose Pre-requisites Here --</option>
                  <option></option>
                  <?php 
                    $subject_query = mysqli_query($con, 'SELECT * FROM subject')
                    or die(mysqli_error());
                    while($subject_row = mysqli_fetch_array($subject_query))
                    { ?>
                        <option value="<?php echo $subject_row['code']?>"><?php echo $subject_row['title']; ?></option>
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
                  <option disabled>-- Choose Year Level Here --</option>
                  <option></option>
                   <?php
                      $level_query = mysqli_query($con, 'SELECT * FROM level')
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
                    <option disabled>-- Choose Term Here --</option>
                    <option></option>
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
                  <option disabled>-- Choose Course Here --</option>
                  <option></option>
                  <?php 
                    $course_query = mysqli_query($con, 'SELECT * FROM course')
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
                  <option disabled>-- Choose Major Here --</option>
                  <option></option>
                  <?php 
                    $major_query = mysqli_query($con, 'SELECT * FROM course_major')
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
            <button type="button" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="glyphicon glyphicon-remove-sign" style="margin-right: 10px"></i>Close
            </button>
            <button type="submit" name="submit" id="submit" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="glyphicon glyphicon-plus-sign" style="margin-right: 10px"></i>Add
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>