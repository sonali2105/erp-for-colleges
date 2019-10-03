<?php
$con=mysqli_connect("localhost","root") or die("cannot connect");
mysqli_select_db($con,"demodb") or die("cannot select db");
//$query="CREATE TABLE student
       // (username varchar(30) PRIMARY KEY,password varchar(30) NOT NULL)";
//mysqli_query($con,$query) or die("table not created");
$query="INSERT INTO student
        (username,password)
		VALUES('17SCSE107018','12345')";
if(mysqli_query($con,$query))
{
	echo "new record added";
}
else
{
	echo mysqli_error($con);
}
$query="INSERT INTO student
        (username,password)
		VALUES('17SCSE101439','123456')";
mysqli_query($con,$query) or die("data two not entered");
$query="SELECT * FROM student";
$result=mysqli_query($con,$query) or die("data not selected");
$num=mysqli_num_rows($result) or die("rows not counted");
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result) or die("array not fetched");
	echo "username:".$row['username']."password:".$row['password'];
}
mysqli_close($con);
?>
