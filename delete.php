<?php

$con1=mysqli_connect("localhost","root","","dblibrary");



$query="DELETE FROM `tbbook` WHERE `tbbook`.`name` = '$_GET[name]'";
mysqli_query($con1,$query);
header("location:http://localhost/Library%20Management/adminupdate.php");

?>