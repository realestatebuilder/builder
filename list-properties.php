<?php
include_once "connection.php";

$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>All Listing Properties - Mridha Real Estate</title>
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

<script src='assets/google_analytics_auto.js'></script></head>

<head>
  <style>
.patch {

text-decoration : none;

position: absolute;

margin-top: -16.5%;

margin-left:-28.6%;

z-index: 20;

}


.patch .patch-background {

position: absolute;
top:0;
right:0;
}

.patch .thepatch {

position: relative;
width: 100px;
padding: 6px 50px 6px 15px;
margin: 40px 50px 10px -71px;
color: #fff;
font-size:18px;
font-weight:bold;
background-color:#72b70f;
text-shadow: 0px 1px 2px #bbb ;

}

.patch .thepatch:before,
.patch .thepatch:after {
content: '';
position: absolute;
width:0;
height:0;
}

.patch .thepatch:after {
left: 0px;
top: 100%;
border-width : 5px 10px;
border-style: solid;
border-color: #e77548 #e77548 transparent transparent;
}

.patch.sale {
top: 0;

}
@media screen and (max-width: 480px) {
  .patch{
    margin-top:-13%;
    margin-left:-33.5%;
  }
}
#filtertoggle{
    color:white;
    border-radius:2px;
    background-color: #72b70f;
    margin-left:-2.5%;
    width:105%;
    text-align:center;
    font-weight:bold;
    padding-top:4%;
    padding-bottom: 4%;
    display:none;
    
}
#filterdiv{
      display:block;
    }
@media only screen and (max-width: 600px) {
    #filtertoggle{
        display:block;
    }
    #filterdiv{
      display:none;
    }
    .inside-banner
    {
      padding:12px 0;
    }

}
  </style>
</head>


<body>


<!-- Header Starts -->

<?php include 'header.php';?>

<!-- Header Ends -->

<!-- banner -->
<div class="inside-banner ">
  <div class="container">
    <h2>Listing All Properties</h2>
</div>
</div>

<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">
<div id="filtertoggle" >Search for properties</div><br><br>
  
<!-- search filter Start -->

<?php include 'searchfilter.php';?>

<!-- search filter End -->

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: All Listing Properties </div>
  <div class="pull-right">
  </div>

</div>
<div class="row">

     <!-- properties -->
     <?php 
	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availability'];
			$price = $property_result['price'];
			$property_img = $property_result['property_img1'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
      $kitchen = $property_result['kitchen'];
      $address = $property_result['property_address'];
      $property_type = $property_result['property_type'];
		
		
	  ?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/<?php echo $property_img; ?>" class="img-responsive" alt="properties">
            <a class='patch sale' style='color:black;'>
                <div class='thepatch'><?php echo $delivery_type; ?></div>
                <div class='patch-background'> </div>
            </a> 
        
        <?php if($availablility == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Price: ₹<?php echo $price; ?></p>
        <p class="price">Address: <?php echo $address; ?></p>
        <p class="price">Type: <?php echo $property_type; ?></p>
        
        <!-- <p class="price">Utilities: <?php  ?></p> -->
        <div class="listing-detail">
        Rooms <br>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span> 
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>
      </div>
      <?php } ?>
      <!-- properties -->


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



</body>
<script>
$(document).ready(function() {
  $("#filtertoggle").on('click',function(){
      var x = document.getElementById("filterdiv");
      if (x.style.display === "none") {
        $('#filterdiv').show(500);
        x.style.display === "block"
        // x.style.display = "block";
      
      } else {
        x.style.display = "none";
      }
    });
});

</script>
<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
</html>



