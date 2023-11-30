
<?php
include('../../config/connect.php');

if(isset($_POST['submit']))
{
    $description =  $_POST['description'];
    $price =  $_POST['price'];
    $title =  $_POST['title'];
   


    $sql1 = "INSERT INTO adminservices SET AdminServices ='$title', description = '$description', Price = '$price'";

    $res2 = mysqli_query($conn,$sql1);
    if($res2 == true)
    {
            $_SESSION['info'] = "<div style = 'color:green'>Service Added Successfully.</div>";
            header("Location:../administrative.php");
    }
    else{
        $_SESSION['info'] = "<div style = 'color:red'>Service Adding UnSuccessful.</div>";
        header("Location:../administrative.php");
    }














    
}



?>