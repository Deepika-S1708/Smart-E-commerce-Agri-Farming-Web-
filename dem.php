<html>
<head>
  <style>
 @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,900);
* {
  padding: 0;
  margin: 0;
}
input {
  outline: none;
}
html,
body {
  height: 100%;
}
body {
  font-family: 'Roboto', sans-serif;
  background: -webkit-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -webkit-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
  background: -moz-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -moz-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
  background: -o-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -o-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
  background: linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), linear-gradient(90deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
  overflow: hidden;
}
.panel {
  width: 400px;
  height: 500px;
  -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
          border-radius: 10px;
  -webkit-box-shadow: 0 0 10px black;
     -moz-box-shadow: 0 0 10px black;
          box-shadow: 0 0 10px black;
  background: #141519;
  margin: 100px auto;
  text-align: center;
}
.panel .state {
  margin-top: 5px;
  width: 100%;
  height: 155px;
  color: white;
  font-size: 20px;
}
.panel .state i.fa-ban {
  font-size: 40px;
}
.panel .state i.fa-unlock-alt {
  font-size: 25px;
  color: white;
  line-height: 33px;
  height: 30px;
  width: 30px;
  display: inline-block;
  -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
          border-radius: 50%;
  border: 2px solid;
}
.panel .state h2 {
  font-weight: 400;
}
.panel .form {
  width: 340px;
  margin: 5px auto;
}

.panel input[type='text'] {
  background-color: #22232a;
  -webkit-border-radius: 45px;
     -moz-border-radius: 45px;
          border-radius: 45px;
  font-size: 15px;
  height: 45px;
  border: none;
  padding-left: 15px;
  width: -webkit-calc(100% - 15px);
  width: -moz-calc(100% - 15px);
  width: calc(100% - 15px);
  margin-bottom: 10px;
}
.panel input[type='file'][placeholder] {
  color: white;
  font-size: 15px;
  font-weight: 500;
}
.panel .fack {
  margin-top: 30px;
  font-size: 14px;
}
.panel .fack i.fa {
  text-decoration: none;
  color: #fff;
  vertical-align: middle;
  font-size: 20px;
  margin-right: 5px;
}
.panel .fack a:link {
  color: #616973;
}
.panel .fack a:visited {
  color: #555c65;
}
 
</style>
</head>
<body>
  <?php 


$dbh=new PDO("mysql:host=localhost; dbname=job","root","");
if(isset($_POST["submit"]))
{
   echo"<script language='javascript' type='text/javascript'> location.href='fronttour.php'</script>";
   $file=$_FILES["file"]["name"];
  $tmp_name=$_FILES["file"]["tmp_name"];
  $path="upload/".$file;
  $file1=explode(".",$file);
  $ext=$file1[1];

  $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
  if(in_array($ext,$allowed))
  {
 move_uploaded_file($tmp_name,$path);

  $stmt=$dbh->prepare("insert into upload values(?,?,?,?)");
    $stmt->bindParam(1,$username);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$name);
     $stmt->bindParam(4,$data);
     $stmt->execute();

  
}
}

    ?>
 <div class="panel">
    <div class="state"><br><br><h1>Upload Resume</h1></div>
    <div class="form">
      <div class="form-group">
<form enctype="multipart/form-data" method="post">
File upload:<br><br><input type="file" name="file"><br>

  <button name="btn">Upload</button>
</form>
    </div>
    
  </div>
  </body>
  </html>