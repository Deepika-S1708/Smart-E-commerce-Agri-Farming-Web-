<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	  <link rel="stylesheet" href="css.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
html,body
{
	margin:0;
	padding:0;
	width:100%;
}
body
{
	width:100%;
	height: 100vh;
	background:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.8)),url("contact.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	display: table;
	font-family:Quicksand; 
}	
.nav
{
	position: fixed;
	top:0;
	left:0;
	margin: 0;
	padding: 0;
	width:100%;
	height: 80px;

}
.left
{
	float:left;
}
.left ul
{
	list-style: none;
	padding: 1em 3em;
}
.left ul li
{
	display:inline-block;
}
.left ul li a
{
	text-decoration: none;
	color:#fff;
	font-weight: 500;
	padding:8px 16px;
}

.right
{
	float:right;

}
.right ul
{
	list-style: none;
	padding: 1em 3em;
}
.right ul li
{
	display:inline-block;
}
.right ul li a
{
	text-decoration: none;
	color:#fff;
	font-weight: 500;
	padding:8px 16px;
}
.right li:nth-child(2) a
{
	border:1px solid #fff;
border-radius: 4px;
}
.header
{
	position: absolute;
	top: 20%;
	left: 50%;
	text-align:center;
	transform: translate(-50%,-50%);
}
.header p
{
	color:#fff;
margin-bottom: 20px;
	font-size: 17px;
}

.header h1
{
	color:#fff;
	font-size: 46px;
}


	
*{
	box-sizing: border-box;
}


form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 450px;
	background: rgba(72,72,72,.4);
	padding: 35px;
	border-radius: 7px;
}
.input{
	width: 100%;
	font-size: 18px;
	margin: 7px auto;
	padding: 13px 13px 13px 54px;
}

input[name="name"],
input[name="email"],
textarea{
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	height: 140px;
	width:370px;
	

button:hover{
	color: #3498db;
	background-color: #fff;
	width: 100%;
	
	border: 4px solid #fbfbfb;
	font-size: 24px;
	
	font-weight: bold;
	text-transform: uppercase;
	transition: all 0.3s;
	padding: 22px 0;
}


</style>
<body>
<div class="wrapper">
	<div class="nav">
		<div class="left">
			<ul>
				<font color="white"><h2>Feel free to Contact Us & Explore More....</h2></font>
			</ul>
		</div>
<div class="right">
	<ul>
				<li><a href="login.php">Log In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
				<li><a href="register.php">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
				
			</ul>
 		</div>
	</div>





<form method="GET" action="">
		
		<label for="phonenumber"><font color="red"><h3>Phone number</h3></font></label>
        <input type="tel" id="phonenumber" name="phonenumber" placeholder="phonenumber" >
        
        
       <br>
        <label for="message"><font color="red"><h3>Message</font></h3></label><br>
        <center><textarea id="message" name="message" placeholder="What's in ur mind or Any Doubts Regarding Jobs......" ></textarea>
        <input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>
<?php

if(isset($_GET['submit']))
{
$phonenumber=$_GET['phonenumber'];

$message=$_GET['message'];


  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="job";
  $conn=mysqli_connect("$host","$dbusername","$dbpassword","$dbname");

  $sql = "INSERT INTO contact VALUES('$phonenumber','$message')" ;
  $res=mysqli_query($conn, $sql);

  if($res)
  { 
    header("location:index.html");
    }
  
else
  echo "fail";
  $conn->close();

  }
  ?>