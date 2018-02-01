<DOCTYPE! html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Times Table Example</title>
	</head>
	<body>
		<?php
	
		echo "<p><table border=1>";
			for ($counter = 1; $counter <= 12; ++$counter)
			{
				echo "<tr>";
					for ($inner_counter = 1; $inner_counter <= 12; ++$inner_counter)
					{
						echo "<td>".$counter * $inner_counter."</td>";
					}
				echo "</tr>";
			}	
		echo "</table></p>";

		echo "<p><table border=1>";
			for ($counter = 1; $counter <= 12; ++$counter)
			{
				echo "<tr>";
					for ($inner_counter = 1; $inner_counter <= 12; ++$inner_counter)
					{
						($counter == $inner_counter ) ? $style = ' style="background-color: yellow;"' : $style = NULL;
						echo "<td$style>".$counter * $inner_counter."</td>";
					}
				echo "</tr>";
			}	
		echo "</table></p>";

		?>
	</body>
</html>