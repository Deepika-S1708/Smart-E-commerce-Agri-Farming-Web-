
<?php
$host="localhost";
$dbusername="root";
  $dbpassword="";
  $dbname="upload";
  $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

mysql_select_db("file");
if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="upload/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 mysql_query("insert into upload(file)values('$file')");
	
	
}
}

?>

<html><head>
	
</head>
<body>
<form enctype="multipart/form-data" method="post">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form></body></html>