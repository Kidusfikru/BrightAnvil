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
    <style>
    #link:hover { color:#3a8878 ; } /* CSS link color */
    #link:active {
            color: #3a8878 }
    #button_trans:hover {background-color:transparent;border-color:black;  }
                
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">

    <!---nav bar -->
    <nav  class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">

    <i class = " icon-anchor" style ="background-color:transparent"></i>
    <a class="navbar-brand" href="#hero">Bright Anvil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto ">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          <a id ="link" class="nav-link" href="#hero">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id = "link">
            categories
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a id ="link" class="nav-link" href="#portfolio">Products</a>
        </li>
          <a id ="link" class="nav-link" href="#services">Cart</a>
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
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sexy.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Men</h5>
        <button class="btn btn-outline-success" type="submit">Shop Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mhm.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Children</h5>
        <button class="btn btn-outline-success" type="submit">Shop now</button>
    
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mhm.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Children</h5>
        <button class="btn btn-outline-success" type="submit">Shop now</button>
    
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mhm.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Children</h5>
        <button class="btn btn-outline-success" type="submit">Shop now</button>
    
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/money.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
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
    <!-- milestone -->
    <section id = "milestone" class = "overlay text-white text-center" data-jarallax data-speed="0.2" class="jarallax">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                    <div class="number h1" >45K</div>
                    <div class="divider"></div>
                    <h6>Trusted clients</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                    <div class="number h1" >10M</div>
                    <div class="divider"></div>
                    <h6>Products</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                    <div class="number h1" >5</div>
                    <div class="divider"></div>
                    <h6>Areas</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                    <div class="number h1" >90</div>
                    <div class="divider"></div>
                    <h6>Tattoos designed</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section  id = "portfolio" class="pb-0">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-8 intro mx-auto text-center" >
                    <h1>Portfolio</h1>
                    <div class="divider"></div> 
                        <p>You can't compare apples and oranges, but what about bananas and plantains?
                            The toy brought back fond memories of being lost in the rain forest.
                            The tortoise jumped into the lake with dreams of becoming a sea turtle.
                            We have never been to Asia, nor have we visited Africa.</p>
                    
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="project p-">
                        <img src="images/screenshot (98).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project ">
                        <img src="images/screenshot (211).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project p-">
                        <img src="images/screenshot (99).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project p-">
                        <img src="images/screenshot (130).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project p-">
                        <img src="images/screenshot (129).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project p-">
                        <img src="images/screenshot (140).png" alt="portfolio1">
                        <div class="project-info">
                            <div>
                            <h5>Project Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, placeat rerum. Consequuntur, enim iusto! </p>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- services -->

    <section  id = "services" class = "bg-light">
        <div class="container">
            <div class="row">
                 <div class="col-md-8 intro mx-auto text-center" >
                    <h1>services</h1>
                    <div class="divider"></div> 
                        <p>You can't compare apples and oranges, but what about bananas and plantains?
                            The toy brought back fond memories of being lost in the rain forest.
                            The tortoise jumped into the lake with dreams of becoming a sea turtle.
                            We have never been to Asia, nor have we visited Africa.</p>
                    
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="service-box bg-white p-lg-5 p-4">
                    <div class="icon-box me-3"><i class = " icon-strategy"></i></div>
                        <div>
                        <h5 >Tattoo designs</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium sed debitis itaque est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-box bg-white p-lg-5 p-4">
                    <div class="icon-box me-3"><i class = " icon-profile-male"></i></div>
                        <div>
                        <h5 >Men's clothing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium sed debitis itaque est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-box bg-white p-lg-5 p-4">
                    <div class="icon-box me-3"><i class = " icon-profile-female"></i></div>
                        <div>
                        <h5 >Women's clothing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium sed debitis itaque est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-box bg-white p-lg-5 p-4">
                    <div class="icon-box me-3"><i class = "icon-happy"></i></div>
                        <div>
                        <h5 >Children's clothing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium sed debitis itaque est.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-box bg-white p-lg-5 p-4">
                    <div class="icon-box me-3"><i class = "icon-camera"></i></div>
                        <div>
                        <h5 >Accessories</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ex!Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusantium sed debitis itaque est.</p>
                        </div>
                    </div>
                </div>
            </div>
           
                    </div>
               
           
    </section>

    <!-- contact -->

<?php include('partials/footer.php') ?>
    








<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->

    
    
