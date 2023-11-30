<?php include('config/connect.php'); ?>
<?php include('products/component.php') ?>
<?php 

if(isset($_POST['submit']))
{
    $first =  $_POST['first'];
    $last =  $_POST['last'];
    $email =  $_POST['email'];
    $address =  $_POST['address'];
    $address2 =  $_POST['address2'];
    $country =  $_POST['country'];
    $state =  $_POST['state'];
    $total =  $_SESSION['total'];




    if(isset($_COOKIE['cart']))
                {
                       
                  $yes = "yes";
                  $sql4 = "SELECT * FROM products WHERE active = '$yes' ";
                  $res4 = mysqli_query($conn, $sql4);

                  $count = mysqli_num_rows($res4);
                  if($count>0)
                  {
                    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"]:"[]";
                    $cart = json_decode($cart);
                    


                    $tit = "";

                       while($row = mysqli_fetch_assoc($res4))
                       {
                           $flag = false;
                            $id_2 = $row['id'];
                           $title_2 = $row['title'];
                           $price = $row['price'];
                           $image_name = $row['image_name'];
                           foreach($cart as $c)
                           {
                             if($c -> product_id == $id_2)
                             {
                               
                               $flag = true;
                               break;
                             }
                             
                    
                           }
                           if($flag==true)
                           {
                            $tit .= $title_2."-";
                            
                            
                            
                            
                              
                           }
                          
                        }
                            



                  }
                  else {
                     echo "<H1> THIS ITEM IS NO LONGER AVAILABLE  .</H1>";
                  }
                }


    $sql = "INSERT INTO orders SET first = '$first',last = '$last', email = '$email' , address = '$address' , address2 = '$address2', products = '$tit' ,country = '$country' ,state = '$state' , total = '$total' ;";
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {

        // echo implode(" ",explode("-",$tit));
        
        



        // echo 
        if( $_POST['paymentMethod'] == "Counter" )
        {
         echo "<script>alert('Your order has been submitted for Counter payment, we will contact you through email.');document.location='administrative services/Nova/index.php'</script>";
        }
        else{
          echo "<script>alert('Your order has been submitted for PayPal, we will contact you through email.');document.location='administrative services/Nova/index.php'</script>";

        }
        echo "<br>";
        // header("Location:trial.php");
    }
    else{
        echo "failure";
        // $_SESSION['offer'] = "<div style = 'color:red'>Offer added unsuccessfully.</div>";
        // header("Location:home.php");
    }
}


?>