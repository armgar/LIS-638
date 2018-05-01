<?php
	session_start();

	require_once 'includes/authentication.php';
	include_once 'includes/html_head.php';
	
	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<nav>
				<ul>
					<li><a href='index.php'>All To-Dos</a></li>
					<li><a href='prioritytodo.php'>Priority</a></li>
					<li><a href='tasks.php'>Tasks</a></li>
					<li><a href='homework.php'>Homework</a></li>
					<li><a class='active' href='appointments.php'>Appointments</a></li>
					<li style='float:right'><a href='addatodo.php'>Add a to-do</a></li>
				</ul>
			</nav>";
		echo "<br><h3>Time to get to work, <strong>".$_SESSION['fname']." ".$_SESSION['lname'];
		echo "</strong> | You are logged in.";
		echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3><br>";
	}
	
	require_once 'includes/login.php';

	# Make the connection to mysql using the credentials above
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

	# Construct the query for the results we'd like: Show all to-dos
	$query = "SELECT * FROM to_do NATURAL JOIN appointment ORDER BY appointment_id";

	# Run our query, making sure we received results back
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;

	# Determine the number of rows returned so we can loop through them
	$rows = $result->num_rows;
	echo "<table style='table_header'>
			<tr style='table_header'><td style='table_header'><h3>Appointments &amp; Meetings</h3></td></tr>
		</table>
		<table>
			<tr>
				<th>ID</th>
				<th>DATE</th>
				<th>TIME TO LEAVE</th>
				<th>ARRIVAL TIME</th>
				<th>CONTACT</th>
				<th>LOCATION</th>
				<th>PRIORITY</th>
			</tr>";
		# Get and print out each row returned from the database
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["appointment_id"]."</td>
					<td>".$row["date_due"]."</td>
					<td>".$row["time_leave"]."</td>
					<td>".$row["time_due"]."</td>
					<td>".$row["contact"]."</td>
					<td>".$row["location_line1"]."<br>".$row["location_line2"]."</td>
					<td>".$row["priority"]."</td>";
			echo "</tr>";
		}

	echo "</table>";

	
	/*
	# close the database connection
	$result->close();
	$conn->close();
	?>
	*/

	include_once "includes/footer.php";
?>

