
			<?php
			if(empty($_POST['name'])|| empty($_POST['number']) || empty($_POST['id'])){}
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
				$id=$_POST['id'];
				$name=$_POST['name'];
				$number=$_POST['number'];
				$address=$_POST['address'];
				$sql = "UPDATE contact SET name='$name', number='$number', address='$address' WHERE id='$id';";
				mysqli_query($conn, $sql);
				
				?>
				<script type="text/javascript">window.close(); </script>
				
				<?php
				
				
				}
			
?>