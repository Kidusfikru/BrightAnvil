<?php include('partials/menu.php') ?>
<div class="main-content">

<div class="wrapper">

<h1>Administrative Services Provided</h1>
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
<a href="administrative.php"><button id = "link" type="button" class="btn btn-primary hovering">Add Services</button></a>
<table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">Price</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM adminservices";

$res = mysqli_query($conn, $sql);
$n = 1;
$count = mysqli_num_rows($res);
if($count > 0)
{
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['ID'];
            $title = $row['AdminServices'];
            $description = $row['description'];
            $price = $row['Price'];
            // $category_id = $row['category_id'];

            ?>
<tr>
<th scope="row"><?php echo $n++ ?></th>
<td><?php echo "$title" ?></td>
<td><?php echo "$description" ?></td>
<td><?php echo "$price" ?></td>
<td><a href=" form/delete-service.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-primary hovering">Delete Service</button></a>
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

</div>
</div>
<?php include('partials/footer.php')?>