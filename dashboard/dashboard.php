<?php
session_start();
if(!isset($_SESSION['dp']))
{
	header('location:http://localhost/pro/login.php');
}
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
  <link type="text/css" href="../argon.css?v=1.0.0" rel="stylesheet"><style>.collapsible {
    
	background-color: #000066;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;}.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: white;}</style></head>

<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="dashboard.php">
        <img src="../img/blue.jpg" class="navbar-brand-img" alt="logo">
      </a>
      <!-- User -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.php">
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
            <a class="nav-link" href="dashboard.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../student/attendencestudent.php">
              <i class="ni ni-planet text-blue"></i> Attendence
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../student/timetablestudent.php?adm_no='<?php echo $_SESSION['adm_no']; ?>'">
              <i class="ni ni-pin-3 text-orange"></i> Time Table
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../student/result.php">
              <i class="ni ni-single-02 text-yellow"></i> Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Assignments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-key-25 text-info"></i> Quizs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.php">
              <i class="ni ni-circle-08 text-pink"></i> Fees
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
  <div class="main-content">
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
                  <img alt="Image placeholder" src="<?php echo $_SESSION['dp']; ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['full_name']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../student/changepassword.php" class="dropdown-item">
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
       <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(<?php echo $_SESSION['dp']; ?>); background-size: cover; background-position:  top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION['first_name']; ?>!</h1>
            
           
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?php echo $_SESSION['dp']; ?>" class="rounded-circle">
                  </a>
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
                      <span class="heading"><?php echo $_SESSION['adm_no']; ?></span>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $_SESSION['full_name']; ?><span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $_SESSION['district']." , ".$_SESSION['state']; ?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?php echo $_SESSION['gmail']; ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Galgotias University
                </div>
                <hr class="my-4" />
                
                <button class="collapsible" style="padding-left:34%">Show more</button><div class="content"> <p><br><b><?php echo $_SESSION['dob']; ?></b></p><p><b><?php echo $_SESSION['contact']; ?></b></p><p><b>blood group</b></p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Personal information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Father's Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Father name" value="<?php echo $_SESSION['father_name']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Occupation</label>
                       <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Occupation" value="<?php  ?>" readonly> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Mother's Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Mother name" value="<?php echo $_SESSION['mother_name']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Occupation</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Occupation" value="<?php  ?>" readonly> 
                      </div>
                    </div>
                  </div>
                </div>
				<!-- line break-->
                 <h6 class="heading-small text-muted mb-4">Contact information</h6>
				 <hr class="my-4" />
				<div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Father's Contact No.</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Father Contact No." value="<?php echo $_SESSION['father_contact']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Mother's Contact No.</label>
                       <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Mother Contact No." value="<?php echo $_SESSION['mother_contact']; ?>" readonly> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Father's Email</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Father Email" value="<?php  ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Mother's Email</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Mother Email" value="<?php  ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div><div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Emergency's Contact No.</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Emergency Contact No." value="<?php ?>" readonly>
                      </div>
                    </div></div>
               <hr class="my-4" />
			   <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Other information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Adhar No.</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Adhar Number" value="<?php echo $_SESSION['uiid']; ?>" type="text" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Religion</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="Religion" value="<?php echo $_SESSION['religion']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Category</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="category" value="<?php echo $_SESSION['category']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Cast</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Cast" value="<?php echo $_SESSION['cast']; ?>" readonly>
                      </div>
                    </div>
					<div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="Country" value="<?php echo $_SESSION['country']; ?>" readonly>
                      </div>
                    </div>
					<div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="state" value="<?php echo $_SESSION['state']; ?>" readonly>
                      </div>
                    </div>
					<div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">District</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="district" value="<?php echo $_SESSION['district']; ?>" readonly>
                      </div>
                    </div>
					<div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Pincode</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="pincode" value="<?php echo $_SESSION['pincode']; ?>" readonly>
                      </div>
                    </div><br>
				 <h6 class="heading-small text-muted mb-4"></h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Address</label>
                    <textarea rows="4" class="form-control form-control-alternative" style="width:200%" placeholder="Address..." readonly><?php echo $_SESSION['address']; ?></textarea>
                  </div>
                </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
				<h6 class="heading-small text-muted mb-4">Education information</h6>
			 <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">10th Percentage</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="10th marks" value="<?php  ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Roll No.</label>
                       <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="10th Roll No" value="<?php ?>" readonly> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">12th Percentage</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="12th marks" value="<?php ?>" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Roll No.</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="12th Roll No" value="<?php ?>" readonly>
                      </div>
                    </div>
                  </div>
                </div>
				  </div>
				  <hr class="my-4" />
				  <h6 class="heading-small text-muted mb-4">Entrance information</h6>
				  <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Exam</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Exam" value="<?php ?>" readonly>
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Roll No.</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Roll No" value="<?php ?>" readonly>
                      </div>
                    </div>
				  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
     
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../vendor/jquery/dist/jquery.min.js"></script>
  <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../argon.js?v=1.0.0"></script>
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
     
</body>
</html>