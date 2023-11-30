<?php
include('../../config/connect.php');
if(isset($_GET['id']) AND isset($_GET['cat']))
{
$id = $_GET['id'];
$cat = $_GET['cat'];
$sql = "DELETE FROM $cat WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
if($res == true)
{
        $_SESSION['delete'] = "<div style = 'color:green'> Deleted Successfully.</div>";
        header("Location:../home.php");
}
else
{
    $_SESSION['delete'] = "<div style = 'color:red'>Failed to Delete.</div>";
    header("Location:../home.php");
}
}
else{
    $_SESSION['unauthorized'] = "<div style = 'color:red'>UnAuthorized Access</div>";
    header("Location:../products.php");
}


?>