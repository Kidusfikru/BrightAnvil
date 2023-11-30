<?php 
include('partials/menu.php');
?>
<div class="main-content">
<div class="wrapper">
    <h1>Update Category</h1>

    <?php 
      if(isset($_GET['id']))
      {
        $id = $_GET['id'];
        $sql = "SELECT * FROM category WHERE ID = '$id'";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count ==1)
        {
            $row = mysqli_fetch_assoc($res);
            $title = $row['Title'];
            $current_image = $row['image_name'];
            $featured = $row['featured'];
            $active = $row['active'];
        }
        else{
          $_SESSION['no-category-found'] = "<div style = 'color:red'>Category Not Found.</div>";
          header("Location: category.php?No-Category-Found");
        }
      }
      else
      {
        header("Location:category.php");
      }


    ?>


    <form method ="post" action ="form/update-category.php" enctype = "multipart/form-data">
  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-5">
      <input name = "title" type="text" class="form-control" id="category-type" value = "<?php echo $title; ?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Current Image</label>
    <?php 
    if($current_image!="")
    {
      ?>
<img class = "image-hover"style = "width : 200px; height : 100px" src="../images/category/<?php echo $current_image?>" alt="">
        <?php    
    }
    else
    {
      echo "<div style = 'color:red'>Image Not Added.</div>";
    }

    ?>
    <div class="col-sm-5">

    </div>
  </div>

  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">New Image</label>
    <div class="col-sm-5">
      <input name = "image" type="file" class="form-control" id="category-type">
    </div>
  </div>

  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Active</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input <?php if($active =="yes"){echo "checked"; } ?> class="form-check-input" type="radio" name="active" id="active1" value="yes" >
        <label  class="form-check-label" for="active1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input <?php if($active =="no"){echo "checked"; } ?> class="form-check-input" type="radio" name="active" id="active2" value="no">
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
        <input <?php if($featured =="yes"){echo "checked"; } ?> class="form-check-input" type="radio" name="featured" id="featured1" value="yes" >
        <label class="form-check-label" for="featured1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input <?php if($featured =="no"){echo "checked"; } ?> class="form-check-input" type="radio" name="featured" id="featured2" value="no">
        <label class="form-check-label" for="featured2">
          NO
        </label>
      </div>
    </div>
  </fieldset>
  <input type = "hidden" name = "current_image" value = "<?php echo $current_image; ?>">
  <input type="hidden" name = "id" value = "<?php echo $id?>" >
  <button type="submit" name = "submit" class="btn btn-primary">Update Category</button>
</form>


</div>
</div>

<?php
include('partials/footer.php');


?>