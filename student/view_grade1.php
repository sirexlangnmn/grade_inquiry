<?php
 include("include/style.php"); 
 include("include/dbcon.php"); 
?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="container">
<div class="wrapper">
  <div class="content-wrapper"> <!-- Content Wrapper. Contains page content -->  <!-- / Main Content Here --> 
    <section class="content-header"></section>  <!-- Main Content Here -->  
      <div class="box-body">
         <div class="alert alert-info alert-dismissible">
            <h4 style="margin-bottom: -2px"><i class="glyphicon glyphicon-user"></i>Student Grade Table</h4>
          </div>

        <?php
          include("table_view_grade1.php");
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
  include("include/script.php");
?>