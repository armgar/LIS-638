<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Code Homework for LIS-638 Web Development">
	<title>Week 10 Exercises&mdash;Armando Garcia</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<h1>week ten</h1>
<?php
#add some database driven functionality
$host = 'localhost';
$db = 'facilities';
$username = 'root';
$passwd = 'si606'; #own computer would look like $passwd = '';

# Make the connection to mysql using the credentials above
$connection = new mysqli($host, $username, $passwd, $db);
if ($connection->connect_error) {
	echo "<p>Uh oh! Error!</p>";
	die($connection->connect_error);
}

#Make a query (step 3)
$query = "SELECT * FROM classroom NATURAL JOIN furniture;";

#Run query
$query_result = $connection->query($query);
if(!$query_result) {
	echo "<p>We have an error!</p>";
	die($connection->error);
}

$rows_returned = $query_result->num_rows;
echo "<p>We got back $rows_returned row(s).</p>";



while ($row = $query_result->fetch_assoc() ) {
	echo "<p>Room number " . $row["room_num"] . " has ";
	echo $row["amount"] . " of " . $row["type"] . "(s)</p>";
}

$connection->close();
?>
</body>
</html>