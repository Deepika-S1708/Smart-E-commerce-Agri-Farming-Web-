
<?php
$host="localhost";
$dbusername="root";
  $dbpassword="";
  $dbname="job";
  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);


$query="select * from contact";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>
<html>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		    table, td, th {
  border: 2px solid white;
    padding: 7px;
}

table {
  border-collapse: collapse;
  width: 50%;
}

th {
  text-align: left;
  color:lightblue;
}
tr{
  color:white;
}
	.contact__wrap{
  text-align: center;
  transform: translateY(10%);
}
h1{
  font-family: 'Pacifico', cursive;
  font-size: 56px;
  margin-bottom: 50px;
  color: #631ebc;
}
.contact__form{
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 500px;
    margin: 0 auto; 
}
.contact__form input{
    height: 35px;
    border: 2px solid #631ebc;
    padding-left: 5px;
    margin-bottom: 10px;
    transition: .2s;
}
.contact__form input:hover{
    border: 2px solid #ff8080;
}

.contact__form input::placeholder{
    text-transform: uppercase;
    font-size: 12px;
}
.contact__form textarea{
    height: 150px;
    border: 2px solid #631ebc;
    resize: none;
    padding-left: 5px;
    padding-top: 10px;
    margin-bottom: 10px;
}
.contact__form textarea::placeholder{
    text-transform: uppercase;
    font-size: 12px;
}
.contact__form textarea:hover{
     border: 2px solid #ff8080;
}
.contact__form input[type="submit"]{
    height: 40px;
    font-size: 14px;
    color: #fff;
    background: #631ebc;
    text-transform: uppercase;
    width: 50%;
    transition: .2s;
}
.contact__form input[type="submit"]:hover{
    font-size: 16px;
    border: 0;
}
*:focus{
  outline: #ff8080 auto 1px;
}

body{
  
	background:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.8)),url("contact.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	display: table;
	font-family:Quicksand; 

}

.i
{
	font-color:lightblue;
}
.next {
  background-color: #4CAF50;
  color: white;
}a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  float: right;
}
.previous {
  background-color: #9999ff;
  color: black;
  float:left;
	</style>
</head>
<body><a href="displayregister.php" class="previous">&laquo;<font color="white"> Go back</a><a href="index.html" class="next"><font color="white"> Home Page>></a><center>  <h2><font color="lightblue">Clients Enquiry/Messages.......</font></h2>
	<div id="root"></div>

<div class="sandbox">
      <div class="content">
          <div class="register-wrapper">
           
              
              <div class="container">
  
       <br><br><br><br><br><br>     
  <table >
    <thead>
      <tr>
      
       <font size="10%" ><th><center>Phone Number</b></th>
        
        <th><center>Clients enquiry/Messages/doubts</th>
       
     </font>
        
        
      </tr>
    </thead>
    <tbody>
      <?php
     while($result=mysqli_fetch_assoc($data))
     {
      echo  "<tr>
        
        <td>".$result['phonenumber']."</td>       
         <td>".$result['message']."</td>
         
        
        
      </tr>";
     }
   }

     else
     {
      echo "No Record Found!!!!!";
     }
     ?>
    </tbody>
  </table></center>
</div>
            </div>
          </div>

        </section>

      </div>
    </div>
</body>
<html>