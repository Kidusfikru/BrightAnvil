<?php
include('../../config/connect.php');
if(isset($_GET['id']) AND isset($_GET['image_name']))
{
$id = $_GET['id'];
$image_name = $_GET['image_name'];

if($image_name !="")
{
    $path = "../../images/category/".$image_name;
    $remove = unlink($path);
    if($remove == false)
    {
        $_SESSION['remove'] ="<div style = 'color:red'> Failed to remove Image.</div>";
        header("Location:../category.php");
        die();
    }
}
$sql = "DELETE FROM category WHERE ID = '$id'";
$res = mysqli_query($conn, $sql);
if($res == true)
{
        $_SESSION['delete'] = "<div style = 'color:green'>Category Deleted Successfully.</div>";
        header("Location:../category.php");
}
else
{
    $_SESSION['delete'] = "<div style = 'color:red'>Failed to Delete Category.</div>";
    header("Location:../category.php");
}
}
else
{
    header("Location:../category.php");
}

?>