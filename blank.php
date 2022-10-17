<?php
    session_start();

 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
<link rel="stylesheet" href="css.css">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Naukri<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
        <b> <i class="fas fa-users-cog"></i></b>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       Find Jobs on Filtering
      </div>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-university"></i>
          <span>PUC</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">11TH & 12TH</h6>
            <a class="collapse-item" href="utilities-border.php">PASS</a>
            <a class="collapse-item" href="utilities-color.php">FAIL</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Graduation
      </div>

   

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Under Graduation</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="404.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Post Graduation</span></a>
      </li> <hr class="sidebar-divider d-none d-md-block">
<li class="nav-item">
        <a class="nav-link" href="blank.php">
          <i class="fas fa-archway"></i>
          <span>Diploma</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
         <i class="fas fa-suitcase-rolling"></i>
          <span>Internships</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<section id="jobs">
  <div class="container">
    <center><?php       
   if(isset($_SESSION['user']))
    {
        echo ' WELCOME ' . $_SESSION['user'].'';
        echo '<a href="logout.php?logout">                <i class="fas fa-sign-out-alt"></i>        LOG OUT</a>';
    }
    else
    {
        header("location:login.php");
    }
?></center> <br>
    <h5>RECENT UPDATES</h5>
    <div class="company-details">
      <div class="job-updates">
        <h4><b>Seasoned Senior Python Developer(Fresher)</b></h4>
        <p>XYZ Solution Pvt Ltd</p>
        <i class="fa fa-briefcase"></i><span>0-1 yrs</span><br>
        <i class="fa fa-inr"></i><span>₹3.50 - ₹4.00 Lacs p.a.</span><br>
             <i class="fa fa-map-marker"></i><span>Banglore</span>
             <p><b>Skills</b><i class="fa fa-angle-double-right"></i><small>java</small><small>Css</small><small>Html</small><small>.net</small></p>
            <p><b>Description</b><i class="fa fa-angle-double-right"></i>A Python Web Developer is responsible for writing server-side web application logic. Python web developers usually develop back-end components, connect the application with the other (often third-party) web services.</p>
      </div>
      <div class="apply-btn">
        <a href="upload.php"><button type="button" class="btn btn-primary">Apply</button>
    </div>

<div class="company-details">
      <div class="job-updates">
        <h4><b>Software Developers & Programmers</b></h4>
        <p>Intellify  Pvt Ltd</p>
        <i class="fa fa-briefcase"></i><span>1-3yrs</span><br>
        <i class="fa fa-inr"></i><span>₹2.8L–₹4.8L a month</span><br>
             <i class="fa fa-map-marker"></i><span>Banglore</span>
             <p><b>Skills</b><i class="fa fa-angle-double-right"></i><small>Php</small><small>MS Office</small><small>Visual-Basics</small><small>.net</small></p>
            <p><b>Description</b><i class="fa fa-angle-double-right"></i>We are looking for software developers and Programmers.Both freshers and experienced can apply.For Bangalore and Chennai location.Immediate Joinings intrested can Contact for more details.We will schedule the interview.</p>
      </div>
      <div class="apply-btn">
      <a href="upload.php"><button type="button" class="btn btn-primary">Apply</button>
    </div>
    <div class="company-details">
      <div class="job-updates">
        <h4><b>Field Sales Executives</b></h4>
        <p>Phone Pe</p>
        <i class="fa fa-briefcase"></i><span>0-1 yrs</span><br>
        <i class="fa fa-inr"></i><span>₹16.3T–₹19.1T a month</span><br>
             <i class="fa fa-map-marker"></i><span>Banglore</span>
             <p><b>Skills</b><i class="fa fa-angle-double-right"></i><small>C</small><small>C++</small><small>SQL</small><small>.net</small></p>
            <p><b>Description</b><i class="fa fa-angle-double-right"></i>Identifies business opportunities by identifying prospects and evaluating their position in the industry; Sells products by establishing contact and developing relationships with prospects recommending solutions.</p>
      </div>
      <div class="apply-btn">
       <a href="upload.php"><button type="button" class="btn btn-primary">Apply</button>
    </div>



  </div>



</section >
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
