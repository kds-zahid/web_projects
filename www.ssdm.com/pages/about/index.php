<html> 
	<?php 
		include '../../head.php' ;
	?>
	<body>
	<?php 
		include '../../header.php' ;
		include '../../menu.php' ;
	?>
		
		<section class="content">
			<div class="sectionCover">
<!-- left slide start-------------->				
				<div class="sectionContent slideLeft">				
					<div class="slideLeftContent">			
					</div>
				
				</div>

<!-- left slide end-------------->
<!-- middleContent start-------------->
<!--php-start-->
<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ssdm";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM contact ORDER BY id ASC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
					
				echo " </table>";
			} else {
				echo "0 results";
			}

			$conn->close();
			?> 
<!--php-->
				<div class="sectionContent middleContent" style='margin:auto; float:none;'>
					<div class="slideLeftContent"> 
						<div class="contentColomn"> 
							<style type="text/css"> 
								.rangcover{
									 width:90%;
									 height:8px; 
									 margin-top:5px;
									 background:#CCCCCC;
								}
								.range{
									height:100%; 
									background:tomato;									
									float:left;
								}
								.top{
									height:100%;
									/*background:black;*/
									float:left;
								}
								.top img{
									height:0px;
									width:0px;
									float:left;
									margin-left:0px;
								}
								.range_present{
									 width:90%;
									 animation: 2s pressent normal;
								}
								@keyframes pressent{
									0%{width:0%;}
									100%{width:90%;}
								}
								.range_absent{
									 width:10%;
									 animation: 2s absent normal;
								}
								@keyframes absent{
									0%{width:0%;}
									100%{width:10%;}
								}
								.range_passed{
									width:95%;
									 animation: 2s passed normal;
								}
								@keyframes passed{
									0%{width:0%;}
									100%{width:95%;}
								}
								.range_failed{
									width:5%;
									 animation: 2s failed normal;
								}
								@keyframes failed{
									0%{width:0%;}
									100%{width:5%;}
								}
								.persent{
									float:right;
									margin-right:10%;
								}
							</style>
							<h1 id='range'>Range</h1>
							present: <p class='persent' style=''>90%</p>
							<div class='rangcover' style=''>
								<div class='range range_present' style=''></div>
								<div class="top">
									<img style='' src="image/border.png" alt="" />
								</div>
							</div>
							absent: <p class='persent' style=''> 10%</p>
							<div class='rangcover' style=''>
								<div class='range range_absent' style=''></div>
								<div class="top">
									<img style='' src="image/border.png" alt="" />
								</div>
							</div>
							passed: <p class='persent' style=''>95% </p>
							<div class='rangcover' style=''>
								<div class='range range_passed' style=''></div>
								<div class="top">
									<img style='' src="image/border.png" alt="" />
								</div>
							</div>
							failed:<p class='persent' style=''>5%  </p>
							<div class='rangcover' style=''>
								<div class='range range_failed' style=''></div>
								<div class="top">
									<img style='' src="image/border.png" alt="" />
								</div>
							</div>
							<br />
						
						</div>
						<div class="contentColomn"> 
							<h1 id='teacherList'>Teachers List</h1>
							<?php
							while($row = $result->fetch_assoc()) {
							?>
							
							<p>
								<address>
									<?php echo $row["name"]; ?>
									<br />
									<?php echo $row["address"]; ?>
								</address>
							</p>
							<br />
							<?php								
							}
							?>
							
							<br />
						</div>
					</div>
				</div>				
<!-- middleContent end-------------->
<!-- right slide start-------------->
				<div class="sectionContent slideRight" style='width:0px; height:0px;'>						
					<div class="slideLeftContent">					
					</div>					
				</div>				
<!-- right slide end-------------->
			</div>
		</section>
	<?php 
		include '../../footer.php' ;
	?>
	</body>
</html>