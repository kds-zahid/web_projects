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
			<div>.
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

			$sql = "SELECT * FROM student ORDER BY id DESC";
			$result = $conn->query($sql);
			if (isset($_GET['id'])){
				$delete=$_GET['id'];
				$sql = "DELETE FROM student WHERE id = $delete";
				mysqli_query($conn, $sql);
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
			}
			if ($result->num_rows > 0) {
				// output data of each row
				?>
				<table class='tblForm' border='1' style=' width:80%; text-align:center; margin:auto; font-size:33px;' >
					<tr > 
						<td colspan='11' style=' font-weight:bold; font-size:33px; text-align:center; text-decoration:underline;	'>			Student List
						</td>					
					</tr> 
					<tr>
						<th>Roll</th>
						<th>Name</th>
						<th>Fater's name</th>
						<th>address</th>
						<th>Phone number</th>
						<th>Class</th>
						<th>Gender</th>
						<th>Date of Birth</th>
						<th colspan='2'>action</th>
					</tr>
				
				<?php
				while($row = $result->fetch_assoc()) {
					?>
					<tr> 
						<td><?php echo $row['Roll']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['fathersName']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['phoneNumber']; ?></td>
						<td><?php echo $row['class']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['DateOfBirth']; ?></td>
						<td> <a style='text-decoration:none; color:red;'  href='index.php?id=<?php echo $row["id"];?>'  >Delete</a></td>
						<td> <a style='text-decoration:none; color:red;'  href='update.php?id=<?php echo $row["id"];?>'  >Edit</a></td>
					</tr>;
				<?php	
				}
				?> 
				</table> <br /><br /><br />
				<?php 
			} else {
				echo "Blank";
			}

			$conn->close();
			?>  
		</table>
			</div>	
		</section>
	<?php 
		include '../../footer.php' ;
	?>
	</body>
</html>