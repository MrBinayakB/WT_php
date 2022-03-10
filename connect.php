<?php
    $servername="localhost";
    $username="root";
    $password="";

    $connection=mysqli_connect($servername,$username,$password);
    if(!$connection){
        die("Connection failed:".mysqli_connect_error());
    }else{
        echo "Connected Successfully";
    }
?>