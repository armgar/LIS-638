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

		$total_change = 293;
		$total_cents = $total_change % 100;
		$dollars = ($total_change - $total_cents) / 100;

		/* 
		Why doesn't this work!?
		$quarters = (($total_cents / 25 * 100) - ($total_cents % 25)) / 100;
		*/

		# QUARTERS 
		if ($total_cents < 25)
		{
			$quarters_left = 0;
		}
		elseif (($total_cents >= 25) && ($total_cents < 50))
		{
			$quarters_left = 1;
		}
		elseif (($total_cents >= 50) && ($total_cents < 75))
		{
			$quarters_left = 2;
		}
		elseif (($total_cents >= 75) && ($total_cents < 100))
		{
			$quarters_left = 3;
		}
		
		# How much change is left after you subtract the quarters?
		$total_less_quarters = $total_cents - ($quarters_left * 25);

		# DIMES
		if ($total_less_quarters < 10)
		{
			$dimes_left = 0;
		}
		elseif (($total_less_quarters >= 10) && ($total_less_quarters < 20))
		{
			$dimes_left = 1;
		}
		elseif (($total_less_quarters >= 20) && ($total_less_quarters < 30))
		{
			$dimes_left = 2;
		}

		# How much change is left after you subtract the dimes?
		$total_less_dimes = $total_cents - ($quarters_left * 25) - ($dimes_left * 10);

		# NICKELS
		if ($total_less_dimes < 5)
		{
			$nickels_left = 0;
		}
		elseif (($total_less_dimes >= 5) && ($total_less_dimes < 10))
		{
			$nickels_left = 1;
		}

		# How much change is left after you subtract the nickels? This is the final cents count.
		$pennies_left = $total_cents - ($quarters_left * 25) - ($dimes_left * 10) - ($nickels_left * 5);


		echo "<p>You are due $total_change cents back in change total.</p>";
		echo "<p>You are due back $dollars dollar(s), $quarters_left quarter(s), $dimes_left dime(s), $nickels_left nickel(s), and $pennies_left cent(s).</p>";

		echo "<hr>"; # Break between Challenges

		echo "<h2>Challenge 2: 99 Bottles of Beer</h2>";

		$count_input = 99;
		$count_next = $count_input - 1;

		/*
		for ($count = $count_input ; $count > 0 ; --$count)
		{
			echo "<p>$count bottles of beer on the wall, $count bottles of beer.<br>
			Take one down, pass it around, $count bottles of beer on the wall.</p>";
		}
		*/

		do
		{
			echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
			Take one down, pass it around, $count_next bottles of beer on the wall.</p>";
			--$count_input;
			--$count_next;
		} while ($count_input > 2);

		for ($count_input = 2 ; $count_input > 1 ; --$count_input)
		{
			echo "<p>$count_input bottles of beer on the wall, $count_input bottles of beer.<br>
			Take one down, pass it around, $count_next bottle of beer on the wall.</p>";
			--$count_input;
			--$count_next;
		}

		for ($count_input = 1 ; $count_input > 0 ; --$count_input)
		{
			echo "<p>$count_input bottle of beer on the wall, $count_input bottle of beer.<br>
			Take one down, pass it around, $count_next bottles of beer on the wall.</p>";
			--$count_input;
			--$count_next;
		}

		for ($count_input = 0 ; $count_input > -1 ; --$count_input)
		{
			echo "<p>No more bottles of beer on the wall, no more bottles of beer.<br>
			We've taken them down and passed them around; now we're drunk and passed out!</p>";
		}
/*
		do
		{
			echo "<p>$count_input bottle of beer on the wall, $count_input bottle of beer.<br>
			Take one down, pass it around, $count_next bottles of beer on the wall.</p>";
		} while ($count_input = 0); */
		
		/*
		if ($count = 0)
		{
			echo "<p>No more bottles of beer on the wall, no more bottles of beer.<br>
			We've taken them down and passed them around; now we're drunk and passed out!</p>";
		}
		*/

		?>
	</body>
</html>