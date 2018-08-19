<?php

	include('../../include/dbcon.php');
  
	if(isset($_POST['update']))
	{
	  	$user_id   = $_POST['id'];
	  	$username  = $_POST['username'];
	  	$firstname = $_POST['firstname'];
	  	$lastname  = $_POST['lastname'];
	  	$user_type = $_POST['user_type'];

	  	mysqli_query($con, "UPDATE users SET username = '$username', firstname = '$firstname', lastname = '$lastname', user_type = '$user_type' WHERE user_id = '$user_id'") or die (mysqli_error()); ?>

		<script>
	    window.location="../../user.php";
		</script>

<?php } ?>