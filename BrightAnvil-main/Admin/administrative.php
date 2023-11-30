<?php  include('partials/menu.php') ?>
<div class="main-content">
        <div class="wrapper">
            <h1>Administrative Services</h1>  
            <?php 
                     if(isset($_SESSION['info']))
                     {
                         echo $_SESSION['info'];     //Displaying session message
                         unset($_SESSION['info']);  //removing session message
                     }
            ?>
            <form id ="productForm" method ="post" action ="form/add-adminServices.php" enctype = "multipart/form-data">
                <div class="row mb-3">
                    <label for="category-type" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-5">
                    <input name = "title" type="text" class="form-control" id="category-type">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-5">
                    <textarea placeholder ="description"name="description" form="productForm" style =" height :100px; width : 500px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-5">
                    <input name = "price" type="text" class="form-control" id="price">
                    </div>
                </div>





                <button type="submit" name = "submit" class="btn btn-primary">Add Services</button>
            </form>  

            <br>


           
    </div>
        </div>

<?php include('partials/footer.php') ?>