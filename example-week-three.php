<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Short PHP in-class example</title>
	</head>
	<body>
		<?php
		$tempf = 88;
		$sky = "Sunny!";
		
		# if statement
		if ($tempf >= 32)
		{
			echo "Good news! It's not freezing.";
		}
		
		if ($tempf < 32)
		{
			echo "Oh lordt! It's freezing! Watch out!";	
		}
		
		
		# elseif statement
		if ($tempf >= 32 && $tempf  <= 80)
		{
			echo "<p>Good news! It's not freezing.</p>";
		}
		elseif ($tempf > 80)
		{
			echo "<p>Way too hot out.</p>";	
		}
		
		# Switch statement
		
		switch ($sky) 
		{
			case "A little cloudy!":
				echo $sky;
				break;
			case "Sunny!":
				echo ":)";
				break;
			default:
				echo "No idea.";
				break;
		}
		
		# In class exercise
		
		
		$speedmph = 85;
		$currentdate = date("md");
		$birthday = "0131";
		
		
		
		if ($speedmph <= 60)
		{
			echo "<p>No ticket</p>";
		}
		elseif (($speedmph >= 61) && ($speedmph <= 80))
		{
			echo "<p>Small ticket</p>";
		}
		elseif ($speedmph >= 81)
		{
			echo "<p>Big ticket</p>";
		}
		
		/*
		if ($birthday==$currentdate) 
		{
			echo "<p>It's your birthday!</p>";
			echo "<p>Your speed before was $speedmph, but it's your birthday, so I changed it to: </p>";
			$speedmph = $speedmph-5;
			echo $speedmph;
		}
		*/
		
		$counter = 1;
		#while
		while (($speedmph > 80) && ($counter < 11)) 
		{
			echo "BAD BAD BAD<br>";
			++$counter;
		}
		
		#do
		do 
		{
			echo "BAD BAD BAD<br>";
			++$counter;
		} while (($speedmph > 80) && ($counter < 11));
		
		#for ... primarly used when you know the count or have a predetermined loop
		for ($counter = 1; $counter < 6; ++$counter)
		{
			echo "Right now \$counter is $counter<br>";
		}
	
		
		?>
	</body>
</html>