<?php
require_once('connect.php');
$db=mysqli_select_db($connection,"user");
if($db){
    $query="SELECT * FROM Users";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<br>"."Table accessed Successfully";
        if(mysqli_num_rows($query_run)>0){
            while($row=mysqli_fetch_assoc($query_run)){
                echo "<br>"."id=$row[id]";
                echo "<br>"."name=$row[name]";
                echo "<br>"."address=$row[address]";
            }
        }
    }else{
        echo "<br>"."Access Failure";
    }
}else{
    echo "<br>"."Error Accessing Database".mysqli_error($connection);
}

?>