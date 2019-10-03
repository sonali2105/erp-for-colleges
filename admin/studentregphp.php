<?php
$id=$_GET['id'];
$course=$_GET['course']

if($id==1 and $course=='B.Tech')
{
	$result="";
	$result.="<option value=\"CSE\">CSE";
	$result.="<option value=\"BAO\">Specialization in Business Analytics";
	$result.="</option>";
	echo $result;
}
if($id==2 and )