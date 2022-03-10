<?php
require_once('connect.php');
$db=mysqli_select_db($connection,"user");
if($db){
    $query="INSERT INTO Users(id,name,address) VALUES('','MAHAKAL','Koteshwor')";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<br>"."Data inserted Successfully";
    }else{
        echo "<br>"."Error insertiin Data".mysqli_error($connection);
    }
}else{
    echo "<br>"."Error accessing Database".mysqli_error($connection);
}
?>