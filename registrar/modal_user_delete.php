 <!--  Modal User Delete -->
<div class="modal fade" id="modal_user_delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
       <div class="alert alert-danger alert-dismissible">
          <h4 style="margin-bottom: -2px">
            <i class="glyphicon glyphicon-trash"></i>
            <i class="glyphicon glyphicon-user"></i>
            <strong style="margin-left: 10px">Are you Sure you want to Delete this Data?</strong></h4>
        </div>
      </div>
      
      <div class="modal-footer">
        <form method="post" action="controller/delete/delete_user.php<?php echo '?id='.$id; ?>">
          <button type="button" class='btn btn-info btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
            <i class="glyphicon glyphicon-remove" style="margin-right: 10px"></i>Close
          </button>
          <button type="submit" class='btn btn-danger btn-raised btn-block btn-flat pull-right'>
            <i class="glyphicon glyphicon-trash" style="margin-right: 10px"></i>Yes
          </button>
        </form>
      </div>

    </div>
  </div>
</div>