<?php
    require_once("connect.php");
    $query="CREATE DATABASE IF NOT EXISTS user";
    $db=mysqli_query($connection,$query);
    if($db){
        echo "<br>"."Database Created"."<br>";
    }else{
        echo "Error".mysqli_error($connection);
    }

?>