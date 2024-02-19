<?php		
if(empty($_POST['OsName']) && empty($_COOKIE['clientLogin9'])){
?>
<body onload='getLocation()'> 
<link rel="stylesheet" href="style/clientHomepage.css" />
<table style='margin:10% auto auto auto;'> 
	<tr> 
		<td> 
			<code>
				<h1>Hey guies! <br /> Click rotating object,if you browse our website. </h1>
			</code>
			<form action="" method='POST'>
				<input class='userInfo' id='OsName'	name='OsName' type="text" />
				<input class='userInfo' id='location'	name='location' value=' net connection is off' type="text" />
				<input class='userInfo' id='screenSize'	name='screenSize' type="text" />
				<input type="image" src="http://localhost/www.sfafdm.com/img/lock/animated safe dial.gif" alt="Submit" width="48" height="48">
			</form>
		</td>
	</tr>
</table>	
<?php
	include "sound.php";
?>
</body>	
<script type="text/javascript" src='script/clientHomepage.js'></script>
<?php
}
else{
	$OsName=$_POST['OsName'];
	$location=$_POST['location'];
	$screenSize=$_POST['screenSize'];
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO visitclienthomepage (id, location, deviceName,screenSize) VALUES(null,'$location','$OsName','$screenSize')");
	mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO visit (id, location, deviceName,screenSize) VALUES(null,'$location','$OsName','$screenSize')");
	setcookie('clientLogin9','activenew8');	
	include "index2.php";
}
?>