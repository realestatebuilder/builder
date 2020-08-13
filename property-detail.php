<?php
include_once "connection.php";

if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$query = "select * from properties, agent where properties.property_id = '$pageid' and properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}

while($property_result = mysqli_fetch_assoc($result)){

      $property_id = $property_result['property_id'];   
			$property_title = $property_result['property_title'];
      $property_details = $property_result['property_details'];
			$map_location = $property_result['map_location'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availability'];
			$price = $property_result['price'];
			$property_address = $property_result['property_address'];
      $property_img1 = $property_result['property_img1'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];			
			$property_type = $property_result['property_type'];
			$floor_space = $property_result['floor_space'];     
      $blueprint = $property_result['blueprint'];
      $property_video = $property_result['property_video'];
			$agent_name = $property_result['agent_name'];
			$agent_address = $property_result['agent_address'];
			$agent_contact = $property_result['agent_contact'];
			$agent_email = $property_result['agent_email'];
}
?>

<?php 
$imgquery = "select * from property_image where property_id = '$pageid'";
$imgresult = mysqli_query($con, $imgquery);

if(!$imgresult){
	echo "Error Found!!!";
}
echo "<script>console.log('$property_id')</script>";
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Property Details - Mridha Real Estate</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>

  <script src="js/firstpage.js"></script>

<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='assets/google_analytics_auto.js'></script>
<style>
  
@media screen and (max-width: 480px) {
 
  iframe{
   
    width:100%;
  }
  .blueprint{
      margin-left:-9%;
      width:120%;
      height:40%;
  }
  .video{
      margin-left:-9%;
      width:120%;
      height:40%;
  }
  .blueprintBtn{
      width:100%;
      
  }
  .videoBtn{
    width:100%;
      
  }
}
</style>
</head>

<body>


<!-- Header Starts -->
<?php include 'header.php'; ?>
<!-- Header Ends -->
</div><!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2>Property Details</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<!-- search filter Start -->

<?php include 'searchfilter.php';?>

<!-- search filter End -->


</div>

<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property_title; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      
      <div class="carousel-inner">
      	<!-- Item 0 -->
        <div class="item active">
          <img src="images/properties/default.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 0 -->
        
        <!-- Item 1 -->
        <?php

        if($imgresult->num_rows > 0){
          while($row = $imgresult->fetch_assoc()){
              $imageURL = 'images/properties/'.$row["property_images"];
      ?>
          <div class="item">
          <img src="<?php echo $imageURL; ?>" class="properties" alt="properties" />
        </div>
      <?php }
      } ?>
          
	
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $property_details; ?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well location" style="width:80%;"><?php echo $map_location; ?></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<div class="well">
<b> Agent Details:</b> <br>
<span class="glyphicon glyphicon-user"></span> <?php echo $agent_name ?><br>
<span class="glyphicon glyphicon-map-marker"></span> <?php echo $agent_address; ?><br>
<span class="glyphicon glyphicon-phone-alt"></span> <?php echo $agent_contact; ?><br>
<span class="glyphicon glyphicon-envelope"></span> <?php echo $agent_email; ?><br>
</div>

<a href="#"  class="btn btn-info btn-lg blueprintBtn"  data-toggle="modal" data-target="#exampleModal" style="cursor:pointer"><span class="glyphicon glyphicon-picture"></span> <b>Property Blueprint </b></a>
<br><br>
<a href="#" class="btn btn-info btn-lg videoBtn" data-toggle="modal" data-target="#exampleModal2" style="cursor:pointer"><span class="glyphicon glyphicon-facetime-video"></span> <b>Property Video &nbsp; &nbsp; &nbsp; </b></a>
<br><br>

<div class="well"><p class="price">₹ <?php echo $price; ?>/-</p></div>

  <p class="area"><div class="well"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $property_address; ?> </div></p>
  
</div>

    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Availabilty - <?php if($availablility == 0){echo "Available";} else {echo "Not Available";} ?></b></div>
    <div class="well"><span class="glyphicon glyphicon-home"></span> &nbsp; <b>Property Type - <?php echo $property_type; ?></b></div>
  
    <div class="listing-detail">
    <div class="well">
    <b>Rooms: &nbsp;</b>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span> 
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span> 
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span> 
    </div>
    </div>
    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Parking - <?php echo $parking; ?> </b></div>
    
    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Floor Space - <?php echo $floor_space; ?> (ft<sup>2</sup>)</b></div>

    


</div>
<div class="col-lg-12 col-sm-6 ">
         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- footer -->

<?php include 'footer.php'; ?>

<!-- footer -->

<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Property Blueprint</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <a ><img class="blueprint" width=500 height=300 src="images/properties/<?php echo $blueprint; ?>"></a>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Property Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <video class="video" width="520" height="300" controls>
        <source src="images/property_videos/<?php echo $property_video ?>" type="video/mp4">
        <!-- <source src="movie.ogg" type="video/ogg"> -->
      </video>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>




<div id="contact-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3> Tell us about your dream project</h3>
      </div>
      <form id="contactForm" name="contact" role="form">
        <div class="modal-body">				
          <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Location Preferences</label>
            <input type="text" name="location" class="form-control">
          </div>
          <div class="form-group">
            <label for="message">Not making a purchase today? Tell us when</label><br/>
            <label class="radio-inline">
            <input type="radio" name="optradio" value="Now" checked>
            Now
            </label>
            
            <label class="radio-inline">
            <input type="radio" name="optradio" value="Within a year">Within a year
            </label>
            <label class="radio-inline">
            <input type="radio" name="optradio" value="no">After 2-3 years
            </label>
          </div>
          <br>

          <div class="form-group" >
            <label for="message">Help us know more about you</label><br/>
            
            <select class="form-control" id="type" name="type">
              <option >Type  </option>
              <option value="Apartment">Apartment</option>
              <option value="Shop">Shop</option>
              <option value="OfficeSpace">Office Space</option>
              <option value="Bungalow">Bungalow</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="bhk" name="bhk">
              <option >BHK   </option>
              <option value="1RK">1RK</option>
              <option value="1BHK">1BHK</option>
              <option value="2BHK">2BHK</option>
              <option value="3BHK">3BHK</option>
              <option value="3BHK+">3+BHK</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="budget" name="budget">
              <option >Budget</option>
              <option value="₹5000 - ₹50,000">₹5000 - ₹50,000</option>
              <option value="₹50,000 - ₹100,000">$50,000 - ₹100,000</option>
              <option value="₹100,000 - ₹200,000">₹100,000 - ₹200,000</option>
              <option value="₹200,000 - above">₹200,000 - above</option>
            </select>
            </div>
            <br>
            <div class="form-group">
            <label for="message">Do you belive in Vaastu Shastra?</label><br/>
            <label class="radio-inline">
            <input type="radio" name="vaastu" value="yes">
            Yes
            </label>
            <label class="radio-inline">
            <input type="radio" name="vaastu" value="no">No
            </label>
          
          </div>
          <br>
          <div class="form-group" id="more-info">
            <label for="message">Directions that you prefer for following</label><br/>
            <select class="form-control" id="door-facing" name="door-facing">
              <option >Door Facing</option>
              <option value="East ">East</option>
              <option value="North">North</option>
              <option value="South">South</option>
              <option value="West">West</option>
              <option value="Northeast">Northeast</option>
              <option value="Southeast">Southeast</option>
              <option value="Southwest">Southwest</option>
              <option value="Northwest">Northwest</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="kitchen" name="kitchen">
              <option>Kitchen</option>
              <option value="East ">East</option>
              <option value="North">North</option>
              <option value="South">South</option>
              <option value="West">West</option>
              <option value="Northeast">Northeast</option>
              <option value="Southeast">Southeast</option>
              <option value="Southwest">Southwest</option>
              <option value="Northwest">Northwest</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="bedroom" name="bedroom">
              <option>Bedroom</option>
              <option value="East ">East</option>
              <option value="North">North</option>
              <option value="South">South</option>
              <option value="West">West</option>
              <option value="Northeast">Northeast</option>
              <option value="Southeast">Southeast</option>
              <option value="Southwest">Southwest</option>
              <option value="Northwest">Northwest</option>
            </select>
            </div>
            <br>

        <div class="modal-footer">					
          
          <input type="submit" class="btn btn-success" id="submit">
        </div>
      </form>
    </div>
  </div>
</div>			



<script>

$(document).ready(function(){	
    $("#contact-modal").modal('hide');
    $("#more-info").hide();
    var $radios = $('input[name=vaastu]').change(function () {
		var value = $radios.filter(':checked').val();
		if(value=="yes"){
			$("#more-info").show();
		}
		else{
			$("#more-info").hide();
			
		}
	});
    $("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
 });
function formFunction(){
  $("#contact-modal").modal('show');
}
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm').serialize(),
		success: function(response){
			alert(response);
			$("#contact-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
function showmodal(id)
{
  console.log("This is id "+id);
  $("#modal3").modal("open")
}


</script>

</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:26 GMT -->
</html>



