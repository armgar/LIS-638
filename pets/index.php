<?php
session_start();

require_once 'includes/auth.php';
include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT pet_id, name, age, sex, species, caretaker_name, email 
		FROM pets NATURAL JOIN caretakers ORDER BY pet_id ASC";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<table><tr> <th>Id</th> <th>Name</th><th>Age</th><th>Sex</th><th>Species</th><th>Caretaker</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "<td>".$row["pet_id"]."</td><td>";
	echo "<a href=\"viewpet.php?id=".$row["pet_id"]."\">".$row["name"]."</a>";
	echo "</td><td>".$row["age"]."</td><td>".$row["sex"]."</td><td>".$row["species"]."</td><td>".$row["caretaker_name"]."</td>";		
	echo "<td><a href=\"mailto:".$row["email"]."\">".$row["email"]."</a></td>";
	echo '</tr>';
}

echo "</table>";
echo "<a href=\"addnewpet.php\">Add a New Pet</a>";

include_once 'includes/footer.php';
?>
