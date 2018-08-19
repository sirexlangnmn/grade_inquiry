<?php
	
	include('../../include/dbcon.php');

  	if (isset($_POST['submit']))
  	{
	  	$username  = $_POST['username'];
	  	$password  = $_POST['password'];
	  	$firstname = $_POST['firstname'];
	  	$lastname  = $_POST['lastname'];
	  	$user_type = $_POST['user_type'];

	  	$error_course=mysqli_query($con, "SELECT * FROM users WHERE username = '$username' OR firstname = '$firstname' AND lastname = '$lastname'")
	  	or die(mysqli_error());
 		$count=mysqli_num_rows($error_course);
	  
		if($count != 1)
 		{
	  		mysqli_query($con, "INSERT INTO users (username,password,firstname,lastname,user_type) 
	  		values('$username','$password','$firstname','$lastname','$user_type')")
	  		or die(mysqli_error());
 		}
 		else
 		{ ?>
 			<script type="text/javascript">
                alert('Users Already Exist');
            </script>

  <?php } ?>
			<script>
			window.location="../../user.php";
			</script>
<?php
	}
?>