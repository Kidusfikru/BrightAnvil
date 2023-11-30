<?php
include('../../config/connect.php');
if(isset($_GET['id']) AND isset($_GET['image_name']))
{
$id = $_GET['id'];
$image_name = $_GET['image_name'];
if($image_name !="")
{
    $path = "../../images/products/".$image_name;
    $remove = unlink($path);
    if($remove == false)
    {
        $_SESSION['remove'] ="<div style = 'color:red'> Failed to remove Image.</div>";
        header("Location:../products.php");
        die();
    }
}
$sql = "DELETE FROM products WHERE ID = '$id'";
$res = mysqli_query($conn, $sql);
if($res == true)
{
        $_SESSION['delete'] = "<div style = 'color:green'>product Deleted Successfully.</div>";
        header("Location:../products.php");
}
else
{
    $_SESSION['delete'] = "<div style = 'color:red'>Failed to Delete product.</div>";
    header("Location:../products.php");
}
}
else{
    $_SESSION['unauthorized'] = "<div style = 'color:red'>UnAuthorized Access</div>";
    header("Location:../products.php");
}


?>