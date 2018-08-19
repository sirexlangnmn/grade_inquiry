 <!--Sort Grade Modal-->
<div class="modal fade" id="sort_grade_modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <form method="post" action="view_grade1.php">
          <div class="row">
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group has-feedback">
               <label>Year Level</label>
                <select class="form-control" name="level_id">
                 <option></option>
                  <?php 
                    $level_query = mysqli_query($con, 'SELECT * FROM level')
                    or die(mysqli_error());
                    while($level_row = mysqli_fetch_array($level_query)) { ?>
                    <option value="<?php echo $level_row['level_id']?>"><?php echo $level_row['year_level']; ?></option>
                   <?php } ?>
                </select>
                <span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div> 
            </div>
            <div class="col-md-6 col-xs-12" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Semester</label>
                <select class="form-control" name="semester">
                  <option></option>
                  <option>1st</option>
                  <option>2nd</option>
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
              <i class="glyphicon glyphicon-send" style="margin-right: 10px"></i>Submit
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>