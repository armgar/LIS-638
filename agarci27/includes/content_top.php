<?php
	date_default_timezone_set("America/New_York");
	echo "<div id='body_content'>
		<h3></h3>
		<p class='logged_in'>Hello, <strong>".$_SESSION['fname']." ".$_SESSION['lname']."</strong>. You are logged in. <a href=\"sign_out.php\" class='button'>Logout</a></p>
		<p><img src='images/date.png' alt='date icon' width='40' height='40'><br>Today is " . date("l") . ", " . date("m-d-Y") . "</p>
		<p><img src='images/time.png' alt='time icon' width='40' height='40'><br>The time now is " . date("h:ia") . "</p>
	</div>";
?>