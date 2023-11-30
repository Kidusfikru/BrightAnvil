<?php include('config/connect.php'); ?>
<?php include('products/component.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Anvil project</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
    <link rel = "stylesheet" href ="css/et-icons.css">
    <link rel="stylesheet" href="css/customfont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    #link:hover { color:#3a8878 ; } /* CSS link color */
    #link:active {
            color: #3a8878 }
    #button_trans:hover {background-color:transparent;border-color:black;  }
                
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75" class = "d-flex flex-column min-vh-100">

    <!---nav bar -->
    <nav  class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

    <i class = " icon-anchor" style ="background-color:transparent"></i>
    <a style = "font-family: Lucida Handwriting;"class="navbar-brand" href="#hero">Anknessgu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto ">
    <li class="nav-item">
          <a id ="link" class="nav-link" href="#hero">Home</a>
        </li>

        <li class="nav-item">
          <a id ="link" class="nav-link" href="login.php">Log in</a>
        </li>

        </li>
    </ul>
  </div>
    </div>
</nav>




     <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
  <i class = " icon-anchor" style ="background-color:transparent"></i>
    <a class="navbar-brand" href="#hero">Bright Anvil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a id ="link" class="nav-link" href="#hero">Home</a>
        </li>
        <li class="nav-item">
          <a  id ="link" class="nav-link" href="#about">About us</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a id ="link" class="nav-link" href="#portfolio">Portfolio</a>
        </li>
          <a id ="link" class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a id ="link" class="nav-link" href="#cta">Contact us</a>
        </li>
        <li class="nav-item">
          <a id ="link" class="nav-link" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
          <a id ="link" class="nav-link" href="signup.php">Sign up</a>
        </li>
        </li>
        <div class="pos-f-t">
 <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
   </div> 
      </ul>
    </div>
  </div>
</nav> --> 
    <!-- hero -->
    <section id = "hero" class = " vh-100 text-white text-center overlay " data-jarallax data-speed="0.2" class="jarallax" >
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h4 class = "display-3 my-4">አ.ኖ.ሳ.ገ.ዩ አገልግሎት</h6>
                <h4 class = "display-3 my-4">ANKNESSGU ADMINISTRATIVE SERVICES AND DESIGN</h4>
               <a href="administrative services/nova/index2.php"><button style = "margin:30px"class = "btn btn-primary">Administrative Services</button></a> 
               
               <a href="administrative services/nova/index.php"><button style = "margin:30px" class = "btn btn-primary">Clothing and Design</button></a> 

            </div>
            </div>
            
        </div>
    </section>
    <!-- about -->
   
    <!-- contact -->
    
    <div class = "py-4 text-center text-white" id = "cta">
        <div class="container py-4">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <h3 class="py-1">HAVE ANY QUESTIONS? Contact Me </h3><br>
                   
                </div>
                <div class="col-md-4">
                   <a href ="contacts.php"><button id ="button_trans" class="btn btn-dark">Get Started</button></a> 
                    
                </div>
            </div>
        </div>
    </div>
<?php include('partials/footer.php') ?>
    








<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->

