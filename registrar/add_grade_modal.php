 <!--Sort Grade Modal-->
<div class="modal fade" id="add_grade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="alert alert-info alert-dismissible">
          <h4 style="margin-bottom: -2px"><i class="icon fa fa-users"></i>
            <strong style="margin-right: 10px">Sort the Subject</strong>
          </h4>
        </div>
      </div>
      
      <?php
         $id = $_GET ['id']; 
      $student_query = mysqli_query($con, "SELECT students.student_id,
                                                  students.semester,
                                                  students.major_id,                                              
                                                  students.level_id,
											  												  course_major.major_id,
											      											course_major.course_id
                                             FROM students
                                             JOIN course_major
                                               ON students.major_id = course_major.major_id
                                            WHERE students.student_id = '$id'") 
    or die(mysql_error());
    $row = mysqli_fetch_array($student_query);
      $id         = $row['student_id'];
    	$level_id   = $row ['level_id']; 
    	$semester   = $row ['semester']; 
    	$major_id   = $row ['major_id'];
    	$course_id  = $row ['course_id'];
			?>
      <div class="modal-body"> 
        <form method="post">
        	<input type="hidden" name="student_id" value="<?php echo $id; ?>">
        	<input type="hidden" name="level_id" value="<?php echo $level_id ?>">
					<input type="hidden" name="semester" value="<?php echo $semester ?>">
        		<?php   
								$a=0;               	
                $subject_query = mysqli_query($con, "SELECT *
            																					 FROM subject
                  																		WHERE level_id = '$level_id'
                  																		  AND semester = '$semester'
                  																		  AND course_id = '$course_id'")
                or die(mysqli_error());
                while($subject_row = mysqli_fetch_array($subject_query)) { 
                $a++;
            ?>
          <div class="row">
             <div class="col-md-9 col-xs-9" style="margin-top: -40px">
              <div class="form-group has-feedback">
               <label>Subject</label>
                 <option></option>
                    <input type="hidden" class="form-control" name="subject_id<?php echo $a; ?>" 
                    value="<?php echo $subject_row['subject_id']; ?>">

                    <input type="text" class="form-control" 
                    value="<?php echo $subject_row['code'] ." ".$subject_row['title']; ?>" disabled>


                <span class="glyphicon glyphicon-book form-control-feedback" style="margin-top: 16px"></span>
              </div> 
            </div>
            <div class="col-md-3 col-xs-3" style="margin-top: -24px">
              <div class="form-group has-feedback">
                <label>Gen. Ave.</label>
                <select class="form-control" name="gen_ave<?php echo $a; ?>">
                  <option>1.00</option>
									  <option>1.25</option>
									  <option>1.50</option>
									  <option>1.75</option>
									  <option>2.00</option>
									  <option>2.25</option>
									  <option>2.50</option>
									  <option>2.75</option>
									  <option>3.00</option>
									  <option>5.00</option>
									  <option>0</option>
									  <option>DRP</option>
									  <option>INC</option>
									  <option>PASS</option>
									</select>
									
									  <input type="hidden" name="test" value="<?php echo $a; ?>">
									<span class="glyphicon glyphicon-book form-control-feedback"></span>
              </div>  
            </div>

          </div>
          <?php } ?>
          <div class="modal-footer">
            <button type="button" class='btn btn-danger btn-raised btn-block btn-flat pull-left' data-dismiss="modal">
              <i class="glyphicon glyphicon-remove-sign" style="margin-right: 10px"></i>Close
            </button>
            <button type="submit" name="submit" id="submit" class='btn btn-success btn-raised btn-block btn-flat pull-right'>
              <i class="glyphicon glyphicon-send" style="margin-right: 10px"></i>Submit
            </button>
          </div>

        </form>
      </div>


	<?php
			if (isset($_POST['submit']))
			{
				$test = $_POST['test'];
				for($b = 1; $b <= $test; $b++)
			{
			
				$student_id=$_POST['student_id'];
					
				$test1 = "subject_id".$b;
				$test2 = "gen_ave".$b;
				
				$subject_id = $_POST[$test1];
				$gen_ave    = $_POST[$test2];
	?>
	

	<?php
		$level_id=$_POST['level_id'];
		$semester=$_POST['semester'];
		
		
		$subject_query  = mysqli_query($con, "SELECT * FROM subject WHERE subject_id = '$subject_id' ")
		or die(mysqli_error());
		$subject_row = mysqli_fetch_array($subject_query);
		
		
		$query = mysqli_query($con, "SELECT * FROM  grade WHERE  subject_id = '$subject_id' AND student_id = '$student_id'")
		or die(mysqli_error());
		$count = mysqli_num_rows($query);
	
		if ($count > 0){ ?>
		<script>
		alert('Subject Already Added');
		</script>
	<?php }

	else{
	
	 if ($gen_ave  == '1.00'){ 
	 mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Excellent')")or die(mysqli_error()); 
	 } else if($gen_ave == '1.25'){
	 mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Very Good')")or die(mysqli_error());
	 }else if($gen_ave == '1.50'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Very Good')")or die(mysqli_error());
	 }else if($gen_ave == '1.75'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Very Good')")or die(mysqli_error());
	 } else if($gen_ave ==  '2.00'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Satisfactory')")or die(mysqli_error());	 
	 } else if($gen_ave == '2.25'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Satisfactory')")or die(mysqli_error());
	 } else if($gen_ave == '2.50'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Satisfactory')")or die(mysqli_error());
	 } else if($gen_ave == '2.75'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Fair')")or die(mysqli_error());
	 }else if($gen_ave == '3.00'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Fair')")or die(mysqli_error());
	 }else if($gen_ave == '5.00'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Failed')")or die(mysqli_error());
	 }else if($gen_ave == '0'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Failed')")or die(mysqli_error());
	 }else if($gen_ave == 'INC'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Incomplete')")or die(mysqli_error());
	 }else if($gen_ave == 'DRP'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','Officially Dropped')")or die(mysqli_error());
	 }else if($gen_ave == 'PASS'){
	mysqli_query($con, "INSERT INTO grade (student_id,subject_id,level_id,semester,gen_ave,remarks) VALUES('$student_id','$subject_id','$level_id','$semester','$gen_ave','PASS')")or die(mysqli_error());
	 } 
	
		 
		

	}
	
	
	}
	
	 
	}
	?>







    </div>
  </div>
</div>