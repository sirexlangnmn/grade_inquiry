<?php
	
	include('../../include/dbcon.php');

  	if (isset($_POST['submit']))
  	{
	  	$code  = $_POST['code'];
	  	$title = $_POST['title'];
	  
	  	$error_course=mysqli_query($con, "SELECT * FROM course WHERE code = '$code' OR title = '$title'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_course);

 		if($count != 1)
 		{
 			mysqli_query($con, "INSERT INTO course (code, title) 
	  		values('$code','$title')")
	  		or die(mysqli_error());		
 		}
 		else
 		{ ?>
 			<script type="text/javascript">
                alert('Course Already Exist');
            </script>

  <?php } ?>
			<script>
			window.location="../../course.php";
			</script>
<?php
	}
?>
  