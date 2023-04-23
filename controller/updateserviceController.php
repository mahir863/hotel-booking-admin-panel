<?php
    include_once "../config/dbconnect.php";
    $service_id=$_POST['service_id']
    $s_title= $_POST['s_title'];
    $s_desc= $_POST['s_desc'];


    $updateItem = mysqli_query($conn,"UPDATE services SET 
        title='$s_title', 
        description=$s_desc,
        WHERE service_id=$service_id");


    if($updateService)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>