<?php
	session_start();

	require_once 'includes/authentication.php';
	require_once 'includes/login.php';
	require_once 'includes/functions.php';
	include_once 'includes/html_head.php'; 

	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<nav>
				<ul>
					<li><a href='index.php'>All To-Dos</a></li>
					<li><a href='prioritytodo.php'>Priority</a></li>
					<li><a href='tasks.php'>Tasks</a></li>
					<li><a href='homework.php'>Homework</a></li>
					<li><a href='appointments.php'>Appointments</a></li>
					<li style='float:right'><a class='active' href='addatodo.php'>Add A To-Do</a></li>
				</ul>
			</nav>";
	}

	if (isset($_POST['submit'])) { //check if the form has been submitted
		if ((empty($_POST['name'])) || (empty($_POST['age'])) || (empty($_POST['sex'])) || (empty($_POST['species'])) || (empty($_POST['caretaker_id'])) ) {
			$message = '<p class="error">Please fill out all of the form fields!</p>';
		} else {
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) die($conn->connect_error);
			$name = sanitizeMySQL($conn, $_POST['name']);
			$age = sanitizeMySQL($conn, $_POST['age']);			
			$sex = sanitizeMySQL($conn, $_POST['sex']);
			$species = sanitizeMySQL($conn, $_POST['species']);
			$caretaker_id = sanitizeMySQL($conn, $_POST['caretaker_id']);
			$query = "INSERT INTO pets VALUES(NULL, \"$name\", $age, \"$sex\", \"$species\", \"$caretaker_id\")";
			$result = $conn->query($query);
			if (!$result) {
				die ("Database access failed: " . $conn->error);
			} else {
				$message = "<p class=\"message\">Successfully added new to-do in $description list! <a href=\"index.php\">Return to pets list</a></p>";
			}
		}
	}
?>

<?php 
	if (isset($message)) echo $message;
?>
<div id="body_content">
	<center><form id="login" method="post" action="">
		<fieldset>
			<legend>Add a To-do</legend>
			<label for="priority">Priority:</label> 
				<select name="priority">
					<?php
						for ($i=1;$i<=2;$i++) {
							echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select><br>	
			<label for="contact">Contact:</label>
				<input type="text" name="contact" size="35"><br>	
			<label for="sex">Sex:</label> 
	<!-- 			<select name="sex">
					<option value="F">Female</option>
					<option value="M">Male</option>
				</select><br>
			<label for="species">Species:</label> 
				<select name="species">
					<option value="dog">Dog</option>
					<option value="cat">Cat</option>
				</select><br> -->
			<label for="caretaker_id">To-Do Type:</label>
				<select name="description">
					<option value="1">Work Task</option>
					<option value="2">Homework</option>
					<option value="2">Appointment</option>
				</select><br>
			<label for="caretaker_id">Status:</label>
				<select name="completed_status">
					<option value="1">In progress</option>
					<option value="2">Completed</option>
				</select><br>
			<input type="submit" name="submit">
		</fieldset>
	</form></center>
</div>

<?php
	include_once "includes/content_bottom.php";
	include_once "includes/footer.php";
?>