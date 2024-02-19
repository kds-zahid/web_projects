<html>
<link rel="stylesheet" href="style/style.css" />
	<body><!---->
	<!--form-section start-->		
		<section class="form">
		
<?php
			
			
			
			
			if(empty($_POST['name'])|| empty($_POST['password'])){
				echo 'Please fill up all input';
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
					
						<table style='margin:auto; font-size:33px;' border='1'>
							<tr>
								<th>Id</th> 
								<th>Name</th>
								<th>password</th>
								<th colspan='2'>activeCode</th>
							</tr>
<?php
						$row = $result->fetch_assoc()
?>
							<tr> 
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['activeCode']; ?></td>
							</tr>;
						
						</table>
<?php
						if(empty($row['activeCode'])){
							
						}else{
?>
							
							welcome admin name= <?php echo $row['name']; ?>
							
							
							
							
							
							
							
							
<?php
						}
				} else {
					echo "wrong input";
				}
				
				
				$conn->close();
			}
			
?> 
		
		</section>	
	<!--form-section end-->