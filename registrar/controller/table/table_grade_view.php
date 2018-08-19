<?php $get_id = $_GET ['id']; ?>

<?php  
$student_query = mysqli_query($con, "SELECT students.student_id,
                                            students.student_no,
                                            students.firstname,
                                            students.lastname,
                                            students.middlename,
                                            students.contact,
                                            students.address,
                                            students.student_status, 
                                            course_major.major_title,
                                            course.code,
                                            level.year_level,
                                            students.semester,
                                            
                                            students.major_id,                                              
                                            students.level_id

                                       FROM students
                                       JOIN course_major
                                         ON students.major_id = course_major.major_id
                                       JOIN course
                                         ON course_major.course_id = course.course_id
                                       JOIN level
                                         ON level.level_id = students.level_id  
                                      WHERE students.student_id = '$get_id'") 
                                     or die (mysqli_error());
$student_row = mysqli_fetch_array($student_query);
  $student_id     = $student_row['student_id'];
  $student_status = $student_row['student_status'];
?>


<!-- Main content -->
<section class="invoice">
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>Quezon City Polytechnic University</strong><br>
        27 Gamma St., R.T.G. Ville<br>
        San Bartolome, Quezon City 1119<br>
        Mobile: 0909.820.2040<br>
        Email: potolin.federex@gmail.com
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        <strong><?php echo $student_row['firstname']." ".$student_row['lastname'] ." ".$student_row['middlename']; ?></strong><br>
        <?php echo $student_row['student_no']; ?><br>
        <?php echo $student_row['address']; ?><br>
        Phone: &nbsp; <?php echo $student_row['contact']; ?><br>
        Email: To be follow.com
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b>Date:</b> 
      <?php
        $Today = date('y:m:d');
        $new = date('l, F d, Y', strtotime($Today));
        echo $new;
      ?> <br />
      <b>Status:</b> &nbsp; <?php echo $student_status; ?><br>
      <b>Major:</b> &nbsp; <?php echo $student_row['major_title']; ?><br>
      <b>Course:</b> &nbsp; <?php echo $student_row['code']; ?><br>
      <b>Current Year Level:</b> &nbsp; <?php echo $student_row['year_level']; ?><br>
      <b>Current Semester:</b> &nbsp; <?php echo $student_row['semester']; ?><br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

             
  <div class="row">
      <div class="col-xl-3 col-md-3 col-xs-12" style="margin-top: -10px">
        <a rel="tooltip"
           type="submit" 
           title="Click Here to Sort the Grade" 
           data-toggle="modal" 
           data-target="#modal_grade_sort<?php echo $student_id; ?>" 
           href="#modal_grade_sort<?php echo $student_id; ?>"
           class="btn btn-success btn-raised btn-block btn-flat">
           <i class="glyphicon glyphicon-plus-sign"></i>
           <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Sort Grade
        </a>  
      <?php include('modal_grade_sort.php'); ?>     
      </div>


      <?php if ($student_status == 'Irregular'){?>
      <div class="col-xl-4 col-md-4 col-xs-12" style="margin-top: -10px">
        <a rel="tooltip"
           type="submit" 
           title="Click Here to Add Subject with no Pre requisites" 
           data-toggle="modal" 
           data-target="#add_grade_advance" 
           href="#add_grade_advance"
           class="btn btn-success btn-raised btn-block btn-flat">
           <i class="glyphicon glyphicon-plus-sign"></i>
           <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i> Subject with  Pre Requisites
        </a>  
      </div>
      <?php include('add_grade_advance_modal.php'); ?>  

      <div class="col-xl-5 col-md-5 col-xs-12" style="margin-top: -10px">
         <a rel="tooltip"
           type="submit" 
           title="Click Here to Add Subject with no Pre requisites" 
           data-toggle="modal" 
           data-target="#add_grade_advance1" 
           href="#add_grade_advance1"
           class="btn btn-success btn-raised btn-block btn-flat">
           <i class="glyphicon glyphicon-plus-sign"></i>
           <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i> Subject with No Pre Requisites
        </a>  
      </div>
      <?php include('add_grade_advance_modal1.php'); ?> 

      <?php }else if ($student_status == 'Regular'){ ?>
      <div class="col-xl-4 col-md-4 col-xs-12" style="margin-top: -10px">
        <a rel="tooltip"
           type="submit" 
           title="Click Here to Add Grade and Subject" 
           data-toggle="modal" 
           data-target="#add_grade" 
           href="#add_grade"
           class="btn btn-success btn-raised btn-block btn-flat">
           <i class="glyphicon glyphicon-plus-sign"></i>
           <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Add Subject
        </a>  
      </div>
      <?php include('add_grade_modal.php'); ?>   
    <?php } ?>
 </div>


<!-- Table row -->
<div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Code</th>
          <th>Subject</th>
          <th>Units</th>
          <th>Year Level</th>
          <th>Sem</th>
          <th>Gen. Ave.</th>
          <th>Remarks</th>
          <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $grade_query = mysqli_query($con,
          "SELECT grade.grade_id,
                  grade.student_id,
                  grade.subject_id,
                  grade.gen_ave,
                  grade.remarks,
                  grade.level_id,
                  grade.semester,                                                  
                  subject.code,
                  subject.title,
                  subject.unit,
                  level.year_level
             FROM grade
             JOIN subject
               ON subject.subject_id = grade.subject_id
             JOIN level
               ON level.level_id = grade.level_id
            WHERE student_id = '$get_id'")
           or die (mysqli_error());

            while ($grade_row = mysqli_fetch_array($grade_query)) {

          $grade_id = $grade_row['grade_id'];
          $student_id = $grade_row['student_id'];
        ?>

        <tr>
            <td><?php echo $grade_row['code']; ?></td> 
            <td><?php echo $grade_row['title']; ?></td> 
            <td><?php echo $grade_row['unit']; ?></td>    
            <td><?php echo $grade_row['year_level']; ?></td>    
            <td><?php echo $grade_row['semester']; ?></td>    
            <td width="100"><?php echo $grade_row['gen_ave']; ?></td> 

              <?php if($grade_row['remarks'] == 'Excellent'){ ?>
              <td><span class="badge bg-green-active"><?php echo $grade_row['remarks']; ?></span></td>   
              <?php }
              else if($grade_row['remarks'] == 'Very Good'){ ?>
              <td><span class="badge bg-green"><?php echo $grade_row['remarks']; ?></span></td>   
              <?php }
              else if($grade_row['remarks'] == 'Satisfactory'){ ?>  
              <td><span class="badge bg-aqua"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if($grade_row['remarks'] == 'Fair'){ ?>
              <td><span class="badge bg-yellow"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if($grade_row['remarks'] == 'Failed'){ ?>
              <td><span class="badge bg-red"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if($grade_row['remarks'] == 'Incomplete'){ ?>
              <td><span class="badge bg-red"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if($grade_row['remarks'] == 'Officially Dropped'){ ?>
              <td><span class="badge bg-red"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if($grade_row['remarks'] == 'PASS'){ ?>
              <td><span class="badge bg-green"><?php echo $grade_row['remarks']; ?></span></td> 
              <?php }
              else if ($grade_row == ''){ ?> 
              <td><?php echo $grade_row['remarks']; ?></td> 
             <?php } ?>
           

            <td width="30">
            <a type='submit' 
               class='badge bg-green-active' 
               rel="tooltip" 
               data-placement="bottom" 
               title="Click Here to Update Grade" 
               data-toggle="modal" 
               data-target="#modal_grade_update<?php echo $grade_id; ?>" 
               href="#modal_grade_update<?php echo $grade_id; ?>"
               href="#">
              <i class="glyphicon glyphicon-pencil" style="margin-left: -5px"></i>
            </a>  
            <?php include('modal_grade_update.php'); ?>   
            </td> 

            <td width="30"> 
            <a type='submit'
               class='badge bg-red-active'
               rel="tooltip" 
               data-placement="bottom" 
               title="Click here to Delete User" 
               data-toggle="modal" 
               href="" 
               id="">
               <i class="glyphicon glyphicon-trash" style="margin-left: -7px"></i>
            </a>
            <!-- include here --> 
            </td>
        </tr>
        <?php  }  ?>                    
        </tbody>
        <tfoot>
          <?php include('table_units.php'); ?>
        </tfoot>

      </table>
    </div>  <!-- /.col -->
</div>  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="print_grade.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
      </button>
      <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generate PDF
      </button>
    </div>
  </div>
</section>
<!-- /.content -->