<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_product'])){

$delete_id = $_GET['delete_product'];

$delete_pro = "delete from properties where property_id='$delete_id'";
$delete_img = "delete from property_image where property_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_pro);
$run_delete_img = mysqli_query($con,$delete_img);

if($run_delete){

echo "<script>alert('One Property Has been deleted')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>