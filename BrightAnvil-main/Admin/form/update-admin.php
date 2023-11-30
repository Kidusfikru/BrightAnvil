<?php
include('../../config/connect.php');
if(isset($_POST['submit']))
{
      echo   $id = $_POST['id'];
      echo  $firstname = $_POST['FirstName']; 
      echo   $lastname =$_POST['LastName'];
     echo   $email = $_POST['Email'];

     $sql ="UPDATE user SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE ID = '$id'";
     $res = mysqli_query($conn, $sql);
     if($res == true)
     {
            $_SESSION['update'] =  "<div style = 'color:green'>ADMIN UPDATED SUCCESSFULLY</div>";
            header("Location:../admin.php");
     }
     else{
        $_SESSION['update'] =  "<div style = 'color:red'>ADMIN UPDATE UNSUCCESSFUL. TRY AGAIN LATER !</div>";
        header("Location:../admin.php");
     }

}
    else 
    {
        header("Location: ../../index.php? Access-Not-Permitted");
    } 


?>