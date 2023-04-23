<?php
    include_once "../config/dbconnect.php";

    $room_id=$_POST['room_id'];
    $r_desc= $_POST['r_desc'];
    $r_price= $_POST['r_price'];
    $category= $_POST['category'];
    $r_size= $_POST['r_size'];
    $r_pet= $_POST['r_pet'];
    $r_cap $_POST['r_cap'];





    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE room SET 
        detail='$r_desc', 
        price=$r_price,
        size=$r_size,
        maxcap=$r_cap,
        pets=$r_pet,
        img='$final_image' 
        category_id=$category,
        WHERE room_id=$room_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>