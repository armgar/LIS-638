<?php
	include "page_start.php";
	include "functions.php";
	echo "<h1>Practice&mdash;This is the admin page</h1>";
	echo "<h2>Forms! Login!</h2>";
?>

<?php

print_r($_POST);

if ( (isset($_POST["uname"]) && !empty($_POST["uname"])) && isset($_POST["upass"])) {
	# do the work to connect to db
	echo "<p>checking credentials.... </p>";
	# to do

	# make connection
	include "login_info.php";

	# Make the connection to mysql using the credentials above
	$connection = new mysqli($host, $username, $passwd, $db);
	if ($connection->connect_error) {
		echo "<p>Uh oh! Error!</p>";
		die($connection->connect_error);
	}
	
	# sanitize, then run query	
	
	$username = $_POST["uname"];
	$pass = $_POST["upass"];
	
	$salt1 = '%efie942';
	$salt2 = '54787uy8()';
	
	$full_password = $salt1.$pass.$salt2;
	$hashed_password = hash('ripemd128', $full_password);
	
	$username = sanitizeMySQL($connection, $username);
	$pass =  sanitizeMySQL($connection, $pass);	
	#run query
	$query = "SELECT * FROM `user` WHERE uname=\"".$username."\" AND hash_pw=\"".$hashed_password."\"";
	
	echo $query;
	
	# check result
	$query_result = $connection->query($query);

	if (!$query_result) {
		echo "We have a problem!";
		die($connection->error);
	}
	
	$rows = $query_result->num_rows;
	if ($rows==1) {
		echo "<p>Successful login!!!!!</p>";
	} else {
		echo "<p>User not recognized, <a href='example-week-twelve-two.php'>try again!</a></p>";
	}
	# disconnect
	
} else {
	echo "<p>Did not enter username and password, <a href='example-week-twelve-two.php'>try again!</a></p>";
}

?>