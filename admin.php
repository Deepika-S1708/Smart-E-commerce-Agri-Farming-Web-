<?php
  $dbhost = "localhost";
  $dbusername = "sammy";
  $dbpassword = "Raj@3009";
  $db = "parivatan";
  $con = mysqli_connect($dbhost , $dbusername , $dbpassword);
  //echo "connected";
  
  mysqli_select_db($con,$db);
  //echo "connected to data base";
  if(isset($_POST['name']))
  {
    $uname = $_POST['name'];
    $passwrd = $_POST['password'];
    $sql = "select * from admin where name = '".$uname."' AND password = '".$passwrd."' limit 2";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
      echo "you have successfully logged in";
	  header("location:displayregister.php");
      exit();
    }
    else
    {
      echo "you have entered incorrect password";
      exit();
    }
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<style>
  label{
    margin-left: 430px;
  }
body {
  font-family: Arial, Helvetica, sans-serif;
  

background:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.5)),url("reg.jpg")
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
}

* {
  box-sizing: border-box;
}
.container {
  padding: 70px; 
  
}

input[type=text], input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 0px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.loginbtn {
  background-color: blue;
  font-size: 12px;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 5%;
  opacity: 0.7;
  text-align: center;
}
.loginbtn:hover {
  opacity: 0.9;
}

a {
  color: dodgerblue;
}
.danger {
  background-color: red;
height: 25px;
width:15%;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  float: right;
}
.previous {
  background-color: #9999ff;
  color: black;
  float:left;
}

</style>




<body><a href="dashboard.php" class="previous">&laquo;<font color="white"> Back to Dasboard</a></font></a>
<br><br><br>

 <center><img src="ad.png" style="width:5%"><br><br><div class="danger">
  <p><strong>Alert!</strong> Admin View</p>
</div></center>
<form method="POST" action="#">
  <div class="container">
   
    
   <font color="lightblue">

    <label for="userid"><b>Admin Name</b></label><br>
    
    <center><input type="text" placeholder="Enter Email" name="email" required></center><br>
    

    <label for="psw"><b>Admin Password</b></label><br>
    
    <center><input type="password" placeholder="Enter Password" name="password" required></center>

 </font>

    <center><button type="submit" class="loginbtn">Login </button></center>
    
  
  
    
  </div>
</form>
</body>
</html>