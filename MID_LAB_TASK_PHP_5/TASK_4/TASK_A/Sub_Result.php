<?php


  if(isset($_POST['submt'])){

  	$gen = $_POST['gen'];

  	if($gen ==""){
  		echo "Null Submission...";
  	}
  	
  }else{
  	echo 'Invalid request...';
  }


?>