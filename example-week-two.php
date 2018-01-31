<!DOCTYPE html>
<html>
<body>
<?php
// Create three string variables to hold your first, last, and middle names

$first = "Bob";
$middle = "John";
$last = "Smith";
$age = 36; // Create a numeric variable to hold your current age

// Print out your full name and age in the following format: Last, first middle (age)

echo "$last, $first $middle ($age)";

// Print out your name and age within an HTML bulleted list
echo "<ul>";
echo "<li>$last, $first $middle ($age)</li>";
echo "</ul>";

// Create an array with elements for each part of your name

$name = array("Bob","John","Smith");

// Cast your first name as an int and see what value this results in

echo (int) $first;

// Print out your full name and age in the same format, but use string concatenation:

echo $last . ", " . $first . " " . $middle . " (" . $age . ")";

// Calculate what your age will be in 5 years and create a variable to store the value 

$ageIn5 = $age + 5;

// Calculate the difference between your current age and your age in 2034 and store the value

$ageIn2034 = $age + (2034-2015);

// Based on your age in years, calculate your age in months and store the value

$ageInMonths = $age * 12;

echo $ageInMonths . "<br>";

// Use the increment operator to print your age in 1 year
echo ++$age;

?>
</body>
</html>