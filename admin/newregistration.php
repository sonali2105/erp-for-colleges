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
</head>
<body>

 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="admin.php">
        <img src="../img/blue.jpg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="">
              </span>
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
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="admin.php">
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
        
		 <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-planet text-blue"></i> New Registration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manageuser.php">
              <i class="ni ni-pin-3 text-orange"></i> Manage User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-single-02 text-yellow"></i> Attendence
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Hostel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-key-25 text-info"></i> Time Table
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
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
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-spaceship"></i> Library
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-palette"></i> Fees
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-ui-04"></i> Transport
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="../coomingsoon.html">
              <i class="ni ni-spaceship"></i> News
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
                  <img alt="Image placeholder" src="">
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
	 <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body"></div></div></div>
		           <!-- Card stats -->
          <div style="padding-top:5%;padding-left:2% ">
		  <div class="row" >
            <a href="studentreg.php"><div class="col-xl-3 col-lg-6" >
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="border:2px solid lightblue">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="padding-top:15%"><b>Student</b></h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div></a>
                  <p class="mt-3 mb-0 text-muted text-sm">
                   
                  </p>
                </div>
              </div>
            </div>
            <a href="#"> <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="border:2px solid lightblue">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="padding-top:15%"><b>Faculty</b></h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div></a><p class="mt-3 mb-0 text-muted text-sm"></p>
                  </div>
                    </div>
					</div>
					</div>
                 
                
              
            