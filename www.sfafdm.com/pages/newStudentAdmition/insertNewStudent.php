<?php
if(empty($_POST['name'])){
?>
<script type="text/javascript"> 
	alert('Insert Unsuccessfull!');
	history.back();
</script>
<?php
}
else{
	if($_POST['password']==$_POST['repassword'])
	{
		$name=$_POST['name'];
		$fathersName=$_POST['fathersName'];
		$address=$_POST['address'];
		$phoneNumber=$_POST['phoneNumber'];
		$class=$_POST['class'];
		$gender=$_POST['gender'];
		$birthOfDate=$_POST['birthOfDate'];
		$password=$_POST['password'];
		$password=$_POST['repassword'];
		mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO newstudentadmition (id, name, fathersName, address, phoneNumber, class, gender, birthOfDate, password) VALUES(null,'$name','$fathersName','$address','$phoneNumber','$class','$gender','$birthOfDate','$password')");
	?>
	<script type="text/javascript"> 
		alert('Insert Successfull!');
		history.back();
	</script>
	<?php
	}else{
		?>			
			<script type="text/javascript"> 
				alert('Insert Unsuccessfull!');
				history.back();
			</script>
		<?php
	}
}
?>