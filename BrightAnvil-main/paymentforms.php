<?php include('config/connect.php'); ?>
<?php include('products/component.php');?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel ="stylesheet" href ="style.css">
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
  transform:scale(1.25);
  box-shadow: 0 25px 40px rgba(0,0,0,.5);
}




  </style>
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    <script src="./js/country-states.js"></script>
</head>




    

  <body class="bg-light">
  <?php 
if(isset($_POST['continue']))
{
 header("Location:trial.php");
}
elseif(isset($_POST['update']))
{
  echo "hi";
  echo $_POST['amount'];
}
?>

<div class="container">
  
  <main>


    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">
          <?php if(isset($_COOKIE['cart']))
          {
            $sAds = explode(",",$_COOKIE['cart']);
            $count = sizeof($sAds)/5 -2;
              echo "<span>$count</span>";
          }
          else{
            echo "0";
          } ?>
          </span>
        </h4>
        <ul class="list-group mb-3">





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
                            products($row['title'], $row['description'],$row['price']);
                            $total = $total + (float)$row['price'];
                            
                            
                            
                              
                           }
                          
                        }




                  }
                  else {
                     echo "<H1> THIS ITEM IS NO LONGER AVAILABLE  .</H1>";
                  }
                }
                else
                {
                  echo "<H1> NO ITEMS IN THIS CATEGORY YET.</H1>";
                }
             

                
    
  
                
    

                


                ?>






        
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo Discount</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">
            <?php
             if(isset($_SESSION['discount']))
                {
                  $dis = $_SESSION['discount'];
                  echo "-".$dis*$total;
                  unset($_SESSION['discount']);
                }
                else {
                  echo "−$0";
                  $dis = 0;
                }
                ?>  
              
            
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (ETB)</span>
            <strong><?php $present = $total-$dis*$total;
            echo $present;
            $_SESSION['total'] = $present;
            ?></strong>
          </li>
        </ul>

        <form action = "promo.php" method = "get" class="card p-2">
          <div class="input-group">
            <input name = "promo" type="text" class="form-control" placeholder="Promo code">
            <button name = "submit" type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
        
        <br>
        <?php
        if(isset($_SESSION['promo']))
                {
                  echo $_SESSION['promo'];
                  unset($_SESSION['promo']);
                }
                ?>
        Once this promo code is used, it becomes null after
      </div>
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Shipping address</h4>
        <form class="needs-validation" action = "paymenthandler.php" method = "post" validate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name = "first" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name = "last" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>



            <div class="col-12">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" name = "email" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name = "address" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name= "address2" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
         <label for="country" class="form-label">Country</label>

              <select name ="country"class="form-select" id="country">
          <option>select country</option>
  </select>
            
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>

              
<select class="form-select" name = "state" id="state-code"><option type="text" id="state"></select>


           
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Postal Code</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

    

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
  
            <div class="form-check">




            
              <input value = "Counter" id="debit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="debit">Counter Payment</label>
            </div>
            <div class="form-check">
              <input value = "PayPal" id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name = "submit" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 AnknessGu</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
      <script src = "app.js"></script>
      <script>
// user country code for selected option
let user_country_code = "IN";

(function () {
    // script https://www.html-code-generator.com/html/drop-down/country-region

    // Get the country name and state name from the imported script.
    let country_list = country_and_states['country'];
    let states_list = country_and_states['states'];

    // creating country name drop-down
    let option =  '';
    option += '<option>select country</option>';
    for(let country_code in country_list){
        // set selected option user country
        let selected = (country_code == user_country_code) ? ' selected' : '';
        option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
    }
    document.getElementById('country').innerHTML = option;

    // creating states name drop-down
    let text_box = '<input type="text" class="input-text" id="state">';
    let state_code_id = document.getElementById("state-code");

    function create_states_dropdown() {
        // get selected country code
        let country_code = document.getElementById("country").value;
        let states = states_list[country_code];
        // invalid country code or no states add textbox
        if(!states){
            state_code_id.innerHTML = text_box;
            return;
        }
        let option = '';
        if (states.length > 0) {
            option = '<select id="state">\n';
            for (let i = 0; i < states.length; i++) {
                option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
            }
            option += '</select>';
        } else {
            // create input textbox if no states 
            option = text_box
        }
        state_code_id.innerHTML = option;
    }

    // country select change event
    const country_select = document.getElementById("country");
    country_select.addEventListener('change', create_states_dropdown);

    create_states_dropdown();
})();

</script>
  </body>
</html>
