<?php include('partials/menu.php') ?>
<div class="main-content">
    <div class="wrapper">
<?php
if(isset($_GET['id']))
{
 $id = $_GET['id'];
}
?>
<?php
 if(isset($_SESSION['passwd-not-match']))
 {
   echo $_SESSION['passwd-not-match'];
   unset($_SESSION['passwd-not-match']);
 }
?>
    <form class="row g-3" method ="post" action ="form/change-password.php">
    <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input name = "Password" type="password" class="form-control" id="inputPassword4">
  </div>
  <br>
 <div class ="col-md-6">
 <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input name = "ConfirmPassword" type="password" class="form-control" id="confirmPassword">
  </div>
  <div class="col-md-6">
    <input name = "id" type="hidden" class="form-control" id="id"  value = "<?php echo $id?>">
  </div>
  <div class="col-12">
    <button style = "background-color:green "type="submit" name ="submit" class="btn btn-primary">Change Password</button>
  </div>
</form>

    </div>
</div>

<?php include('partials/footer.php') ?>
