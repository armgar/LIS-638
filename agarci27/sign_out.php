<?php
	session_start();
	$_SESSION = array();
	session_destroy();
	include_once 'includes/html_head.php';
	echo "<div id='wrapper'>
		<p class='white'>You are now logged out.</p>
		<a href=\"index.php\" class='button_login'>Return to log-in</a></p>
	</div>";
	include_once 'includes/footer.php';
?>
