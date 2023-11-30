<?php
include('config/connect.php');
if(isset($_POST['add'])) 
{
    if($_GET['info']== 1)
    {
        $id = $_POST['product_id'];
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
    $cat_id =  $_POST['category_id'];
    array_push($cart, array(
        "product_name" => $_POST['product_name'],
        "product_price" => $_POST['product_price'],
        "product_image" => $_POST['product_image'],
        "product_id" => $_POST['product_id'],
        "category_id" => $_POST['category_id']
    ));
    
    setcookie("cart",json_encode($cart),time() + (86400 * 30), "/");
    echo "<script>window.location = 'trial.php?#$id'</script>";
    }


    else if($_GET['info']== 15)
    {
        $search = $_SESSION['searched'];
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
    $cat_id =  $_POST['category_id'];
    $product_name = $_POST['product_name'];
    array_push($cart, array(
        "product_name" => $_POST['product_name'],
        "product_price" => $_POST['product_price'],
        "product_image" => $_POST['product_image'],
        "product_id" => $_POST['product_id'],
        "category_id" => $_POST['category_id']
    ));
    
    setcookie("cart",json_encode($cart),time() + (86400 * 30), "/");
    
    header("Location:search.php?input=$search&submit='again'");

    }
    else {






        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
    $cat_id =  $_POST['category_id'];
    array_push($cart, array(
        "product_name" => $_POST['product_name'],
        "product_price" => $_POST['product_price'],
        "product_image" => $_POST['product_image'],
        "product_id" => $_POST['product_id'],
        "category_id" => $_POST['category_id']
    ));
    
    setcookie("cart",json_encode($cart),time() + (86400 * 30), "/");
    
    header("Location:products.php?id=$cat_id");






       
    }


}
else 
{
header("Location:trial.php?accessForbidden");
}


?>