<?php

    $con=mysqli_connect('localhost','sammy','Raj@3009','parivatan');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>