<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>select statement ofr sql</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "sid";
$password = "temp";
$dbname = "usadb";
	
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error)  {
	die("connection failed: " . $conn->connect_error);
}
	
$sql = "select zipcode, name, state, county FROM city";
	
$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc()) {
		echo "zipcode: " . $row["zipcode"]. " -Name: " . $row["name"]." "
			. " - state:" . $row[state]. " " ." - county: " . $row["county"]. "<br>";
		
	}
}	else {
	echo "0 results";
}
$conn->close();
</body>
</html>