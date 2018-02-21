<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework for LIS-638 Web Development">
		<title>Week 6 Examples&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$name = array("Armando", "Hello" , "Garcia");
			echo $name[1] . "<br>";
			unset ($name[1]);
			print_r (array_values($name));
			$name[1] = "Hello";
			print_r (array_values($name));
			
			$fullName = array(
				"first" => "Armando",
				"middle" => "Hello",
				"last" => "Garcia",
			);
			
			print_r (array_values($fullName));
			
			foreach ($fullName as $item) {
				echo "<p>" . $item . "<p>";
			};
			
			foreach ($fullName as $key => $value) {
				echo "<p> The key is " . $key . " and the value is " . $value . "<p>";
			};
			
			$studentGrades = array (
				"233255435" => "95.9",
				"234832893" => "82.33",
				"238385555" => "85.2",
				"272727237" => "72.0",
				"334844855" => "86.5",
			);
			
			foreach ($studentGrades as $key => $value) {
				echo "<p>Student ID " . $key . " received a grade of " . $value . "<p>";
			};
			
			/*
			Look up how to add arrays in PHP doc
			$totalGradesSum = $studentGrades
			$overallAverage = $totalGradesSum / $numberOfStudents;
			*/
		?>
	</body>
</html>