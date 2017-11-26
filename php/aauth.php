<?php 


		$login = $_POST['login'];
		$password = $_POST['password'];

		// Create connection
		$conn = new mysqli('localhost', 'root', 'root', 'sportstore');
		mysqli_set_charset($conn,"utf8");
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "SELECT * FROM users WHERE EMAIL='$login' AND PASSWORD='$password'";
		$result = $conn->query($sql);

		if($result != NULL) {
			session_start();
			$_SESSION[user] = $result->fetch_assoc();
			 echo json_encode($result->fetch_assoc());
		}
		else echo "1";
		
	$result->close();
	$conn->close();

?>