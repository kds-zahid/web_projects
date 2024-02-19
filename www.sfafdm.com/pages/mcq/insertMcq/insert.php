
<?php
if(empty($_POST['question']) || empty($_POST['answer']) ){
?>
<script type="text/javascript">
	alert('INSERT Unsuccessfull!');
</script>
	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../">
<?php
}
else{
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO mcq (id, question, answer) VALUES(null,'$question','$answer')");
?>
<script type="text/javascript">
	alert('INSERT Successfull!');
</script>	
	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../">
<?php
}
?>