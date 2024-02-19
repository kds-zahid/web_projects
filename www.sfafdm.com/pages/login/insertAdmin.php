

<?php
if(empty($_POST['name'])|| empty($_POST['password'])){
?>
<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/www.sfafdm.com/pages/login/">
<?php
}
else{
	$name=$_POST['name'];
	$password=$_POST['password'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO admin (id, name, password) VALUES(null,'$name','$password')");
?>
	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
<?php
}
?>