<?php

	include('../../include/dbcon.php');

	if (isset($_POST['update']))
	{
		$a = $_POST['subject_id'];
		$b = $_POST['code'];
		$c = $_POST['title'];
		$d = $_POST['unit'];	
		$e = $_POST['level_id'];
		$f = $_POST['semester'];
		$g = $_POST['pre_requisites'];
		$h = $_POST['course_id'];
		$i = $_POST['major_id'];		
		
		
		mysqli_query($con, "UPDATE subject SET code='$b', title='$c', unit='$d', level_id='$e', semester='$f', pre_requisites='$g', course_id='$h', major_id='$i' WHERE subject_id = '$a'")
		or die(mysqli_error()); ?>

		<script>
		window.location="../../subject.php";
		</script>
	

<?php
	}
?>