<?php
$adm_no1=$_GET['adm_no1'];
$subject1=$_GET['subject1'];
$date=$_GET['date'];
$slot=$_GET['slot'];

$con=mysqli_connect("localhost","root") or die("database connection failed");
mysqli_select_db($con,"test") or die("database not selected"); 
$result=mysqli_query($con,"SELECT day,batch from select_slot WHERE slot='$slot'") or die("enable to get");
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$rows=mysqli_fetch_array($result);
	$day=$rows['day'];
	$batch=$rows['batch'];
}

$result1=mysqli_query($con,"SELECT dates from attendance WHERE slot='$slot' AND subject='$subject1' AND dates='$date' And adm_no='$adm_no1'") or die("enable to get");
$num1=mysqli_num_rows($result1);

if($num1==0)
{
	$result1=mysqli_query($con,"insert into attendance values('$adm_no1','$subject1','$batch','$day','$slot','$date','3')") or die("enable to get");
	echo "attendance mark";
}
else
{
	echo " ";
	//$result2=mysqli_query($con,"SELECT dates from attendance WHERE slot='$slot' AND subject='$subject1' AND dates='$date' AND adm_no='$adm_no1'") or die("enable to get");
	//$num2=mysqli_num_rows($result2);
	//if($num2==0)
	//{
		//mysqli_query($con,"update attendance set dates='$date' WHERE adm_no='$adm_no1'") or die("enable to get");
		//echo "attendence mark";
	//}
	//else
	//{
		//echo " ";
	//}
}
?>