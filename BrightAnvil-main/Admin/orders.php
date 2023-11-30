<?php include('partials/menu.php') ?>
        <!-- menu ends here -->
            <!-- main content goes here -->
     <div class="main-content vh-100">
        <div class="wrapper">
            <h1>Manage Order</h1>  
            
<table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Address</th>
<th scope="col">Address 2 </th>
<th scope="col">Products</th>
<th scope="col">country & state</th>
<th scope="col">Price</th>
<th scope="col">date</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM orders";

$res = mysqli_query($conn, $sql);
$n = 1;
$count = mysqli_num_rows($res);
if($count > 0)
{
        while($row = mysqli_fetch_assoc($res))
        {
            $first = $row['first'];
            $last = $row['last'];
            $email = $row['email'];
            $full = $first." ".$last;
            $address = $row['address'];
            $address2 = $row['address2'];
            
            // $category_id = $row['category_id'];
            $products = $row['products'];
            $country = $row['country'];
            $state =  $row['state'];
            $total = $row['total'];
            $date = $row['date'];
            ?>
<tr>
<th scope="row"><?php echo $n++ ?></th>
<td><?php echo "$full" ?></td>
<td><?php echo "$email" ?></td>
<td><?php echo "$address" ?></td>
<td><?php echo "$address2" ?></td>
<td><?php echo implode(", ",explode("-",$products)); ?></td>
<td><?php echo "$country.' - '.$state" ?></td>
<td><?php echo "$total" ?></td>
<td><?php echo "$date" ?></td>
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
            <br>


           
    </div>
        </div>
        <!-- main content ends here -->
            <!-- footer starts here -->
            <?php include('partials/footer.php') ?>