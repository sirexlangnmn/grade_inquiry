<table id="" name="" class="table table-bordered table-striped">
<thead style="background-color: #00b0ff">
  <tr>
    <th>Username</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>User Type</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</thead>
                  
<tbody> 
<?php

    $search = $_POST['search'];
    
    $user_query = mysqli_query($con, "SELECT user_id, username, firstname, lastname, user_type FROM users WHERE 
    username LIKE '%$search%' OR firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR user_type LIKE '%$search%'") 
    or die (mysqli_error());
  
  while($row=mysqli_fetch_array($user_query))
  {
    $id=$row['user_id']; ?>

      <tr class="del<?php echo $id ?>">
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['firstname']; ?></td>
          <td><?php echo $row['lastname']; ?></td> 
          <td><?php echo $row['user_type']; ?></td>
          <td width="30">

              <a type='submit' 
                 class='btn btn-success btn-raised btn-block btn-flat' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click Here to Update User Detail" 
                 data-toggle="modal" 
                 id="<?php echo $id; ?>"
                 href="#modal_user_update<?php echo $id; ?>">
                <i class="glyphicon glyphicon-pencil" style="margin-left: -5px"></i>
              </a>  
            <?php include('modal_user_update.php'); ?>   
          </td>   

          <td width="30">
              <a type='submit'
                 class='btn btn-info btn-raised btn-block btn-flat' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to View User Detail" 
                 data-toggle="modal" 
                 data-target="#modal_user_view" 
                 id="" 
                 href="">
                <i class="glyphicon glyphicon-list" style="margin-left: -6px"></i>
              </a>     
           <!--  <?php /*include('modal_user_view.php');*/ ?> -->
          </td>

          <td width="30">
              <a type='submit'
                 class='btn btn-danger btn-raised btn-block btn-flat'
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to Delete User" 
                 data-toggle="modal" 
                 href="#modal_user_delete<?php echo $id; ?>" 
                 id="">
                 <i class="glyphicon glyphicon-trash" style="margin-left: -7px"></i>
              </a>
            <?php include('modal_user_delete.php'); ?>     
          </td>
      </tr>
<?php } ?>
</tbody>

<tfoot style="background-color: #00b0ff">
 <tr>
    <th>Username</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>User Type</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</tfoot>
</table>