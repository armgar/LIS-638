<?php
	session_start();

	require_once 'includes/authentication.php';
	include_once 'includes/html_head.php';
	require_once 'includes/login.php';

	echo "<h1>Database, Final Project</h1>";
	echo "<h2>Login!</h2>";

	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<h3>Welcome, ".$_SESSION['fname']." ".$_SESSION['lname'];
		echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
	}

echo "<ul>
		<li><a href='index.php'>Home</a></li>
		<li><a href='index.php'>Tasks</a></li>
		<li><a href='index.php'>Homework</a></li>
		<li><a href='index.php'>Appointments</a></li>
	</ul>";

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
echo "<h3>Here are your to-dos for next week:</h3>";
echo "<table><tr><th>ID</th><th>DATE</th><th>TIME DUE</th><th>CONTACT</th><th>TO-DO TYPE</th><th>PRIORITY</th></tr>";
# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>".$row["to_do_id"]."</td><td>".$row["date_due"]."</td><td>".
			$row["time_due"]."</td><td>".$row["contact"]."</td><td>".$row["description"].
			"</td><td>".$row["priority"]."</td>";
	echo "</tr>";
}

echo "</table>";
# Construct the query for the results we'd like
$query = "SELECT * FROM to_do WHERE priority = 1";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

echo "<h3>Here are your priority to-dos for next week:</h3>";
echo "<table><tr> <th>ID</th> <th>PRIORITY</th><th>DATE</th><th>TIME DUE</th><th>CONTACT</th><th>TO-DO TYPE</th></tr>";
# Get and print out each row returned from the database
while ($row = $result->fetch_assoc()) {
	echo "<table class='listall'>";
		echo "<td>".$row["to_do_id"]." ".$row["priority"]." ".$row["date_due"]." ";
		echo $row["time_due"]." ".$row["contact"]." ".$row["description"]."<br>";
	echo "</td></table>";
}
/*
# close the database connection
$result->close();
$conn->close();
?>
*/

	echo "<a href=\"addatodo.php\">Add a to-do</a>";

	include_once "includes/footer.php";
?>

