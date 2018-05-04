<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$sql = "insert into city (zipcode, namen state, country)
values (26101,'parkersburg','wv',wood')";
	
{
	$sql = "Pname, Birth_Year, Years, Death_Age, Party, Born_In";
	
	}
	
if ($conn->query($sql) === TRUE) {
	echo "New Record created successfully";
}else {
	echo "error: " .$sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>