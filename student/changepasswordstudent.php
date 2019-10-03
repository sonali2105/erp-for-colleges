<?php
session_start();
$username=$_SESSION['adm_no'];
$password=$_SESSION['pwd'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"student");
if(($_POST['old_password']==$password) and ($_POST['new_password']==$_POST['confirm_password']))
{
	$pwd=$_POST['new_password'];
	mysqli_query($con,"UPDATE psinfo SET pwd='$pwd' WHERE adm_no='$username'");  
	header('location:http://localhost/pro/logout.php');
}
else
{
	header('location:http://localhost/pro/changepassword.php');
}

?>
