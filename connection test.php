<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "web";
$password = "temp";
$dbname = "usadb";
	
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
else {
echo ("connection very nicue");
}

$Pname = $_POST["Pname"];
$Years = $_POST["Years"];
$Born_In = $_POST["Born_In"];
$Death_Age = $_POST["Death_Age"];
$Party = $_POST["Party"];
$Birth_Year = $_POST["Birth_Year"];
echo ($Pname.$Years);

$sql = "INSERT INTO president (Pname, Birth_Year, Years, Death_Age, Party, Born_In) VALUES ('$Pname', $Birth_Year, $Years, $Death_Age, '$Party', '$Born_In');";

if ($conn->query($sql) === TRUE){
	echo "New record created successfully";
} else {
	echo "ERROR: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
</body>
</html>