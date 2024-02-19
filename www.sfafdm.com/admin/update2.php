
			<?php
			if(empty($_POST['name'])|| empty($_POST['roll']) || empty($_POST['id'])){}
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
				$roll=$_POST['roll'];
				$sql = "UPDATE student SET name='$name', roll='$roll' WHERE id='$id';";
				mysqli_query($conn, $sql);
				
				?>
				<script type="text/javascript">window.close(); </script>
				
				<?php
				
				
				}
			
?>