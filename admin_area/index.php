<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_address'];


$get_products = "select * from properties";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

if($admin_id == 0)
{
echo "<script>console.log('Entered in if')</script>";
?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="image/png">

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/superadminsidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_product'])){

include("insert_product.php");

}

if(isset($_GET['view_products'])){

include("view_products.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['edit_product'])){

include("edit_product.php");

}



if(isset($_GET['view_customers'])){

include("view_customers.php");

}

if(isset($_GET['customer_delete'])){

include("customer_delete.php");

}



if(isset($_GET['insert_user'])){

include("insert_user.php");

}

if(isset($_GET['view_users'])){

include("view_users.php");

}


if(isset($_GET['user_delete'])){

include("user_delete.php");

}



if(isset($_GET['user_profile'])){

include("user_profile.php");

}


?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php 
}
else
{
    echo "<script>console.log('Entered in else')</script>";

    ?>


    <!DOCTYPE html>
    <html>
    
    <head>
    
    <title>Admin Panel</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="image/png">
    
    </head>
    
    <body>
    
    <div id="wrapper"><!-- wrapper Starts -->
    
    <?php include("includes/sidebar.php");  ?>
    
    <div id="page-wrapper"><!-- page-wrapper Starts -->
    
    <div class="container-fluid"><!-- container-fluid Starts -->
    
    <?php
       
    if(isset($_GET['insert_product'])){
    
    include("insert_product.php");
    
    }
    
    if(isset($_GET['view_products'])){
    
    include("view_products.php");
    
    }
    
    if(isset($_GET['delete_product'])){
    
    include("delete_product.php");
    
    }
    
    if(isset($_GET['edit_product'])){
    
    include("edit_product.php");
    
    }
    
    
    
    
    if(isset($_GET['user_profile'])){
    
    include("user_profile.php");
    
    }
    
    
    ?>
    
    </div><!-- container-fluid Ends -->
    
    </div><!-- page-wrapper Ends -->
    
    </div><!-- wrapper Ends -->
    
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    
    
    </body>
    
    
    </html>
    
    <?php 
    }

} 
?>