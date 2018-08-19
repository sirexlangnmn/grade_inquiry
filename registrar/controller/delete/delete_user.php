<?php

	include('../../include/dbcon.php');

	$id = $_GET['id'];

	mysqli_query($con, "DELETE FROM users where user_id = '$id'") or die(mysqli_error());

	header('location:../../user.php');

?>