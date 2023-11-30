<?php
include('../../config/connect.php');
if(isset($_GET['id']))
{
$id = $_GET['id'];
$sql = "DELETE FROM adminservices WHERE ID = '$id'";
$res = mysqli_query($conn, $sql);
if($res == true)
{
        $_SESSION['delete'] = "<div style = 'color:green'>Service Deleted Successfully.</div>";
        header("Location:../admin-page.php");
}
else
{
    $_SESSION['delete'] = "<div style = 'color:red'>Failed to Delete product.</div>";
    header("Location:../admin-page.php");
}
}
else{
    $_SESSION['unauthorized'] = "<div style = 'color:red'>UnAuthorized Access</div>";
    header("Location:../admin-page.php");
}


?>