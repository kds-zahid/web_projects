<html> 
	<?php 
		include '../../head.php' ;
	?>
	<body>
	<?php 
		include '../../header.php' ;
		include '../../menu.php' ;
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ssdm";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
						if (isset($_GET['id'])){
							$Name=$_GET['id'];
							$sql = "SELECT * FROM student WHERE id='$Name'";
							$data=mysqli_query($conn, $sql);
							$row = $data->fetch_assoc()
						?>					
						<?php 
						} 
						?>
					
<!--
value="<?php echo $row['name']; ?>"
-->
	<section class="content">
			<div>.
			<table class='tblForm' style=' '> 
				<tr> 
					<td style=' font-weight:bold; font-size:33px; text-align:center; text-decoration:underline;	'>update Student</td>					
				</tr>
				<tr> 
					<td> 
						<form action="update2.php" method='POST'> 
							<input style='height:0px; width:0px; visibility:hidden;' type="text" name='id' value="<?php echo $row['id']; ?>"  />
							<lavel>Name:</lavel>
							<br />
							<input name='name' type="text" placeholder='Enter your name' value="<?php echo $row['name']; ?>" />
							<br /> 
							<lavel>Fater's Name:</lavel>
							<br />
							<input name='fathersName' type="text" placeholder='Enter your Fater's Name' value="<?php echo $row['fathersName']; ?>" />
							<br />
							<lavel>Roll:</lavel>
							<br />
							<input name='roll' type="number" placeholder='Enter your Roll' value="<?php echo $row['Roll']; ?>" />
							<br /> 
							<lavel>Address:</lavel>
							<br />
							<input name='address' type="text" placeholder='Enter your Address' value="<?php echo $row['address']; ?>" />
							<br />
							<lavel>Phone Number:</lavel>
							<br />
							<input name='phoneNumber' type="number" placeholder='Enter your name' value="<?php echo $row['phoneNumber']; ?>" />
							<br />
							<lavel> Class:</lavel>
							<br />
							<input name='class' type="number" min='1' max='10' placeholder='Enter your class' value="<?php echo $row['class']; ?>" />
							<br />
							<lavel> Gender:</lavel>
							<br />
							<input style=' height: inherit; width: inherit;' name='gender' value='male' type="radio" />male
							<br />                                                        
							<input style=' height: inherit; width: inherit;' name='gender' value='female' type="radio" />female
							<br />
							<lavel>Date of Birth:</lavel>
							<br />
							<input name='DateOfBirth' type="date" placeholder='Enter your Date of Birth' value="<?php echo $row['DateOfBirth']; ?>" />
							<br />
							<br />
							<input type="submit" value='update'  />
							<br />
						</form>
					</td>
				</tr>
			</table>		
			</div>	
		</section>		
	<?php 
		include '../../footer.php' ;
	?>
	</body>
</html>