<table id="" name="" class="table table-bordered table-striped">
<thead style="background-color: #00b0ff">
  <tr>
    <th>Code</th>
    <th>Course Title</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</thead>
                  
<tbody> 
<?php
  $course_query = mysqli_query($con, "SELECT * FROM course") 
  or die (mysqli_error());
  
  while($row=mysqli_fetch_array($course_query))
  {
    $id=$row['course_id']; ?>

     <tr class="del<?php echo $id ?>">
        <td><?php echo $row['code']; ?></td> 
        <td><?php echo $row['title']; ?></td> 
          <td width="30">

              <a type='submit' 
                 class='badge bg-green-active' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click Here to Update User Detail" 
                 data-toggle="modal" 
                 id="<?php echo $id; ?>"
                 href="#modal_course_update<?php echo $id; ?>">
                <i class="glyphicon glyphicon-pencil" style="margin-left: -5px"></i>
              </a>  
            <?php include('modal_course_update.php'); ?>   
          </td>   

          <td width="30">
              <a type='submit'
                 class='badge bg-blue-active' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to View User Detail" 
                 data-toggle="modal" 
                 data-target="#modal_course_view" 
                 id="" 
                 href="">
                <i class="glyphicon glyphicon-list" style="margin-left: -6px"></i>
              </a>     
           <!--  <?php /*include('modal_user_view.php');*/ ?> -->
          </td>

          <td width="30">
              <a type='submit'
                 class='badge bg-red-active'
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to Delete User" 
                 data-toggle="modal" 
                 href="#modal_course_delete<?php echo $id; ?>" 
                 id="">
                 <i class="glyphicon glyphicon-trash" style="margin-left: -7px"></i>
              </a>
            <?php include('modal_course_delete.php'); ?>     
          </td>
      </tr>
<?php } ?>
</tbody>

<tfoot style="background-color: #00b0ff">
   <tr>
    <th>Code</th>
    <th>Course Title</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</tfoot>
</table>