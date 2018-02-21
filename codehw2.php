<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework for LIS-638 Web Development">
		<title>Code Homework 2&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
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
		
		echo "<p>" . $isbnFactor . "</p>";
		
		/* in-class notes
		# Trying to figure out a counter or loop for the equation
		for ($digit = 1; $digit < 10; ++$digit)
		{
			if ($isbnArray[9] == "X") {
				$isbnArray[9] = 10;
			}
			$isbnFactor = 0;
			$counter = 10;
			$isbnFactor = $isbnFactor + (($isbnArray[$digit] * $counter) / 11);
			--$counter;
		}
		
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
		# Assign images to variables using html img tag
		$pennyHeadsSide = '<img alt="heads side of a penny" height="100" width="100" src="https://upload.wikimedia.org/wikipedia/commons/8/84/2005-Penny-Uncirculated-Obverse.png">';
		$pennyTailsSide = '<img alt="tails side of a penny" height="100" width="100" src="https://upload.wikimedia.org/wikipedia/commons/e/e5/2005_Penny_Rev_Unc_D.png">';
		
		echo "<p>Flipping a coin 1 time...</p>"; # flip between coins using 0 and 1, then print the result
		$flipOneCoin = mt_rand(0,1);
		if ($flipOneCoin == 1) {
			echo $pennyHeadsSide;
		} else {
			echo $pennyTailsSide;
		}

		echo "<p>Flipping a coin 3 times...</p>"; # introduce for loop to flip and print 3 times between 0,1
		for ($flips = 0; $flips < 3; ++$flips) {
			$flipOneCoin = mt_rand(0,1);
			if ($flipOneCoin == 1) {
				echo $pennyHeadsSide;
			} else {
				echo $pennyTailsSide;
			}
		}

		echo "<p>Flipping a coin 5 times...</p>";
		for ($flips = 0; $flips < 5; ++$flips) {
			$flipOneCoin = mt_rand(0,1);
			if ($flipOneCoin == 1) {
				echo $pennyHeadsSide;
			} else {
				echo $pennyTailsSide;
			}
		}

		echo "<p>Flipping a coin 7 times...</p>";
		for ($flips = 0; $flips < 7; ++$flips) {
			$flipOneCoin = mt_rand(0,1);
			if ($flipOneCoin == 1) {
				echo $pennyHeadsSide;
			} else {
				echo $pennyTailsSide;
			}
		}

		echo "<p>Flipping a coin 9 times...</p>";
		for ($flips = 0; $flips < 9; ++$flips) {
			$flipOneCoin = mt_rand(0,1);
			if ($flipOneCoin == 1) {
				echo $pennyHeadsSide;
			} else {
				echo $pennyTailsSide;
			}
		}

		?>
	</body>
</html>