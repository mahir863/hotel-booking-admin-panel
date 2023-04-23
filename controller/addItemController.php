<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $size = $_POST['r_size'];
        $desc= $_POST['r_desc'];
        $price = $_POST['r_price'];
        $pets = $_POST['r_pet'];
        $capacity = $_POST['r_cap'];
        $category = $_POST['category'];
        // $category_id= $_POST['category_id']

       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO room
         (detail,img,price,size,maxcap,pets,category_id) 
         VALUES ('$desc','$image',$price,'$size','$capacity','$pets','$category')");
 
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