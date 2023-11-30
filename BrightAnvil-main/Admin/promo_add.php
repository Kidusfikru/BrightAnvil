<?php 
include('../config/connect.php');
if(isset($_POST['submit']))
{
    $promo = $_POST['promo'];
    $percent = $_POST['percent'];
    $sql = "INSERT INTO promo SET promo_number = '$promo', promo_percent = '$percent' , active = '1';";
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {
            $_SESSION['promo'] = "<div style = 'color:green'>Promo Code added successfully.</div>";
            header("Location:home.php");
    }
    else{
        $_SESSION['promo'] = "<div style = 'color:red'>Promo Code added unsuccessfully.</div>";
        header("Location:home.php");
    }
}
else if(isset($_POST['offer']))
{
    $name = $_POST['offerName'];
    $color = $_POST['offerColor'];
    $font = $_POST['offerFont'];
    $sql = "INSERT INTO offers SET offer_name = '$name',font = '$font', color = '$color' , active = '1';";
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {
            $_SESSION['offer'] = "<div style = 'color:green'>Offer added successfully.</div>";
            header("Location:home.php");
    }
    else{
        $_SESSION['offer'] = "<div style = 'color:red'>Offer added unsuccessfully.</div>";
        header("Location:home.php");
    }
}
else
{
    header("Location:home.php?Access Forbidden"); 
}


?>