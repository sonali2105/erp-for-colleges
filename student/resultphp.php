<?php
$sem=$_GET['sem'];
$adm_no=$_GET['adm_no'];
$info="";
$conn=mysqli_connect("localhost","root") or die("database connection failed");
	mysqli_select_db($conn,"test") or die("database not selected"); 
	$result=mysqli_query($conn,"SELECT sub,grade from result WHERE sem=$sem AND adm_no='$adm_no' ");
	for($i=1;$i<=mysqli_num_rows($result);$i++)
	{
		$row=mysqli_fetch_array($result);
		$sub=$row['sub'];
		$grade=$row['grade'];
		$info.="<tr>";
		$info.="<th scope='row'>";
		$info.="<div class='media align-items-center'>";
		$info.="<div>";
		$info.="<span>".$sub."</span>";
		$info.="</div>";
		$info.="</div>";
		$info.="</th>";
		$info.="<td>".$grade."</td>";
		$info.="</tr>";
	}
echo $info;
?>