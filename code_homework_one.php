<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Code Homework #1</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style type="text/css">
			body {
				text-align: center;
				color: #555555;
				background-color: #ffdab9;
				font-family: 'Montserrat', sans-serif;
				margin: auto;
				padding: 25px;
				max-width: 960px;
			}
			h1, h2 { 
				color: #ff6347;
			}
			hr {
				max-width: 150px;
				margin: 50px auto;
				border-width: 2px;
				border-style: solid;
				opacity: 0.5;
			}
		</style>
	</head>
	<body>
		<h1>Code Homework 1</h1>
		<h2>Challenge 1: Correct Change</h2>

		<?php

		$total_change = 293;
		$dollars = (int)($total_change  / 100); # get whole number dollars by casting as int
		$remainder = $total_change % 100; # get leftovers from dollar to move on to next step
		$quarters = (int) ($remainder / 25); # get whole number quarters by casting as int
		$remainder = $remainder % 25;
		$dimes = (int) ($remainder / 10);
		$remainder = $remainder % 10;
		$nickels = (int) ($remainder / 5);
		$pennies = ($remainder - ($nickels * 5));


		echo "<p>You are due $total_change cents back in change total.</p>";
		echo "<p>You are due back $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), and $pennies cent(s).</p>";

		echo "<hr>";

		# Challenge 2 starts here ****************

		echo "<h2>Challenge 2: 99 Bottles of Beer</h2>";

		$count = 3;
		$count_next = $count - 1;

		for ($count_input = $count ; $count_input > 2 ; --$count_input)
		{
			echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
			Take one down, pass it around, $count_next bottles of beer on the wall.</p>";
		}

		if (($count_input <= 2) && ($count_input > 1))
		{
			echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
			Take one down, pass it around, $count_next bottle of beer on the wall.</p>";
			--$count_input;
			--$count_next;
		}

		if (($count_input <= 1) && ($count_input > 0))
		{
			echo "<p>1 bottle of beer on the wall, 1 bottle of beer.<br>
			Take one down, pass it around, 0 bottles of beer on the wall.</p>";
		}

		for ($count_input = 0 ; $count_input > -1 ; --$count_input)
		{
			echo "<p>No more bottles of beer on the wall, no more bottles of beer.<br>
			We've taken them down and passed them around; now we're drunk and passed out!</p>";
		}


		?>
	</body>
</html>