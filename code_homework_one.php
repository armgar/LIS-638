<DOCTYPE! html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Code Homework #1</title>
	</head>
	<body>
		<h1>Code Homework 1</h1>
		<h2>Challenge 1: Correct Change</h2>

		<?php

		$total_change = 171;
		$total_cents = $total_change % 100;
		$dollars = ($total_change - $total_cents) / 100;
		$quarters = (($total_cents / 25 * 100) - ($total_cents % 25)) / 100;

		echo "<p>You are due $total_change cents back in change total.</p>";
		echo "<p>You are due back $dollars dollar(s), $quarters quarter(s), dime(s), nickel(s), and cent(s).</p>";

		?>
	</body>
</html>