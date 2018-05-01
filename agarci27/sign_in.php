<?php
	session_start();

	require_once 'includes/login.php';
	require_once 'includes/functions.php';
	include_once 'includes/html_head.php'; 

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
				$message = '<p class="error">Invalid username/password combination! Try again.</p>';
			}
		}
	}
?>

<?php 
	if (isset($message)) echo $message;
?>

<p>Log-in with your username and password to access your to-dos.</p>

<fieldset style="width:35%">
	<legend>Log-in</legend>
	<form id="login" method="POST" action="">
		Username:<br><input type="text" name="username" size="55"><br>
		Password:<br><input type="password" name="password" size="55"><br>
		<input type="submit" name="submit" value="Log-In">
	</form>
</fieldset>

<?php include_once 'includes/footer.php'; ?>