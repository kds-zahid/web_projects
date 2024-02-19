<html>

	<?php
	include "../head.php";
	?>
	<style type="text/css"> 
		
section.form td,th{
border:10px solid green;
    border-image: url(border.png) 20 round;
}
	</style>
	<body><!---->
<div class="fixdisplay" style=' position:fixed; z-index:9999999999999999; height:100%; width:100%; bottom:0; overflow:auto; background:white;'> 
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

			$sql = "SELECT * FROM contact ORDER BY id DESC";
			$result = $conn->query($sql);
			if (isset($_GET['id'])){
				$delete=$_GET['id'];
				$sql = "DELETE FROM contact WHERE id = $delete";
				mysqli_query($conn, $sql);
				?>
					<script type="text/javascript"> 
						window.history.back();
					</script>
				<?php
			}
			if ($result->num_rows > 0) {
				// output data of each row
				?>
				<table style='margin:auto; font-size:33px;' >
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>number</th>
						<th>address</th>
						<th colspan='2'>action</th>
					</tr>
				
				<?php
				while($row = $result->fetch_assoc()) {
					?>
					<tr> 
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td> <a style='text-decoration:none; color:red;'  href='contactList-Admin.php?id=<?php echo $row["id"];?>'  >Delete</a></td>
						<td> <a style='text-decoration:none; color:red;' target="_blank" href='updateContact.php?id=<?php echo $row["id"];?>'  >Edit</a></td>
					</tr>;
				<?php	
				}
				?> 
				</table> <br /><br /><br />
				<?php 
			} else {
				echo "0 results";
			}

			$conn->close();
			?>  
		</section>	
	<!--form-section end-->

</div>


</body>
</html> 