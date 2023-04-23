
<div class="container p-5">

<h4>Edit Service</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM services WHERE service_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
    //   $catID=$row1["category_id"];
?>
<form id="update-Items" onsubmit="updateService()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="service_id" value="<?=$row1['service_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="type">Service Title:</label>
      <input type="text" class="form-control" id="s_title" value="<?=$row1['title']?>">
    </div>
    <div class="form-group">
      <label for="desc">Service Description:</label>
      <input type="text" class="form-control" id="s_desc" value="<?=$row1['description']?>">
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