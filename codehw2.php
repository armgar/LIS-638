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
		$isbn = "0747532699"; # Valid
		$isbn = "1123456789"; # Not valid
		echo "<p>This is the ISBN number we have to validate " . $isbn . ".</p>";
		
		# Determine string length; valid ISBN number is 10 digits long
		$isbnLength = strlen($isbn);
		echo "<p>This is the length of the ISBN number " . $isbnLength . ".</p>";
		
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

		$isbnFactor = (($isbnArray[0] * 10) + ($isbnArray[1] * 9) + ($isbnArray[2] * 8) + ($isbnArray[3] * 7) + ($isbnArray[4] * 6) + ($isbnArray[5] * 5) + ($isbnArray[6] * 4) + ($isbnArray[7] * 3) + ($isbnArray[8] * 2) + ($isbnArray[9] * 1)) / 11;
		$isbnCheck = $isbnFactor - ((int) $isbnFactor);

		for ($isbnCheck ; $isbnCheck >= 0 ; --$isbnCheck )
		{
			if ($isbnCheck == 0) {
				echo "<p>" . $isbn . " is a valid number!</p>";

			} else {
				echo "<p>" . $isbn . " is NOT a valid number!</p>";
			}
		}
/*
		echo "<p>Here is the text in Pig Latin: <em>" .  
			ucfirst(substr($newArray[0], 1, 6)) . lcfirst(substr($newArray[0], 0, 1))  . "ay" . 
			" " . substr($newArray[1], 1, 6) . substr($newArray[1], 0, 1)  . "ay" . 
			" " . substr($newArray[2], 1, 6) . substr($newArray[2], 0, 1)  . "ay" . 
			" " . substr($newArray[3], 1, 6) . substr($newArray[3], 0, 1)  . "ay" . 
			" " . substr($newArray[4], 1, 6) . substr($newArray[4], 0, 1)  . "ay" . 
			" " . substr($newArray[5], 1, 6) . substr($newArray[5], 0, 1)  . "ay" . "</em>.</p>";

		$pigLatin = "Ellohay ndaay elcomeway otay hetay oursecay";
		$newEnglishArray = explode(" ", $pigLatin);

		echo "<p>Converting the Pig Latin text <em>" . $pigLatin . "</em> to English...</p>";
		echo "<p>Here is the text in English: <em>" .  
			ucfirst(substr($newEnglishArray[0], 4, 1)) . lcfirst(substr($newEnglishArray[0], 0, 4))  .  
			" " . substr($newEnglishArray[1], 3, 1) . substr($newEnglishArray[1], 0, 2)  . 
			" " . substr($newEnglishArray[2], 6, 1) . substr($newEnglishArray[2], 0, 6)  . 
			" " . substr($newEnglishArray[3], 1, 1) . substr($newEnglishArray[3], 0, 1)  . 
			" " . substr($newEnglishArray[4], 2, 1) . substr($newEnglishArray[4], 0, 2)  . 
			" " . substr($newEnglishArray[5], 5, 1) . substr($newEnglishArray[5], 0, 5)  . "</em>.</p>";
*/
		?>
	</body>
</html>