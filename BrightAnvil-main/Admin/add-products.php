<?php include('partials/menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1>
        <br>
        <?php
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
?>
        <br>
                 <form id ="productForm" method ="post" action ="form/add-products.php" enctype = "multipart/form-data">
                <div class="row mb-3">
                    <label for="category-type" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-5">
                    <input name = "title" type="text" class="form-control" id="category-type">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-5">
                    <textarea placeholder ="Description"name="description" form="productForm" style =" height :100px; width : 500px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-5">
                    <input name = "price" type="text" class="form-control" id="price">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="category-type" class="col-sm-2 col-form-label">Image</label>
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
                                $id = $row['ID'];
                                $title = $row['Title'];
                                ?>
                                    <option value="<?php echo $id;?>"><?php echo $title;?></option>
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

                <button type="submit" name = "submit" class="btn btn-primary">Add Products</button>
            </form>  
    </div>
</div>
<?php include('partials/footer.php')?>

