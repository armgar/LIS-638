<?php
	include "page_start.php";
	include "functions.php";
?>

<h1>week 12&mdash;What's new today?</h1>
<h2>Room Capacity Search</h2>
<form action="example-week-twelve.php" method="GET">
	<input type="text" name="searchterm"> 
	<input type="submit" name="submit" value="Search"> 
</form>

<?php
#if they submitted, grab their search term and search db
if (isset($_GET["submit"])) {
	if (is_numeric($_GET["searchterm"])) {
		#ok, do search
		$num_chairs = $_GET["searchterm"];
		
		# make connection
		include "login_info.php";

		# Make the connection to mysql using the credentials above
		$connection = new mysqli($host, $username, $passwd, $db);
		if ($connection->connect_error) {
			echo "<p>Uh oh! Error!</p>";
			die($connection->connect_error);
		}
		
		# sanitize, then run query
		$num_chairs = sanitizeMySQL($connection, $num_chairs);
		$query = 'SELECT type, amount, room_num FROM furniture 
		NATURAL JOIN classroom WHERE amount >= '.$num_chairs.' AND type="chair";';
		
		echo $query;
		
		# test the query
		$query_result = $connection->query($query);
		if(!$query_result) {
			echo "<p>We have an error!</p>";
			die($connection->error);
		}
		
		# this is a test
		# echo $query;
		
		echo "<ol>";
			while ($row = $query_result->fetch_assoc() ) {
				echo "<li>Room number " . $row["room_num"] . " has ";
				echo $row["amount"] . " " . $row["type"] . "(s)</li>";
			}
		echo "</ol>";
		$connection->close();
		} else {
			echo "<p>Please run your search again with a number!</p>";
		}
}

# close connection to DB

?>
</body>
</html>