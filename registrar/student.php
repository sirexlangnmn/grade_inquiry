<?php
 include("include/style.php"); 
 include("include/dbcon.php"); 
 include("session.php"); 
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
      <li>
        <a href="subject.php">
          <i class="fa fa-calendar"></i> <span>Subject</span>
        </a>
      </li>
      <li class="active treeview">
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
            <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-user"></i>Student Table</h4>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-3 col-xs-12" style="margin-top: -10px">
              <button rel="tooltip"
                      type="submit" 
                      title="Click Here to Add Student" 
                      data-toggle="modal" 
                      data-target="#modal_student_insert" 
                      tabindex="-1" 
                      role="dialog"
                      aria-labelledby="myModalLabel" 
                      class='btn btn-danger btn-raised btn-block btn-flat'>
                      <i class="glyphicon glyphicon-plus-sign"></i>
                      <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Add Student
              </button>  
              <?php include('modal_student_insert.php'); ?>     
             </div>
              <div class="col-xl-3 col-md-3 col-xs-12" style="margin-top: -10px">
              <button rel="tooltip"
                      type="submit" 
                      title="Click Here to Sort Subject" 
                      data-toggle="modal" 
                      data-target="#sort_student_modal" 
                      tabindex="-1" 
                      role="dialog"
                      aria-labelledby="myModalLabel" 
                      class='btn btn-success btn-raised btn-block btn-flat'>
                      <i class="glyphicon glyphicon-plus-sign"></i>
                      <i class="glyphicon glyphicon-user" style="margin-right: 10px"></i>Sort Student
              </button>  
              <?php include('sort_student_modal.php'); ?>     
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
                    
                      <?php include("controller/table/table_student.php"); ?>
                     
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
