
<?php
if(empty($_POST['name']) || empty($_POST['phnNmbr'])){
	?>
	
<script type="text/javascript"> 
	alert('Submit Unsuccessful!');
	window.history.back();
</script>
	<?php
}
else{
	$name=$_POST['name'];
	$phnNmbr=$_POST['phnNmbr'];
	$address=$_POST['address'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO contact (id, name, number, address) VALUES(null,'$name','$phnNmbr','$address')");

?>
<script type="text/javascript"> 
	alert('Submit Successful!');
	window.history.back();
</script>
<?php
}
?>
