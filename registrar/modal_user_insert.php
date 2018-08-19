 <!--Modal User Insert-->
<div class="modal fade" id="modal_user_insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="icon fa fa-users"></i><strong style="margin-right: 10px">Add User</strong></h4>
        </div>
      </div>
      
      <div class="modal-body"> 
        <form method="post" action="controller/insert/insert_user.php">
          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>    
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>      
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>
      
          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>    
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>

          <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>    
              </div>
              <div class="col-md-2 col-xs-12"></div>
          </div>
         
         <div class="row">
            <div class="col-md-2 col-xs-12"></div>
              <div class="col-md-8 col-xs-12">
                <div class="form-group has-feedback">
                  <select class="form-control" placeholder="User Type" name="user_type" required>
                    <option disabled>-- Choose Category Here --</option>
                    <option></option>
                        <option>Registrar</option>
                        <option>Encoder</option>
                  </select>
                  <span class="fa fa-car form-control-feedback"></span>
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