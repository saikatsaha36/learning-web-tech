<?php



	if(isset($_POST['submit'])){

		$dob = $_POST['dob'];

		if($dob == ""){
			echo "Null Submission...";
		}

	}else{
		echo 'invalid request...';
	}


?> 