<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		
	</head>

	<body>
	
	<?php
	include "../../../../../head.php";
	?>
	
	<?php
	include "../../../../../menu.php";
	?>

			<div id="particles-js"></div>
		
			<ul class="cb-slideshow">
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	        </ul>

			<div class="container-fluid">
				<div class="row cb-slideshow-text-container ">
					<div class= "tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section">
                    <form action="../../../insert.php" method="POST" class="subscribe-form">
               	    	<div  class="row form-section">

							<div style='background-color:black; border: 3px solid white; padding:25px; border-radius:15px;'  class="col-md-7 col-sm-7 col-xs-7">
									<level style=' text-decoration:underline; font-weight:bold; text-align:center;'>Save Student</level> <br />
									<level>Name</level> <br />
			                      <input name="name" type="text" class="form-control" placeholder="Your name..." required/>
								  <level>Roll</level>
								  <br />
			                      <input name="roll" type="number" class="form-control" placeholder="Your roll..." required/>	
								  <button type="submit" name='submit' class="tm-btn-subscribe">save student</button>
				  			</div>						
						</div>
                    </form>
                    

					</div>
				</div>
				<div class="footer-link">
					<p>
					<!--
					Copyright © 2019 sfafdm - Design by: <a rel="nofollow" href="#" target="_parent">Zahid Hasan</a>
					-->
					</p>
				</div>
				
			</div>	
	

	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>