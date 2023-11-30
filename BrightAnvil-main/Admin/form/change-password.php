<?php
include('../../config/connect.php');
if(isset($_POST['submit']))
{
     $id = $_POST['id'];
     $password = md5($_POST['Password']);
     $confirmpassword = md5($_POST['ConfirmPassword']);

        $sql = "SELECT * FROM user WHERE ID = '$id'";
        $res = mysqli_query($conn, $sql);
    if($res == true)
    {
        $count = mysqli_num_rows($res);
        if($count == 1 )
        {
            if($password == $confirmpassword)
            {
                    $sql2 = "UPDATE user SET password = '$password' where id = $id ";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == true)
                    {
                        $_SESSION['change-passwd'] = '<div style = "color:green">PASSWORD CHANGE SUCCESSFUL.</div>';
                        header("Location: ../admin.php?id=$id");  
                    }
                    else 
                    {
                        $_SESSION['change-passwd'] = '<div style = "color:red">PASSWORD CHANGE UNSUCCESSFUL. TRY AGAIN LATER!SS </div>';
                        header("Location: ../admin.php?id=$id");  
                    }

            }
            else{
                $_SESSION['passwd-not-match'] = '<div style = "color:red">The passwords do not match. </div>';
                header("Location: ../change-password.php?id=$id");            
               }
        }
        else
        {
            $_SESSION['user-not-found'] = '<div style = "color:red">User not found</div>';
            header("Location: ../admin.php?User-not-found");        }
    }
}
else 
{
    header("Location: ../../index.php? Access-Not-Permitted");
}

?>