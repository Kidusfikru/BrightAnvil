<?php
if(!isset($_SESSION['user']))
{
    $_SESSION['no-login-message'] = "<div style = 'color : red'>Login to access page</div>";
     header('location:../login.php?Login-To-Access');
}
?>