
<div class="container p-5">

<h4>Edit Room Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM featured WHERE featured_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["category_id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="featured_id" value="<?=$row1['featured_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="type">Room Type:</label>
      <input type="text" class="form-control" id="r_type" value="<?=$row1['category']?>">
    </div>
    <div class="form-group">
      <label for="desc">Room Description:</label>
      <input type="text" class="form-control" id="r_desc" value="<?=$row1['detail']?>">
    </div>
    <div class="form-group">
      <label for="price">Room Price:</label>
      <input type="number" class="form-control" id="r_price" value="<?=$row1['price']?>">
    </div>
    <div class="form-group">
      <label for="cap">Maximum Capacity:</label>
      <input type="number" class="form-control" id="r_cap" value="<?=$row1['maxcap']?>">
    </div>
    <div class="form-group">
      <label for="pet">Pets Allowed:</label>
      <input type="number" class="form-control" id="r_pet" value="<?=$row1['pets']?>">
    </div>
    <div class="form-group">
      <label for="size">Size:</label>
      <input type="varchar" class="form-control" id="r_size" value="<?=$row1['size']?>">
    </div>
   
    <div class="form-group">
      <label>Category:</label>
      <select id="category">
        <?php
          $sql="SELECT * from category WHERE category_id='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['category_id'] ."'>" .$row['category_name'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from category WHERE category_id!='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['category_id'] ."'>" .$row['category_name'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["img"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['img']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>