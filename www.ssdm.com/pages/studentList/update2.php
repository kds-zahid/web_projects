
			<?php
			if(empty($_POST['name'])|| empty($_POST['roll']) || empty($_POST['id'])){}
			else{
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
				$id=$_POST['id'];
				$name=$_POST['name'];
				$roll=$_POST['roll'];					
				$fathersName=$_POST['fathersName'];
				$address=$_POST['address'];
				$phoneNumber=$_POST['phoneNumber'];
				$class=$_POST['class'];
				$gender=$_POST['gender'];
				$DateOfBirth=$_POST['DateOfBirth'];
				$sql = "UPDATE student SET name='$name', roll='$roll', fathersName='$fathersName', address='$address', phoneNumber='$phoneNumber', class='$class', gender='$gender', DateOfBirth='$DateOfBirth' WHERE id='$id';";
				mysqli_query($conn, $sql);
				
				?>
				<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
				
				<?php
				
				
				}
			
?>