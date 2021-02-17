<?php

if(isset($_POST['submit'])){

	$deg =  $_POST['deg'];
	
	if($deg == "" ){
		echo "Null submission...";

	}else{
		echo "Success  !!!   ";
		foreach ($_POST["deg"] as $deg)
		{
				echo $deg."  ";
		}
		echo "   are your Degree";
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input field</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="deg[]" value="SSC">SSC
			<input type="checkbox" name="deg[]" value="HSC">HSC
			<input type="checkbox" name="deg[]" value="BSC">BSC
			<input type="checkbox" name="deg[]" value="MSC"> MSC <br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>