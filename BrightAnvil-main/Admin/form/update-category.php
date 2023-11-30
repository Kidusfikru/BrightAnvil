<?php 
include('../../config/connect.php');
if(isset( $_POST['submit']))
{
        $id = $_POST['id'];
        $title = $_POST['title'];
        $current_image = $_POST['current_image'];
        $featured = $_POST['featured'];
        $active = $_POST['active'];

        if(isset($_FILES['image']['name']))
        {
                $image_name = $_FILES['image']['name'];
                if($image_name != "")
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
                        header("Location:../category.php");
                        die();
                    }

                    if($current_image!="")
                    {
                            $remove_path = "../../images/category/".$current_image;
                            $remove = unlink($remove_path);
                            if($remove == false)
                            {
                                $_SESSION['failed-remove'] = "<div style = 'color:red'>Failed To Remove Current Image.</div>";
                                header("Location: ../category.php");
                                die();
                            }
                    }
                }
                else{
                    $image_name = $current_image;
                }
        }
        else
        {
            $image_name = $current_image;
        }

        $sql = "UPDATE category SET Title ='$title', image_name = '$image_name',featured = '$featured', active = '$active' WHERE id = '$id'"
        ;
        $res = mysqli_query($conn, $sql);
        if($res == true)
        {
                $_SESSION['update'] = "<div style = 'color:green'>Category Updated Successfully.</div>";
                header("Location:../category.php");
        }
        else
        {
            $_SESSION['update'] = "<div style = 'color:red'>Category Update UnSuccessful.</div>";
            header("Location:../category.php");
        }
}
else {
    header("Location:../category.php?Forbidden Access");

}

?>