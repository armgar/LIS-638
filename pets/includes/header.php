<!DOCTYPE html>
<html>
<head>
<title>Pets Database</title>
<link rel="stylesheet" type="text/css" href="includes/animalshelter.css" />
</head>
<body>
<header>
	<a href="index.php"><img src="images/shelter_logo.jpg" width="70" height="70"></a>
	<h1>Pet Shelter Database</h1>
	<?php
	if (isset($_SESSION['fname']) && isset($_SESSION['lname']) ) {
		echo "<h3>Welcome, ".$_SESSION['fname']." ".$_SESSION['lname'];
		echo " | <small><a href=\"sign_out.php\">Logout</a></small></h3>";
	}
	?>
</header>
<div id="body">
