<?php include('../../config/connect.php'); ?>
<?php 
if(isset($_POST['submitSearch']))
{
    $title_1 = "buck";
$product_name = $_POST['search'];
$product_name = rm_special_char($product_name);
$yes = "yes";
$sqls = "SELECT * FROM products WHERE title = '$product_name'";
$ress = mysqli_query($conn, $sqls);

$count = mysqli_num_rows($ress);
if($count>0)
{
    while($row = mysqli_fetch_assoc($ress))
    {
        $id_1 = $row['id'];
        $title_1 = ucwords($row['title']);
        $catId = $row['category_id'];
        $description = $row['description'];
        $product_image = $row['image_name'];

    }
}
$title_1 = strtolower($title_1);
$product_name = strtolower($product_name);


if(ucwords($title_1) == ucwords($product_name))
{
    header("Location:product-details.php?catid=$catId&prodid=$id_1");
}
else {
    echo "<script>alert('Could Not Find $product_name');document.location='index.php'</script>";
}
}
else{
    header("Location:index.php?Access-Forbidden");
}




function rm_special_char($str) {

    //Remove "#","'" and ";" using str_replace() function
    
    $result = str_replace( array('"', "'", ";"), '', $str);
    
    //The output after remove
    
    return $result;
    
    }
?>
