<?php

        $servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname = "Assignments";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		} 

$check = mysql_query("SELECT * FROM `jasonassign8` ");

if(mysql_num_rows($check) > 0)

{

while($run_mem = mysql_fetch_array($check))

{

$rsp[] = array("Name" =>$run_mem['Name'] );

}

}

else

{

$rsp = [];

}

header("content-type: application/json");

echo json_encode($rsp);
echo "New record created successfully";

?>

<script>

console.log(rsp);  
</script>
