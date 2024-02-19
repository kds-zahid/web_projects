
	<style type="text/css"> 
		
section.form td,th{
border:10px solid green;
    border-image: url(border.png) 20 round;
}
section.form h1.adminHead{
	text-align:center;
	text-decoration:underline;
	color:red;
}
	</style>
			<h1 class='adminHead' >Welcome to admin pannel</h1>
<?php
			
			
			
			
			if(empty($_POST['name'])|| empty($_POST['password'])){
				echo 'Please fill up all input';
?>
<script type="text/javascript">
	alert('Please fill up all input');
</script>
<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/www.sfafdm.com/pages/login">
<?php
			}
			else{
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
					$name=$_POST['name'];
					$password=$_POST['password'];
					$sql = "SELECT * FROM admin WHERE name='$name' AND password='$password'";	
					$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
?>
					
						<table style=' text-align:center; margin:auto; font-size:33px;'>
							
<?php
						$row = $result->fetch_assoc();
?>
							
							<tr> 
								<td>Admin Name:</td><td><?php echo $row['name']; ?></td>
							</tr>
							<tr> 
								<td>Activation:</td><td><?php if(empty($row['activeCode'])){echo 'Deactive';} else{ echo 'Active';} ?></td>
							</tr>
							
						
						</table>
<?php
						if(empty($row['activeCode'])){
							
				$conn->close();
?>
<script type="text/javascript"> 
	alert('সাইন আপ করলেই এডমিন হওয়া যায় না। অনুমতি নিতে হবে।');
</script>
<p style='text-align:center;'>

<?php	echo '  <br /> সাইন আপ করলেই এডমিন হওয়া যায় না। অনুমতি নিতে হবে।';					
						}else{
?>
</p>		
<link rel="stylesheet" href="style/style_admin.css" />

	<div id='studentList' class="admin_block"> 
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
			if (isset($_GET['id'])){
				$delete=$_GET['id'];
				$sql = "DELETE FROM student WHERE id = $delete";
				mysqli_query($conn, $sql);
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=studentList-Admin.php">';
			}
			if ($result->num_rows > 0) {
				// output data of each row
				?>
				<h1 class='adminHead' >Student List</h1>
				<table style=' text-align:center; margin:auto; font-size:33px;' >
					<tr>
						<th>Name</th>
						<th>Roll</th>
						<th colspan='2'>action</th>
					</tr>
				
				<?php
				while($row = $result->fetch_assoc()) {
					?>
					<tr> 
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['roll']; ?></td>
						<td> <a style='text-decoration:none; color:red;'  href='studentList-Admin.php?id=<?php echo $row["id"];?>'  >Delete</a></td>
						<td> <a style='text-decoration:none; color:red;' target="_blank" href='update.php?id=<?php echo $row["id"];?>'  >Edit</a></td>
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
	<div id='studentList' class="admin_block"> 
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

			$sql = "SELECT * FROM newstudentadmition ORDER BY class ASC";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				?>
				<h1 id='Admition' class='adminHead' >Admition List</h1>
				<table style=' text-align:center; margin:auto; font-size:33px;' >
					<tr>
						<th>Name</th>
						<th>Class</th>
						<th>Fathers Name</th>
						<th>Address</th>
						<th>Phone Number</th>
						<th>Gender</th>
						<th>Birth Of Date</th>
						<th colspan='2'>action</th>
					</tr>
				
				<?php
				while($row = $result->fetch_assoc()) {
					?>
					<tr> 
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['class']; ?></td>
						<td><?php echo $row['fathersName']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['phoneNumber']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['birthOfDate']; ?></td>
						<td> <a style='text-decoration:none; color:red;'  href='studentList-Admin-admition.php?id=<?php echo $row["id"];?>'  >Delete</a></td>
						<td> <a style='text-decoration:none; color:red;' target="_blank" href='newStudentAdmition/index.php?id=<?php echo $row["id"];?>'  >Edit</a></td>
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
	<div id='SaveStudent' class="admin_block"> 		
			<h1 class='adminHead' >Save Student</h1>
			<div class="form-cover-main" id='form-cover-main'> 
				<link rel="stylesheet" href="admition&loginForm.css" />	
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<input type='button' value="Save Student"/>
							</div>
						<div class="login-form" id='login'>
	<!--login-form-->																		
							<form action="insert.php" method='POST'> 
								<br />
								<br />
								<level>Name</level>
								<input type="text" name='name' placeholder='Enter your name' required  />
								<br />
								<level>Roll</level>
								<input type="number" name='roll' placeholder='Enter your roll' required  />
								<br />
								<br />
								<input id='input-submit' type="submit" name='submit' value='submit'/>
							</form>
						</div>
				</div>
			</div>
	</div>
	<div id='SaveNumber' class="admin_block"> 
			<h1 class='adminHead' >Save Phone Number</h1>
			<div class="form-cover-main" id='form-cover-main'> 
				<link rel="stylesheet" href="admition&loginForm.css" />	
				<div class="form-cover">
	<!--form-cover-->
	<!--form-menu-->
	<!--form-botton-->
							<div class="form-option"> 
								<input type='button' value="Save Phone Number"/>
							</div>
						<div class="login-form" id='login'>
	<!--login-form-->																		
							<form action="insertNmbr.php" method='POST'> 
								<br />
								<br />
								<level>Name</level>
								<input type="text" name='name' placeholder='Enter your name' required  />
								<br />
								<level>Phone Number</level>
								<input type="number" name='phnNmbr' placeholder='Enter your Phone Number'  required />
								<br />
								<level>Address</level>
								<input type="text" name='address' placeholder='Enter your address'  required />
								<br />
								<br />
								<input id='input-submit' type="submit" name='submit' value='submit'/>
							</form>
						</div>
				</div>
			</div>
	</div>
	<div id='contactList' class="admin_block"> 
			<h1 class='adminHead' >Contact List</h1>
	
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

			$sql = "SELECT * FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				$n=1;		
			?>
			<table style=' text-align:center; margin:auto; font-size:33px;' >
					<tr><th>No.</th>
						<th>Dial</th>
						<th>Name</th> 
						<th>Number</th>
						<th>address/details</th>
						<th colspan='2'>action</th>
					</tr>
				
				<?php
				while($row = $result->fetch_assoc()) {
					?>
					<tr> 
						<td><?php echo $n; ?></td>
						<td> <a style='color:black; text-decoration:none;' href="tel:<?php echo $row[number]; ?>">📞</a></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td> <a style='text-decoration:none; color:red;'  href='contactList-Admin.php?id=<?php echo $row["id"];?>'  >Delete</a></td>
						<td> <a style='text-decoration:none; color:red;' target="_blank" href='updateContact.php?id=<?php echo $row["id"];?>'  >Edit</a></td>
					</tr>;
				<?php
					$n++;
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
	<div id='clientInfo' class="admin_block">
			<h1 class='adminHead' >Client Info</h1> 
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

			$sql = "SELECT * FROM visitclienthomepage ORDER BY id DESC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				$n=1;
				echo "
				<table style='  overflow-x: scroll; margin:auto; text-align:center; font-size:33px;'> 
					<th>No.</th> 
					<th>deviceName</th>
					<th>screenSize</th>
					<th>location</th>
					";
				while($row = $result->fetch_assoc()) {
					echo "
					<tr>
						<td>".$n."</td>
						<td>".$row["deviceName"]."</td>
						<td>".$row["screenSize"]."</td>
						<td> <a style='color:black; text-decoration:none;' target='blank' href='$row[location]'>$row[location]</a> </td>
					</tr>";
					$n++;
				}
				echo " </table>";
			} else {
				echo "Blank";
			}

			$conn->close();
			?> 
	</div>							
<?php
						}
				} else {
					echo "wrong input";
					?>					
						<script type="text/javascript"> 
							alert('wrong input. Try again.');
						</script>
						<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/www.sfafdm.com/pages/login">
					<?php
				}
				
				
			}
			
?> 