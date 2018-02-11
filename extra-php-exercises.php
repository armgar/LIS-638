<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework #1 for LIS-638 Web Development">
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
		echo "<h1>Extra PHP Exercises</h1>";
		echo "<h2>1: <strong>Lists</strong></h2>";
	
		$list1 = array("1", "2", "3"); // list (array) one
		$list2 = array("a", "b", "c"); // list (array) two
		
		// this combines the two lists and prints the result
		echo "Final new array is Array " . $list1[0] . ", " . $list2[0] . ", " . $list1[1] . ", " . $list2[1] . ", " . $list1[2] . ", " . $list2[2];

		?>
	</body>
</html>