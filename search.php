<?php

include_once "connection.php";
error_reporting(0);
if(isset($_POST['submit']))
{
  $search_value = $_POST['search'];
  echo "<script>console.log('$search_value')</script>";
  $delivery_type = $_POST['delivery_type'];
  echo "<script>console.log('$delivery_type')</script>";
  $search_price = $_POST['search_price'];
  echo "<script>console.log('$search_price')</script>";
  $area_search = $_POST['area_search'];
  $carpet_area = $_POST['carpet_area'];
  // echo "<script>console.log('$search_value')</script>";
  
  $property_type = $_POST['property_type'];
	$bhk = $_POST['bhk'];
  
  
  $query = "select * from properties where availability='Available'";
  $availableValues = array();

  echo "<script>console.log(typeof($search_price))</script>";

  
  if(!empty($_POST['search']))
  {
    $query.="and property_title LIKE '%$search_value%' or property_details LIKE '%$search_value%' ";   
  }
  if(!empty($_POST['area_search']))
  {
    $query.="and property_address LIKE '%$area_search%'";   
  }
  if(!empty($_POST['carpet_area']))
  {
    $query.="and floor_space BETWEEN $carpet_area-500 AND $carpet_area+500";   
  }
  if(!empty($_POST['bhk']))
  {
    if($bhk != 'rk')
    {
      $query.="and liv_room = '1' and kitchen = '1' and bed_room = '$bhk' ";  
    } 
    else if($bhk = 'rk')
    {
      $query.="and liv_room = '1' and kitchen = '1' and bed_room = '0' ";  
    }
  }
  if(!empty($_POST['delivery_type']))
  {
    $query.="and delivery_type = '$delivery_type'";
  }
  if(!empty($_POST['property_type']) and $_POST['property_type'] != 'Property Type')
  {
    $query .= "and property_type = '$property_type'";
  }

  if(!empty($_POST['search_price']))
  {

    if($_POST['search_price']== 1)
    {
      $query .= "and price BETWEEN 5000 AND 10000"; 
      
    }
    else if($_POST['search_price']== 2)
    {
      $query .= "and price BETWEEN 10000 AND 20000"; 
    }
    else if($_POST['search_price']==3)
    {
      $query .= "and  price BETWEEN 20000 AND 30000"; 
    }
    else if($_POST['search_price']==4)
    {
      $query .= "and price BETWEEN 30000 AND 50000"; 
    }
    else if($_POST['search_price']==5)
    {
      $query .= "and price > 50000 "; 
    }
    else if($_POST['search_price']==6)
    {
      $query .= "and price BETWEEN 2000000 AND 5000000"; 
     
    }
    else if($_POST['search_price']==7)
    {
      $query .= "and price BETWEEN 5000000 AND 10000000"; 
    }
    else if($_POST['search_price']==8)
    {
      $query .= "and  price BETWEEN 10000000 AND 20000000"; 
    }
    else if($_POST['search_price']==9)
    {
      $query .= "and  price BETWEEN 20000000 AND 50000000"; 
    }
    else if($_POST['search_price']==10)
    {
      $query .= "and price > 50000000 "; 
   
  }
   
  }
  
    echo "<script>console.log($query)</script>";
  
  $result = mysqli_query($con, $query) ;
	if(!$result){
    echo "<script>console.log('Database not connected')</script>";
  }
  else
  {
    
   
    echo "<script>console.log('Database  connected')</script>";
  }
	
}
else
{
  header("Location: index.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Search Result - Mridha Real Estate</title>
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
@media screen and (max-width: 480px) {
  .patch{
    margin-top:-13%;
    margin-left:-33.5%;
  }
  #filtertoggle{
        display:block;
    }
  #filterdiv{
    display:none;
  }
}
  </style>
</head>

<body>


<!-- Header Starts -->

<?php include 'header.php';?>

<!-- Header Ends -->

<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Search Result:</h2>
</div>
</div>

<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">
<button id="filtertoggle" >Search for properties</button><br><br>

<!-- search filter Start -->

<?php include 'searchfilter.php';?>

<!-- search filter End -->

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: Search Result </div>
  <div class="pull-right">
  </div>

</div>
<div class="row">

     <!-- properties -->
      <?php 
      $show_modal="";
      $rowcount=mysqli_num_rows($result);
      if($rowcount>0)
      {
        while($property_result = mysqli_fetch_assoc($result))
        {
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

          // echo "<script>console.log('This is +$property_title')</script>";
        
        
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
            <p class="price">Price: ₹ <?php echo $price; ?></p>
            <p class="price">Address : <?php echo $address; ?></p>
            <p class="price">Type : <?php echo $property_type; ?></p>
            <div class="listing-detail">
          Rooms <br>
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span> 
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span> 
          
            <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span> 
            </div>
            <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">View Details</a>
          </div>
          </div>
          <?php 

                }
                $show_modal="0";
        }
        else
        { 
          $show_modal="1";
          include("scripts.js.php"); 
          $rowcount=mysqli_num_rows($result);
          echo "<script>$('#exampleModal').modal('show')</script>";
          echo "<script>console.log('This is + $rowcount')</script>";
        } 
         ?>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tell us your requirement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="fname">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="mobileNo">Mobile Number:</label>
                <input type="number" class="form-control" id="mobileNo" name="mobNo">
              </div>
              <div class="form-group">
                <label for="bhk">Rent/Sale - </label>
                <select class="form-control" id="deliverytype" name="deliverytype">
                  <option selected disabled> Rent/Sale </option>
                  <option>Rent </option>
                  <option>Sale</option>
                </select>
              </div>
              <div class="form-group">
                <label for="bhk">Select your need - </label>
                <select class="form-control" id="bhk" name="bhk">
                  <option selected disabled> Need </option>
                  <option value="0"> < 1 BHK </option>
                  <option value="1">1 BHK</option>
                  <option value="2">2 BHK</option>
                  <option value="3">3+ BHK</option>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Price Range - </label>
                <select class="form-control" id="price" name="price">
                  <option value="0" selected disabled >Price Range</option>
                  <option value="1">₹5000 to ₹50,000</option>
                  <option value="2">₹50,000 to ₹1,00,000</option>
                  <option value="3">₹1,00,000 to ₹2,00,000</option>
                  <option value="4">₹2,00,000 and above</option>
                </select>
              </div>
       
      </div>
      <div class="modal-footer">
      <center>
        <input type="submit" id="submitRequest"  name="submitRequest" class="btn btn-primary" style="width:20%;" value="Submit">
        <button type="submit" id="closeRequest" class="btn btn-primary" style="width:20%;">Close</button>
       <center>
      
      </div>
    </div>
  </div>
</div>





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
<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
</html>



