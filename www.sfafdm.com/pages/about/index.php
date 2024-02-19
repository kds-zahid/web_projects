<html>

	<?php
	include "../../head.php";
	?>
	<body  onload='getLocation() '><!---->

</body>
</html> 
<div class="fixdisplay" style=' position:fixed; z-index:9999999999999999; height:100%; width:100%; bottom:0; overflow:auto; background:white;'> 
	
	<?php
	include "../../header.php";
	?>

	<?php
	include "../../menuForAbout.php";
	?>

	<!--form-section start-->		
		<section class="form"><link rel="stylesheet" href="style/style-mainContent.css" />	
	<?php
	include "../../section.php";
	?>
				<div class='monitorcover'><link rel='stylesheet' href='style.css'>
					<div id='monitor' class='monitor'>
						welcome <br /> 
						<?php
							include "../../visitorNumber.php";
						?>
						<br />
						<br />
						<p style='text-decoration:underline;'> see about you </p>
						<script type="text/javascript">
							var OSName="Unknown OS";
							if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
							if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
							if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
							if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux"; 
							document.write('Screen height= '+ screen.height);
							document.write('<br /> Screen width= '+ screen.width);
							document.write('<br />');
							document.write('Your Operating System= '+OSName);
							document.write('<br /> Browser language= '+ navigator.language);
							document.write('<br />');
							if(navigator.onLine){document.write('you are online');}else{document.write('you are offline');}
							//document.write('<br /> url= '+ window.location);
							//location
						</script>					
							<p id='locationLink'> view location (location is off)</p>
							<p id='Satellite' >   Satellite (location is off)</p>
						<script type="text/javascript">
							document.write('<br /> <br /> version= '+ navigator.appVersion);
														
							var latitude = document.getElementById("latitude");
							var longitude = document.getElementById("longitude");
							function getLocation() {
									navigator.geolocation.getCurrentPosition(showPosition, showError);
								
							}

							function showPosition(position) {
							var latitudee=position.coords.latitude;
							var longitudee=position.coords.longitude;
							var locationLink='https://www.google.com/maps/@'+latitudee+','+longitudee+',8z';
							var Satellite='https://www.google.com/maps/@'+latitudee+','+longitudee+',367156m/data=!3m1!1e3';
							document.getElementById("locationLink").innerHTML=' <a id="locationLink" target="blank" href="'+locationLink+'">view location </a>';
							document.getElementById("Satellite").innerHTML=' <a id="locationLink" target="blank" href="'+Satellite+'"> view Satellite location </a>';
							}
							function showError(error) {
							longitude.innerHTML='error';
							latitude.innerHTML='error';
							}
						</script>
						<style type="text/css"> 
							a#locationLink{
								text-decoration:none;								
								text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
								}
						</style>
					</div>
				</div>
		</section>	
	<!--form-section end-->

	<?php
	include "../../footer.php";
	include "../../animated-dove.php";
	
	?>
	<?php
	include "../../refresh.php";
	?>

	<?php
	include "../../link.php";
	?>




</div>