<?php
	include "page_start.php";
?>

<h1>week ten</h1>
<?php
#add some database driven functionality
include "login_info.php";

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
#Populate query
$rows_returned = $query_result->num_rows;
echo "<p>We got back $rows_returned row(s).</p>";

while ($row = $query_result->fetch_assoc() ) {
	echo "<p>Room number " . $row["room_num"] . " has ";
	echo $row["amount"] . " of " . $row["type"] . "(s)</p>";
}
#New Query
$q = "CREATE TABLE staff (staff_id INT AUTO_INCREMENT PRIMARY KEY,
staff_name VARCHAR(200));";

#Run new query
$query_result2 = $connection->query($q);
if(!$query_result2) {
	echo "<p>We have an error!</p>";
	die($connection->error);
}

#Populate it on the page



$connection->close();
?>
</body>
</html>