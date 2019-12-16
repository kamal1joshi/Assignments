<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$servername = "localhost";

		$username = "root";
		$password = "java@123";
		$dbname = "Kamal";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} 

		$email = $_POST["email"];
		$password1 = md5('$_POST["password"]');

		$sql = "INSERT INTO jquery (Email_Id, Password) VALUES ('".$email."','".$password1."')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);

		}
?>