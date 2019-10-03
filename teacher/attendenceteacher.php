<?
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>GMS | GALGOTIAS MANAGEMENT SYSTEM</title>
<!-- Favicon -->
  <link href="../img/blue.jpg" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../vendor/nucleo/css/nucleo.css" rel="stylesheet">
 
  <!-- Argon CSS -->
  <link type="text/css" href="../argon.css?v=1.0.0" rel="stylesheet"></head>

<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../dashboard/faculty.php">
        <img src="../img/blue.jpg" class="navbar-brand-img" alt="logo">
      </a>
      <!-- User -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../dashboard/faculty.php">
                <img src="../img/blue.jpg">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard/faculty.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="attendenceteacher.php">
              <i class="ni ni-planet text-blue"></i> Attendence
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-pin-3 text-orange"></i> Time Table
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-single-02 text-yellow"></i> Quizs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Assignments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-key-25 text-info"></i>Internal Marks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-circle-08 text-pink"></i> Notes
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-spaceship"></i> Digital Library
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-palette"></i> News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-ui-04"></i> Social
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" style="overflow:hidden">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../gallery.html">Gallery</a>
        <!-- Form -->
       
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image" src="">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">TEACHER</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="changepassword.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Change Password</span>
              </a>
             
              <div class="dropdown-divider"></div>
              <a href="../logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
	<!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"  >
      <div class="container-fluid" >
        <div class="header-body">
		<h3 style="color:white;display:inline;padding-left:20%"> Date&nbsp;&nbsp;&nbsp;&nbsp;</h3><input class="form-control form-control-alternative" style="width:20%;display:inline;"type="date" name="date" id="myDate" ><br><br>
		<h3 style="color:white;display:inline;padding-left:20%"> Slot&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3><select name="slot" id="slot" class="form-control form-control-alternative" style="display:inline;width:20%">
    <option value="0">Select slot:</option>
    <option value="8:30-9:20">8:30-9:20</option>
    <option value="9:20-10:10">9:20-10:10</option>
    <option value="10:10-11:0">10:10-11:0</option>
    <option value="11:00-11:50">11:00-11:50</option>
    <option value="11:50-12:40">11:50-12:40</option>
    <option value="12:40-1:30">12:40-1:30</option>
    <option value="1:30-2:20">1:30-2:20</option>
    <option value="2:20-3:10">2:20-3:10</option>
    <option value="3:10-4:00">3:10-4:00</option>
    <option value="4:00-4:50">4:00-4:50</option>
    <option value="4:50-5:40">4:50-5:40</option>
	<option value="8:30-10:10">8:30-10:10</option>
  </select><br><br>
		<div style="padding-left:28%"><button  class="btn btn-sm btn-primary" onclick="myFunction()">Confirm</button></div></form>
		 </div></div></div>
		 <div class="row" >
        <div class="col" >
          <div class="card shadow">
            <div class="card-header border-0" >
              <h3 class="mb-0">Attendence</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
				  <th scope="col">Student Name</th>
				  <th scope="col" >Attendence</th><span id="msg"></span>
				   </tr>
                </thead>
               <tbody id="student_name">
			    </tbody>
				</table>
		        </div></div></div></div>
              
<script>
function mark(adm)
{
	index1=adm.indexOf("+");
	id=adm.substring(0,index1);
	index2=adm.indexOf("-");
	subject=adm.substring((index1+1),index2);
	index3=adm.indexOf("=");
	date=adm.substring((index2+1),index3);
	index4=adm.indexOf("*");
	slot=adm.substring(index3+1,index4);
	var reqq=new XMLHttpRequest();
	  reqq.open("get","attendencemark.php?adm_no1="+id+"&subject1="+subject+"&date="+date+"&slot="+slot,true);
      reqq.send();
	reqq.onreadystatechange=function(){
		document.getElementById(student_name).innerHTML=reqq.responseText;
		//document.write(reqq.responseText);
	};
	idnew=adm.substring(index4+1);
	idnewp=id+idnew+"p";
	document.getElementById(idnewp).src="../img/like_thumb_green.png";
	idnewa=id+idnew+"a";
	document.getElementById(idnewa).src="../img/dislike_thumb.png";
}
</script>
<script>
function unmark(adm)
{
	index1=adm.indexOf("+");
	id=adm.substring(0,index1);
	index2=adm.indexOf("-");
	subject=adm.substring((index1+1),index2);
	index3=adm.indexOf("=");
	date=adm.substring((index2+1),index3);
	index4=adm.indexOf("*");
	slot=adm.substring(index3+1,index4);
		var reqqq=new XMLHttpRequest();
	  reqqq.open("get","attendenceunmark.php?adm_no1="+id+"&subject1="+subject+"&date="+date+"&slot="+slot,true);
      reqqq.send();
	reqqq.onreadystatechange=function(){
		document.getElementById(student_name)=reqqq.responseText;
	};
	idnew=adm.substring(index4+1);
	idnewa=id+idnew+"a";
	document.getElementById(idnewa).src="../img/dislike_thumb_red.png";
	idnewp=id+idnew+"p";
	document.getElementById(idnewp).src="../img/like_thumb.png";
}
</script>
<script>
function myFunction() {
    var x = document.getElementById("myDate").value;
    var y=document.getElementById("slot").value;
	
	
	var req=new XMLHttpRequest();
	req.open("get","test.php?date="+x+"&slot="+y,true);
	req.send();
	req.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("student_name").innerHTML=req.responseText;
				
			}
	};
}
</script><script src="../vendor/jquery/dist/jquery.min.js"></script>
  <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../argon.js?v=1.0.0"></script></body></html>