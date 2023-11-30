<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br>
        <?php
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
?>
<br>
        <form method ="post" action ="form/add-category.php" enctype = "multipart/form-data">
  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Category Type</label>
    <div class="col-sm-5">
      <input name = "category-type" type="text" class="form-control" id="category-type">
    </div>
  </div>

  <div class="row mb-3">
    <label for="category-type" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-5">
      <input name = "image" type="file" class="form-control" id="category-type">
    </div>
  </div>


  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Active</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="active" id="active1" value="yes" >
        <label class="form-check-label" for="active1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="active" id="active2" value="no">
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
        <input class="form-check-input" type="radio" name="featured" id="featured1" value="yes" >
        <label class="form-check-label" for="featured1">
          YES
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="featured" id="featured2" value="no">
        <label class="form-check-label" for="featured2">
          NO
        </label>
      </div>
    </div>
  </fieldset>

  <button type="submit" name = "submit" class="btn btn-primary">Add Category</button>
</form>
    </div>
</div>

<?php include('partials/footer.php')?>