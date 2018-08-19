
<?php 
include("include/style.php"); 
include('session.php');
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

    <form action="#" method="get" class="sidebar-form"> <!-- search form -->
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> <!-- /.search form -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
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

  <div class="content-wrapper"> 
    <?php include("dashboard_main_content.php"); ?>
  </div>
</div>

<?php
  include("include/footer.php");
  include("dashboard_control_sidebar.php");
  include("include/script.php");
?>


  


