<?php
session_start();
if (isset($_SESSION['logged_in']) && ($_SESSION['logged_in']==1)) {
	#echo "Logged in person!";
} else {
	header("Location: site_login.php");
}
include "page_start.php";
include "functions.php";
?>
<h1>ADMIN - Add Classroom Page</h1>

<a href='log_out.php'>LOG OUT</a>

<form action="admin.php" method="POST">
	Room number: <input type="test" name="room_num">
	Floor: <input type="test" name="floor">
	Max capacity: <input type="test" name="max_capacity">
	<input type="submit" value="submit" value="Add classroom">
</form>


<?php
include "page_end.php";
?>