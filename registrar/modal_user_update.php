 <!-- Modal User Update -->
<div id="modal_user_update<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px">
            <i class="glyphicon glyphicon-pencil"></i>
            <i class="glyphicon glyphicon-user"></i>
            <strong style="margin-left: 10px">Update User Detail</strong></h4>
        </div>
      </div>

      <div class="modal-body"> 
      <form method="post" action="controller/update/update_user.php">
        <div class="row">
          <div class="col-md-2 col-xs-12"></div>
            <div class="col-md-8 col-xs-12">
              <div class="form-group has-feedback">
                <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>" required>
                <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" required="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>    
            </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>

        <div class="row">
          <div class="col-md-2 col-xs-12"></div>
            <div class="col-md-8 col-xs-12">
              <div class="form-group has-feedback">
                <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>" required="">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>      
            </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>
    
        <div class="row">
          <div class="col-md-2 col-xs-12"></div>
            <div class="col-md-8 col-xs-12">
              <div class="form-group has-feedback">
                <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" required="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>    
            </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>
       
         <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <select class="form-control" name="user_type">
                    <option><?php echo $row['user_type']; ?></option>
                    <option></option>
                    <option>Registrar</option>
                    <option>Encoder</option>
                  </select>
                  <span class="fa fa-car form-control-feedback"></span>
                </div>
              </div> 
          </div> 
        
         <div class="modal-footer">
            <button name="update" type="submit" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="glyphicon glyphicon-floppy-disk" style="margin-right: 10px"></i>Save
            </button>
            <button type="submit" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="glyphicon glyphicon-remove-sign" style="margin-right: 10px"></i>Close
            </button>
        </div>      
      </form>
      </div>
      
    </div>
  </div>
</div>
