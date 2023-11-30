<?php include('config/connect.php'); ?>
<?php include('products/component.php');
if(isset($_GET['continue']))
{
  header("Location:trial.php");
}
else if(isset($_GET['checkout']))
{
  header("Location:paymentforms.php");
}

?>

