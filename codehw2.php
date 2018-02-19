<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework for LIS-638 Web Development">
		<title>Code Homework 2&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			body {
				font-size: 20px;
				color: #555555;
				background-color: #f5f5f5;
				font-family: 'Montserrat', sans-serif;
				margin: auto;
				padding: 25px;
				max-width: 960px;
			}
			h1 {
				text-align: center;
				text-transform: uppercase;
				color: #ffffff;
				background-color: #f2784b;
				padding: 5px 0;
			}
			h2 { 
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
		echo "<h1>Code Homework 2</h1>";
		
		# Challenge 1
		echo "<h2>1: <strong>Challenge: ISBN Validation</strong></h2>";
		
		# Set string to a variable
		$isbn = "156881111X"; # Valid
		#$isbn = "0747532699"; # Valid
		#$isbn = "1123456789"; # Not valid
		echo "<p>This is the ISBN number we have to validate " . $isbn . ".</p>";
		
		# Determine string length; valid ISBN number is 10 digits long
		$isbnLength = strlen($isbn);
		echo "<p>This is the length of the ISBN number: " . $isbnLength . ".</p>";
		
		# Convert ISBN string input into an array
		$isbnArray = array(
			substr($isbn, 0, 1),
			substr($isbn, 1, 1),
			substr($isbn, 2, 1),
			substr($isbn, 3, 1),
			substr($isbn, 4, 1),
			substr($isbn, 5, 1),
			substr($isbn, 6, 1),
			substr($isbn, 7, 1),
			substr($isbn, 8, 1),
			substr($isbn, 9, 1)
			);

		# Pinting the ISBN array
		print_r(array_values($isbnArray));
		echo "<p>" . $isbnArray[0] . $isbnArray[1] . $isbnArray[2] . $isbnArray[3] . $isbnArray[4] . $isbnArray[5] . $isbnArray[6] . $isbnArray[7] . $isbnArray[8] . $isbnArray[9] . "</p>";
		foreach ($isbnArray as $item) {
			echo $item;
		};

		# Convert final ISBN value to 10 if it is an 'X'
		if ($isbnArray[9] == "X") {
			$isbnArray[9] = 10;
		}

		# Divide by 11
		$isbnFactor = (($isbnArray[0] * 10) + ($isbnArray[1] * 9) + ($isbnArray[2] * 8) + ($isbnArray[3] * 7) + ($isbnArray[4] * 6) + ($isbnArray[5] * 5) + ($isbnArray[6] * 4) + ($isbnArray[7] * 3) + ($isbnArray[8] * 2) + ($isbnArray[9] * 1)) / 11;
		
		if ($isbnFactor == ((int) $isbnFactor)) {
			echo "<p>" . $isbn . " is a valid number!</p>";

		} else {
			echo "<p>" . $isbn . " is NOT a valid number!</p>";
		}

		/* 
		# Trying to figure out a counter or loop for the equation 
		for ($counter = 10; $counter > 0; --$counter || $digit = 0; $digit < 10; ++$digit)
		{
			$isbnFactor = (($isbnArray[$digit] * $counter) / 11);
		}

		echo "<p>" . $isbnFactor . "</p>";
		
		if ($isbnFactor == ((int) $isbnFactor)) {
			echo "<p>" . $isbn . " is a valid number!</p>";

		} else {
			echo "<p>" . $isbn . " is NOT a valid number!</p>";
		}
		*/

		# Challenge 2
		echo "<hr><h2>2: <strong>Challenge: Coin Toss</strong></h2>";

		echo '<p><img alt="heads side of a penny" height="50" width="50" src="images/penny-heads.png"></p>';
		echo '<p><img alt="tails side of a penny" height="50" width="50" src="images/penny-tails.png"></p>';
		?>
	</body>
</html>