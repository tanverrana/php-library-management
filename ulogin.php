<?php session_start();
$_SESSION['uname']=$_POST['uname'];

$con1=mysqli_connect("localhost","root","","dblibrary");

$uname=$_POST['uname'];
$pass=$_POST['upass'];
$query="SELECT * FROM `tbuser` where uname='$uname'";
$data=mysqli_query($con1,$query);
$row=mysqli_fetch_array($data);
if($data)
{	
	if($row['uname']==$uname && $row ['upass']==$pass)
	header("location:http://localhost/Library%20Management/view.php");
	else 
	 header("location:http://localhost/Library%20Management/userlogin.php");
}
else 
	 header("location:http://localhost/Library%20Management/userlogin.php");
?>