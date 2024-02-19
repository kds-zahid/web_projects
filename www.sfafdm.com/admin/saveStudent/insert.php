<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../saveStudent">
<!--2 inset-->
<?php
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO student (id, name, roll) VALUES(null,'$name','$roll')");

?>