<?php
$user='root';
$pass='';
$db='student';
$db=new mysqli("localhost",$user,$pass)
or die("unable to connect");
echo "connection success";
?>