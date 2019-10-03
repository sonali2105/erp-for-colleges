<?php
session_start();
/*if(!isset($_SERVER['PHP_AUTH_USER']))
{
	header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Mismatch"');
	exit();
}*/

$k=0;
if(isset($_POST['check']))
{
	$f=$_FILES['dp'];
	$filename=$f['name'];
	$tempname=$f['tmp_name'];
	$folder="../temp/".time().$filename;
	move_uploaded_file($tempname,$folder);
	$k=1;
}
?>
<!DOCTYPE html>
<html><head>
<title>GMS | Galgotias Mangement System</title>
 <link href="../img/blue.jpg" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../vendor/nucleo/css/nucleo.css" rel="stylesheet">
 
  <!-- Argon CSS -->
  <link type="text/css" href="../argon.css?v=1.0.0" rel="stylesheet">
<style>
.image-upload > input
{
    display: none;
}

.image-upload img
{
    
    cursor: pointer;
}</style>
  </head>
<body>

 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="../img/blue.jpg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../img/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
           
          
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./admin.html">
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
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a class="nav-link" href="admin.html">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-planet text-blue"></i> New Registration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-pin-3 text-orange"></i> Manage User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-single-02 text-yellow"></i> Attendence
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-bullet-list-67 text-red"></i> Hostel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-key-25 text-info"></i> Time Table
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">
              <i class="ni ni-circle-08 text-pink"></i> Examination
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship"></i> Library
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-palette"></i> Fees
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-ui-04"></i> Transport
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship"></i> News
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" >
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Gallery</a>
        <!-- Form -->
       
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="img/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Change Password</span>
              </a>
             
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
	 <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" >
      <div class="container-fluid">
        <div class="header-body">
		 </div></div></div>
		 <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                <form action="studentreg2.php" method="post" id="myform" enctype="multipart/form-data"> <div class="image-upload">
                   <label for="dp">
				   <?php
				   if($k==0)
				   {
						echo '<img src="../img/plus.png" id="showdp" class="rounded-circle"><input type="hidden" name="check">';
				   }
				   else
				   {
						echo '<img src="'.$folder.'" id="showdp" class="rounded-circle"><input type="hidden" name="check">';
				   }?>
                  </label><input id="dp" oninput="fun()" name= "dp" type="file"/>
				  </div></form>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4"></a>
                <a href="#" class="btn btn-sm btn-default float-right"></a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">17SCSEXXXXXX</span>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                 <span id="first_name" class="font-weight-bold"></span>&nbsp;<span id="last_name" class="font-weight-bold"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>
                </div>
                <div class="h5 mt-4" id="gmail">
                  <i class="ni business_briefcase-24 mr-2"></i>
				  </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Galgotias University 
                </div>
                <hr class="my-4" />
                <p></p>
                <a href="#"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
		  <form method="post" action="showdp.php" id="data"> 
            <div class="card-header bg-white border-0">
			
              <div class="row align-items-center">
			  
                <div class="col-8">
                  <h3 class="mb-0">New Registration</h3>
                </div>
                <div class="col-4 text-right">
                 <a href="#!" class="btn btn-sm btn-primary" onclick="fun2()">Save</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >First Name</label>
                        <input type="text" id="input-first-name" onkeyup="first_name(this.value)" class="form-control form-control-alternative" placeholder="First name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Last Name</label>
                        <input type="text" id="input-first-name" onkeyup="last_name(this.value)" class="form-control form-control-alternative" placeholder="Last name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Phone Number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Phone" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name" >Email</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" onkeyup="gmail(this.value)" placeholder="Email" >
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Adhar Number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Adhar Number" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">PAN</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="PAN" >
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Date Of Birth</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="MM/DD/YYYY" >
                      </div>
                    </div><div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Blood Group</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Blood Group">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">District</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Postal Code</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="Pincode" >
                      </div>
                    </div>
				</div>
				</div>
				
                <hr class="my-4" />
				<h6 class="heading-small text-muted mb-4">Parents information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >Father's Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Father's Occupation</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Occupation">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >Mother's Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mother's Occupation</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Occupation">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >Father's Contact</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Contact Number">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mother's Contact</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Contact Number">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >Father's Email</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mother's Email</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Email">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username" >Father's Education</label><br>
                       <select style="border:white 2px solid" class="form-control form-control-alternative"><option value="select">Select</option><option value="graduation">Graduation</option><option value="Post Graduation">Post Graduation</option></select>
                      </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                                                <label class="form-control-label" for="input-username" >Mather's Education</label><br>
                       <select style="border:white 2px solid" class="form-control form-control-alternative"><option value="select">Select</option><option value="graduation">Graduation</option><option value="Post Graduation">Post Graduation</option></select>
                      </div>
                    </div>
                  </div>
				  </div>
                 <hr class="my-4" />
				 <h6 class="heading-small text-muted mb-4">Education information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">10th Marks</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="PCM %" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Roll Number</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Roll number">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Board</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Board">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">12th Marks</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="PCM %" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Roll Number</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Roll number">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Board</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Board">
                      </div>
                    </div>
                  </div>
				   <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Graduation Marks</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="%" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Course</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Course">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">College</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Name">
                      </div>
                    </div>
                  </div>
				 <hr class="my-4" />			  
                  
              </form>
            </div>
          </div>
        </div>
      </div>
			
  <!-- Argon Scripts -->
  <!-- Core -->
 <script>
 function fun()
 {   document.forms['myform'].submit();
 }
  function fun2()
 {   document.forms['data'].submit();
 }
 function first_name(str)
 {
	 //document.write(str);
	 if(str.lenght==0)
	 {
		 document.getElementById("first_name").innerHTML=" ";
		 return;
	 }
	 else
	 {
		 document.getElementById("first_name").innerHTML=str;
		 return;
     }
 }
 function last_name(str)
 {
	 //document.write(str);
	 if(str.lenght==0)
	 {
		 document.getElementById("last_name").innerHTML=" ";
		 return;
	 }
	 else
	 {
		 document.getElementById("last_name").innerHTML=str;
		 return;
     }
 }
 function gmail(str)
 {
	 //document.write(str);
	 if(str.lenght==0)
	 {
		 document.getElementById("gmail").innerHTML=" ";
		 return;
	 }
	 else
	 {
		 document.getElementById("gmail").innerHTML=str;
		 return;
     }
 }
 </script>
 <script src="../vendor/jquery/dist/jquery.min.js"></script>
  <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../argon.js?v=1.0.0"></script></body></html>
	