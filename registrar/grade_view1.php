<?php
 include("include/style.php"); 
 include("include/dbcon.php");
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

        <?php
          include("controller/table/table_grade_view1.php");
        ?>

          <!-- grading system -->

           <div class="alert alert-info alert-dismissible">
            <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-file"></i>Grading System</h4>
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-4 col-xs-12">
              <div class="box"><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Grade</th>
                      <th>Value</th>
                      <th>Remarks</th>
                    </tr>
                    <tr>
                      <td>1.00</td>
                      <td>98.00 - 100.00%</td>
                      <td><span class="badge bg-green-active">Excellent</span></td>
                    </tr>
                    <tr>
                      <td>1.25</td>
                      <td>95.00 - 97.00%</td>
                      <td><span class="badge bg-green">Very Good</span></td>
                    </tr>
                    <tr>
                      <td>1.50</td>
                      <td>92.00 - 94.00%</td>
                      <td><span class="badge bg-blue-active">Very Good</span></td>
                    </tr>
                    <tr>
                      <td>1.75</td>
                      <td> 89.00 - 91.00%</td>
                      <td><span class="badge bg-blue">Very Good</span></td>
                    </tr>
                    <tr>
                      <td>2.00</td>
                      <td>89.00 - 88.00%</td>
                      <td><span class="badge bg-aqua-active">Satisfactory</span></td>
                    </tr>
                  </table>
                </div> <!-- /.box-body -->
              </div>
            </div>

            <div class="col-xl-4 col-md-4 col-xs-12">
              <div class="box"><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Grade</th>
                      <th>Value</th>
                      <th>Remarks</th>
                    </tr>
                    <tr>
                      <td>2.25</td>
                      <td>83.00 - 85.00%</td>
                      <td><span class="badge bg-aqua">Satisfactory</span></td>
                    </tr>
                    <tr>
                      <td>2.50</td>
                      <td>80.00 - 82.00%</td>
                      <td><span class="badge bg-aqua">Satisfactory</span></td>
                    </tr>
                    <tr>
                      <td>2.75</td>
                      <td>77.00 - 79.00%</td>
                      <td><span class="badge bg-yellow">Fair</span></td>
                    </tr>
                    <tr>
                      <td>3.00</td>
                      <td>75.00 - 76.00%</td>
                      <td><span class="badge bg-yellow">Fair</span></td>
                    </tr>
                    <tr>
                      <td>5.00</td>
                      <td>0 - 74.00%</td>
                      <td><span class="badge bg-red">Failed</span></td>
                    </tr>
                  </table>
                </div> <!-- /.box-body -->
              </div>
            </div>

            <div class="col-xl-4 col-md-4 col-xs-12">
              <div class="box"><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Grade</th>
                      <th>Value</th>
                      <th>Remarks</th>
                    </tr>
                    <tr>
                      <td>INC</td>
                      <td>0 - 0%</td>
                      <td><span class="badge bg-red">Incomplete</span></td>
                    </tr>
                    <tr>
                      <td>UD</td>
                      <td>0 - 0%</td>
                      <td><span class="badge bg-red">Unofficially Dropped</span></td>
                    </tr>
                    <tr>
                      <td>DRP</td>
                      <td>0 - 0%</td>
                      <td><span class="badge bg-red">Officially Dropped</span></td>
                    </tr>
                    <tr>
                      <td>PASS</td>
                      <td></td>
                      <td><span class="badge bg-green">Passed</span></td>
                    </tr>
                    <tr>
                      <td>TRF</td>
                      <td></td>
                      <td><span class="badge bg-green">Transfer</span></td>
                    </tr>
                  </table>
                </div> <!-- /.box-body -->
              </div>
            </div>

      </div>
          <!-- /.grading system -->


    </div>   
  </div> 
</div> 


<?php
  include("include/footer.php");
  include("dashboard_control_sidebar.php");
  include("include/script.php");
?>