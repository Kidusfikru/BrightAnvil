<?php
include('../config/connect.php');
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password = md5( $_POST['password']);
 $admin = 1;

$sql = "SELECT * FROM user WHERE EMAIL = '$email' AND password = '$password' AND Admin = '$admin'";
$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);

if($count == 1)
{
$_SESSION['login'] = "<div style='color:green'>Login Successful</div>";
$_SESSION['user'] = $email;
header("Location:../Admin/home.php");
}
else 
{
    $_SESSION['login'] = "<div style = 'color:red'>Email and password Do Not Match. </div>";
    header("Location:../login.php?password-mismatch");
}

}
else 
{
    $_SESSION['login'] = "<div style = 'color:red'>Email and password Do Not Match. </div>";
     header("Location: ../index.php? Access-Not-Permitted");
}
?>