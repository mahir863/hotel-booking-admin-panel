
<div >
  <h2> Featured Rooms</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Room Image</th>
        <th class="text-center">Room Description</th>
        <th class="text-center">Room Type</th>
        <th class="text-center">Room Price</th>
        <th class="text-center">Size</th>
        <th class="text-center">Maximum Capacity</th>
        <th class="text-center">Pets Allowed</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from featured, category WHERE featured.category_id=category.category_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["img"]?>'></td>
      <td><?=$row["detail"]?></td>
      <td><?=$row["category"]?></td>      
      <td><?=$row["price"]?></td> 
      <td><?=$row["size"]?></td>   
      <td><?=$row["maxcap"]?></td>     
      <td><?=$row["pets"]?></td>     
  
      <td><button class="btn btn-primary" style="height:40px" onclick="itemFeaturedEditForm('<?=$row['featured_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemFeaturedDelete('<?=$row['featured_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Room
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Room</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addFeaturedItems()" method="POST">
            <div class="form-group">
              <label for="size">Room Size :</label>
              <input type="number" class="form-control" id="r_size" required>
            </div>
            <div class="form-group">
            <label for="cap">Room Capacity :</label>
              <input type="number" class="form-control" id="r_cap" required>
            </div>
            <div class="form-group">
            <label for="pet">Pets Allowed :</label>
              <input type="number" class="form-control" id="r_pet" required>
            </div>
            <div class="form-group">
              <label for="price">Room Price:</label>
              <input type="number" class="form-control" id="r_price" required>
            </div>
            <div class="form-group">
              <label for="desc">Room Description:</label>
              <input type="text" class="form-control" id="r_desc" required>
            </div>
              <div class="form-group">
              <label>Category:</label>
              <select id="category" >
                <option disabled selected>Select category</option>
                <?php                  
                  $sql="SELECT * from category";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   