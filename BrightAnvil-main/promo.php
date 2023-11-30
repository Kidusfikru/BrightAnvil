<?php include('config/connect.php'); ?>
<?php 
if(isset($_GET['submit']))
{

    $code = $_GET['promo'];
    $yes = "yes";
    $sql = "SELECT * FROM promo WHERE active = '1' AND promo_number = '$code'";
    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);
    if($count>0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $id = $row['id'];
            $title = $row['promo_number'];
            $discount = $row['promo_percent']/100;
            
            if($_GET['promo'] == $title)
            {
                $_SESSION['promo'] = "<div style = 'color:green'>Your promo code has been activated.</div>";
                $_SESSION['discount'] = "$discount";
                // $sql2 = "DELETE * FROM promo WHERE active = '1' AND promo_number = '$code'";
                // $res = mysqli_query($conn, $sql2);
                header("Location:paymentforms.php");

           
            }
        }
    }
    else 
    {
     $_SESSION['promo'] = "<div style = 'color:red'>Invalid promotion code.</div>";
     header("Location:paymentforms.php");
    }
    
}
else{
    header("Location:paymentforms.php?ACCESS FORBIDDEN");
}

?>