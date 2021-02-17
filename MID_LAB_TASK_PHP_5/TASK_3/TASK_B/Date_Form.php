<?php

if(isset($_POST['submit'])){

	$dob = $_POST['dob'];
	if ($dob == "" ){
		echo "Null Submission...";
	}else{
		echo $dob;
	}
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			<input type="Date" name="dob" value=""> <br>
			<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>
</body>
</html>