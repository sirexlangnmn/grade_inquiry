<?php

		include('include/dbcon.php');
		if (isset($_POST['login']))
		{
			session_start();
		
			$username = $_POST['username'];
			$password = $_POST['password'];
		
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		
			$result = mysqli_query($con,$query)or die(mysqli_error());
			$num_row = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
				
			if( $num_row > 0 )
			{
				header('location:dashboard.php');
				$_SESSION['id']=$row['user_id'];
			}

		else
		{ 
			header('location:access_denied.php');
		}
	}

?>

