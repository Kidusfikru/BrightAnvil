<?php

if(isset($_GET['submit']))
{
   
 ?>
 <?php include('config/connect.php'); ?>
<?php include('products/component.php') ?>
<?php 
if(isset($_POST['add']))
{
    echo $_POST['product_id'];
}

?>
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
</head>
<body class = "bg-dark d-flex flex-column min-vh-100" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">

    <!---nav bar -->
    <nav  class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">

    <a href="trial.php"><i class="fa fa-arrow-left  fa-2x" aria-hidden="true" style ="color:white;"></i></a>
    <!-- <i class = " icon-anchor" style ="color:black;"></i> -->
    <pre>   </pre>
    <a class="navbar-brand" href="trial.php">Bright Anvil</a>
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
                                 <li><a  id = "link" class="dropdown-item" value="<?php echo $id_1;?>" href="products.php?id=<?php echo $id_1 ?>"><?php echo $title_1;?></a></li>
                             
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



<section id = "products" class ="text-center bg-light vh-100" >
        <div class = "container">
            <div class = "row">
                <div class="col-md-8 intro mx-auto" >
                    <h1>
                     Search For  <?php  $input = $_GET['input'];
    echo '"'.$input.'"' ?>
                    </h1>
                    <div class="divider"></div> 

                    
                </div>
            </div>

            <div class="row text-center py-5">
                            <?php   
                                                if(isset($_GET['input']))
                                                {
                                                    $input = $_GET['input'];
                                                    $_SESSION['searched'] = $input;
                                                    $yes = "yes";
                                                    $sql4 = "SELECT * FROM products WHERE active = '$yes' AND title LIKE '%$input%' OR description LIKE '%$input%' ";
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
                                                                
                                                                  noncomponent_search($title_2,$price, $image_name,$id_2);
                                                            }
                                                            else{
                                                            component_search($title_2,$price, $image_name,$id_2);
                                                            }
                                                         }
                                                    }
                                                    else {
                                                       echo "<H1> NO ITEMS IN THIS CATEGORY YET.</H1>";
                                                    }
                                  
                                                }
                                                else 
                                                {
                                                    
                                                }
                            
                



            ?>
                      
                        
            </div>
            
   
               
               
               
               
                
            </div>
        </div>
    </section>


  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>





<?php include('partials/footer.php') ?>

 <?php   
}
else 
{
    header("Location:trial.php?Access Forbidden");   
}

?>