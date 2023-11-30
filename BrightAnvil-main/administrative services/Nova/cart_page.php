<?php 
include('../../config/connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Details</title>
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

<body class="page-blog">

<?php include('navigation.php');?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Cart</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Cart</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-5 posts-list">









              <?php 
                $total = 0;
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
                    




                       while($row = mysqli_fetch_assoc($res4))
                       {
                           $flag = false;
                            $id_2 = $row['id'];
                           $title_2 = $row['title'];
                           $price = $row['price'];
                           $image_name = $row['image_name'];
                           $description = $row['description'];
                           $catid = $row['category_id'];
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


                            ?>

                <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="../../images/products/<?php echo $image_name;?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="product-details.php?catid=<?php echo "$catid"; ?>&prodid=<?php echo "$id_2";  ?>"><?php  echo ucwords($title_2);   ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center">Price : $<?php echo $price; ?></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                    Description : <?php echo $description; ?>                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-center">
                    <!-- <a href="blog-details.html">Read More <i class="bi bi-arrow-right"></i></a> -->
                    <form action="delete_cart.php?info=0" method="post">
                    <input type = "hidden" name = "productid" value = "<?php echo $id_2; ?>">
                    
                    <button type ="submit" name = "add" style ="background-color:red;"class = "btn btn-warning my-3">REMOVE FROM CART <i class="fas fa-shopping-cart"></i></button>
                    </form>
                  </div>

                </article>
              </div><!-- End post list item -->
                          <?php
                          



                            
                            $total = $total + (int)$row['price'];
                            
                           

                              
                           }
                   
                        }
                        
                        




                  }
                  else {
                     
                  }
                }
                else
                {
                  echo "<H1> NO ITEMS IN THIS CATEGORY YET.</H1>";
                }
             

                
    
  
                
    

                


                ?>


              

            





            </div><!-- End blog posts list -->

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li ><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>End blog pagination -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Price Details</h3>
                <hr>
                <ul class="mt-3">
                  <li><a role="link" aria-disabled="true">Price <span>:</span><span>$<?php echo$total;?></span></a></li>
                  <li><a role="link" aria-disabled="true">Delivery Charges <span>:</span><span>N/A</span></a></li>
                  <li><a role="link" aria-disabled="true">Amount Payable <span>:</span><span>$<?php echo $total; ?></span></a></li>
                  <form action="../../paymentforms.php"><button type="submit" name = "add" class="btn btn-dark">Checkout</button>
                  

                </form>
                  <li> </li>

                </ul>
              </div><!-- End sidebar categories-->

             

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php  include 'footer.php' ?>