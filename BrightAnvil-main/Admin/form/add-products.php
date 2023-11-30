<?php
include('../../config/connect.php');
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

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
    else{
        $active = "no";
    }

    if(isset($_FILES['image']['name']))
    {
        $image_name = $_FILES['image']['name'];
            if($image_name != "")
            {
                $ext = explode('.',$image_name);

                $ext1 = end($ext);
            
                $source_path = $_FILES['image']['tmp_name'];

            

                $image_name ="product_".rand(00000,99999).'.'.$ext1;

                $destination_path = "../../images/Products/".$image_name;

                $upload = move_uploaded_file($source_path,$destination_path);
                if($upload == false)
                {
                    $_SESSION['upload'] = "<div style = 'color:red'>Failed to Upload Image .</div>";
                    header("Location:../add-products.php");
                    die();
                }
            }
    }
    else{
        $image_name = "";
    }
    $sql1 = "INSERT INTO products SET title ='$title', description = '$description', price = '$price', image_name = '$image_name',
    category_id = '$category', featured = '$featured', active = '$active'";

    $res2 = mysqli_query($conn,$sql1);
    if($res2 == true)
    {
            $_SESSION['add'] = "<div style = 'color:green'>Product Added Successfully.</div>";
            header("Location:../products.php");
    }
    else{
        $_SESSION['add'] = "<div style = 'color:red'>Product Adding UnSuccessful.</div>";
        header("Location:../products.php");
    }

}

?>