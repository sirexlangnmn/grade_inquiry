<table id="" name="" class="table table-bordered table-striped">
<thead style="background-color: #00b0ff">
  <tr>
    <th>Student No</th>
    <th>Name</th>
    <th>major</th>
    <th>course</th>
    <th>Photo</th>
    <th>Year LvL</th>
    <th>Term</th>
    <th>Student Status</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</thead>
                  
<tbody> 
<?php
  $student_query = mysqli_query($con, "SELECT students.student_id,
                                              students.student_no,
                                              students.password,
                                              students.firstname,
                                              students.lastname,
                                              students.middlename,
                                              students.gender,
                                              students.contact,
                                              students.address,
                                              students.photo,
                                              students.major_id,
                                              students.level_id,
                                              students.semester,
                                              students.student_status, 
                                              course_major.major_title,
                                              course.code,
                                              level.year_level
                                         FROM students
                                         JOIN level 
                                           ON students.level_id = level.level_id
                                         JOIN course_major
                                           ON students.major_id = course_major.major_id
                                         JOIN course
                                           ON course_major.course_id = course.course_id
                                     ORDER BY students.student_id DESC") 
  or die (mysqli_error());
  while($row=mysqli_fetch_array($student_query))
  {
    $id=$row['student_id'];
  ?>
        <tr class="del<?php echo $id ?>">
          <td><?php echo $row['student_no']; ?></td>                              
          <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
          <td width="80"><?php echo $row['major_title']; ?> </td> 
          <td width="80"><?php echo $row['code']; ?> </td>   
          <td width="60"><img src="<?php echo $row['photo']; ?>" width="60" height="60" class="img-circle"></td> 
          <td width="80"><?php echo $row['year_level']; ?></td> 
          <td width="80"><?php echo $row['semester']; ?></td> 
          <td width="80"><?php echo $row['student_status']; ?></td> 
          <td width="30">
              <a type='submit' 
                 class='badge bg-green-active' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click Here to Update User Detail" 
                 data-toggle="modal" 
                 id="<?php echo $id; ?>"
                 href="#modal_student_update<?php echo $id; ?>">
                <i class="glyphicon glyphicon-pencil" style="margin-left: -5px"></i>
              </a>  
            <?php include('modal_student_update.php'); ?>   
          </td>   

          <td width="30">
              <a rel="tooltip"                  
                 class='badge bg-blue-active' 
                 title="Click here to View the Grade" 
                 href="grade_view.php<?php echo '?id='.$id; ?>">
                <i class="glyphicon glyphicon-list" style="margin-left: -6px"></i>
              </a>     
          </td>

          <td width="30">
              <a type='submit'
                 class='badge bg-red-active'
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to Delete User" 
                 data-toggle="modal" 
                 href="#modal_student_delete<?php echo $id; ?>" 
                 id="">
                 <i class="glyphicon glyphicon-trash" style="margin-left: -7px"></i>
              </a>
            <?php include('modal_student_delete.php'); ?>     
          </td>
      </tr>
<?php } ?>
</tbody>

<tfoot style="background-color: #00b0ff">
 <tr>
    <th>Student No</th>
    <th>Name</th>
    <th>major</th>
    <th>course</th>
    <th>Photo</th>
    <th>Year LvL</th>
    <th>Term</th>
    <th>Student Status</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</tfoot>
</table>