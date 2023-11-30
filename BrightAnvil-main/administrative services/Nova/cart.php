<?php
include('../../config/connect.php');
if(isset($_POST['add'])) 
{
        $prod_id = $_POST['product_id'];
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
    // echo "ya";
    header("Location:product-details.php?catid=$cat_id&prodid=$prod_id");


}
else 
{
header("Location:index.php?accessForbidden");
}


?>