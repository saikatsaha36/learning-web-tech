<?php

   if(isset($_POST['submit'])){
   	
	   $name     = $_POST['myname'];
	   $password = $_POST['password'];

	if($name == "" || $password ==""){
	   echo "Null Submission...";
	}else{
	   echo "Success";
	}

}else{
	echo 'Invalid Request...';
}

?>