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
  <meta name="author" content="Rj@1501" >

  <title>Dashboard</title>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="css/formcss.css">

<link rel="stylesheet" href="css/custom.css">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PariVartan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href=""> 
        <b> <i class="fas fa-users-cog"></i></b>
          <span>Profile</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
   <!-- <div class="sidebar-heading">
       Find Jobs on Filtering
      </div> -->


      <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Orders</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Graduation
      </div> -->

   

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Insert Stock</span></a>
      </li>
      
      <hr class="sidebar-divider">


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="404.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Update Stock</span></a>
      </li> <hr class="sidebar-divider d-none d-md-block">
      
		<li class="nav-item">
        <a class="nav-link" href="blank.php">
          <i class="fas fa-archway"></i>
          <span>Reports</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
         <i class="fas fa-suitcase-rolling"></i>
          <span>Analysis</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

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
    <h2>Profile</h2>
    
<div class="company-details">
<section class="get-in-touch">
   <h2 class="title"> Personal Details</h2>
   <form class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="fname" class="input-text js-input" type="text" required>
         <label class="label" for="name">First Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="lname" required>
         <label class="label" for="email">Last Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="text" required>
         <label class="label" for="company">E-Mail</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Contact Number</label>
      </div>
      <br>
      <br>
      <hr><br>
      <br>
      <div class="form-field col-lg-6">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Address</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="landmark" class="input-text js-input" type="text" required>
         <label class="label" for="message">Land Mark</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="town_village" class="input-text js-input" type="text" required>
         <label class="label" for="message">Town / Village </label>
      </div>
      <div class="form-field col-lg-6">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="dist" class="input-text js-input" type="text" required>
         <label class="label" for="message">District</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="state" class="input-text js-input" type="text" required>
         <label class="label" for="message">State</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>

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
