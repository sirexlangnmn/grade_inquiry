<?php
	
	include('../../include/dbcon.php');

  	if (isset($_POST['submit']))
  	{
		$a = $_POST['firstname'];
		$b = $_POST['lastname'];
		$c = $_POST['middlename'];
		$d = $_POST['gender'];
		$e = $_POST['contact'];
		$f = $_POST['address'];
		$g = $_POST['major_id'];
		$h = $_POST['level_id'];
		$i = $_POST['semester'];
		$j = $_POST['student_status'];

	  
	  $error_students=mysqli_query($con, "SELECT * FROM students WHERE firstname = '$a' AND lastname = '$b' AND middlename = '$c'")
	  or die(mysqli_error());
 	  $count=mysqli_num_rows($error_students);

 		if($count != 1){
	  		mysqli_query($con,"INSERT INTO students (student_no, firstname, lastname, middlename, gender, contact, address, major_id, level_id, semester, student_status, status) VALUES (NOW(), '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', 'Pending')")
 			or die(mysqli_error());	
 		}
 		else { ?>
 			<script type="text/javascript">
                alert('Students Already Exist');
            </script>
  <?php } ?>
  
			<script>
			window.location="../../student.php";
			</script>
<?php
	}
?>
  