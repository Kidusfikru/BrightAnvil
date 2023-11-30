<?php

include('../../config/connect.php');
if(isset($_POST['submit']))
{
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];
$password = ( $_POST['Password']);
$confirmPassword = ($_POST['ConfirmPassword']);
$admin = '1';

if($password != $confirmPassword)
{
    $_SESSION['password-mismatch'] = "<div style = 'color:red'>PASSWORDS DO NOT MATCH!</div>";
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    header("Location: ../add-admin.php?Password-Mismatch");
}
else
{
    $password = md5($password);
    $confirmPassword = md5($password);

    $sql = "Insert into user SET firstname = '$fname', lastname ='$lname', email ='$email', password ='$password', admin = $admin";
    $res = mysqli_query($conn,$sql) or die(mysqli_error());
    if($res == true)
        {
    $_SESSION['add'] = "<div style = 'color:green'>ADMIN ADDED SUCCESSFULLY</div>";
    header("Location: ../admin.php?Admin-added");
        }
else    
        {
      $_SESSION['add'] = "<div style = 'color:red'>FAILED TO ADD ADMIN</div>";
    header("Location: ../admin.php?Admin-NOT-added");}
//execute query and save data into database
}
}
else 
{
    header("Location: ../../index.php? Access-Not-Permitted");
}

?>