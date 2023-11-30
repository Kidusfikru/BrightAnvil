<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h3 style = "font-family: Lucida Handwriting;" class="d-flex align-items-center">ANKNESSGU</h3>
    </a>
    <?php $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);?>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <!-- <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li> -->

        
        <form action = "search_results.php" method = "POST" class="d-flex">
            <input style = "height:35px" name = "search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button name = "submitSearch"class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
          </form>
        <li><a href="index.php" class="<?php if($curPageName == 'index.php') {echo 'active';} else{echo "";} ?>">Home</a></li>
        <!-- <li><a href="team.php">Team</a></li> -->
        <!-- <li><a href="blog.html">Blog</a></li> -->
        
        <li><a href="cart_page.php" class = "<?php if($curPageName == 'cart_page.php') {echo 'active';} else{echo "";} ?>">Cart :<?php if(isset($_COOKIE['cart']))
        {
          $sAds = explode(",",$_COOKIE['cart']);
          $count = sizeof($sAds)/5;
          // $count = (int)$count;
          // $count = $_SESSION["cart"];

            echo "<span>$count</span>";
        }
        else{
          echo "0";
        } ?>  </a>

        </li>
        
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li>

        </li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header
