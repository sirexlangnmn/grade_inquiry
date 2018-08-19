<table id="" name="" class="table table-bordered table-striped">
<thead style="background-color: #00b0ff">
  <tr>
    <th>Code</th>
    <th>Subject Title</th>                                 
    <th>Unit</th>                                 
    <th>Year Level</th>                                 
    <th>Sem</th>                                 
    <th>Pre-Requisites</th>                                 
    <th>Course</th>    
    <th>Major</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</thead>
                  
<tbody> 
<?php
  $subject_query = mysqli_query($con, "SELECT subject.subject_id,
                                              subject.code,
                                              subject.title,
                                              subject.unit,
                                              subject.semester,
                                              subject.pre_requisites,
                                              level.year_level,
                                              course.code,
                                              course_major.major_title,

                                              subject.level_id,
                                              subject.course_id,
                                              subject.major_id
                                            
                                         FROM subject
                                         JOIN level
                                           ON level.level_id=subject.level_id
                                         JOIN course 
                                           ON course.course_id=subject.course_id
                                         JOIN course_major
                                           ON course_major.major_id=subject.major_id") 
  or die (mysqli_error());
  while($row=mysqli_fetch_array($subject_query))
  {
    $id             = $row['subject_id'];
    $pre_requisites = $row['pre_requisites'];
    $level_id       = $row['level_id'];
    $course_id      = $row['course_id'];
    $major_id       = $row['major_id'];
  
  ?>
      <tr class="del<?php echo $id ?>">
          <td><?php echo $row['code']; ?></td> 
          <td><?php echo $row['title']; ?></td> 
          <td><?php echo $row['unit']; ?></td> 
          <td><?php echo $row['year_level']; ?></td> 
          <td><?php echo $row['semester']; ?></td> 
          <td><?php echo $row['pre_requisites']; ?></td> 
          <td><?php echo $row['code']; ?></td>
          <td><?php echo $row['major_title']; ?></td> 
          <td width="30">

              <a type='submit' 
                 class='badge bg-green-active' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click Here to Update User Detail" 
                 data-toggle="modal" 
                 id="<?php echo $id; ?>"
                 href="#modal_subject_update<?php echo $id; ?>">
                <i class="glyphicon glyphicon-pencil" style="margin-left: -5px"></i>
              </a>  
            <?php include('modal_subject_update.php'); ?>   
          </td>   

          <td width="30">
              <a type='submit'
                 class='badge bg-blue-active' 
                 rel="tooltip" 
                 data-placement="bottom" 
                 title="Click here to View User Detail" 
                 data-toggle="modal" 
                 data-target="#modal_subject_view" 
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
                 href="#modal_subject_delete<?php echo $id; ?>" 
                 id="">
                 <i class="glyphicon glyphicon-trash" style="margin-left: -7px"></i>
              </a>
            <?php include('modal_subject_delete.php'); ?>     
          </td>
      </tr>
<?php } ?>
</tbody>

<tfoot style="background-color: #00b0ff">
 <tr>
    <th>Code</th>
    <th>Subject Title</th>                                 
    <th>Unit</th>                                 
    <th>Year Level</th>                                 
    <th>Sem</th>                                 
    <th>Pre-Requisites</th>                                 
    <th>Course</th>    
    <th>Major</th>
    <th colspan="3" align="center">Action</th>
  </tr>
</tfoot>
</table>