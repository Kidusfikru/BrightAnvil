<?php include('config/connect.php'); ?>
<?php include('products/component.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Anvil</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
    <link rel = "stylesheet" href ="css/et-icons.css">
    <link rel="stylesheet" href="css/customfont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.css" integrity="sha512-9nqhm3FWfB00id4NJpxK/wV1g9P2QfSsEPhSSpT+6qrESP6mpYbTfpC+Jvwe2XY27K5mLwwrqYuzqMGK5yC9/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />



   <style>
    #link:hover { color:#3a8878 ; } /* CSS link color */
    #link:active {
            color: #3a8878 }
    #button_trans:hover {background-color:transparent;border-color:black;  }
    .image-hover{
  position:relative;
  overflow:hidden;
  transition:0.75s;
}
.image-hover:hover
{
  z-index:1;
  transform:scale(2);
  box-shadow: 0 25px 40px rgba(0,0,0,.5);
}
  </style>


<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('acv7tf83yd9u');
</script>
<!-- End of Async Drift Code -->
</head>
<body  data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75" class="d-flex flex-column min-vh-100" >

    <!---nav bar -->
    <nav  class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">

    <i class = " icon-anchor" style ="background-color:transparent"></i>
    <a class="navbar-brand" href="#hero">Bright Anvil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto ">
    <form action = "search.php" method = "get"class="d-flex" role="search">
        <input class="form-control me-2"name = "input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name ="submit" type="submit">Search</button>
      </form>
          <a id ="link" class="nav-link" href="trial.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id = "link">
            categories
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">

          <?php
                        // $sql2 = "SELECT * FROM students LIMIT 1";
                        // $res2 = mysqli_query($conn, $sql2);
                        // $count = mysqli_num_rows($res2);
                        

                        $yes = "yes";
                        $sqls = "SELECT * FROM category WHERE active = '$yes'";
                        $ress = mysqli_query($conn, $sqls);

                        $count = mysqli_num_rows($ress);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($ress))
                            {
                                $id_1 = $row['ID'];
                                $title_1 = $row['Title'];
                              
                                ?>
                                 <li><a href = "products.php?id=<?php echo $id_1; ?>"id = "link" class="dropdown-item" value="<?php echo $id_1;?>" href="#"><?php echo $title_1;?></a></li>
                             
                                <?php
                            }
                        }
                        else{
                            ?>
                            <option value="0">No Category Found</option>
                            <?php

                        }
                        ?>

          </ul>
        </li>
        <li class="nav-item">
          <a id ="link" class="nav-link" href="products_cart.php">Cart <i style = "color:white; padding:3% 0"class="fas fa-shopping-cart">  : <?php if(isset($_COOKIE['cart']))
          {
            $sAds = explode(",",$_COOKIE['cart']);
            $count = sizeof($sAds)/5 -2;
              echo "<span>$count</span>";
          }
          else{
            echo "0";
          } ?> </i></a>
        </li>
        <li class="nav-item">
          <a id ="link" class="nav-link" href="login.php">Logout</a>
        </li>
          

    </ul>
  </div>
    </div>
</nav>

<section id = "about" class ="text-center bg-light" >
    <!-- <div class="container-fluid my-5"> -->
    <div class = "container-fluid my-5">
            <div class = "row">
                <div class="col-md-8 intro mx-auto" >
                    <h1 >Categories</h1>
                    <div class="divider"></div> 
                       
                    
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">



  <?php
                        // $sql2 = "SELECT * FROM students LIMIT 1";
                        // $res2 = mysqli_query($conn, $sql2);
                        // $count = mysqli_num_rows($res2);
                        $one = 1;
                        $zero = 0;
                        $yes = "yes";
                        $sql = "SELECT * FROM category LIMIT 1";
                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $ids = $row['ID'];
                                $titles = $row['Title'];
                                ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $zero++; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $one++; ?>"></button>
                             
                                <?php
                            }
                        }
                        else{
                            ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                            <?php

                        }
                        ?>






