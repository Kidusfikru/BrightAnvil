<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "../bootstrap/css/bootstrap.css">
  
  
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

  <meta name="apple-mobile-web-app-title" content="CodePen">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />


  
  <title>CodePen - Bootstrap table filter,sorting,export</title>
  
  
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'>
  

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
    <style>

      .image-hover{
        position:relative;
        overflow:hidden;
        transition:0.5s;
      }
      .image-hover:hover
      {
        z-index:1;
        transform:scale(2.5);
        box-shadow: 0 25px 40px rgba(0,0,0,.5);
      }
      
    </style>
    <title>Admin panel</title>
</head>
<body class = "bg-dark d-flex flex-column">
   <!-- menu goes here -->
    <div class="menu">
       
        <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">Bright Anvil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-page.php">AdministrativeServices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>
    <?php
  
session_start();
//constants
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME', 'brightanvil');
include('partials/login-check.php');
$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error);
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>
        <!-- menu ends here -->
            <!-- main content goes here -->
     <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>  
            
            <!-- <div class="container"> -->



<div id="toolbar">
		<select class="form-control">
				<option value="">Export Basic</option>
				<option value="all">Export All</option>
				<option value="selected">Export Selected</option>
		</select>
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar"
       class="table-responsive">
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="Name" data-filter-control="input" data-sortable="true">Name</th>
			<th data-field="Email" data-filter-control="input" data-sortable="true">Email</th>
			<th data-field="Address1" data-filter-control="select" data-sortable="true">Address</th>
			<th data-field="Address2" data-filter-control="select" data-sortable="true">Address2</th>
            <th data-field="Products" data-filter-control="input" data-sortable="true">Products</th>
            <th data-field="Country" data-filter-control="select" data-sortable="true">Country & State</th>
            <th data-field="Price" data-filter-control="select" data-sortable="true">Price</th>
            <th data-field="Date" data-filter-control="input" data-sortable="true">Date</th>


		</tr>
	</thead>
	<tbody>
    <?php
$sql = "SELECT * FROM orders";

$res = mysqli_query($conn, $sql);
$n = 1;
$count = mysqli_num_rows($res);
if($count > 0)
{
        while($row = mysqli_fetch_assoc($res))
        {
            $first = $row['first'];
            $last = $row['last'];
            $email = $row['email'];
            $full = $first." ".$last;
            $address = $row['address'];
            $address2 = $row['address2'];
            
            // $category_id = $row['category_id'];
            $products = $row['products'];
            $country = $row['country'];
            $state =  $row['state'];
            $total = $row['total'];
            $date = $row['date'];
            ?>
		<tr>
			<td class="bs-checkbox "><input data-index="<?php echo $n++ ?>" name="btSelectItem" type="checkbox"></td>
            <td><?php echo "$full" ?></td>
<td><?php echo "$email" ?></td>
<td><?php echo "$address" ?></td>
<td><?php echo "$address2" ?></td>
<td><?php echo implode(", ",explode("-",$products)); ?></td>
<td><?php echo "$country.' - '.$state" ?></td>
<td><?php echo "$total" ?></td>
<td><?php echo "$date" ?></td>

		</tr>
<?php }
}
else{
    echo "No products added yet";
}
?>

		
	</tbody>
</table>
</div>

           
    </div>
        </div>
        <!-- main content ends here -->
            <!-- footer starts here -->

            <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
<script src='//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script>
    <script id="rendered-js" >
//exporte les données sélectionnées
var $table = $('#table');
$(function () {
$('#toolbar').find('select').change(function () {
  $table.bootstrapTable('refreshOptions', {
    exportDataType: $(this).val() });

});
});

var trBoldBlue = $("table");

$(trBoldBlue).on("click", "tr", function () {
$(this).toggleClass("bold-blue");
});
//# sourceURL=pen.js
  </script>
            <?php include('partials/footer.php') ?>