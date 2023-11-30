<?php 
include('../../config/connect.php');
$print = "Add To Cart";
$id_2 = "Doesn't Exist";
$title_2 = "Doesn't Exist";
$price = "Doesn't Exist";
$description = "Doesn't Exist";
$product_image = "Doesn't Exist";
$title_1 = "Doesn't Exist";
// $catID = "Doesn't Exist";
// $prodID = "Doesn't Exist";
// $print = "Add To cart";
?>
<?php if(isset($_GET['admin']))
{
// echo "bye";
$yes = "yes";
$id = $_GET['admin'];
                        $sqls = "SELECT * FROM adminservices WHERE ID = '$id'";
                        $ress = mysqli_query($conn, $sqls);

                        // $sql1 = "SELECT * FROM products WHERE id = '$prodID'";
                        // $res1 = mysqli_query($conn, $sql1);

                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                                $description = $row['description'];
                                $price = $row['Price'];
                                $title_2 = $row['AdminServices'];
                                $title_1 = "Administrative Services";
                                $product_image = "assets/img/why-us-bg.jpg";

                            }
                        }

}
else{
}
?>

<?php
                  if(isset($_GET['catid']) && isset($_GET['prodid']))
                  {
                    
                    $catID = $_GET['catid'];
                    $prodID = $_GET['prodid'];
                  }
                  else {
                    
                    $catID = 0;
                     $prodID = 0;
                  }
                        
                        $yes = "yes";
                        $sqls = "SELECT * FROM category WHERE ID = '$catID'";
                        $ress = mysqli_query($conn, $sqls);

                        $sql1 = "SELECT * FROM products WHERE id = '$prodID'";
                        $res1 = mysqli_query($conn, $sql1);

                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                                $id_1 = $row['ID'];
                                $title_1 = $row['Title'];
                            }
                        }
                        else{
                            ?>
                            <!-- <option value="0">No Category Found</option> -->

                            <?php
                        }

                        $counts = mysqli_num_rows($res1);
                        if($counts>0)
                        {
                            while($row = mysqli_fetch_assoc($res1))
                            {
                                $id_2 = $row['id'];
                                $title_2 = $row['title'];
                                $price = $row['price'];
                                $description = $row['description'];
                                $product_image = $row['image_name'];
                            }
                        }

                        ?>


<?php 
                $total = 0;
                if(isset($_COOKIE['cart']))
                {
                       
                  $yes = "yes";
                  $sql4 = "SELECT * FROM products WHERE id = '$prodID' ";
                  $res4 = mysqli_query($conn, $sql4);

                  $count = mysqli_num_rows($res4);
                  if($count>0)
                  {
                    $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"]:"[]";
                    $cart = json_decode($cart);
                    




                       while($row = mysqli_fetch_assoc($res4))
                       {
                           $flag22 = false;
                            $id_22 = $row['id'];
                           $title_22 = $row['title'];
                           $price22 = $row['price'];
                           $image_name22 = $row['image_name'];
                           $description22 = $row['description'];
                           foreach($cart as $c)
                           {
                             if($c -> product_id == $prodID)
                             {
                                $print = "delete from cart ";
                                 
                             }
                             else{
                              $print = "Add To Cart";
                             }


                             
                    
                           }
                           if($flag22==true)
                           {


                            ?>
                                                      <?php

                          $total = $total + (int)$row['price'];
                          
                            
                         }
                      }




                }
                else {
                  //  echo "<H1> THIS ITEM IS NO LONGER AVAILABLE  .</H1>";
                }
              }
              else
              {
                // echo "<H1> NO ITEMS IN THIS CATEGORY YET.</H1>";
              }
           

              
  

              
  

              


              ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php if(isset($_GET['admin'])) {echo "Service Details";} else {echo "Product Details";}?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel = "stylesheet" href ="css/et-icons.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css" integrity="sha512-9nqhm3FWfB00id4NJpxK/wV1g9P2QfSsEPhSSpT+6qrESP6mpYbTfpC+Jvwe2XY27K5mLwwrqYuzqMGK5yC9/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.3.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-portfolio">

  <!-- ======= Header ======= -->
                <?php include('navigation.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2><?php if(isset($_GET['admin'])) {echo "Service Details";} else {echo "Product Details";}?></h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><?php if(isset($_GET['admin'])) {echo "Service Details";} else {echo "Product Details";}?></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="disabled swiper-slide">
                  <img src="<?php if(isset($_GET["admin"]))
                  {echo $product_image;}
                  else {echo "../../images/products/".$product_image;}
                   ?>" alt = "">
                </div>
             
                

                <!-- <div class="swiper-slide">
                  <img src="assets/img/portfolio/product-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/branding-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/books-1.jpg" alt="">
                </div> -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php if(isset($_GET['admin'])) {echo "Service Information";} else {echo "Product Information";}?></h3>
              <ul>

             

                        <li><strong><?php if(isset($_GET['admin'])) {echo "Service Name";} else {echo "Product Name";}?></strong> : <?php echo ucwords($title_2)?></li>
                <li><strong>Category</strong> : <?php echo ucwords($title_1) ?></li>
                
                <li><strong>Price</strong>: <?php echo $price ?></li>
                <form action="<?php if(isset($_GET["admin"])){echo "self";} else {if($print == 'Add To Cart'){echo 'cart.php';} else {echo 'delete_cart.php?info=9';}}   ?>" method="post">
                <input type = "hidden" name = "product_name" value = "<?php echo $title_2; ?>">
                <input type = "hidden" name = "product_price" value = "<?php echo $price; ?>">
                <input type = "hidden" name = "product_image" value = "<?php echo $product_image; ?>">
                <input type = "hidden" name = "product_id" value = "<?php echo $id_2; ?>">
                <input type = "hidden" name = "category_id" value = "<?php echo $id_1; ?>">
                <?php 
                                             if(isset($_GET["admin"]))
                                             {
                                              $print = "purchase ";
                                              
                                             }
                ?>
                <button type ="submit" name = "add" class = "btn btn-warning my-3"><?php echo ucwords($print) ?><i class="fas fa-shopping-cart"></i></button>

                    <!-- <input type = "button"> <li><strong></strong><a href="#about" class="btn-get-started">Add to Cart <i class="bi bi-cart"></i></a> </li>  </input> -->
                </form>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Product Detail</h2>
              <p>
                <?php echo ucwords($description) ;?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include 'footer.php' ?>