<?php
                        // $sql2 = "SELECT * FROM students LIMIT 1";
                        // $res2 = mysqli_query($conn, $sql2);
                        // $count = mysqli_num_rows($res2);
                        $one = 1;
                        $two = 2;
                        $yes = "yes";
                        
                        $sql = "SELECT * FROM category WHERE Title != '$titles'";
                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id = $row['ID'];
                                $title = $row['Title'];
                                ?>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $one++; ?>" aria-label="Slide <?php echo $two++; ?>"></button>
                             
                                <?php
                            }
                        }
                        else{
                            ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                            <?php

                        }
                        ?>




  </div>
  <div class="carousel-inner">



  <?php
                        // $sql2 = "SELECT * FROM students LIMIT 1";
                        // $res2 = mysqli_query($conn, $sql2);
                        // $count = mysqli_num_rows($res2);
                        $one = 1;
                        $two = 2;
                        $yes = "yes";
                        $sql = "SELECT * FROM category LIMIT 1";
                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id = $row['ID'];
                                $title = $row['Title'];
                                $image_name = $row['image_name'];
                                ?>
                                    <div class="carousel-item active">
                                        <img src="images/category/<?php echo $image_name;?>" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $title;?></h5>
                                           <a href="products.php?id=<?php $_SESSION['category_id_config'] = $id ; echo $id?>"><button class="btn btn-outline-success" type="submit">Shop Now</button></a> 
                                           <?php     
                                           
                                            ?>
                                        </div>
                                        </div>                             
                                <?php
                            }
                        }
                        else{
                            ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                            <?php

                        }
                        ?>

<?php
                        // $sql2 = "SELECT * FROM students LIMIT 1";
                        // $res2 = mysqli_query($conn, $sql2);
                        // $count = mysqli_num_rows($res2);
                        $one = 1;
                        $two = 2;
                        $yes = "yes";
                        $sql = "SELECT * FROM category WHERE Title <> '$titles'";
                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $id = $row['ID'];
                                $title = $row['Title'];
                                $image_name = $row['image_name'];
                                ?>
                                    <div class="carousel-item">
                                        <img src="images/category/<?php echo $image_name;?>" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $title;?></h5>
                                          <a href="products.php?id=<?php echo $id?>"> <button class="btn btn-outline-success" type="submit">Shop Now</button></a> 
                                        </div>
                                        </div>                             
                                <?php
                            }
                        }
                        else{
                            ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                            <?php

                        }
                        ?>
                        

                        </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
       
                </div>
            </div>
        </div>
    </div>



                    </section>



                    <section id = "products" class ="text-center bg-light" >
           <div class = "container">
            <div class = "row">
                <div class="col-md-6 intro mx-auto" >
                <?php 
                          $offer = "";
                          $color = "";
                          $sql4 = "SELECT * FROM offers WHERE active = '1' ";
                          $res4 = mysqli_query($conn, $sql4);

                          $count = mysqli_num_rows($res4);
                          
                          if($count>0)
                          {
                            
                           while($row = mysqli_fetch_assoc($res4))
                           {
                            
                            $offer = $row['offer_name'];
                            $color = $row['color'];
                            $font = $row['font'];
                            
                        }
                    }
                    else{
                       
                        echo "<h1>NO OFFERS</h1>";
                        

                    }
                   
                    ?>
                    <h1 style = "color:<?php echo $color;?>; font-family: <?php echo  "$font"; ?>">
                       
            <?php echo $offer?>
                       
                    </h1>
                    <div class="divider"></div> 

                    
                
            </div>

            <div class="row text-center ">
                            <?php   
                                          
                                                    $yes = "yes";
                                                    $sql4 = "SELECT * FROM products WHERE featured = '$yes' ";
                                                    $res4 = mysqli_query($conn, $sql4);
                            
                                                    $count = mysqli_num_rows($res4);
                                                    if($count>0)
                                                    {
                                                      $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
                                                      $cart = json_decode($cart);
                                                      while($row = mysqli_fetch_assoc($res4))
                                                      {
                                                          $flag = false;
                                                           $id_2 = $row['id'];
                                                          $title_2 = $row['title'];
                                                          $price = $row['price'];
                                                          $image_name = $row['image_name'];
                                                          $cat_id = $row['category_id'];
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
                                                              noncomponent_trial($title_2,$price, $image_name,$id_2, $cat_id);
                                                          }
                                                          else{
                                                          component_trial($title_2,$price, $image_name,$id_2, $cat_id);
                                                          }
                                                       }
                                                    }
                                                    else {
                                                       echo "<H1> NO ITEMS IN THIS CATEGORY YET.</H1>";
                                                    }
                                  

                                          
                            
                



            ?>
                      
                        
            </div>
            
   
               
               
               
               
                
            </div>
        </div>




        
        
    </section>

<?php include('partials/footer.php') ?>
    






