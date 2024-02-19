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
	<?php
	include "../../section.php";
	?>
			<div class="form-cover-main" id='form-cover-main'> 
				<link rel="stylesheet" href="admition&loginForm.css" />	
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<input type='button' value="Save Number"/>
							</div>
						<div class="login-form" id='login'>
	<!--login-form-->																		
							<form action="insertNmbr.php" method='POST'> 
								<br />
								<br />
								<level>Name</level>
								<input type="text" name='name' placeholder='Enter your name'  />
								<br />
								<level>Phone Number</level>
								<input type="number" name='phnNmbr' placeholder='Enter your Phone Number'  />
								<br />
								<level>Address</level>
								<input type="text" name='address' placeholder='Enter your address'  />
								<br />
								<br />
								<input id='input-submit' type="submit" name='submit' value='submit'/>
							</form>
						</div>
				</div>
			</div>
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