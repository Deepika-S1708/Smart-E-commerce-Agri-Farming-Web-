
<!DOCTYPE html>
<html>
<title>register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="newtext.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://C:\xampp1\htdocs\mini dbms\fontawesome-free-5.11.2-web/all.css">

<style >
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
form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 500px;
	background:linear-gradient(to right,#6db9ef,#7ce08a);
	
	padding: 35px;
	border-radius: 7px;
}
#style
{
	background-color:  ;
}
#style:hover{
  background-color: ;
  border-color: ;
  cursor:   pointer;   
}
.container signin
{
	background:linear-gradient(to right,#6db9ef,#7ce08a) ; 
}
</style>
<body>

<center><form action="" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center"><font color="#83c11f">Register<i class="fa fa-pencil" aria-hidden="true"></i></h2></font>
 

<div class="w3-row w3-section">
 <label><font color="green">Name</label> <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest" style="width: 70%">
      <input class="w3-input w3-border" name="username" type="text" required placeholder=" Name">
    </div>
</div>


<div class="w3-row w3-section">
 <label >Email</label> <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest" style="width: 70%">
      <input class="w3-input w3-border" name="email" type="text" required placeholder="Email">
    </div>
</div>


<div class="w3-row w3-section">
  <label >Password</label>  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest" style="width: 70%">
      <input class="w3-input w3-border" name="pwd" id="a"  type="Password" required placeholder="password" >
         
    </div>
</div>

<div class="w3-row w3-section">
  <label >Confirm Password</label>  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest" style="width: 70%">
      <input class="w3-input w3-border" name="con_pwd"  id="b" type="password" required placeholder="confirm password"  onblur="foo()" >
         
    </div>
</div>
<div class="w3-row w3-section">
  <label>Mobile</label>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest" style="width: 70%">
      <input class="w3-input w3-border" name="mobile" type="text" required placeholder="mobile">
        
    </div>
</div>

    </div>
</div>
</font>

<center> <input type="submit" name="submit" id="style"></center>
<div class="container signin">
  <center><p><font color="blue">Already have account? <a href="login.php"> Sign in</a>
  </p></center>
</div>

</form>
<script type="text/javascript">
  function foo(){
    var a = document.getElementById("a");
    var b = document.getElementById("b");
    if(a.value != b.value)
      alert(" no match"); 
  }

</script>

</body>
</html><?php

if(isset($_POST['submit']))
{

$username=$_POST['username'];
$email=$_POST['email'];

$password=$_POST['pwd'];
$confirm=$_POST['con_pwd'];
$Mobile=$_POST['mobile'];
if( !empty($Mobile)|| !empty($email)|| !empty($username)|| !empty($password)|| !empty($confirm))
{
	$host = "localhost";
	$dbusername="sammy";
	$dbpassword="Raj@3009";
	$dbname="parivatan";
	$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

	$sql = "INSERT INTO `register`(`username`, `email`, `password`, `mobile`) VALUES ('$username', '$email',  '$password','$Mobile')";

	$res=mysqli_query($conn, $sql);
	if($res)
	{
		header('Location:login.php');

	echo "fail";
	$conn->close();

}
}
}
	#echo "All field are required";
?>