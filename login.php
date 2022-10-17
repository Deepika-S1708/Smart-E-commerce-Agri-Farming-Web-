<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body{
	background:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.5)),url("reg.jpg");
	margin-top:150px !important ;
}

.register-left
{
	text-align:center;
	color:#fff;
	padding: 30px;

}
.register-left .fa
{
color:#7ce08a;
	size:15px;
	margin-right: 6px;
	margin-top: 1px;
}

.register-left p
{
	padding:20px 20px 0;

}

.register-left .btn-primary
{
	border-radius: 2.5rem;
	border:none;
	width: 100px;
	background:linear-gradient(to right,#6db9ef,#7ce08a) ;
	font-weight: 600;
	color:white;
	margin-top: 20px;
	padding: 10px;
}

.register-left .btn-primary:hover
{
	background:#000;
}

.btn-info
{
	 background:black;
}

.register-right
{
	border:none;
	background-position: center center;
	background-color: transparent;
	box-shadow: -8px 4px 70px 20px black;
	border-bottom-left-radius: 10% 50%;
	border-top-right-radius: 10% 50%;
	
	padding:50px;
}
.register-right h2
{
	text-align: center;
	margin-bottom: 10px;
	color:#7ce08a;
}
.register-form
{
	padding: 20px;
}

.register-right .btn-primary
{
	float:right;
	border:none;
	border-radius: 1rem;
	border:none;
	width: 98px;
	background:linear-gradient(to right,red,purple) ;
	font-weight: 600;
	color:white;
	margin-top: 20px;
	padding: 8px;
}
.register-right .btn-primary:hover{
	background:#ff5722;
}





	</style>
<body>
 

	
<div class="container">
<div class="row">
<div class="col-md-10 offset=md-1">
	<div class="row">
		<div class="col-md-5 register-left">
			<i class="fa fa-arrow-down" aria-hidden="true"></i>
		<h3>Join Us</h3>
		<p> <b>To make your dreams come true. </p>
<a href="index.html"><button type="button" class="btn btn-primary">Home Page</button></a>


		</div>
<div class="col-md-7 register-right">
	<h2><i class="fa fa-user-circle" aria-hidden="true"></i> Client Login <i class="fa fa-sign-in" aria-hidden="true"></i></h2>

                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
<div class="register-form">
	<div class="form-group">
		<form action="process.php" method="post" >
			<font color="#6db9ef"><b>Email</b></font>
	<input type="name" class="form-control" name="email" placeholder="Email">
</div>
</div>
<div class="register-form">
	<div class="form-group"><font color="#6db9ef"><b>PASSWORD</b></font>
	<input type="password" class="form-control" name="password" placeholder="password">
</div>
</div>

<center><button class="btn btn-success mt-3" name="login">Login</button></center>

</form>

		</div>








</div></div></div></div>

</body>
</html>