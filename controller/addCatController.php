<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $cat_name = $_POST['cat_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO category
         (category_name) 
         VALUES ('$cat_name')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?category=success");
         }
     
    }
        
?>