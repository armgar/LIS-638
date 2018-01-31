<DOCTYPE! html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Times Table Example</title>
	</head>
	<body>
		<?php
		$num_times_table = 1;	
	
		echo '<table border=1>';
			for ($counter = 1; $counter <= $num_times_table; ++$counter)
			{
				echo '<tr>';
					for ($inner_counter = 1; $inner_counter <= $num_times_table; ++$inner_counter)
					{
						echo '<td>';
							$counter = $counter*$inner_counter;
						echo '</td>';
					}
				echo '</tr>';
			}	
		echo '</table>';
		?>
	</body>
</html>