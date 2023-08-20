<?php 

if (isset($_POST['create_product'])) {
    $product_name = $_POST['product_name']; 
    $product_cat = $_POST['product_cat'];
    $product_category_id = $_POST['product_category_id'];
    $product_price = $_POST['post_price'];

    $product_image = $_FILES['image']['name'];
    $product_image_temp = $_FILES['image']['tmp_name'];

    $product_tags = $_POST['product_tags'];
    $product_content = $_POST['product_content'];
    

    move_uploaded_file($product_image_temp, "../images/products/$product_image" );

    $query = "INSERT INTO products(product_name, product_cat, product_category_id, product_tags,
    product_price, product_image, product_content) ";
    $query .= "VALUES(?,?,?,?,?,?,?) ";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssissss", $product_name, $product_cat, $product_category_id,
    $product_tags, $product_price, $product_image, $product_content) ;

    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        die ("Query Failed! " . mysqli_error($connection));
    } else {
        echo "<h1>Added Successfully</h1>"; 
    }

    mysqli_stmt_close($stmt);
} 





?>



<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="text" class="form-control" name="product_name">
    </div>

    <div class="form-group">
        <label for="product_cat">Product Cat</label>
        <input type="text" class="form-control" name="product_cat">
    </div>
    
    <div class="form-group">
        <label for="product_category_id">Product Category id</label>
        <input type="text" class="form-control" name="product_category_id">
    </div>

    <div class="form-group">
        <label for="post_price">Post Price</label>
        <input type="text" class="form-control" name="post_price">
    </div>

    <div class="form-group">
        <label for="product_image">Product Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="product_tags">Product Tags</label>
        <input type="text" class="form-control" name="product_tags">
    </div>

    <div class="form-group">
        <label for="product_content">Product Content</label>
        <textarea type="text" class="form-control" name="product_content" id="" cols="30" row="10">
        </textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_product" value="Publish">
    </div>

</form>