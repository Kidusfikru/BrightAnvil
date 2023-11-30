<?php
include('../config/connect.php');
if(isset($_POST['submit']))
{
    ECHO "HI";
    $title = $_POST['title'];

        $description = $_POST['description'];
    

 
    if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];

        if($image_name!= "")
        {
                $ext = explode('.',$image_name);

                $ext1 = end($ext);
            
                $source_path = $_FILES['image']['tmp_name'];

            

                $image_name ="front_".rand(000,999).'.'.$ext1;

                $destination_path = "../images/front/".$image_name;

                $upload = move_uploaded_file($source_path,$destination_path);
                if($upload == false)
                {
                    $_SESSION['upload'] = "<div style = 'color:red'>Failed to Upload Image .</div>";
                    header("Location:home.php");
                    die();
                }
        }
    }
    else{
        $image_name = "";
    }
    $sql = "INSERT INTO frontfeature SET description = '$description', title = '$title', image_name = '$image_name';";
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {
            $_SESSION['add'] = "<div style = 'color:green'>Category Added Successfully.</div>";
            header("Location:home.php?SUCCESS");
    }
    else{
        $_SESSION['add'] = "<div style = 'color:red'>Category Added UnSuccessfully.</div>";
        header("Location:home.php?FAILURE");
    }
}

?>