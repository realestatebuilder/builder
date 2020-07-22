<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<title> Insert Property </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#property_details' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Insert Property

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Properties

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validateProperty()">

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Title </label>

<div class="col-md-6" >

<input type="text" name="property_title" id="title" class="form-control" required>
<span id="property-title"></span>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Address </label>

<div class="col-md-6" >

<input type="text" name="property_address" id="address" class="form-control"  required>
<span id="property-address"  ></span>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Delivery Type </label>

<div class="col-md-6" >

<select class="form-control" name="delivery_type" required><!-- select delivery_type Starts -->

<option> Select A Delivery Type </option>
<option> Sale </option>
<option> Rent </option>


</select><!-- select delivery_type Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Availability </label>

<div class="col-md-6" >

<select name="availability" class="form-control" required >

<option> Select Property Availability </option>
<option> Available </option>
<option> Not Available </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Type </label>

<div class="col-md-6" >


<select name="property_type" class="form-control" required >

<option> Select Property Type </option>
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

<input type="file" name="product_img1" accept="image/png,image/jpeg,image/jpg" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >  Select Image Files to Upload </label>

<div class="col-md-6" >

<input type="file" accept="image/png,image/jpeg,image/jpg" class="form-control" name="files[]" multiple required>

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Property Price/Rent </label>

<div class="col-md-6" >

<input type="number" name="price" id="price" class="form-control"  >
<span id="property-price"  ></span>

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

<textarea name="property_details" class="form-control" rows="15" id="property_details" required>


</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<input type="file" accept="image/png,image/jpeg,image/jpg id="blueprint" name="blueprint" class="form-control" required >


</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<input type="file" id="property_video" name="property_video" class="form-control" required >

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Carpet Area </label>

<div class="col-md-6" >

<input type="text" name="floor_space"  id="area" class="form-control" required>
<span id="property-area"  ></span>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bedrooms </label>

<div class="col-md-6" >


<select name="bed_room" class="form-control" required>

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


<select name="liv_room" class="form-control" required >

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


<select name="kitchen" class="form-control" required >

<option> 0 </option>
<option> 1 </option>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Parking </label>

<div class="col-md-6" >


<select name="parking" class="form-control" required>

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

<input type="text" name="map_location"  id="location" class="form-control" required >
<span id="property-location"  ></span>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 


