<?php include('config/connect.php'); ?>
<?php include('products/component.php');?>
<?php

if(isset($_POST['add'])) 
{
    if($_GET['info']== 1)
    {
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
        $prod_id = $_POST['product_id'];
    $cat_id =  $_POST['category_id'];
    
    $new_cart = array();
    foreach($cart as $c)
    {
        if($c->product_id != $prod_id)
        {
            array_push($new_cart,$c);
        }
    }
    
    setcookie("cart",json_encode($new_cart),time() + (86400 * 30), "/");
    echo "<script>window.location = 'trial.php?#$prod_id'</script>";

    // header("Location:trial.php");
    }
    else if($_GET['info']== 0)
    {
        

  
            $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
            $cart = json_decode($cart);
            $prod_id = $_POST['productid'];
        
        $new_cart = array();
        foreach($cart as $c)
        {
            if($c->product_id != $prod_id)
            {
                array_push($new_cart,$c);
            }
        }
        
        setcookie("cart",json_encode($new_cart),time() + (86400 * 30), "/");
        
        header("Location:products_cart.php");
        



    }
    else if($_GET['info']== 9)
    {
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
        $prod_id = $_POST['product_id'];
    $cat_id =  $_POST['category_id'];
    
    $new_cart = array();
    foreach($cart as $c)
    {
        if($c->product_id != $prod_id)
        {
            array_push($new_cart,$c);
        }
    }
    
    setcookie("cart",json_encode($new_cart),time() + (86400 * 30), "/");
    echo "<script>window.location = 'products.php?id=$cat_id#river'</script>";
    // header("Location:products.php?id=$cat_id");
    }




    else if($_GET['info']== 15)
    {
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);
        $product_name = $_POST['product_name'];
        $prod_id = $_POST['product_id'];
    // $cat_id =  $_POST['category_id'];
    
    $new_cart = array();
    foreach($cart as $c)
    {
        if($c->product_id != $prod_id)
        {
            array_push($new_cart,$c);
        }
    }
    
    setcookie("cart",json_encode($new_cart),time() + (86400 * 30), "/");
    $search = $_SESSION['searched'];
    echo "<script>window.location = 'search.php?input=$search&submit='</script>";
    // header("Location:products.php?id=$cat_id");
    }


    
    }

else 
{
            header("Location:trail.php?can't access this page");
}
?>