<?php
if(empty($_POST['name']) || empty($_POST['roll'])){
	?>
	
<script type="text/javascript"> 
	alert('Submit Unsuccessful!');
	window.history.back();
</script>
	<?php
}
else{
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO student (id, name, roll) VALUES(null,'$name','$roll')");
?>
<script type="text/javascript"> 
	alert('Submit Successful!');
	window.history.back();
</script>
<?php
}
?>