<?php
	include "html_head.php";
	include "functions.php";
	# include "authentication.php";
	echo "<h1>Database, Final Project</h1>";
	echo "<h2>Login!</h2>";
?>

<form action="example-week-twelve-two.php" method="POST">
Username: <input type="text" name="uname">
Password: <input type="password" name="upass"> 
<input type="submit" name="submit" value="Login!">

<?php
$hn = 'localhost';
$db = 'agarci27';
$un = 'root';
$pw = 'si606';

echo '<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php">Tasks</a></li>
		<li><a href="index.php">Homework</a></li>
		<li><a href="index.php">Appointments</a></li>
	</ul>';

# Make the connection to mysql using the credentials above
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT * FROM to_do";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;
echo "<p>Here are your to-dos for next week:</p>";
# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo "<table><tr>";
		echo "<td>".$row["to_do_id"]."</td><td>".$row["date_due"]."</td><td>".
			$row["time_due"]."</td><td>".$row["contact"]."</td><td>".$row["description"].
			"</td><td>".$row["priority"]."</td>";
	echo "</tr></table>";
}

# Construct the query for the results we'd like
$query = "SELECT * FROM to_do WHERE priority = 2";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo "<table class='listall'>";
		echo "<td>".$row["to_do_id"]." ".$row["priority"]." ".$row["date_due"]." ";
		echo $row["time_due"]." ".$row["contact"]." ".$row["description"]."<br>";
	echo "</td></table>";
}

# close the database connection
$result->close();
$conn->close();
?>


<?php
	include "footer.php";
?>

