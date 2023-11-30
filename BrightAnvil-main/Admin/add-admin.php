<?php include('partials/menu.php') ?>
<div class="main-content">

<div class="wrapper">

<h1>Add Admin</h1>
<br>
<?php
        if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['password-mismatch']))
            {
              echo $_SESSION['password-mismatch'];
              unset($_SESSION['password-mismatch']);
            }
?>
<form class="row g-3" method ="post" action ="form/add-admin.php">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input name = "FirstName" type="text" class="form-control" id ="FirstName" value = "<?php     if(isset($_SESSION['fname']))
            {
              echo $_SESSION['fname'];
              unset($_SESSION['fname']);
            }?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Last Name</label>
    <input name = "LastName" type="text" class="form-control" id ="LastName" value = "<?php     if(isset($_SESSION['lname']))
            {
              echo $_SESSION['lname'];
              unset($_SESSION['lname']);
            }?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input name = "Email" type="email" class="form-control" id="inputEmail4" value = "<?php     if(isset($_SESSION['email']))
            {
              echo $_SESSION['email'];
              unset($_SESSION['email']);
            } ?>">
  </div>

  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input name = "Password" type="password" class="form-control" id="inputPassword4">
  </div>
  <br>
 <div class ="col-md-6">
 <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input name = "ConfirmPassword" type="password" class="form-control" id="confirmPassword">
 
 </div>
    
 

  <div class="col-12">
    <button type="submit" name ="submit" class="btn btn-primary">Add Admin</button>
  </div>
</form>


</div>
</div>

<?php include('partials/footer.php') ?>


