<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework #1 for LIS-638 Web Development">
		<title>Code Homework #1&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			body {
				font-size: 18px;
				color: #555555;
				background-color: #fffafa;
				font-family: 'Montserrat', sans-serif;
				margin: auto;
				padding: 25px;
				max-width: 960px;
			}
			h1 {
				text-transform: uppercase;
			}
			h1, h2 { 
				color: #ff6347;
				padding: 5px 0;
			}
			strong {
				font-size: 1.1em;
			}
			hr {
				max-width: 150px;
				margin: 50px auto;
				border: 2px solid;
				opacity: 0.5;
			}
		</style>
	</head>
	<body>
		<?php
		echo "<h1>Code Homework 1</h1>";
		echo "<h2>Challenge 1: <br><strong>Correct Change</strong></h2>";
	
		$total_change = 176;
		$dollars = (int)($total_change  / 100); # get whole number dollars by casting as int
		$remainder = $total_change % 100; # get leftovers from dollar to move on to next step
		$quarters = (int) ($remainder / 25); # get whole number quarters by casting as int
		$remainder = $remainder % 25;
		$dimes = (int) ($remainder / 10);
		$remainder = $remainder % 10;
		$nickels = (int) ($remainder / 5);
		$pennies = ($remainder - ($nickels * 5));

		echo "<p><strong>You are due $total_change cents back in change total.</strong></p>";
		echo "<p>You are due back $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), and $pennies cent(s).</p>";

		echo "<hr>"; # Challenge 2 starts here ****************

		echo "<h2>Challenge 2: <br><strong>99 Bottles of Beer</strong></h2>";

		$count = 5;
		$count_next = $count - 1;

		for ($count_input = $count ; $count_input >= 0 ; --$count_input )
		{
			if ($count_input >= 3) {
				echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
				Take one down, pass it around, $count_next bottles of beer on the wall.</p>";
				--$count_next;
			}
			if ($count_input == 2) {
				echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
				Take one down, pass it around, 1 bottle of beer on the wall.</p>";
			}
			if ($count_input == 1) {
				echo "<p>1 bottle of beer on the wall, 1 bottle of beer.<br>
				Take one down, pass it around, 0 bottles of beer on the wall.</p>";
			}
			if ($count_input == 0) {
				echo "<p>No more bottles of beer on the wall, no more bottles of beer.<br>
				We've taken them down and passed them around; now we're drunk and passed out!</p>";
			}
		}
		?>
	</body>
</html>