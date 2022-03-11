<?php

$con1=mysqli_connect("localhost","root","","dblibrary");

$username=$_POST['uname'];
$useremail=$_POST['uemail'];
$user=$_POST['uuser'];
$userpassword=$_POST['upassword'];




$sqlquery="INSERT INTO `tbuser` (`name`, `email`, `uname`, `upass`) VALUES ('$username', '$useremail', '$user', '$userpassword');"; 

mysqli_query($con1,$sqlquery);
header("location:http://localhost/Library%20Management/userlogin.php");

?> 