<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>GMS | GALGOTIAS MANAGEMENT SYSTEM</title>
<!-- Favicon -->
  <link href="./img/blue.jpg" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./vendor/nucleo/css/nucleo.css" rel="stylesheet">
 
  <!-- Argon CSS -->
  <link type="text/css" href="./argon.css?v=1.0.0" rel="stylesheet"><style> .edit{ border:2px solid blue;background-color:#1a53ff;margin-left:40%;margin-right:40%;border-radius:10px;}</style></head>

<body>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="dashboard.php">
        <img src="img/blue.jpg" class="navbar-brand-img" alt="logo">
      </a>
      <!-- User -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.php">
                <img src="img/blue.jpg">
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
            <a class="nav-link" href="attendencestudent.php">
              <i class="ni ni-planet text-blue"></i> Attendence
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="timetablestudent.php">
              <i class="ni ni-pin-3 text-orange"></i> Time Table
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="result.php">
              <i class="ni ni-single-02 text-yellow"></i> Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="coomingsoon.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Assignments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="coomingsoon.php">
              <i class="ni ni-key-25 text-info"></i> Quizs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="coomingsoon.php">
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
            <a class="nav-link" href="coomingsoon.php">
              <i class="ni ni-spaceship"></i> Digital Library
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="coomingsoon.php">
              <i class="ni ni-palette"></i> News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="coomingsoon.php">
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="gallery.html">Gallery</a>
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
                  <span class="mb-0 text-sm  font-weight-bold"><?php if(isset($_SESSION['full_name'])){echo $_SESSION['full_name'];}else{echo "TEACHER";} ?></span>
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
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
		 </div></div></div>
		 <div class="container-fluid mt--7" style="padding-top:10%">
	 <!-- Table -->
      <div class="row" >
        <div class="col" >
          <div class="card shadow">
            <div class="card-header border-0" >
			<h3 class="mb-0">Change Password</h3><br><br>
			<div style="text-align:center"><form action="changepasswordstudent.php" method="post">
			<h4 >Old Password&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="password" id="old_password" name="old_password"></input></h4>
			<h4 >New Password&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="password" id="new_password" name="new_password"></input></h4>
			<h4 >Confirm Password&nbsp;&nbsp;&nbsp;<input type="password" id="confirm_password" name="confirm_password"></input></h4><br><button class="edit" style="color:white">change</button></div></form>
			</div>
            </div>
    <script src="./vendor/jquery/dist/jquery.min.js"></script>
  <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="argon.js?v=1.0.0"></script>
			</body>
			</html>
            
              
				