<html> 
	<?php 
		include '../../head.php' ;
	?>
	<body>
	<?php 
		include '../../header.php' ;
		include '../../menu.php' ;

		if(empty($_POST['name']) || empty($_POST['roll'])){
		}
		else{
			$name=$_POST['name'];
			$roll=$_POST['roll'];
			$fathersName=$_POST['fathersName'];
			$address=$_POST['address'];
			$phoneNumber=$_POST['phoneNumber'];
			$class=$_POST['class'];
			$gender=$_POST['gender'];
			$DateOfBirth=$_POST['DateOfBirth'];
			mysqli_query(mysqli_connect('localhost','root','','ssdm'),"INSERT INTO student (id, name, Roll,fathersName,address,phoneNumber,class,gender,DateOfBirth) VALUES(null,'$name','$roll','$fathersName','$address','$phoneNumber','$class','$gender','$DateOfBirth')");
			?>
				<script type="text/javascript"> alert('Submit successfull.');</script>
			<?php
		}
	?>
		
		
		<section class="content">
			<div>.
			<table class='tblForm' style=' '> 
				<tr> 
					<td style=' font-weight:bold; font-size:33px; text-align:center; text-decoration:underline;	'>Save Student</td>					
				</tr>
				<tr> 
					<td> 
						<form action="" method='POST'> 
							<lavel>Name:</lavel>
							<br />
							<input name='name' type="text" placeholder='Enter your name' />
							<br /> 
							<lavel>Fater's Name:</lavel>
							<br />
							<input name='fathersName' type="text" placeholder="Enter your Fater's Name" />
							<br />
							<lavel>Roll:</lavel>
							<br />
							<input name='roll' type="number" placeholder='Enter your Roll' />
							<br /> 
							<lavel>Address:</lavel>
							<br />
							<input name='address' type="text" placeholder='Enter your Address' />
							<br />
							<lavel>Phone Number:</lavel>
							<br />
							<input name='phoneNumber' type="number" placeholder='Enter your Phone Number' />
							<br />
							<lavel> Class:</lavel>
							<br />
							<input name='class' type="number" min='1' max='10' placeholder='Enter your class' />
							<br />
							<lavel> Gender:</lavel>
							<br />
							<input style=' height: inherit; width: inherit;' name='gender' value='male' type="radio" />male
							<br />                                                        
							<input style=' height: inherit; width: inherit;' name='gender' value='female' type="radio" />female
							<br />
							<lavel>Date of Birth:</lavel>
							<br />
							<input name='DateOfBirth' type="date" placeholder='Enter your Date of Birth' />
							<br />
							<br />
							<input type="submit" value='submit' />
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