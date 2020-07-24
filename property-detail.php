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
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>

            <div class="menu list2" >
              <ul class="pull-right list">
                <li ><a class="li-item" href="list-properties.php">List Properties</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>
              	<li ><a class="li-item" href="mapview.php">Map View</a></li>
                
              </ul>
           </div>
</div>
<!-- #Header Starts -->
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


<div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
<form action="search.php" method="post" name="search">
    <input type="text" class="form-control" name="search" placeholder="Search of Properties">
    <div class="row">
    <div class="col-lg-7">
              <select name="delivery_type" class="form-control">
                <option value="">Rent/Sale</option>
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>
    <div class="col-lg-5">
              <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$5000 - $50,000</option>
                <option value="2">$50,000 - $100,000</option>
                <option value="3">$100,000 - $200,000</option>
                <option value="4">$200,000 - above</option>
              </select>
            </div>
            
            
          </div>

          <div class="row">
          <div class="col-lg-7">
              <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Apartment">Apartment</option>
                <option value="Building">Building</option>
                <option value="Office-Space">Office-Space</option>
              </select>
              </div>
              <div class="col-lg-5">
            <select name="bhk" class="form-control">
                  <option value = "">BHKs</option>
                  <option value="rk">1RK</option>
                  <option value="1">1BHK</option>
                  <option value="2">2BHK</option>
                  <option value="3">3BHK</option>
                  <option value="4">3+BHK</option>
                </select>
              </div>
          </div>
    <input type="text" class="form-control" name="area_search" placeholder="Type Area or Pincode">

          <button name="submit" class="btn btn-primary">Find Now</button>
</form>
  </div>


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
<div class="well location"><?php echo $map_location; ?></div>
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

<div class="well"><p class="price">₹ <?php echo $price; ?></p></div>

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
    
    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Floor Space - <?php echo $floor_space; ?></b></div>

    


</div>
<div class="col-lg-12 col-sm-6 ">
         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>




<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a style="cursor:pointer" onclick="formFunction()">Requirements</a></li>

              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form" action="addguest.php?pg=property-details.php" method="POST">
                            <input type="email" name="mailid_guest" placeholder="Enter Your email address" class="form-control" required>
                                <button class="btn btn-success" type="submit">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

            <?php 

$query2 = "select * from admins where admin_id = 0";
$result2 = mysqli_query($con, $query2);

while($admin_result = mysqli_fetch_assoc($result2))
{
  $admin_address = $admin_result['admin_address'];
  $admin_email = $admin_result['admin_email'];
  $admin_contact = $admin_result['admin_contact'];
}

?>
             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Mridha Real Estate</b><br>
                <span class="glyphicon glyphicon-map-marker"></span> <?php echo $admin_address; ?> <br>
                <span class="glyphicon glyphicon-envelope"></span> <?php echo $admin_email; ?><br>
                <span class="glyphicon glyphicon-earphone"></span> <?php echo $admin_contact; ?></p>
            </div>
        </div>
<p class="copyright">Copyright 2017. All rights reserved.	</p>


</div></div>




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
</body>
<script>
function showmodal(id)
{
  console.log("This is id "+id);
  $("#modal3").modal("open")
}


</script>
<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:26 GMT -->
</html>



