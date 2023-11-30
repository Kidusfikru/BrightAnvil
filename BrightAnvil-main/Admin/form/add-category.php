<?php
include('../../config/connect.php');
if(isset($_POST['submit']))
{
    $title = $_POST['category-type'];
    
    if(isset($_POST['featured']))
    {
        $featured = $_POST['featured'];
    }
    else{
        $featured = "no";
    }
    if(isset($_POST['active']))
    {
        $active = $_POST['active'];
    }
    else
    {
        $active = "no";
    }
    if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];

        if($image_name!= "")
        {
                $ext = explode('.',$image_name);

                $ext1 = end($ext);
            
                $source_path = $_FILES['image']['tmp_name'];

            

                $image_name ="Category_".rand(000,999).'.'.$ext1;

                $destination_path = "../../images/category/".$image_name;

                $upload = move_uploaded_file($source_path,$destination_path);
                if($upload == false)
                {
                    $_SESSION['upload'] = "<div style = 'color:red'>Failed to Upload Image .</div>";
                    header("Location:../add-category.php");
                    die();
                }
        }
    }
    else{
        $image_name = "";
    }
    $sql = "INSERT INTO category SET title = '$title', image_name = '$image_name', featured = '$featured', active = '$active';";
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {
            $_SESSION['add'] = "<div style = 'color:green'>Category Added Successfully.</div>";
            header("Location:../category.php");
    }
    else{
        $_SESSION['add'] = "<div style = 'color:red'>Category Added UnSuccessfully.</div>";
        header("Location:../category.php");
    }
}

?>