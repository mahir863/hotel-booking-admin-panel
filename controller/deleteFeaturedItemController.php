<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM featured where featured_id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Product Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>