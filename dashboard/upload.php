<?php
$adm=$_POST['adm'];
$adm=strtoupper($adm);
$f=$_FILES['dp'];
$filename=$f['name'];
$tempname=$f['tmp_name'];
$folder="../upload/".time().$filename;
move_uploaded_file($tempname,$folder);

$con=mysqli_connect("localhost","root") or die("connection problem");
mysqli_select_db($con,"student") or die("db not selevted");
$result=mysqli_query($con,"update psinfo set dp='$folder' where adm_no='$adm'");
print_r($result);
mysqli_close($con);
?>