<?php
function component($product_name, $product_price, $product_image,$product_id,$category_id)
{
    $element = "
     <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php\" method=\"post\">
        <div class=\"card h-100\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body h-100\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" class = \"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>
    
  
    ";







    
    echo $element;
}



function component_search($product_name, $product_price, $product_image,$product_id)
{
    $category_id = 15;
    $element = " <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php?info=15\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" class = \"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>";




    
    echo $element;
}







function component_trial($product_name, $product_price, $product_image,$product_id,$category_id)
{
    $element = "
    
    <div id =\"$product_id\" class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php?info=1\" method=\"post\">




    
   
  






    <div class=\"card h-100\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body h-100\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" class = \"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>
    

    
    
    ";




    
    echo $element;
}

function noncomponent_search($product_name, $product_price, $product_image,$product_id)
{
    $element = " <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"delete_cart.php?info=15\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" style =\"background-color:red;\"class = \"btn btn-warning my-3\">delete from Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">

            </div>
        </div>
    </form>
    </div>";




    
    echo $element;
}


function noncomponent($product_name, $product_price, $product_image,$product_id,$category_id)
{
    $element = " <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"delete_cart.php?info=9\" method=\"post\">
        <div class=\"card h-100\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body h-100\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" style =\"background-color:red;\"class = \"btn btn-warning my-3\">delete from Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>";




    
    echo $element;
}


function noncomponent_trial($product_name, $product_price, $product_image,$product_id,$category_id)
{
    $element = " <div id =\"$product_id\" class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"delete_cart.php?info=1\" method=\"post\">
        <div class=\"card  h-100\">
            <div>
                <img class = \"image-hover\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" style =\"background-color:red;\"class = \"btn btn-warning my-3\">delete from Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_name\" value = \"$product_name\">
                <input type = \"hidden\" name = \"product_price\" value = \"$product_price\">
                <input type = \"hidden\" name = \"product_image\" value = \"$product_image\">
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>";




    
    echo $element;
}



function cartElement($productimg,$productname,$prouctprice,$productid,$description){
    $element = "
    
    <form action=\"delete_cart.php?info=0\" method=\"post\" class = \"cart-items\">
    <div \"class=\"border rounded\">
        <div  class=\"row bg-white\">
            <div  class=\"col-md-3\">
                <img style =\"height:100%;\"src=\"images/products/$productimg\" alt=\"image\" class =\"img-fluid image-hover\">
            </div>
            <div class=\"col-md-6\">
                <h6 class=\"pt-2\">$productname</h6>
                <small class =\"text-secondary\">$description </small>
                <h5 class=\"pt-2\"> $ $prouctprice</h5>
                
                <button name =\"add\" type =\"submit\" class=\"btn btn-danger mx-2\" name = \"remove\">Remove</button>
                <hr style =\"color:white;\">

            </div>
            <div class=\"col-md-3 py-5\">
                <div>
                    
                    Amount
                        <input name = \"amount\" type=\"text\" value =\"1\" class = \"form-control w-25 d-inline\">
                        <input type = \"hidden\" name = \"productid\" value = \"$productid\">

                </div>
            </div>
        </div>
    </div>
</form>


    ";
    echo $element;

}



function featured($product_name, $product_price, $product_image,$product_id,$category_id)
{
    $element = " <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"cart.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img class = \"image-hover\" id=\"$product_id\" src=\"images\products\\$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$product_name</h5>
                <h6>
                <i class = \" icon-anchor\" style =\"background-color:transparent\"></i>
                </h6>
                <p class=\"card-text\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, perferendis?</p>
                <h5>
                    <span class=\"price\">$$product_price</span>
                </h5>

                <button type =\"submit\" name = \"add\" class = \"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type = \"hidden\" name = \"product_id\" value = \"$product_id\">
                <input type = \"hidden\" name = \"category_id\" value = \"$category_id\">

            </div>
        </div>
    </form>
    </div>";




    
    echo $element;
}

function products($product_name,$product_description, $product_price)
{



    $element = "     <li class=\"list-group-item d-flex justify-content-between lh-sm\">
    <div>
      <h6 class=\"my-0\">$product_name</h6>
      <small class=\"text-muted\">$product_description</small>
    </div>
    <span class=\"text-muted\">$product_price</span>
  </li>";




    
    echo $element;








}




?>