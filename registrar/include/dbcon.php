<?php
 
	$con = mysqli_connect ("localhost","root","","grade_inquiry");

	if (mysqli_connect_error())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>