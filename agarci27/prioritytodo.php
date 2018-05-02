<?php
	session_start();

	require_once 'includes/authentication.php';
	include_once 'includes/html_head.php';
	
	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<nav>
				<ul>
					<li><a href='index.php'>All To-Dos</a></li>
					<li><a class='active' href='prioritytodo.php'>Priority</a></li>
					<li><a href='tasks.php'>Tasks</a></li>
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
	
	# Construct the query for the results we'd like: Priority items
	$query = "SELECT * FROM to_do WHERE priority = 1";

	# Run our query, making sure we received results back
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	# Determine the number of rows returned so we can loop through them
	$rows = $result->num_rows;

	echo "<table>
			<tr>
				<td class='table_header'>Priority Must-Dos</td>
			</tr>	
		</table>
		<table>
			<tr>
				<th>ID</th>
				<th>TO-DO TYPE</th>
				<th>DATE DUE</th>
				<th>TIME DUE</th>
				<th>CONTACT</th>
				<th>PRIORITY</th>
			</tr>";
		# Get and print out each row returned from the database
		while ($row = $result->fetch_assoc()) {
			echo "<tr class='listall'>";
				echo "<td>".$row["to_do_id"]."</td>
					<td>".$row["description"]."</td>
					<td>".$row["date_due"]."</td>
					<td>".$row["time_due"]."</td>
					<td>".$row["contact"]."</td>
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

