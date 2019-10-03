<?php
session_start();
?>
<html>
<body>
<head><link href="../vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link type="text/css" href="../argon.css?v=1.0.0" rel="stylesheet"></head>
</body>
</html>
<?php
$time=$_GET['slot'];
$date=$_GET['date'];
$teacher_id="TEA1712";
//$date="2018-10-23";
//$teacher_id=$_SESSION['teacher_id'];
$teacher_id="TEA1712";
$date=date('Y-m-d',strtotime($date));
$day=date('l',strtotime($date));
$slot="";
function student($adm_no){
	$conn=mysqli_connect("localhost","root") or die("database connection failed");
	mysqli_select_db($conn,"student") or die("database not selected"); 
	$result_student=mysqli_query($conn,"SELECT full_name from psinfo WHERE adm_no='$adm_no'") or die("enable to get 1");
	for($i=1;$i<=mysqli_num_rows($result_student);$i++)
	{
		$row_student=mysqli_fetch_array($result_student);
		$full_name=$row_student['full_name'];
	    return $full_name;
	
	}
}

if($day=="Monday")
	$day='0';
if($day=="Tuesday")
	$day='1';
if($day=="Wednesday")
	$day='2';
if($day=="Thursday")
	$day='3';
if($day=="Friday")
	$day='4';
if($day=="Saturday")
	$day='5';
if($day=="Sunday")
	$day='6';


$con=mysqli_connect("localhost","root") or die("database connection failed");
mysqli_select_db($con,"test") or die("database not selected"); 
$result_slot=mysqli_query($con,"SELECT slot,day from select_slot WHERE time='$time' and day='$day'") or die("enable to get2");
for($i=1;$i<=mysqli_num_rows($result_slot);$i++)
{
	$row_slot=mysqli_fetch_array($result_slot);
	$slot=$row_slot['slot'];
	//$batch=$row_slot['batch'];
	//$sem=$row_slot['sem'];
	$day1=$row_slot['day'];
	$result_sub=mysqli_query($con,"SELECT sub from timetable WHERE slot='$slot' AND teacher_id='$teacher_id'") or die("enable to get 3");
	for($j=1;$j<=mysqli_num_rows($result_sub);$j++)
	{
		$row_sub=mysqli_fetch_array($result_sub);
		$sub=$row_sub['sub'];
	    $sub=strtolower($sub);
	}
		
}
$k=1;
$result_adm_no=mysqli_query($con,"SELECT adm_no from $sub WHERE slot='$slot'") or die("enable to get");
for($i=1;$i<=mysqli_num_rows($result_adm_no);$i++)
{   
	$row_adm_no=mysqli_fetch_array($result_adm_no);
	$adm_no=$row_adm_no['adm_no'];
	//$result_insert=mysqli_query($con,"insert into attendance(adm_no,subject,batch,day,slot,sem) values('$adm_no','$sub','$batch','$day1','$slot','$sem')") or die("enable to get");
	$student=student($adm_no);
	$res="";
	$res.="<tr>";
	$res.="<th scope=\"row\">";
	$res.="<div class=\"media align-items-center\">";
	$res.="<div class=\"media-body\">";
    $res.= "<span class=\"mb-0 text-sm\">".$student."</span>";
    $res.="</div>";	
	$res.="</div>";
    $res.="</th>";
	$k=(string)($k);
	$idp=$adm_no.$k."p";
	$ida=$adm_no.$k."a";
    $res.="<td><button value=\"$adm_no+$sub-$date=$slot*$k\" onclick=\"mark(this.value)\"><img src=\"../img/like_thumb.png\" id=\"$idp\" style=\"width:30px;height:30px;\"></button>&nbsp;&nbsp;<button value=\"$adm_no+$sub-$date=$slot*$k\" onclick=\"unmark(this.value)\"><img src=\"../img/dislike_thumb.jpg\" id=\"$ida\" style=\"width:30px;height:30px;\"></button></td>";
	$res.="<td></td>";
	$res.="</tr>";
	$k=(int)($k);
	$k++;
	echo $res;
}
?>