<script type="text/javascript">
function validateProperty() {
    var valid = true;

    
    var title = $("#title").val();
    var address = $("#address").val();
    var price = $("#price").val();
    var area = $("#area").val();
    var location = $("#location").val();
    
            if (title == "") {
                        $("#property-title").html(" Title required");
                        $("#property-title").css("color","red");
                        $("#title").css('border', '#e66262 1px solid');
                        valid = false;
 
                    }

            if (address == "") {
                $("#property-address").html("Address required");
                $("#property-address").css("color","red");
                $("#address").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (price == "") {
                $("#property-price").html("Price required");
                $("#property-price").css("color","red");
                $("#price").css('border', '#e66262 1px solid');
                valid = false;
            }

            else if (!price.match(/^[0-9]+$/))
            {
                $("#property-price").html("Enter Number only");
                $("#property-price").css("color","red");
                $("#price").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (area == "") {
                $("#property-area").html("Area required");
                $("#property-area").css("color","red");
                $("#area").css('border', '#e66262 1px solid');
                valid = false;
            }



            else if (!area.match(/^[0-9]+$/))
            {
                $("#property-area").html("Enter number only");
                $("#property-area").css("color","red");
                $("#area").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (location == "") {
                $("#property-location").html("Location required");
                $("#property-location").css("color","red");
                $("#location").css('border', '#e66262 1px solid');
                valid = false;
            }

            return valid;
        }
</script>



</body>

</html>

<?php
   
include 'mail/mail.php';

if(isset($_POST['submit']))
{
 
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

$product_img1 = $_FILES['product_img1']['name'];
// $product_img2 = $_FILES['product_img2']['name'];
// $product_img3 = $_FILES['product_img3']['name'];
// $product_img4 = $_FILES['product_img4']['name'];
// $product_img5 = $_FILES['product_img5']['name'];


$temp_blue_name = $_FILES['blueprint']['tmp_name'];
$property_name = $_FILES['property_video']['tmp_name'];


$temp_name1 = $_FILES['product_img1']['tmp_name'];
// $temp_name2 = $_FILES['product_img2']['tmp_name'];
// $temp_name3 = $_FILES['product_img3']['tmp_name'];
// $temp_name4 = $_FILES['product_img4']['tmp_name'];
// $temp_name5 = $_FILES['product_img5']['tmp_name'];


move_uploaded_file($property_name,"../images/property_videos/$property_video");
move_uploaded_file($temp_blue_name,"../images/property_videos/$blueprint");


move_uploaded_file($temp_name1,"../images/properties/$product_img1");
// move_uploaded_file($temp_name2,"../images/properties/$product_img2");
// move_uploaded_file($temp_name3,"../images/properties/$product_img3");
// move_uploaded_file($temp_name4,"../images/properties/$product_img4");
// move_uploaded_file($temp_name5,"../images/properties/$product_img5");

$agent = 0;
$insert_property = "insert into properties (property_title,property_details,delivery_type,availability,price,property_address,property_img1,bed_room,liv_room,parking,kitchen,property_type,floor_space,agent_id,blueprint,property_video,map_location) values ('$property_title','$property_details','$delivery_type','$availability',$price,'$property_address','$product_img1','$bed_room','$liv_room','$parking','$kitchen','$property_type','$floor_space',$agent,'$blueprint','$property_video','$map_location')";

$run_property = mysqli_query($con,$insert_property);

   // File upload configuration 
   $targetDir = "../images/properties/"; 
   $allowTypes = array('jpg','png','jpeg','gif'); 
  
    $query = "SELECT MAX(property_id) FROM properties";
    $result = mysqli_query($con, $query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
          echo $row["MAX(property_id)"];
          $property_id=$row["MAX(property_id)"];
          echo $property_id;
  
   }
  }
   $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
   $fileNames = array_filter($_FILES['files']['name']); 
   if(!empty($fileNames)){ 
    foreach($_FILES['files']['name'] as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['files']['name'][$key]); 
        $targetFilePath = $targetDir . $fileName; 
         
        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                // Image db insert sql 
                $insertValuesSQL .= "('".$fileName."', '".$property_id."'),"; 
            }else{ 
                $errorUpload .= $_FILES['files']['name'][$key].' | '; 
            } 
        }else{ 
            $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
        } 
    } 
     
    if(!empty($insertValuesSQL)){ 
        $insertValuesSQL = trim($insertValuesSQL, ','); 
        // Insert image file name into database 
        
        $run_property1 = mysqli_query($con,"INSERT INTO property_image (property_images,property_id) VALUES $insertValuesSQL");
        
        if($run_property1){ 
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
            $statusMsg = "Files are uploaded successfully.".$errorMsg; 
        }else{ 
            $statusMsg = "Sorry, there was an error uploading your file."; 
        } 
    } 
}else{ 
    $statusMsg = 'Please select a file to upload.'; 
} 
 
// Display status message 
echo $statusMsg; 

if($run_property){
    include "mail/maildetails.php";
    $sendmail = new Mailer($mail); 
    $ctr = 0;
    $stat = $sendmail->notify($price,$bed_room,$property_type,$property_id);
    if($stat==1)
    {
      echo "<script>alert('No data Found')</script>";
    }
    else
    {
        foreach($stat as $d)
        {
            echo "<script>alert('$d')</script>";
            $sendmail->sendmail($d,$property_id);
        }
}
       
echo "<script>alert('Product has been inserted successfully')</script>";
echo "<script>alert($property_id)</script>";

// echo "<script>window.open('index.php?view_products','_self')</script>";

}
else
{
echo $con->error;

}
}

?>

<?php } ?>
