<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Code Homework #1 for LIS-638 Web Development">
		<title>Code Homework #1&mdash;Armando Garcia</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<style>
			body {
				font-size: 18px;
				color: #fff;
				background-color: #000;
				font-family: 'Montserrat', sans-serif;
				margin: auto;
				padding: 25px;
				max-width: 960px;
			}
			h1 {
				text-transform: uppercase;
			}
			h1, h2 { 
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
			print "Hello World!". "<br>";
			echo strrev ("Hello World!");
			echo "<br>";
			echo strlen ("Hello World!");
			echo "<br>";
			echo substr ("Pratt Manhattan", 6, 1) . "<br>";
			
			# Hereforth begin functions 
			
		/*	function whattoeat ($howhungry, $moneyavailable) {
				if (($howhungry > 7) && ($moneyavailable > 5)) {
					$decision = "Steak";
				} else {
					$decision = "Pizza";
				}
				echo $decision . "<br>";
			}
			
			whattoeat(8, 6);
			$howh = 6;
			$money = 1;
			whattoeat($howh , $money);
		*/	
			function whattoeat ($howhungry, $moneyavailable) {
				if (($howhungry > 7) && ($moneyavailable > 5)) {
					$decision = "Steak";
				} else {
					$decision = "Pizza";
				}
				return $decision . "<br>";
			}
			
			$whatimhaving = whattoeat(8, 5);
			echo $whatimhaving . "<br>";
			
			function tip ($mealprice, $tippercentage) {
				if (($mealprice > 0) && ($tippercentage > 0)) {
					$tipdue = ($mealprice * $tippercentage / 100);	
				} else {
					$tipdue = 0;
				}
				return round($tipdue, 2);
			}
			$mealcost = 25;
			$tippercent = 19;
			$tipamount = tip ($mealcost, $tippercent); 
			echo "You should tip $" . $tipamount . ", or you will be known as the peson who didn't tip. That is " . $tippercent . "% of the meal cost."; 
		?>
	</body>
</html>