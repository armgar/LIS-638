<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework for LIS-638 Web Development">
		<title>Extra PHP Exercises&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			body {
				font-size: 18px;
				color: #555555;
				background-color: #ecf0f1;
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
		# Exercise 1
		$list1 = array("1", "2", "3"); // list (array) one
		$list2 = array("a", "b", "c"); // list (array) two

		echo "<h1>Extra PHP Exercises</h1>";
		echo "<h2>1: <strong>Lists</strong></h2>";
		echo "<p>Combining lists...</p>";
		echo "<p>Adding " . $list1[0] . " to the new list. Adding " . $list2[0] . " to the new list.</p>";
		echo "<p>Adding " . $list1[1] . " to the new list. Adding " . $list2[1] . " to the new list.</p>";
		echo "<p>Adding " . $list1[2] . " to the new list. Adding " . $list2[2] . " to the new list.</p>";
		// this combines the two lists and prints the result
		echo "<p>Final new array is Array (" . $list1[0] . ", " . $list2[0] . ", " . $list1[1] . ", " . $list2[1] . ", " . $list1[2] . ", " . $list2[2] . ").</p>";

		# Example from textbook
		$j = 0;
		foreach ($list1 as $item) {
			# code...
			echo "Final new array is $j: $item <br>";
			++ $j;
		}

		/* 
		# Not sure what I was trying to do here

		function list_combiner ($list1, $list2) {
			if () {
				$newarray = 
			} else {
				$newarray = 
			}
			return $newarray
		}

		$newlist = list_combiner ($list1, $list2);
		echo $newlist;
		*/

		# Exercise 2

		echo "<h2>2: <strong>Pig Latin - part a</strong></h2>";
		# Set string to a variable
		$hello = "Hello and welcome to the course";
		# Convert each word in the string into a value of an array
		$newArray = explode (" ", $hello);

		echo "<p>Converting the English text <em>" . $hello . "</em> to Pig Latin...</p>";
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

		?>
	</body>
</html>