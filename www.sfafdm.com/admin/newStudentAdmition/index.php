<html>

	<?php
	include "../../head.php";
	?>
	<body><!---->
		
<div class="fixdisplay" style=' position:fixed; z-index:9999999999999999; height:100%; width:100%; bottom:0; overflow:auto; background:white;'> 
	
	<?php
	include "../../header.php";
	?>

	<?php
	include "../../menu.php";
	?>
<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ibitbogura";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
						if (isset($_GET['id'])){
							$Name=$_GET['id'];
							$sql = "SELECT * FROM newstudentadmition WHERE id='$Name'";
							$data=mysqli_query($conn, $sql);
							$row = $data->fetch_assoc()
?>
					
						<?php } 
						?>
					

	
	<!--form-section start-->		
		<section class="form">
																							                                                                                                                                                                        	<!--created by Zahid hasan-->
<!--form-section start-->
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src='script-admition&loginForm.js'></script>
			<div class="form-cover-main" id='form-cover-main'> 
					
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<input type='button' value="Admition form"/>
							</div>
						<div class="submit-form" id="submit">
	<!--submit-form-->
							<form action="insertNewStudent.php" method='POST'> 								
								<input style='height:0px; width:0px; visibility:hidden;' type="text" name='id' value="<?php echo $row['id']; ?>"  />
								<level>Name</level>
								<br />
								<input name='name'  value="<?php echo $row['name']; ?>"  class='full-width-input' id='fname' type="text" placeholder='Enter your name' required />
								<br />
								<level>Father's Name</level>
								<br />
								<input  name='fathersName'  value="<?php echo $row['fathersName']; ?>"  class='full-width-input'   type="text" placeholder="Enter your father's name" required />
								<br />
								<level>Address</level>
								<br />
								<input  name='address' value="<?php echo $row['address']; ?>" class='full-width-input' id='address' type="text" placeholder='Enter your address' required />
								<br />
								<level>Phone Number</level>
								<br />
								<input  name='phoneNumber' value="<?php echo $row['phoneNumber']; ?>" class='full-width-input'  id='fphonenumber' type="number" placeholder='Enter your Phone number'  required />
								<br />
								<level>Class</level>
								<br />
								<select name="class" value="<?php echo $row['class']; ?>" id=""> 
									<option value="class-1">class-1</option>
									<option value="class-2">class-2</option>
									<option value="class-3">class-3</option>
									<option value="class-4">class-4</option>
									<option value="class-5">class-5</option>
									<option value="class-6">class-6</option>
									<option value="class-7">class-7</option>
									<option value="class-8">class-8</option>
									<option value="class-9">class-9</option>
									<option value="class-11">class-11</option>
									<option value="class-13">class-13</option>
								</select>
								<br />
								<level>Gender</level>
								<br />
								<input class='input-radio' name='gender' value="true" value='male' type="radio" />male <br /><input name='gender' value='female' type="radio" />female<br /><input name='gender' value='others' type="radio" />others
								<br />
								<level>Date of Birth</level>
								<br />
								<input  name='birthOfDate' value="<?php echo $row['birthOfDate']; ?>" class='full-width-input'  id='fbod' type="date" placeholder='Enter your Birth of Date'  required />
								<br />
								<br />
								<input class='full-width-input'  id='input-submit' type="submit" value='update' 'required />
							</form>
						</div>
					
				</div>
			</div>
<!--form-section end-->  
			
		</section>	
	<!--form-section end-->

	<?php
	include "../../footer.php";
	?>
	<?php
	include "../../refresh.php";
	?>

	<?php
	include "../../link.php";
	?>




</div>

</body>
</html> 