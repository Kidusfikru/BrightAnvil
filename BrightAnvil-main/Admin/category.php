<?php include('partials/menu.php') ?>
        <!-- menu ends here -->
            <!-- main content goes here -->
     <div class="main-content">
        <div class="wrapper">
            <h1>Manage Category</h1>  
            <br>
            <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['remove']))
        {
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['no-category-found']))
        {
            echo $_SESSION['no-category-found'];
            unset($_SESSION['no-category-found']);
        }
        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        if(isset($_SESSION['failed-remove']))
        {
            echo $_SESSION['failed-remove'];
            unset($_SESSION['failed-remove']);
        }
?>

<!--button to add admin --> 
<a href ="add-category.php"><button style ="background-color:#3a8878 "id = "link" type="button" class="btn btn-primary hovering">Add Category</button></a>
<table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Image</th>
<th scope="col">Featured</th>
<th scope="col">Active</th>
<th scope="col">Actions</th>


</tr>
</thead>

<tbody>
<tr>
    <?php
        $sql = "SELECT * FROM category";

        $res = mysqli_query($conn, $sql);

        $sm = 1;

        $count =  mysqli_num_rows($res);

        if($count > 0)
        {
                while($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['ID'];
                    $title = $row['Title'];
                    $image_name = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];

                    ?>
<th scope="row"><?php echo $sm++;?></th>
<td><?php echo $title;?></td>
<td><?php  if($image_name!="")
{
    ?>
        <img class ="image-hover" style ="height :100px; width:150px" src="../images/category/<?php echo $image_name;?>" alt="<?php echo $image_name?>">
<?php
}
else{
        echo '<div style = "color:red">No picture has been added.</div>';
};?></td>
<td><?php echo $featured;?></td>
<td><?php echo $active;?></td>

<td>
<a href=" update-category.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-primary hovering">Update Category</button></a>
<a href=" form/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>"><button type="button" class="btn btn-primary hovering">Delete Category</button></a>
</td>
</tr>

                    <?php
                }
        }
        else
        {

            ?>
                <tr>
                    <td colspan ="6"><div style = "color:red">No Category Added. </div></td>
                </tr>

            <?php
        }

    ?>


</tbody>
</table>
           
    </div>
        </div>
        <!-- main content ends here -->
            <!-- footer starts here -->
            <?php include('partials/footer.php') ?>