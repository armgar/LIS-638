<DOCTYPE! html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Times Table Example</title>
	</head>
	<body>
		<?php
	
		echo "<table border=1>";
			for ($counter = 1; $counter <= 12; ++$counter)
			{
				echo "<tr>";
					for ($inner_counter = 1; $inner_counter <= 12; ++$inner_counter)
					{
						echo "<td>".$counter * $inner_counter."</td>";
					}
				echo "</tr>";
			}	
		echo "</table>";
		?>
	</body>
</html>