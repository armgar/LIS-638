<?php
	session_start();
	require_once 'includes/login.php';
	require_once 'includes/functions.php';
	include_once 'includes/html_head.php'; 

	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<nav>
				<ul>
					<li><a href='index.php'>All To-Dos</a></li>
					<li><a href='index.php'>Priority</a></li>
					<li><a href='index.php'>Tasks</a></li>
					<li><a href='index.php'>Homework</a></li>
					<li><a href='index.php'>Appointments</a></li>
					<li style='float:right'><a class='active' href='addatodo.php'>Add a to-do</a></li>
				</ul>
			</nav>";
		echo "<h3>Time to get to work, <strong>".$_SESSION['fname']." ".$_SESSION['lname'];
		echo "</strong> | You are logged in.";
		echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
	}

	if (isset($_POST['submit'])) { //check if the form has been submitted
		if ( empty($_POST['username']) || empty($_POST['password']) ) {
			$message = '<p class="error">Please fill out all of the form fields!</p>';
		} else {
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) die($conn->connect_error);
			$username = sanitizeMySQL($conn, $_POST['username']);
			$password = sanitizeMySQL($conn, $_POST['password']);			
			$salt1 = "qm&h*";  
			$salt2 = "pg!@";  
			$password = hash('ripemd128', $salt1.$password.$salt2);
			$query  = "SELECT login_id FROM user WHERE username='$username' AND password='$password'"; 
			$result = $conn->query($query);    
			if (!$result) die($conn->error); 
			$rows = $result->num_rows;
			if ($rows==1) {
				$row = $result->fetch_assoc();
				$_SESSION['login_id'] = $row['login_id'];
				$_SESSION['login_id'] = $row['login_id'];
				$goto = empty($_SESSION['goto']) ? 'index.php' : $_SESSION['goto'];			
				header('Location: ' . $goto);
				exit;			
			} else {
				$message = '<p class="error">Invalid username/password combination!</p>';
			}
		}
	}
	?>

<?php 
	if (isset($message)) echo $message;
?>

<fieldset style="width:35%">
	<legend>Log-in</legend>
	<form method="POST" action="index.php">
		Username:<br><input type="text" name="username" size="55"><br>
		Password:<br><input type="password" name="password" size="55"><br>
		<input type="submit" name="submit" value="Log-In">
	</form>
</fieldset>

<?php include_once 'includes/footer.php'; ?>