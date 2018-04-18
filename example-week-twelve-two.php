<?php
	session_start();
	include "page_start.php";
	include "functions.php";
	echo "<h1>Practice&mdash;This is the login page</h1>";
	echo "<h2>Forms! Login!</h2>";
?>

<form action="example-week-twelve-landing.php" method="POST">
Username: <input type="text" name="uname" value="user_one_username">
Password: <input type="password" name="upass" value="password123"> 
<input type="submit" name="submit" value="Login!">

<?php
?>
</body>
</html>