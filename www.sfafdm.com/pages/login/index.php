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
				<script type="text/javascript" src="script-admition&loginForm.js"></script><link rel="stylesheet" href="admition&loginForm.css" />	
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<div class="left"><input type='button' value="login" onclick="login()"/></div>
								<div class="right"><input type='button' value="submit" onclick='submit()'	/></div>
							</div>
						<div class="login-form" id='login'>
	<!--login-form-->																		                                                                                                                    	<!--created by Zahid hasan-->
							<form action="../../admin/index.php" method='POST'> 
								<br />
								<br />
								<level>Name</level>
								<input type="text"  name='name' placeholder='Enter your name' required/>
								<br />
								<level>password</level>
								<input type="password"  name='password' placeholder='Enter your password'  required/>
								<br />
								<br />
								<input id='input-submit' type="submit" name='submit' value='Login'/>
							</form>
						</div>
						<div class="submit-form" id="submit">
	<!--submit-form-->
							<form action="insertAdmin.php" method='POST'> 
								<level>Name</level>
								<br />
								<input name='name' id='fname' type="text" placeholder='Enter your name' required/>
								<br />
								<level>Password</level>
								<br />
								<input name='password' id='fpassword' type="password"  placeholder='Enter Password'  required/>
								<br />
								<level>Re-password</level>
								<br />
								<input name='re-password' id='frepassword' type="password"  placeholder='Enter Password'  required/>
								<br />
								<br />
								<input onclick='checkSubmit()' id='input-submit' type="submit" value='Submit' />
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