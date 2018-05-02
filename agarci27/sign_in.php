<?php
	session_start();

	require_once 'includes/login.php';
	require_once 'includes/functions.php';
	include_once 'includes/html_head.php'; 

	if (isset($_POST['submit'])) { //check if the form has been submitted
		if ( empty($_POST['username']) || empty($_POST['password']) ) {
			$message = '<center><p class="error">Please fill out all of the form fields!</p></center>';
		} else {
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) die($conn->connect_error);
			$username = sanitizeMySQL($conn, $_POST['username']);
			$password = sanitizeMySQL($conn, $_POST['password']);			
			$salt1 = "qm&h*";  
			$salt2 = "pg!@";  
			$password = hash('ripemd128', $salt1.$password.$salt2);
			$query  = "SELECT fname, lname FROM user WHERE username='$username' AND password='$password'"; 
			$result = $conn->query($query);    
			if (!$result) die($conn->error); 
			$rows = $result->num_rows;
			if ($rows==1) {
				$row = $result->fetch_assoc();
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$goto = empty($_SESSION['goto']) ? 'index.php' : $_SESSION['goto'];			
				header('Location: ' . $goto);
				exit;			
			} else {
				$message = '<center><p class="error">Invalid username/password combination! Try again.</p></center>';
			}
		}
	}
?>

<?php if (isset($message)) echo $message; ?>
<div id="wrapper">
	<p class='white'>Log-in with your username and password to access your to-dos.</p>
	<center>
		<form id="login" method="POST" action="">
			<fieldset>
				<legend>Log-in</legend>
				<ol>
					<li>
						<label for="username">Username:</label>
						<input id="username" name="username" type="username" placeholder="Username">
					</li><br>
					<li>
						<label for="password">Password:</label>
						<input id="password" name="password" type="password" placeholder="Password">
					</li>
				</ol>
			</fieldset>
			<fieldset>
				<input type="submit" name="submit" value="Log-In" class="login_button">
			</fieldset>
		</form>
	</center>
<div>
<?php include_once 'includes/footer.php'; ?>