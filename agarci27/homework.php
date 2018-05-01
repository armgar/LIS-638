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
					<li><a class='active' href='homework.php'>Homework</a></li>
					<li><a href='appointments.php'>Appointments</a></li>
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
	$query = "SELECT * FROM to_do NATURAL JOIN homework ORDER BY homework_id";

	# Run our query, making sure we received results back
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;

	# Determine the number of rows returned so we can loop through them
	$rows = $result->num_rows;
	echo "<table style='table_header'>
			<tr style='table_header'><td style='table_header'><h3>Homework Assignments</h3></td></tr>
		</table>
		<table>
			<tr>
				<th>COURSE ID</th>
				<th>PROFESSOR</th>
				<th>PRIORITY DATE</th>
				<th>PROJECT NAME</th>
				<th>PROJECT STAGE</th>
				<th>DATE DUE</th>
				<th>SUBMIT BY THIS TIME</th>
				<th>PRIORITY</th>
			</tr>";
		# Get and print out each row returned from the database
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["course_id"]."</td>
					<td>".$row["contact"]."</td>
					<td>".$row["date_priority"]."</td>
					<td>".$row["hw_name"]."</td>
					<td>".$row["hw_stage"]."</td>
					<td>".$row["date_due"]."</td>
					<td>".$row["time_due"]."</td>
					<td>".$row["priority"]."</td>";
			echo "</tr>";
		}

	echo "</table><br>";
	# Construct the query for the results we'd like: Show COURSES
	$query = "SELECT * FROM course";

	# Run our query, making sure we received results back
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;

	# Determine the number of rows returned so we can loop through them
	$rows = $result->num_rows;
	echo "<table style='table_header'>
			<tr style='table_header'><td style='table_header'><h3>Current Courses</h3></td></tr>
		</table>
		<table>
			<tr>
				<th>COURSE ID</th>
				<th>COURSE NAME</th>
				<th>SEMESTER</th>
				<th>START DATE</th>
				<th>END DATE</th>
			</tr>";
		# Get and print out each row returned from the database
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>".$row["course_id"]."</td>
					<td>".$row["course_name"]."</td>
					<td>".$row["semester"]." ".$row["year"]."</td>
					<td>".$row["start_date"]."</td>
					<td>".$row["end_date"]."</td>";
			echo "</tr>";
		}

	echo "</table>";
?>
	
<?php
	include_once "includes/footer.php";
?>

