<?php
session_start();

require_once 'includes/auth.php';
require_once 'includes/login.php';
require_once 'includes/functions.php';

if (isset($_POST['submit'])) { //check if the form has been submitted
	if ((empty($_POST['name'])) || (empty($_POST['age'])) || (empty($_POST['sex'])) || (empty($_POST['species'])) || (empty($_POST['caretaker_id'])) ) {
		$message = '<p class="error">Please fill out all of the form fields!</p>';
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$name = sanitizeMySQL($conn, $_POST['name']);
		$age = sanitizeMySQL($conn, $_POST['age']);			
		$sex = sanitizeMySQL($conn, $_POST['sex']);
		$species = sanitizeMySQL($conn, $_POST['species']);
		$caretaker_id = sanitizeMySQL($conn, $_POST['caretaker_id']);
		$query = "INSERT INTO pets VALUES(NULL, \"$name\", $age, \"$sex\", \"$species\", \"$caretaker_id\")";
		$result = $conn->query($query);
		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
			$message = "<p class=\"message\">Successfully added new animal named $name! <a href=\"index.php\">Return to pets list</a></p>";
		}
	}
}
?>

<?php 
include_once 'includes/header.php'; 
if (isset($message)) echo $message;
?>
<form method="post" action="">
	<fieldset>
		<legend>Add a Pet</legend>
		<label for="name">Name:</label>
		<input type="text" name="name"><br> 
		<label for="age">Age:</label> 
		<select name="age">
		<?php
			for ($i=1;$i<=30;$i++) {
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
		 ?>
		</select><br>		
		<label for="sex">Sex:</label> 
		<select name="sex">
		  <option value="F">Female</option>
		  <option value="M">Male</option>
		</select><br>
		<label for="species">Species:</label> 
		<select name="species">
		  <option value="dog">Dog</option>
		  <option value="cat">Cat</option>
		</select><br>
		<label for="caretaker_id">Caretaker:</label>
		<select name="caretaker_id">
		  <option value="1">Bill Smith</option>
		  <option value="2">Jennifer Dougan</option>
		</select><br>
		<input type="submit" name="submit">
	</fieldset>
</form>
<?php include_once 'includes/footer.php'; ?>