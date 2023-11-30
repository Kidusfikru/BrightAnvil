<?php include('partials/menu.php') ?>
        <!-- menu ends here -->
            <!-- main content goes here -->
     <div class="main-content">
        <div class="wrapper">
            <h1>Manage Products</h1>  
            <br>
            
        <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['remove']))
        {
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }
        if(isset($_SESSION['unauthorized']))
        {
            echo $_SESSION['unauthorized'];
            unset($_SESSION['unauthorized']);
        }
        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['failed-remove']))
        {
            echo $_SESSION['failed-remove'];
            unset($_SESSION['failed-remove']);
        }
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        
?>
<br>
<!--button to add admin --> 
<a href="add-products.php"><button id = "link" type="button" class="btn btn-primary hovering">Add Products</button></a>
<table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">Price</th>
<th scope="col">Image</th>
<th scope="col">Featured</th>
<th scope="col">Active</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM products";

$res = mysqli_query($conn, $sql);
$n = 1;
$count = mysqli_num_rows($res);
if($count > 0)
{
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $price = $row['price'];
            // $category_id = $row['category_id'];
            $image_name = $row['image_name'];
            $featured = $row['featured'];
            $active =  $row['active'];
            ?>
<tr>
<th scope="row"><?php echo $n++ ?></th>
<td><?php echo "$title" ?></td>
<td><?php echo "$description" ?></td>
<td><?php echo "$price" ?></td>
<td><?php 
if($image_name=="")
{
        echo "<div style = 'color:red'>Image Not Added.</div>";
}
else{
    ?>
        <img class ="image-hover" style = "height :100px; width:150px"src="../images/products/<?php echo $image_name; ?>" alt="Image Unavailable">
    <?php

}


?></td>
<td><?php echo "$featured" ?></td>
<td><?php echo "$active" ?></td>
<td>
<a href=" update-product.php?id=<?php echo $id; ?>"><button  type="button" class="btn btn-primary hovering">Update Product</button></a>
<a href=" form/delete-product.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>"><button type="button" class="btn btn-primary hovering">Delete Product</button></a>
</td>
</tr>

            <?php
        }
}
else
{
    echo "<tr><td colspan = '7' style = 'color:red'>No Product Added Yet.</td></tr>";
}

?>

</tbody>
</table>
           
    </div>
        </div>
        <!-- main content ends here -->
            <!-- footer starts here -->
            <?php include('partials/footer.php') ?>