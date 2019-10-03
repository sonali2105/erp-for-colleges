<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if(substr($username,0,1)=="T")
{

	
	$con=mysqli_connect("localhost","root");
	mysqli_select_db($con,"test");
	$query="SELECT * from teacher_info WHERE teacher_id='$username'";  
	$result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
	for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	if(($row['teacher_id']==$username))
	{
		$_SESSION['teacher_id']=$username;
		header('location:http://localhost/pro/dashboard/faculty.php');
	}	
	else
	{
		header('location:http://localhost/pro/login.php');
	}
}
	
}
else{
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"student");
$query="SELECT * from psinfo";   // GETTING PERSONAL INFO FROM  DATABASE
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	if(($row['adm_no']==$username) and ($row['pwd']==$password))
	{
		$_SESSION['first_name']=$row['first_name'];
		$_SESSION['full_name']=$row['first_name']." ".$row['last_name'];
		$_SESSION['dp']=$row['dp'];
		$_SESSION['adm_no']=$row['adm_no'];
		$_SESSION['gmail']=$row['gmail'];
		$_SESSION['dob']=$row['dob'];
		$_SESSION['pwd']=$row['pwd'];
		$_SESSION['contact']=$row['contact'];
		$k=1;
	}
	else
	{
		header('location:http://localhost/pro/login.php');
	}
}
if($k==1)
{
$query="select * from addinfo where adm_no='$username'";     // GETTING ADDRESS INFORMATION FROM DATABASE
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['district']=$row['district'];
	$_SESSION['state']=$row['state'];
	$_SESSION['address']=$row['address'];
	$_SESSION['country']=$row['country'];
	$_SESSION['pincode']=$row['pincode'];
	$_SESSION['uiid']=$row['uiid'];
	$_SESSION['religion']=$row['religion'];
	$_SESSION['category']=$row['category'];
	$_SESSION['cast']=$row['cast'];
}
}


if($k==1)
{
$query="select * from gdinfo where adm_no='$username'";     // GETTING PARENTS INFORMATION FROM DATABASE
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['father_name']=$row['father_name'];
	$_SESSION['mother_name']=$row['mother_name'];
	$_SESSION['father_contact']=$row['father_contact'];
	$_SESSION['mother_contact']=$row['mother_contact'];
	header('location:http://localhost/pro/dashboard/dashboard.php');
}
}
}

?>	
	