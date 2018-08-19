<?php 
	
	include('../../include/dbcon.php');

	if (isset($_POST['update']))
	{
		$student_id     = $_POST['student_id'];
		$student_no     = $_POST['student_no'];
		$lastname       = $_POST['lastname'];
		$firstname      = $_POST['firstname'];
		$middlename     = $_POST['middlename'];
		$password       = $_POST['password'];
		$gender         = $_POST['gender'];
		$contact        = $_POST['contact'];
		$address        = $_POST['address'];
		$major_id       = $_POST['major_id'];
	    $level_id       = $_POST['level_id'];
		$semester       = $_POST['semester'];
		$student_status = $_POST['student_status'];

		mysqli_query($con, "UPDATE students SET 
								  student_no       = '$student_no', 
								  lastname         = '$lastname',  
								  firstname        = '$firstname', 
								  middlename       = '$middlename', 
								  password         = '$password', 
								  gender           = '$gender', 
								  contact          = '$contact', 
								  address          = '$address',   								  
								  major_id         = '$major_id', 
								  level_id         = '$level_id',  
								  semester         = '$semester', 
								  student_status   = '$student_status'
								  WHERE student_id = '$student_id'")
								  or die(mysqli_error()); ?>
										
								
		<script>
			window.location="../../student.php";
		</script>

<?php
	}
?>