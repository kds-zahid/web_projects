<html>

	<?php
	include "../../head.php";
	?>
	<style type="text/css"> 
		
section.form td,th{
border:10px solid green;
    border-image: url(border.png) 20 round;
}
	</style>
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
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ibitbogura";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT id, name, roll FROM student ORDER BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				echo "<table style='margin:auto; text-align:center; font-size:33px;' >  <th>Id</th> <th>Name</th> <th>Roll</th>";
				while($row = $result->fetch_assoc()) {
					echo "<tr> <td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["roll"]."</td></tr>";
					
				}
				echo " </table>";
			} else {
				echo "0 results";
			}

			$conn->close();
			?> 
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