<?php
session_start();
require_once 'includes/auth.php';

include_once 'includes/header.php';
require_once 'includes/login.php';
require_once 'includes/functions.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['id'])) {
	$id = sanitizeMySQL($conn, $_GET['id']);
	$query = "SELECT * FROM pets NATURAL JOIN caretakers WHERE pet_id=".$id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid pet id.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No pet found with id of $id<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
			echo '<h1>Pet Information</h1>';
			echo '<p>'.$row["name"]." is a ".$row["age"]." year(s) old ".$row["sex"]." ".$row["species"].'</p>';
			echo '<h4>Caretaker Information:</h4>';
			echo $row["caretaker_name"]." (".$row["email"].")";			
		}
	}
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";
} else {
	echo "No pet id passed";
}

include_once 'includes/footer.php';
?>
