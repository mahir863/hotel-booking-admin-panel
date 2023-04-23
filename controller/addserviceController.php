<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $s_title = $_POST['s_title'];
        $s_desc= $_POST['s_desc'];
        // $service_id= $_POST['service_id']

         $insert = mysqli_query($conn,"INSERT INTO services
         (title,description) 
         VALUES ('$s_title','$s_desc')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>