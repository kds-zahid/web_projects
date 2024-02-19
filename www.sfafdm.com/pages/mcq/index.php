<html>

	<?php
	include "../../head.php";
	?>
	<link rel="stylesheet" href="../../style/style.css" />
	<body><!---->
		
<div class="fixdisplay" style=' position:fixed; z-index:9999999999999999; height:100%; width:100%; bottom:0; overflow:auto; background:white;'> 
	

	<!--form-section start-->		
		<section class="form">
				<div style='margin-top:200px;'>	<link rel='stylesheet' href='style.css'>
					
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

			$sql = "SELECT * FROM mcq ORDER BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				$c=1;
				while($row = $result->fetch_assoc()) {
					?>
					<div title='<?php echo $row["question"]; ?>' onclick='document.getElementById("monitor").innerHTML = "<?php echo $row["answer"]; ?>"' class='<?php if($c%2==0){echo 'mcq2';}else{echo 'mcq';}?>'>
					<?php echo $row["question"]; ?>
					</div>
					<?php
					$c++;
				}
				echo " </table>";
			} else {
				echo "0 results";
			}

			$conn->close();
			?> 
				</div>
				<div class='monitorcover'>
					<div id='monitor' class='monitor'>welcome
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


					<a id='back' onclick='history.back()' href="#">back</a>
					<a id='insert' style='' href="insertMcq">📥</a>


</div>


</body>
</html> 