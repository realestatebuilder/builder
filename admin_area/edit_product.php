<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {
  $pageid=$_GET['edit_product'];

  $get_pro = "select * from properties where property_id = ".$_GET['edit_product'];
 
  $run_pro = mysqli_query($con,$get_pro);

  
  $row_pro = mysqli_fetch_array($run_pro);
 
?>

<!DOCTYPE html>

<html>

<head>

<title> Edit Property </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#property_details' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Property

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Properties

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Title </label>

<div class="col-md-6" >

<input type="text" name="property_title" class="form-control" value = "<?php echo $row_pro['property_title']; ?>" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Address </label>

<div class="col-md-6" >

<input type="text" name="property_address" class="form-control" value = "<?php echo $row_pro['property_address']; ?>" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Type </label>

<div class="col-md-6" >

<select class="form-control" name="delivery_type" > <!-- select delivery_type Starts -->

<option> <?php echo $row_pro['delivery_type']; ?> </option>
<option> Sale </option>
<option> Rent </option>


</select><!-- select delivery_type Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Availability </label>

<div class="col-md-6" >

<select name="availability" class="form-control" >

<option> <?php echo $row_pro['availability']; ?> </option>
<option> Available </option>
<option> Not Available </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Type </label>

<div class="col-md-6" >


<select name="property_type" class="form-control" >

<option> <?php echo $row_pro['property_type']; ?> </option>
<option> Apartment </option>
<option> Office Space </option>
<option> Building </option>
<option> Shop </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Thumbnail </label>

<div class="col-md-6" >

<input type="file" name="product_img1" class="form-control"  >
<img src="../images/properties/<?php echo $row_pro['property_img1']; ?>" name = "property_img1" height="100" width="100">

</div>

</div><!-- form-group Ends -->

<?php
$count=1;
 $get_img = "select * from property_image where property_id = ".$_GET['edit_product'];
 $run_img = mysqli_query($con,$get_img);
if($run_img->num_rows > 0){
  while($row = $run_img->fetch_assoc()){
      $imageURL = '../images/properties/'.$row["property_images"];
      $inpname = $row["image_id"];
      //echo $inpname;
?>
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Image <?php echo $count; ?> </label>

<div class="col-md-6" >


<input type="file" name="<?php echo $inpname; ?>" class="form-control"  >
<img src="<?php echo $imageURL; ?>" name = "<?php echo $inpname; ?>" height="100" width="100">

</div>

</div><!-- form-group Ends -->
<?php
$count++;
 }
} ?>
  


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Price/Rent </label>

<div class="col-md-6" >

<input type="number" name="price" class="form-control" value = "<?php echo $row_pro['price']; ?>" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Property Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Property Blueprint </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Property Video </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="property_details" class="form-control" rows="15" id="property_details">

<?php echo $row_pro['property_details']; ?>
</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<input type="file" id="blueprint" name="blueprint" class="form-control"  >
<img src="../images/properties/<?php echo $row_pro['blueprint']; ?>" name = "blueprints" height="200" width="200">


</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<input type="file" id="property_video" name="property_video" class="form-control"  >
<video width="320" height="240" controls>
  <source src="../images/property_videos/<?php echo $row_pro['property_video']; ?>" type="video/mp4">
  <!-- <source src="movie.ogg" type="video/ogg"> -->
</video>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Carpet Area </label>

<div class="col-md-6" >

<input type="text" name="floor_space" class="form-control" value = "<?php echo $row_pro['floor_space']; ?>" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bedrooms </label>

<div class="col-md-6" >


<select name="bed_room" class="form-control" >

<option> <?php echo $row_pro['bed_room']; ?> </option>
<option> 0 </option>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
<option> 4 </option>
<option> 4+ </option>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Living Rooms </label>

<div class="col-md-6" >


<select name="liv_room" class="form-control" >

<option> <?php echo $row_pro['liv_room']; ?> </option>
<option> 0 </option>
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Kitchen </label>

<div class="col-md-6" >


<select name="kitchen" class="form-control">

<option> <?php echo $row_pro['kitchen']; ?> </option>
<option> 0 </option>
<option> 1 </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Parking </label>

<div class="col-md-6" >


<select name="parking" class="form-control" >

<option> <?php echo $row_pro['parking']; ?> </option>
<option> Bike Parking </option>
<option> Car Parking </option>
<option> Bike + Car Parking </option>
<option> Not Available </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > <a href="https://www.google.com/maps" target="_blank">Map Location </a></label>

<div class="col-md-6" >

<input type="text" name="map_location" class="form-control" value = '<?php echo $row_pro['map_location']; ?>' required >
<?php echo $row_pro['map_location']; ?>
</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>


<?php

if(isset($_POST['update'])){

  $property_title = $_POST['property_title'];
  $availability = $_POST['availability'];
  $property_type = $_POST['property_type'];
  $bed_room = $_POST['bed_room'];
  $liv_room = $_POST['liv_room'];
  $parking = $_POST['parking'];
  $kitchen = $_POST['kitchen'];
  $map_location = $_POST['map_location'];
  
  $delivery_type = $_POST['delivery_type'];
  $price = $_POST['price'];
  $property_details = $_POST['property_details'];
  
  $floor_space = $_POST['floor_space'];
  
  $property_address = $_POST['property_address'];
  
  $blueprint = $_FILES['blueprint']['name'];
  $property_video = $_FILES['property_video']['name'];


  $get_img = "select * from property_image where property_id = ".$_GET['edit_product'];
  $run_img = mysqli_query($con,$get_img);
  if($run_img->num_rows > 0){
  while($row = $run_img->fetch_assoc()){
    $inpname = $row["image_id"];
    $product_img = $_FILES[$inpname]['name'];
 
   

      if(empty($product_img))
      {
        $product_img = $row["property_images"];
      }
      else
      {
        $temp_name1 = $_FILES['$row["image_id"]']['tmp_name'];
        move_uploaded_file($temp_name1,"../images/properties/$product_img");
            
        $update_property = "update property_image set property_images = '$product_img' where image_id='$inpname'";

        $run_property = mysqli_query($con,$update_property);
      }
  }
}
$product_img1 = $_FILES['product_img1']['name'];
if(empty($product_img1))
{
  $product_img1 = $row_pro['property_img1'];
}
else
{
  $temp_name1 = $_FILES['product_img1']['tmp_name'];
  move_uploaded_file($temp_name1,"../images/properties/$product_img1");
}


if(empty($blueprint))
{
  $blueprint = $row_pro['blueprint']; 
}
else
{
  $blueprint_temp = $_FILES['blueprint']['tmp_name'];
  move_uploaded_file($blueprint_temp,"../images/properties/$blueprint");
}

if(empty($property_video))
{
  $property_video = $row_pro['property_video'];
}
else
{
  $property_video_temp = $_FILES['property_video']['tmp_name'];
  move_uploaded_file($property_video_temp,"../images/property_videos/$property_video");
}

$update_property = "update properties set property_title = '$property_title' ,property_details = '$property_details',
delivery_type = '$delivery_type',availability = '$availability',price = '$price',property_address = '$property_address',
property_img1 = '$product_img1',bed_room = '$bed_room',liv_room = '$liv_room',parking = '$parking',kitchen = '$kitchen',
property_type = '$property_type',floor_space = '$floor_space',agent_id = '$agent_id',blueprint = '$blueprint',
property_video = '$property_video',map_location = '$map_location' where property_id='$pageid'";

$run_property = mysqli_query($con,$update_property);

if($run_property){

echo "<script> alert('Property has been updated successfully') </script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>
