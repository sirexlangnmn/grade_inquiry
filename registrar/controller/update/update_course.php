<?php

	include('../../include/dbcon.php');

	if (isset($_POST['update']))
	{
		$course_id = $_POST['id'];
		$code      = $_POST['code'];
		$title     = $_POST['title'];

		mysqli_query($con, "UPDATE course set code = '$code', title = '$title' where course_id = '$course_id'")
		or die(mysqli_error()); ?>
		
		<script>
		window.location="../../course.php";
		</script>

<?php
	}
?>