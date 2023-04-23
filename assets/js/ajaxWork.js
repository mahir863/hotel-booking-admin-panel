

function showRoomItems(){  
    $.ajax({
        url:"./adminView/viewAllRooms.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showFeaturedRooms(){  
    $.ajax({
        url:"./adminView/viewAllFeatured.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showServices(){  
    $.ajax({
        url:"./adminView/viewAllServices.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCategory(){  
    $.ajax({
        url:"./adminView/viewCategories.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//add product data
function addItems(){
    var r_desc=$('#r_desc').val();
    var r_price=$('#r_price').val();
    var r_cap=$('#r_cap').val();
    var r_pet=$('#r_pet').val();
    var r_size=$('#r_size').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('r_desc', r_desc);
    fd.append('r_price', r_price);
    fd.append('r_cap', r_cap);
    fd.append('r_pet', r_pet);
    fd.append('r_size', r_size);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showRoomItems();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateItems(){
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var r_desc = $('#r_desc').val();
    var category = $('#category').val();
    var r_price = $('#r_price').val();
    var r_size = $('#r_size').val();
    var r_cap = $('#r_cap').val();
    var r_pet = $('#r_pet').val();
    var fd = new FormData();
    fd.append('file', file);
    fd.append('upload', upload);
    fd.append('r_desc', r_desc);
    fd.append('category', category);
    fd.append('r_price', r_price);
    fd.append('r_size', r_size);
    fd.append('r_cap', r_cap);
    fd.append('r_pet', r_pet);
    
   
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showRoomItems();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showRoomItems();
        }
    });
}

//add featured data
function addFeaturedItems(){
    var r_desc=$('#r_desc').val();
    var r_price=$('#r_price').val();
    var r_cap=$('#r_cap').val();
    var r_pet=$('#r_pet').val();
    var r_size=$('#r_size').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('r_desc', r_desc);
    fd.append('r_price', r_price);
    fd.append('r_cap', r_cap);
    fd.append('r_pet', r_pet);
    fd.append('r_size', r_size);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addFeaturedItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showRoomItems();
        }
    });
}

//edit featured data
function itemFeaturedEditForm(id){
    $.ajax({
        url:"./adminView/editFeaturedItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateFeaturedItems(){
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var r_desc = $('#r_desc').val();
    var category = $('#category').val();
    var r_price = $('#r_price').val();
    var r_size = $('#r_size').val();
    var r_cap = $('#r_cap').val();
    var r_pet = $('#r_pet').val();
    var fd = new FormData();
    fd.append('file', file);
    fd.append('upload', upload);
    fd.append('r_desc', r_desc);
    fd.append('category', category);
    fd.append('r_price', r_price);
    fd.append('r_size', r_size);
    fd.append('r_cap', r_cap);
    fd.append('r_pet', r_pet);
    
   
    $.ajax({
      url:'./controller/updateFeaturedItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showRoomItems();
      }
    });
}

//delete product data
function itemFeaturedDelete(id){
    $.ajax({
        url:"./controller/deleteFeaturedItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showFeaturedRooms();
        }
    });
}

//add category data
function addCategory(){
    var cat_name=$('#cat_name').val();

    var fd = new FormData();
    fd.append('cat_name', cat_name);
   
    $.ajax({
        url:"./controller/addCatController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Category Added successfully.');
            $('form').trigger('reset');
            showCategory();
        }
    });
}
//delete category data
function categoryDelete(id){
    $.ajax({
        url:"./controller/catDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Category Successfully deleted');
            $('form').trigger('reset');
            showCategory();
        }
    });
}

//add services 
function addServices(){
    var s_title=$('#s_title').val();
    var s_desc=$('#s_desc').val();

    var fd = new FormData();
    fd.append('s_title', s_title);
    fd.append('s_desc', s_desc);
    $.ajax({
        url:"./controller/addserviceController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Product Added successfully.');
            $('form').trigger('reset');
            showServices();
        }
    });
}

//delete services
function itemDeleteService(id){
    $.ajax({
        url:"./controller/deleteserviceController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showServices();
        }
    });
}
//edit services
function itemServiceEditForm(id){
    $.ajax({
        url:"./adminView/editServiceItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
//updaate service after submit
function updateService(){;
    var s_title = $('#s_title').val();
    var s_desc = $('#s_desc').val();
    var fd = new FormData();
    fd.append('s_title', s_title);
    fd.append('s_desc', s_desc);
    
   
    $.ajax({
      url:'./controller/updateserviceController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showServices();
      }
    });
}