<?php
include_once "connection.php";

$query = "select * from properties where featured = '1'";
$result = mysqli_query($con, $query);
$featured_count = mysqli_num_rows($result);

if($featured_count < 2)
{
  $query = "select * from properties ORDER BY property_id DESC LIMIT 3";
  $result = mysqli_query($con, $query);
}


if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<title>Mridha Real Estate</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
  <script src="js/contact.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">

<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
   





<head>
  <style>
.patch {

text-decoration : none;

position: absolute;

margin-top: -20%;

margin-left:-23.5%;

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
    margin-top:-13.5%;
    margin-left:-33%;
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
    .banner-search
    {
      height:140px;
    }

}
  </style>
</head>
<body>

<!-- Assistance ? yes or no -->


<div class="modal fade" id="temp">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <h5 class="modal-title">Take Assistance</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p style="font-size: 20px;">Would you like to tell about your future expectations.</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" name ="yes" onclick="myFunction()" class="btn btn-success" style="margin: 0 auto;height: 40px;width: 100px;">Yes</button>
          <button type="button"  class="btn btn-secondary"   style="margin: 0 auto;height: 40px;width: 100px;" data-dismiss="modal">NO</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- form modal -->
<?php include 'contactmodal.php';?>
</div>
<!-- Header Starts -->

<?php include 'header.php';?>

<!-- Header Ends -->
<div class="container1">
    
<div id="slider" class="sl-slider-wrapper">

<div class="sl-slider">

  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-1"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-2"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-3"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-4"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-5"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
</div><!-- /sl-slider -->


<nav id="nav-arrows" class="nav-arrows">
  <span class="nav-arrow-prev">Previous</span>
  <span class="nav-arrow-next">Next</span>
</nav>

<nav id="nav-dots" class="nav-dots">
  <span class="nav-dot-current"></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <button id="filtertoggle" >Search for properties</button><br><br>
        <form action="search.php" id="filterdiv" method="post">
          <input name="search" type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-4 col-sm-4 ">
              <select name="delivery_type" class="form-control">
                <option value="">Rent/Sale</option>
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>
            <div class="col-lg-4 col-sm-4">
             <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$5000 - $50,000</option>
                <option value="2">$50,000 - $100,000</option>
                <option value="3">$100,000 - $200,000</option>
                <option value="4">$200,000 - above</option>
              </select>
            </div>
            <div class="col-lg-4 col-sm-4">
           <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Apartment">Apartment</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Office-Space">Office-Space</option>
              </select>
              </div>

              <div class="col-lg-4 col-sm-4">
            <select name="bhk" class="form-control">
            <option value = "">BHKs</option>
                  <option value="rk">1RK</option>
                  <option value="1">1BHK</option>
                  <option value="2">2BHK</option>
                  <option value="3">3BHK</option>
                  <option value="4">3+BHK</option>
                </select>
              </div>
              <div class="col-lg-4 col-sm-4">
                  <input name="area_search" type="text" class="form-control" placeholder="Type Area or Pincode">
              </div>
              <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success">Find Now</button>
              </form> 
              </div>
          </div>
          
          
        </div>
        <!-- <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall"><b>View All Listing</b></a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
      
     
      
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
        <!-- <p class="price">Utilities: <?php echo $utility; ?></p> -->
        <div class="listing-detail">
          Rooms <br>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span> 
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span> 
   
        <!-- <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php ?></span>  -->
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span> 
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
      </div>
      
      <?php } ?>
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
         <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
          <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn More</a></p>
      
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


    <script type="text/javascript" src="assets/script.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <!-- slitslider -->

    <script src='assets/google_analytics_auto.js'></script></head>

  		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
    
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
     <script src="assets/script.js"></script>

		<script type="text/javascript">	
		
		</script>

</body>
<script>
$("#filtertoggle").click(function(){
    var x = document.getElementById("filterdiv");
    if (x.style.display === "none") {
      $('#filterdiv').show(500);
      x.style.display === "block"
      // x.style.display = "block";
     
    } else {
      x.style.display = "none";
    }
  });

</script>
<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
</html>