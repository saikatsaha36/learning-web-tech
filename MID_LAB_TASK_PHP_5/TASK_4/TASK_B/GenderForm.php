<?php


  if(isset($_POST['submit'])){

  	$gen = $_POST['gen'];
  
  	if($gen ==""){
  		echo "Null Submission..."; 	
  }else{
  	
  	echo "Sucessfull....";
  	echo $gen. "   is your Gender";
  }
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Select Gender</legend>

			           <input type="radio" name="gen" value="Male">Male
			           <input type="radio" name="gen" value="Female">Female
			           <input type="radio" name="gen" value="Other">Other
			           <br>

					   <input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>
</body>
</html> 