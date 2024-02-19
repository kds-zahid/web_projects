<?php
if(empty($_POST['gender'])){
?>
<script type="text/javascript"> 
	alert('Insert Unsuccessfull!');
	history.back();
</script>
<?php
}
else{
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ibitbogura";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	
	
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$fathersName=$_POST['fathersName'];
	$address=$_POST['address'];
	$phoneNumber=$_POST['phoneNumber'];
	$class=$_POST['class'];
	$gender=$_POST['gender'];
	$birthOfDate=$_POST['birthOfDate'];
	
	
	
				$sql = "UPDATE newstudentadmition SET name='$name', fathersName='$fathersName', address='$address', phoneNumber='$phoneNumber', class='$class', gender='$gender', birthOfDate='$birthOfDate', WHERE id='$id';";
				mysqli_query($conn, $sql);
				
				?>
				
	
<script type="text/javascript"> 
	alert('update Successfull!');
	window.close();
</script>
<?php
}
?>