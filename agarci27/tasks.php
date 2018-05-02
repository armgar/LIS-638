<?php
	session_start();

	require_once 'includes/authentication.php';
	include_once 'includes/html_head.php';
	
	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<nav>
				<ul>
					<li><a href='index.php'>All To-Dos</a></li>
					<li><a href='prioritytodo.php'>Priority</a></li>
					<li><a class='active' href='tasks.php'>Tasks</a></li>
					<li><a href='homework.php'>Homework</a></li>
					<li><a href='appointments.php'>Appointments</a></li>
					<li style='float:right'><a href='addatodo.php'>Add A To-Do</a></li>
				</ul>
			</nav>";
		include_once "includes/content_top.php";
	}
	
	require_once 'includes/login.php';

	# Make the connection to mysql using the credentials above
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

	# Construct the query for the results we'd like: Show all to-dos
	$query = "SELECT * FROM to_do NATURAL JOIN task ORDER BY task_id";

	# Run our query, making sure we received results back
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;

	# Determine the number of rows returned so we can loop through them
	$rows = $result->num_rows;
	echo "<table>
			<tr><td class='table_header'>Tasks: Client Work</td></tr>
		</table>
		<table>
			<tr>
				<th>ID</th>
				<th>DATE ASSIGNED</th>
				<th>DATE DUE</th>
				<th>CLIENT</th>
				<th>PROJECT NAME</th>
				<th>STAGE</th>
				<th>CONTACT</th>
				<th>PRIORITY</th>
			</tr>";
		# Get and print out each row returned from the database
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["task_id"]."</td>
					<td>".$row["date_assigned"]."</td>
					<td>".$row["date_due"]."</td>
					<td>".$row["client"]."</td>
					<td>".$row["project_name"]."</td>
					<td>".$row["project_stage"]."</td>
					<td>".$row["submit"]."</td>
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

	include_once "includes/content_bottom.php";
	include_once "includes/footer.php";
?>

