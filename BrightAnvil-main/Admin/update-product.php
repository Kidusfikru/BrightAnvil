<?php 
include('partials/menu.php');
?>

<!-- <?php
        if(isset($_GET['id']))
        {
            
            $id3 = $_GET['id'];
            $sql3 = "SELECT * FROM products WHERE id = $id3";
            $res3 = mysqli_query($conn, $sql3);
            
            $row = mysqli_fetch_assoc($res3);
            $title = $row['title'];
            $description = $row['description'];
            $price = $row['price'];
            $current_image = $row['image_name'];
            $current_category = $row['category_id'];
            $active = $row['active'];
            $featured = $row['featured'];
        }
        else{
            header("Location:products.php");
        }
?> -->
<div class="main-content">
<div class="wrapper">
    <h1>Update Product</h1>


 <form id = "productUpdateForm"method ="post" action ="form/update-product.php" enctype = "multipart/form-data">
  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-5">
      <input value = "<?php echo $title;?>" name = "title" type="text" class="form-control" id="category-type">
    </div>
  </div>


                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-5">
                    <textarea value = "" name="description" form="productUpdateForm" style =" height :100px; width : 500px"> <?php echo $description;?></textarea>
                    </div>
                </div>


  <div class="row mb-3">
    <label for="-type" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-5">
      <input value = "<?php echo $price;?>"name = "price" type="text" class="form-control" id="-type">
    </div>
  </div>

  


  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Current Image</label>

<img class = "image-hover"style = "width : 200px; height : 100px" src="../images/products/<?php echo $current_image;?>" alt=" Image hasn't been set">
       
    <div class="col-sm-5">

    </div>
  </div>

  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">New Image</label>
    <div class="col-sm-5">
      <input name = "image" type="file" class="form-control" id="category-type">
    </div>
  </div>

  <div class="row mb-3">
                <div class="col-sm-2">
                    <div class="form-floating">
                    <select  name = "category" class="form-select" id="floatingSelectGrid">
                    <?php
                        $yes = "yes";
                        $sql = "SELECT * FROM category WHERE active = '$yes'";
                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $category_id = $row['ID'];
                                $category_title = $row['Title'];
                                ?>
                                <option <?php if($current_category == $category_id) echo 'selected';?> value="<?php echo $category_id?>"><?php echo $category_title;?></option>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <option value="0">No Category Found</option>
                            <?php

                        }
                        ?>
                    </select>
                        <label for="floatingSelectGrid">Categories</label>
                        </div>
                     </div>
                </div>


  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Active</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="active" id="active1" value="yes" <?php if($active == "yes") {echo "checked";}?> >
        <label  class="form-check-label" for="active1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input  class="form-check-input" type="radio" name="active" id="active2" value = "no"<?php if($active == "no") {echo "checked";}?>>
        <label class="form-check-label" for="active2">
          NO
        </label>
      </div>
    </div>
  </fieldset>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Featured</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input  class="form-check-input" type="radio" name="featured" id="featured1" value = "yes"<?php if($featured == "yes") {echo "checked";}?> >
        <label class="form-check-label" for="featured1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="featured" id="featured2" value= "no" <?php if($featured == "no") {echo "checked";}?>>
        <label class="form-check-label" for="featured2">
          NO
        </label>
      </div>
    </div>
  </fieldset>
  <input type = "hidden" name = "current_image" value = "<?php echo $current_image; ?>">
  <input type="hidden" name = "id" value = "<?php echo $id3;?>" >
  <button type="submit" name = "submit" class="btn btn-primary">Update Product</button>
</form>


</div>
</div>

<?php
include('partials/footer.php');


?>