<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Short PHP in-class example</title>
	</head>
	<body>
		<h1>Printing out my name excercise</h1>
		<?php
			$myage = 21;
			$myfirstname = "Armando";
			$mymiddlename = NULL;
			$mylastname = "Garcia";
			print "$mylastname, $myfirstname $mymiddlename ($myage)";
			
			print "<ul><li>$mylastname, $myfirstname $mymiddlename ($myage)</li></ul>";
				
			$myname = array($mylastname, $myfirstname, $mymiddlename, $myage);
			
			print (int) "$myname[0]";

			print $mylastname . ', ' . $myfirstname . $mymiddlename . ' (' . $myage . ')<p>';
			
			$myage += 5;
			print "$myage<p>";
			print "2034 - 2018"
		?>
	</body>
</html>