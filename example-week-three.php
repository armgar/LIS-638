<DOCTYPE! html>
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
		
		?>
	</body>
</html>