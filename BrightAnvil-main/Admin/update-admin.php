<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>UPDATE ADMIN</h1>

        <br>
        <?php 
            $id = $_GET['id'];
            $sql = "SELECT * FROM user WHERE ID = $id";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
                $count = mysqli_num_rows($res);
                if($count == 1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $firstname =$row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['EMAIL'];
                }
                else
                {
                    header("Location:add-admin.php");
                }
            }
        ?>
        <form class="row g-3" method ="post" action ="form/update-admin.php">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input name = "FirstName" type="text" class="form-control" id ="FirstName" value = "<?php echo $firstname?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Last Name</label>
    <input name = "LastName" type="text" class="form-control" id ="LastName" value = "<?php echo $lastname?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name = "Email" type="email" class="form-control" id="inputEmail4"  value = "<?php echo $email?>">
  </div>
  <div class="col-md-6">
    <input name = "id" type="hidden" class="form-control" id="id"  value = "<?php echo $id?>">
  </div>


    
 

  <div class="col-12">
    <button style = "background-color:green" type="submit" name ="submit" class="btn btn-primary">Update Admin</button>
  </div>
</form>
        
    </div>
</div>


<?php include('partials/footer.php') ?>