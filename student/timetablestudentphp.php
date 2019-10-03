<?php
session_start();
$adm_no=$_GET['adm_no'];
$day=$_GET['day'];
function getroom($slot)
{ 
	$info="";
	$conn=mysqli_connect("localhost","root") or die("database connection failed");
	mysqli_select_db($conn,"test") or die("database not selected"); 
	$result_slot=mysqli_query($conn,"SELECT sub,time,room,teacher_id from timetable WHERE slot='$slot'");
	for($i=1;$i<=mysqli_num_rows($result_slot);$i++)
	{
		$row_slot=mysqli_fetch_array($result_slot);
		$sub=$row_slot['sub'];
		$time=$row_slot['time'];
		$room=$row_slot['room'];
		//echo $row_slot['teacher_id']
		$info.="<tr>";
		$info.="<th scope='row'>";
		$info.="<div class='media align-items-center'>";
		$info.="<div>";
		$info.="<span>".$sub."</span>";
		$info.="</div>";
		$info.="</div>";
		$info.="</th>";
		$info.="<td>".$time."</td>";
		$info.="<td>".$room."</td>";
		$info.="</tr>";
		
	}
	echo $info;
	mysqli_close($conn);
}


$con=mysqli_connect("localhost","root") or die("database connection failed");
mysqli_select_db($con,"student") or die("database not selected"); 
$result=mysqli_query($con,"SELECT batch,sem from academic WHERE adm_no=$adm_no");
for($i=1;$i<=mysqli_num_rows($result);$i++)
{
	$row=mysqli_fetch_array($result);
	$batch=$row['batch'];
	$sem=$row['sem'];
}
mysqli_close($con);
$con=mysqli_connect("localhost","root") or die("database connection failed");
mysqli_select_db($con,"test") or die("database not selected"); 
$result=mysqli_query($con,"SELECT slot from select_slot WHERE batch=$batch AND sem=$sem AND day=$day");
for($i=1;$i<=mysqli_num_rows($result);$i++)
{
	$row=mysqli_fetch_array($result);
    $slot=$row['slot'];
	getroom($slot);

}

mysqli_close($con);
?>