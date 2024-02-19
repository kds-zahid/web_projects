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
								<level>Name</level>
								<br />
								<input name='name' class='full-width-input' id='fname' type="text" placeholder='Enter your name' required />
								<br />
								<level>Father's Name</level>
								<br />
								<input  name='fathersName' class='full-width-input'   type="text" placeholder="Enter your father's name" required />
								<br />
								<level>Address</level>
								<br />
								<input  name='address' class='full-width-input' id='address' type="text" placeholder='Enter your address' required />
								<br />
								<level>Phone Number</level>
								<br />
								<input  name='phoneNumber' class='full-width-input'  id='fphonenumber' type="number" placeholder='Enter your Phone number' required />
								<br />
								<level>Class</level>
								<br />
								<select name="class" id=""> 
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
								<input class='input-radio' name='gender' value='male' type="radio" required />male <br /><input name='gender' value='female' type="radio" required />female<br /><input name='gender' value='others' type="radio" required />others
								<br />
								<level>Date of Birth</level>
								<br />
								<input  name='birthOfDate' class='full-width-input'  id='fbod' type="date" placeholder='Enter your Birth of Date' required  />
								<br />
								<level>Password</level>
								<br />
								<input  name='password' class='full-width-input'  id='fpassword' type="password"  placeholder='Enter Password' required />
								<br />
								<level>Re-Password</level>
								<br />
								<input name='repassword' class='full-width-input'  id='frepassword' type="password" placeholder='Enter Password again' required  />
								<br />
								<br />
								<input class='full-width-input'  id='input-submit' type="submit" onclick='fs()' value='submit' '/>
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