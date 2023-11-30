<?php 
include('../../config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

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

<?php include('navigation.php');?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Products</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Products</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                                <li id = "all" data-filter="*" class="filter-active">All</li>

        <?php
                        $yes = "yes";
                        $sqls = "SELECT * FROM category WHERE active = '$yes'";
                        $ress = mysqli_query($conn, $sqls);

                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                              $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
                              $cart = json_decode($cart);
                                $id_1 = $row['ID'];
                                $title_1 = $row['Title'];
                                ?>
                                <li id = "<?php  echo $id_1; ?>" data-filter=".filter-<?php  echo $id_1; ?>"><?php echo $title_1; ?></li>
                                 <!-- <li><a  id = "link" class="dropdown-item" value="<?php echo $id_1;?>" href="products.php?id=<?php echo $id_1 ?>"><?php echo $title_1;?></a></li> -->
                           <?php
                            }
                        }
                        else{
                            ?>
                            <!-- <option value="0">No Category Found</option> -->
                            <li data-filter=".filter-<?php  echo $title_1; ?>">None Yet!</li>

                            <?php
                        }
                        ?>

</ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

          
          
          
          
          
          
          

          <?php
                        $yes = "yes";
                        $offset = 0;
                        if(isset($_GET['offset']) and $_GET['offset'] > 0)
                        {
                          $offset = $_GET['offset'];
                        }
                        else {
                          $offset = 0;
                        }
                        $sqls = "SELECT * FROM products WHERE active = '$yes' LIMIT 6 OFFSET $offset";
                        $ress = mysqli_query($conn, $sqls);
                        $counts = 0;
                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                                $id_1 = $row['id'];
                                $title_1 = $row['title'];
                                $catId = $row['category_id'];
                                $description = $row['description'];
                                $product_image = $row['image_name'];
                                $counts= $counts +1;

                       
                                ?>
                          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $catId ?>">
                        <img src="../../images/products/<?php echo $product_image ?>" class="img-fluid" alt="" >
                        <div class="portfolio-info">
                          <h4><?php echo $title_1?></h4>
                          <p><?php echo $description?></p>
                          <a href="../../images/products/<?php echo $product_image ?>" title="<?php  echo ucwords($title_1) ?>" data-gallery="portfolio-gallery-<?php echo $catId   ?>" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="product-details.php?catid=<?php echo $catId; ?>&prodid=<?php echo $id_1; ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                      </div><!-- End Portfolio Item -->


                           <?php

                            }
                        }
                        else{
                            ?>
                            <!-- <option value="0">No Category Found</option> -->
                            <!-- <li data-filter=".filter-">None Yet!</li> -->

                            <?php
                        }
                        ?>




            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-books">
              <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <nav id aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <?php 


?>
      <a class="page-link" href="index.php?offset=<?php  echo $offset-6;?>" tabindex="-1">Previous</a>
    </li>
    <?php 
                        $sqls = "SELECT * FROM products WHERE active = '$yes' ";
                        $ress = mysqli_query($conn, $sqls);
                        $counter = 0;
                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                                $counter++;
                              }
                        }  ?>
    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li> -->
    
    <?php 
      $ep = $counter/6;
      $a = 0;
      $val = 1;

          while($a < ceil($ep))
          {
          ?>
          <li class="page-item"><a class="page-link" href="#"><?php echo $val++; ?></a></li>
          <?php
          $a ++;
          }
        
      ?>
    <li class="page-item">  
      <a class="page-link" href="index.php?offset=<?php echo $offset+6;?>" aria-disabled="true" >Next</a>
      
    </li>
  </ul>
</nav>


  </main><!-- End #main -->

  <?php include 'footer.php' ?>