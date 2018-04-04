<?php
	include "page_start.php";
?>
<h1>week 11&mdash;rock paper scissor</h1>
<h2>Let's play</h2>
<form action="example-week-eleven.php" method="GET">
	<label>Choose your non-weapon:</label>
	<input type="radio" name="choice" value="Rock"> Rock
	<input type="radio" name="choice" value="Paper"> Paper
	<input type="radio" name="choice" value="Scissors"> Scissors
	<input type="submit" name="submit" value="Submit">
</form>

<?php
# User's choice
$users_choice = $_GET["choice"];
echo "<p>You chose $users_choice!</p>";

# make computer pick choice
$computer_choice = mt_rand(0,2);
echo "<p>Computer chose " . $computer_choice . "!</p>";

# 0 is paper, 1 is rock, 2 is scissors
# rock beats scissor
# scissor beats paper
# paper beats rock

# tie case
if (
	($computer_choice==0 && $users_choice=="Paper")
	||
	($computer_choice==1 && $users_choice=="Rock")
	||
	($computer_choice==2 && $users_choice=="Scissors")
)
	echo "<h2>It's a tie!</h2>";
	
$connection->close();

?>
</body>
</html>