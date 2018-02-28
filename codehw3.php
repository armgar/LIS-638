<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework for LIS-638 Web Development">
		<title>Code Homework 3&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			# Challenge 1: Book Lists
			$bookData = array (
				"book1" => array(
					"title" => "PHP and MySQL Web Development",
					"author" => "Luke Welling",
					"pages" => "144",
					"type" => "Paperback",
					"price" => "31.63"),

				"book2" => array(
					"title" => "Web Design with HTML, CSS, JavaScript and jQuery",
					"author" => "Jon Duckett",
					"pages" => "135",
					"type" => "Paperback",
					"price" => "41.23"),

				"book3" => array(
					"title" => "PHP Cookbook: Solutions & Examples for PHP Programmers",
					"author" => "David Sklar",
					"pages" => "14",
					"type" => "Paperback",
					"price" => "40.88"),

				"book4" => array(
					"title" => "JavaScript and JQuery: Interactive Front-End Web Development",
					"author" => "Jon Duckett",
					"pages" => "251",
					"type" => "Paperback",
					"price" => "22.09"),

				"book5" => array(
					"title" => "Modern PHP: New Features and Good Practices",
					"author" => "Josh Lockhart",
					"pages" => "7",
					"type" => "Paperback",
					"price" => "28.49"),

				"book6" => array(
					"title" => "Programming PHP",
					"author" => "Kevin Tatroe",
					"pages" => "26",
					"type" => "Paperback",
					"price" => "28.96")
			);
			
			/*
			# In-Class discussion
			$sum = 0;
			echo "<table>";
			foreach ($bookData AS $item => $value) {
				echo "<tr>";
				echo "<td>" . $value["title"]. "</td>";
				$sum = $sum + $value["price"];
				foreach ($value AS $key => $keyOne) {
					echo "<td>" . $keyOne . "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
			*/
			
			$totalPrice = ($bookData["book1"]["price"]) + ($bookData["book2"]["price"]) + ($bookData["book3"]["price"]) + ($bookData["book4"]["price"]) + ($bookData["book5"]["price"]) + ($bookData["book6"]["price"]);

			echo "<h1>Code Homework 3</h1>
				<br>
				<h2>Challenge 1: Book Lists</h2>
				<table border=1 class='bookList'>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Pages</th>
						<th>Type</th>
						<th>Price</th>
					</tr>
					<tr>
						<td>" . $bookData["book1"]["title"] . "</td>
						<td>" . $bookData["book1"]["author"] . "</td>
						<td>" . $bookData["book1"]["pages"] . "</td>
						<td>" . $bookData["book1"]["type"] . "</td>
						<td>$" . $bookData["book1"]["price"] . "</td>
					</tr>
					<tr>
						<td>" . $bookData["book2"]["title"] . "</td>
						<td>" . $bookData["book2"]["author"] . "</td>
						<td>" . $bookData["book2"]["pages"] . "</td>
						<td>" . $bookData["book3"]["type"] . "</td>
						<td>$" . $bookData["book3"]["price"] . "</td>
					</tr>
					<tr>
						<td>" . $bookData["book3"]["title"] . "</td>
						<td>" . $bookData["book3"]["author"] . "</td>
						<td>" . $bookData["book3"]["pages"] . "</td>
						<td>" . $bookData["book3"]["type"] . "</td>
						<td>$" . $bookData["book3"]["price"] . "</td>
					</tr>
					<tr>
						<td>" . $bookData["book4"]["title"] . "</td>
						<td>" . $bookData["book4"]["author"] . "</td>
						<td>" . $bookData["book4"]["pages"] . "</td>
						<td>" . $bookData["book4"]["type"] . "</td>
						<td>$" . $bookData["book4"]["price"] . "</td>
					</tr>
					<tr>
						<td>" . $bookData["book5"]["title"] . "</td>
						<td>" . $bookData["book5"]["author"] . "</td>
						<td>" . $bookData["book5"]["pages"] . "</td>
						<td>" . $bookData["book5"]["type"] . "</td>
						<td>$" . $bookData["book5"]["price"] . "</td>
					</tr>
					<tr>
						<td>" . $bookData["book6"]["title"] . "</td>
						<td>" . $bookData["book6"]["author"] . "</td>
						<td>" . $bookData["book6"]["pages"] . "</td>
						<td>" . $bookData["book6"]["type"] . "</td>
						<td>$" . $bookData["book6"]["price"] . "</td>
					</tr>
				</table>
				<p class='totalPrice'><strong>The total price for six books is $" . $totalPrice . "</strong></p>";

			# Challenge 2: Coin Toss, continued
			echo "<br><h2>Challenge 2: Coin Toss, continued</h2>";
			$pennyHeadsSide = '<img alt="heads side of a penny" height="100" width="100" src="https://upload.wikimedia.org/wikipedia/commons/8/84/2005-Penny-Uncirculated-Obverse.png">';
			$pennyTailsSide = '<img alt="tails side of a penny" height="100" width="100" src="https://upload.wikimedia.org/wikipedia/commons/e/e5/2005_Penny_Rev_Unc_D.png">';

			// $numberOfFlips = 17;				
			// echo "<p>Flipping a coin X times...</p>"; # introduce for loop to flip and print 3 times between 0,1
			// for ($flips = 0; $flips <= $numberOfFlips; ++$flips) {
			// 	$flipOneCoin = mt_rand(0,1);
			// 	if ($flipOneCoin == 1) {
			// 		echo $pennyHeadsSide;
			// 	} else {
			// 		echo $pennyTailsSide;
			// 	}
			// }
			$numberOfHeads = 5;
			$headsCounter = 0;
			$flipCounter = 0;

			while ($headsCounter < $numberOfHeads) {
				$flip = mt_rand(0,1);
				$flipCounter++;
				//if only runs when mt_rand outcome is TRUE (1 or heads)
				if ($flip) {
					$headsCounter++;
					echo $pennyHeadsSide;
				}
				# else resets value of $headsCounter to 0
				else {
					$headsCounter = 0;
					echo $pennyTailsSide;
				}
			}
			# Loop terminates once $headsCounter has reached $numberOfHeads number
			echo "<p>Flipped " .$numberOfHeads . "  heads in a row in " . $flipCounter . " flips!</p>";

		?>
	</body>
</html>