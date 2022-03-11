<?php

$con1=mysqli_connect("localhost","root","","dblibrary");

$bookname=$_POST['bname'];
$writername=$_POST['wname'];
$dept=$_POST['department'];


$extension= end(explode(".",$_FILES["file"] ["name"]));
$file=$bookname.".".$extension;
$tmpname=$_FILES['file'] ['tmp_name'];
$folder="upload/";

move_uploaded_file($tmpname,$folder.$file);

$sqlquery="INSERT INTO `tbbook` (`name`, `writer`, `department`, `file`) VALUES ('$bookname', '$writername', '$dept', '$file');"; 

mysqli_query($con1,$sqlquery);
header("location:http://localhost/Library%20Management/adminupdate.php");

?> 