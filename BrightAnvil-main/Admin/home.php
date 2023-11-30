
    <?php  include('partials/menu.php') ?>
        <!-- menu ends here -->

            <!-- main content goes here -->

     <div class="main-content">
        <div class="wrapper">
            <h1>DASHBOARD</h1>  
            <br>
            <?php 
   if(isset($_SESSION['login']))
   {
     echo $_SESSION['login'];
     unset($_SESSION['login']);
   }
            ?>
            <!-- <div class="col-4 text-center">
              <h1>4</h1>
               </BR>
              CATEGORIES
            </div>
            
            <div class="col-4 text-center">
              <h1>4</h1>
               </BR>
              CATEGORIES
            </div>

            <div class="col-4 text-center">
              <h1>4</h1>
               </BR>
              CATEGORIES
            </div>

            <div class="col-4 text-center">
              <h1>4</h1>
               </BR>
              CATEGORIES
            </div>   -->



            <div class="clearfix">
              <H4>ADD FRONT FEATURED INFORMATION </H4>
              <form action="featuredinfo.php" method = "post" enctype = "multipart/form-data">
              <div class="row mb-3">
    
   
                  <input class="form-control mx-2 my-2" type="text" name = "title" placeholder = "TITLE ">
                  <input class="form-control mx-2 my-2" type="text" name = "description" placeholder = "DESCRIPTION ">
                  <div class="col-sm-5">
      <input name = "image" type="file" class="form-control" id="category-type">
    </div>
  </div> 
                  <?php
        if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['upload']))
            {
              echo $_SESSION['upload'];
              unset($_SESSION['upload']);
            }
            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];
              unset($_SESSION['delete']);
            }
            
 
?>
                  <button type="submit" name ="submit" class="btn btn-primary mx-2 my-2">Add Information</button>
              </form>
              <table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">Image</th>
<th scope="col">Actions</th>


</tr>
</thead>

<tbody>
<tr>
    <?php
        $sql = "SELECT * FROM frontfeature";

        $res = mysqli_query($conn, $sql);

        $sm = 1;

        $count =  mysqli_num_rows($res);

        if($count > 0)
        {
                while($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['ID'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $image = $row['image_name'];

                    ?>
<th scope="row"><?php echo $sm++;?></th>
<td><?php echo $title;?></td>
<td><?php echo $description;?></td>
<td><?php echo $image;?></td>


<td>
<a href=" form/delete-info.php?id=<?php echo $id; ?>&cat=<?php echo "promo";?>"><button type="button" class="btn btn-primary hovering">Delete information</button></a>
</td>
</tr>

                    <?php
                }
        }
        else
        {

            ?>
                <tr>
                    <td colspan ="6"><div style = "color:red">No Information Added. </div></td>
                </tr>

            <?php
        }

    ?>


</tbody>
</table>
</div>





            <div class="clearfix">
              <H4>ADD PROMO CODE </H4>
              <form action="promo_add.php" method = "post">
                  <input class="form-control mx-2 my-2" type="text" name = "promo" placeholder = "CUSTOMER PROMO CODE  ">
                  <input class="form-control mx-2 my-2" type="text" name = "percent" placeholder = "PERCENT DISCOUNT ">
                  <?php
        if(isset($_SESSION['promo']))
            {
                echo $_SESSION['promo'];
                unset($_SESSION['promo']);
            }
            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];
              unset($_SESSION['delete']);
            }
 
?>
                  <button type="submit" name ="submit" class="btn btn-primary mx-2 my-2">Add Code</button>
              </form>
              <table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">promo number</th>
<th scope="col">promo percent</th>
<th scope="col">Active</th>
<th scope="col">Actions</th>


</tr>
</thead>

<tbody>
<tr>
    <?php
        $sql = "SELECT * FROM promo";

        $res = mysqli_query($conn, $sql);

        $sm = 1;

        $count =  mysqli_num_rows($res);

        if($count > 0)
        {
                while($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $number = $row['promo_number'];
                    $percent = $row['promo_percent'];
                    $active = $row['active'];

                    ?>
<th scope="row"><?php echo $sm++;?></th>
<td><?php echo $number;?></td>

<td><?php echo $percent;?></td>
<td><?php echo $active;?></td>

<td>
<a href=" form/delete-promo.php?id=<?php echo $id; ?>&cat=<?php echo "promo";?>"><button type="button" class="btn btn-primary hovering">Delete Code</button></a>
</td>
</tr>

                    <?php
                }
        }
        else
        {

            ?>
                <tr>
                    <td colspan ="6"><div style = "color:red">No promo code Added. </div></td>
                </tr>

            <?php
        }

    ?>


</tbody>
</table>
</div>
<hr>
<div class="clearfix">
              <H4>Set Offer</H4>
              <form action="promo_add.php" method = "post">
                  <input class="form-control mx-2 my-2" type="text" name = "offerName" placeholder = "OFFER NAME">
                  <input class="form-control mx-2 my-2" type="text" name = "offerColor" placeholder = "OFFER COLOR(RGB)">
                  <input class="form-control mx-2 my-2" type="text" name = "offerFont" placeholder = "OFFER FONT">

                  <?php
        if(isset($_SESSION['offer']))
            {
                echo $_SESSION['offer'];
                unset($_SESSION['offer']);
            }
            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];
              unset($_SESSION['delete']);
            }
 
?>
                  <button type="submit" name ="offer" class="btn btn-primary mx-2 my-2">Add Offer</button>
              </form>
              <table class="table">
    <br>
    <br>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Offer Name</th>
<th scope="col">Offer Color</th>
<th scope="col">Font</th>


<th scope="col">Active</th>
<th scope="col">Actions</th>


</tr>
</thead>

<tbody>
<tr>
    <?php
        $sql = "SELECT * FROM offers";

        $res = mysqli_query($conn, $sql);

        $sm = 1;

        $count =  mysqli_num_rows($res);

        if($count > 0)
        {
                while($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $name = $row['offer_name'];
                   $color = $row['color'];
                   $font = $row['font'];
                    $active = $row['active'];

                    ?>
<th scope="row"><?php echo $sm++;?></th>


<td><?php echo $name;?></td>
<td style = "text-transform:uppercase; color:<?php echo $color;?>"><?php echo $color;?></td>
<td style = "text-transform:uppercase; font-family:<?php echo $font;?>"><?php echo $font;?></td>
<td><?php echo $active;?></td>

<td>
<a href=" form/delete-promo.php?id=<?php echo $id; ?>&cat=<?php echo "offers";?>"><button type="button" class="btn btn-primary hovering">Delete Code</button></a>
</td>
</tr>

                    <?php
                }
        }
        else
        {

            ?>
                <tr>
                    <td colspan ="6"><div style = "color:red">No Offer Added. </div></td>
                </tr>

            <?php
        }

    ?>


</tbody>
</table>


            
        </div>
        </div>
        
        <!-- main content ends here -->
            <?php include('partials/footer.php') ?>
