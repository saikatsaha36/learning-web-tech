<?php


	if(isset($_POST['submit'])){

		$deg =  $_POST['deg'];

		if($deg == "" ){
			echo "Null submission...";
		}

		}else{
			echo 'Success  !!!   ';
			foreach ($_POST["deg"] as $deg)
		{
				echo $deg."  ";
		}


?>