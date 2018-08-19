 <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <img src="images/qcpu2.jpg" class="user-image" alt="User Image" height="60px" width="60px">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="student/login.php"></i>&nbsp;Login</a>

            </li>
            <li><a rel="tooltip"
                   title="Click Here to Register" 
                   data-toggle="modal" 
                   data-target="#confirmAccountModal" 
                   tabindex="-1" 
                   role="dialog"
                   aria-labelledby="myModalLabel">
                   <i class="icon-signin icon-large"></i>&nbsp;Confirm Account</a>
            </li>
          </ul>
        </div>
        
      </div><!-- /.container-fluid -->
    </nav>
 </header>


<?php 
      include('modal_student_confirm.php');
 ?> 




 



            