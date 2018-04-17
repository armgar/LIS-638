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
	include "footer.php";
?>