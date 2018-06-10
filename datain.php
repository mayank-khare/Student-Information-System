<?php
$name=$_POST["name"];
$rollno=$_POST["rollno"];
$city=$_POST["city"];
$branch=$_POST["branch"];
$age=$_POST["age"];
$con=mysqli_connect("localhost","root","","student");
if(mysqli_connect_errno())
{
	echo "failed to connect to MySQL:".mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO student VALUES ('$name','$rollno','$city','$branch','$age')");

echo '<body bgcolor="OrangeRed"><center><a href="index.php"><h4>Go Back<h4></a>';
echo "<h2>The Project is Developed by Mayank Khare(53), Bharat Maheshwari(34) ,Manish Bodhke(50)  IT-'C' ,Oriental College of Technology.</h2> <br><h3>This Web Application is Powered by PHP, MySQL, HTML, CSS .<h3></center></body>";
mysqli_close($con);
?>


