
<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../insertContact">

<!--2 inset-->
<?php
echo "hello";
	$name=$_POST['name'];
	$phnNmbr=$_POST['phnNmbr'];
	$address=$_POST['address'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO contact (id, name, number, address) VALUES(null,'$name','$phnNmbr','$address')");

?>