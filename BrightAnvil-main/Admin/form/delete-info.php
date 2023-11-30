<?php
include('../../config/connect.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];

$sql = "DELETE FROM frontfeature WHERE id = '$id'";
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