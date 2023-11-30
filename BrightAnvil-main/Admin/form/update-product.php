<?php 
include('../../config/connect.php');
if(isset( $_POST['submit']))
{
      echo  $id = $_POST['id'];
      
       $title = $_POST['title'];
      
       $description = $_POST['description'];
      
       $price = $_POST['price'];
      
       $current_image = $_POST['current_image'];
             $category = $_POST['category'];
      
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
    
                
    
                    $image_name ="product_".rand(00000,99999).'.'.$ext1;
    
                    $destination_path = "../../images/products/".$image_name;
    
                    $upload = move_uploaded_file($source_path,$destination_path);
                    if($upload == false)
                    {
                        $_SESSION['upload'] = "<div style = 'color:red'>Failed to Upload Image .</div>";
                        header("Location:../products.php");
                        die();
                    }

                    if($current_image!="")
                    {
                            $remove_path = "../../images/products/".$current_image;
                            $remove = unlink($remove_path);
                            if($remove == false)
                            {
                                $_SESSION['failed-remove'] = "<div style = 'color:red'>Failed To Remove Current Image.</div>";
                                header("Location: ../products.php");
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
 
        $sql = "UPDATE products SET title ='$title', description = '$description', price = '$price', image_name = '$image_name', 
        category_id = '$category', featured = '$featured', active = '$active' WHERE id = '$id'" ;
        $res = mysqli_query($conn, $sql);
        if($res == true)
        {
                $_SESSION['update'] = "<div style = 'color:green'>Category Updated Successfully.</div>";
                header("Location:../products.php");
        }
        else
        {
            $_SESSION['update'] = "<div style = 'color:red'>Category Update UnSuccessful.</div>";
            header("Location:../products.php");
        }
}
else {
    header("Location:../category.php?Forbidden Access");

}

?>