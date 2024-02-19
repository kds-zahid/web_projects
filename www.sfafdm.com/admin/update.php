<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ibitbogura";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
						if (isset($_GET['id'])){
							$Name=$_GET['id'];
							$sql = "SELECT * FROM student WHERE id='$Name'";
							$data=mysqli_query($conn, $sql);
							$row = $data->fetch_assoc()
?>
					
						<?php } 
						?>
					

	
		<section class="form">
			<div class="form-cover-main" id='form-cover-main'> 
				<link rel="stylesheet" href="admition&loginForm.css" />	
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<input type='button' value="Save Student"/>
							</div>
						<div class="login-form" id='login'>
	<!--login-form-->																		
							<form action="update2.php" method='POST'> 
								<br />
								<br />
								<input style='height:0px; width:0px; visibility:hidden;' type="text" name='id' value="<?php echo $row['id']; ?>"  />
								<level>Name</level>
								<input type="text" name='name' value="<?php echo $row['name']; ?>"  />
								<br />
								<level>Roll</level>
								<input type="number" name='roll' value="<?php echo $row['roll']; ?>"  />
								<br />
								<br />
								<input id='input-submit' type="submit" name='submit' value='update'/>
							</form>
						</div>
				</div>
			</div>
		</section>	