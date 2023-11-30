<?php

include('../../config/connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE ID = $id";

$res = mysqli_query($conn, $sql);
if($res == true)
{
    $_SESSION['delete'] = "<div style = 'color:green'>ADMIN DELETED SUCCESSFULLY.</div>";
    header("Location: ../admin.php?Deleted-successfully");
}
else{
    $_SESSION['delete'] = "<div style = 'color:red'>ADMIN NOT DELETED. TRY AGAIN LATER!</div>";
    header("Location: ../admin.php?Deleted-UN-successfully");
}




?>