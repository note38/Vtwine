<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Content</th>
            <th>Tags</th>
            
        </tr>
        
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM products ";
        $select_query = mysqli_query($connection, $query);
        if (!$select_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($select_query)) {
            $product_id = $row['product_id'];
            $product_name = $row['product_name'];
            $product_cat = $row['product_cat'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image'];
            $product_content = $row['product_content'];
            $product_tags = $row['product_tags'];

            

            echo "<tr>";
            echo "<th> $product_id </th>";
            echo "<th> $product_name </th>";
            echo "<th> $product_cat </th>";
            echo "<th> $product_price </th>";
            echo "<th><img height='100px'  src='../images/products/$product_image' alt=''></th>";
            echo "<th> $product_content </th>";
            echo "<th> $product_tags </th>";
            echo "<th><a href='posts.php?delete={$product_id}'>Delete</a></th>";
            echo "</tr>";



        
        }

        ?>
        <?php
        if (isset($_GET['delete'])) {
            $the_product_id = $_GET['delete'];

            $query = "DELETE FROM products WHERE product_id = {$the_product_id} ";
            $delete_query = mysqli_query($connection, $query);
            header("location: posts.php");

            if (!$delete_query) {
                die("QUERY FAILED " . mysqli_error($connection));
            } else{
                echo "<h1>DELETED</h1>";
            }

        }
        ?>
                                      
                                  
                                </tbody>
                            </table>