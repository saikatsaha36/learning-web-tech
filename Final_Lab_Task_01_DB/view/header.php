<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Table Example</title>
</head>
<body>
	<table border="1" width="100%" align="center">
		<tr align="center">
			<td  colspan="2" width="100px" align="Left">
				<img  src="logo.png" height="100px" width="150px">
				<p align="Right">

				<a href="index.html"> HOME</a>
			</p> 		
			</td>
		</tr>
		<tr align="left" height="80px" >
			<td colspan="2" width=100%>
				<h2>Welcome To Company </h2>
				<h2>Account</h2>
				<ul>
					<li><a href="dashboard.html"> Dashboard</a></li>
					<li><a href="view.html"> View Profile</a></li>
					<li><a href="editprofile.html"> Edit Profile</a></li>
					<li><a href="pic_change.html"> Change Profile Picture</a></li>
					<li><a href="changepass.html"> Change Passowrd</a></li>
					<li><a href="../controller/logout.php"> Logout </a></li>
				</ul>

	
		
	