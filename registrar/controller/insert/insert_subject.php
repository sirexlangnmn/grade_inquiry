<?php
	
	include('../../include/dbcon.php');

  	if (isset($_POST['submit']))
  	{
	  	$a = $_POST['code'];
		$b = $_POST['title'];
		$c = $_POST['unit'];
		$d = $_POST['level_id'];
		$e = $_POST['semester'];
		$f = $_POST['pre_requisites'];
		$g = $_POST['course_id'];
		$h = $_POST['major_id'];

	  
	  	mysqli_query($con, "INSERT INTO subject (code, title, unit, level_id, semester, pre_requisites, course_id, major_id) 
	  	values('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')")
	  	or die(mysqli_error());

	  	header('location:../../subject.php');

  	}
  ?>