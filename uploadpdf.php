
<?php

  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="job";
  $conn=mysqli_connect("$localhost","$dbusername","$dbpassword","$dbname") or die("Database not connected");

    if(isset($_POST['upload'])){
        $file_name=$_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_tem_loc=$FILES['file']['temp_loc'];
        $file_store="upload/".$file_name;
        mov-uploaded_file($file_tem_loc,$file_store);
            }
?>
