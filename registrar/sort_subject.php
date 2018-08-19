<?php
 include("include/style.php"); 
 include("include/dbcon.php"); 
?>

<div class="wrapper">

  <?php include("dashboard_header.php"); ?>
  

<aside class="main-sidebar"> <!-- /.dashboard_sidebar.php --> <!-- Left side column. contains the logo and sidebar -->
  <section class="sidebar"> <!-- Sidebar -->  <!-- sidebar: style can be found in sidebar.less -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../images/rex.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Federex A Potolin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <form action="" method="post" class="sidebar-form"> <!-- search form -->
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="dashboard.php">
          <i class="fa fa-calendar"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="user.php">
          <i class="fa fa-calendar"></i> <span>User</span>
        </a>
      </li>
      <li>
        <a href="course.php">
          <i class="fa fa-calendar"></i> <span>Course</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="subject.php">
          <i class="fa fa-calendar"></i> <span>Subject</span>
        </a>
      </li>
      <li>
        <a href="student.php">
          <i class="fa fa-calendar"></i> <span>Student</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Multiple Tab</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href=""><i class="fa fa-circle-o"></i>Sub Tab 1</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>Sub Tab 2</a></li>
        </ul>
      </li>
      <li>
        <a href="">
          <i class="fa fa-calendar"></i> <span>Single Tab</span>
        </a>
      </li>
    </ul>
  </section>  
</aside>   <!-- /.dashboard_sidebar.php -->

  <div class="content-wrapper"> <!-- Content Wrapper. Contains page content -->  <!-- / Main Content Here --> 
    <section class="content-header"></section>  <!-- Main Content Here -->  
      <div class="box-body">
         <div class="alert alert-info alert-dismissible">
            <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-user"></i>Subject Table</h4>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-3 col-xs-12" style="margin-top: -10px">
              <button rel="tooltip"
                      type="submit" 
                      title="Click Here to Add Subject" 
                      data-toggle="modal" 
                      data-target="#modal_subject_insert" 
                      tabindex="-1" 
                      role="dialog"
                      aria-labelledby="myModalLabel" 
                      class='btn btn-danger btn-raised btn-block btn-flat'>
                      <i class="glyphicon glyphicon-plus-sign"></i>
                      <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Add Subject
              </button>  
              <?php include('modal_subject_insert.php'); ?>     
             </div>
             <div class="col-xl-3 col-md-3 col-xs-12" style="margin-top: -10px">
              <button rel="tooltip"
                      type="submit" 
                      title="Click Here to Sort Subject" 
                      data-toggle="modal" 
                      data-target="#sort_subject_modal" 
                      tabindex="-1" 
                      role="dialog"
                      aria-labelledby="myModalLabel" 
                      class='btn btn-danger btn-raised btn-block btn-flat'>
                      <i class="glyphicon glyphicon-plus-sign"></i>
                      <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Sort Subject
              </button>  
              <?php include('sort_subject_modal.php'); ?>     
             </div>
             <div class="col-xl-3 col-md-3 col-xs-12"></div>
             <div class="col-xl-2 col-md-2 col-xs-12" style="margin-top: -30px">  <!--Search Box-->
              <form action="search_user.php" method="post" class="form-inline" role="form">
                <div class="form-group has-feedback">
                  <input type="text" id="search" name="search" class="form-control" placeholder="Search" required="">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div> 
               </form>
              </div>  <!--/Search Box-->
              <div class="col-xl-1 col-md-1 col-xs-12"></div>
            </div>

            <section class="content" style="margin-top: -20px">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body pad table-responsive">
                    
                    <!-- table -->
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
 
       $level_id  = $_POST['level_id'];
       $semester  = $_POST['semester'];
       $course_id = $_POST['course_id'];
       $major_id  = $_POST['major_id'];

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
                                           ON course_major.major_id=subject.major_id
                                        WHERE level.level_id = '$level_id'
                                          AND subject.semester = '$semester'
                                          AND course.course_id = '$course_id'
                                          AND course_major.major_id = '$major_id'") 
  or die (mysqli_error());
  while($row=mysqli_fetch_array($subject_query))
  {
    $id = $row['subject_id'];
    $level_id = $row['level_id'];
    $course_id = $row['course_id'];
    $major_id = $row['major_id']; 
  
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
                     <!--/ table -->
                     
                    </div>
                  </div>
                </div>
              </div>
            </section>   
      </div>   
  </div>    

<?php
  include("include/footer.php");
  include("dashboard_control_sidebar.php");
  include("include/script.php");
?>
