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
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="../img/blue.jpg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
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
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newregisteration.php">
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
        
        <hr class="my-3">
        
        
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
  <div class="main-content" >
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
	<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" >
      <div class="container-fluid">
        <div class="header-body">
		 </div></div></div>
		 <div class="container-fluid mt--7" style="margin-left:10%">
		 <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Student Registration</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="studentreg2.php" class="btn btn-sm btn-primary" onclick="nextpage()">Next</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              
                <h6 class="heading-small text-muted mb-4"></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group"><form method="post" action="studentregphp.php">
                        <label class="form-control-label" for="input-username">Course</label>
                        <select style="border:white 2px solid" onchange="course(this.value)" class="form-control form-control-alternative"><option value="select">Select</option><option value="B.Tech">B.Tech</option><option value="B.Sc.">B.Sc.</option><option value="BCA">BCA</option></select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Stream</label>
                        <select style="border:white 2px solid" onchange="stream(this.value)" id="stream" class="form-control form-control-alternative"></select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Admission Number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Admission" readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Enrollment Number</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Enrollment" readonly >
                      </div>
                    </div>
                  </div>
	              </div>
			
               </div></form>
			</div>	
			</div>
	  </div>
	  
<script>
function nextpage()
{
	
}
function course(str)
{
var req=new XMLHttpRequest();
	req.open("get","studentregphp.php?course="+str+"&id="+1,true);
	req.send();
	req.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("stream").innerHTML=req.responseText;
				
			}
	};	
}	
</script>
	  
	  
	  
	  <script src="../vendor/jquery/dist/jquery.min.js"></script>
  <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../argon.js?v=1.0.0"></script></body></html>