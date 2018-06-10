<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="stylesheet" href="stylesheet.css">
<title>Form</title>
<h1>Student Information System</h1>
<div class="head">
Database Status - 
<?php 
require_once('in.php');
?>
</div>
</head>
<body>
<a href="viewdb.php"><p>View all Records</p></a>
		<form action="datain.php" method="post">
			<table width="50%" border="0" align="center">
				<tr>
					<td><p>Name:</p></td>
				<td><input type="text" name="name" autofocus></td></tr>
				<tr><td><p>Roll No. :</p></td>
				<td><input type="text" name="rollno"></td></tr>
				<tr><td><p>City:</p></td>
				<td><input type="text" name="city"></td></tr>
				<tr><td><p>Branch/Stream : </p></td>
				<td><input type="text" name="branch"></td></tr>
				<tr><td><p>Age:</p></td>
				<td><input type="text" name="age"></td></tr></table>
				<center><input type="submit" value="Submit! :)"></center>
				<br>
		</form>
<center><h2>The Project is Developed by Mayank Khare(53), Bharat Maheshwari(34) ,Manish Bodhke(50)  IT-'C' ,Oriental College of Technology.</h2> <br><h3>This Web Application is Powered by PHP, MySQL, HTML, CSS .<h3></center>
</body>
</html>
