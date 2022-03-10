<?php
    require_once('connect.php');
    $db=mysqli_select_db($connection,"user");
    if($db){
        $query="CREATE TABLE Users(id INT(5) AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),address VARCHAR(50))";
        $query_run=mysqli_query($connection,$query);
        if($query_run){
            echo "<br>"."Table Created Successfully";
        }
        else{
            echo "Creation Failed".mysqli_error($connection)."<br>";
        }
    }else{
        echo "Error accessing Database".myqsli_error($connection)."<br>";
    }
?>