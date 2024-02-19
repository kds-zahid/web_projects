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
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "phonenumber";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT id, name, number, address FROM contact ORDER BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				echo "<table style='margin:auto; font-size:33px;' border='1'>  <th>Dial</th><th>Id</th> <th>Name</th> <th>Number</th> <th>address/details</th>";
				while($row = $result->fetch_assoc()) {
					echo "<tr> <td> <a style='color:black; text-decoration:none;' href='tel:$row[number]'>call</a> </td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["address"]."</td></tr>";
					
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