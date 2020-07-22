<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<title>Contact us - Mridha Real Estate</title>
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

<script src='assets/google_analytics_auto.js'></script></head>

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
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a onclick="formFunction()">Requirements</a></li>
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

            <div class="menu">
              <ul class="pull-right">
              	
                <li><a href="list-properties.php">List Properties</a>
                	 <ul class="dropdown">
                    	<li><a href="sale.php">Properties on Sale</a></li>
                        <li><a href="rent.php">Properties on Rent</a></li>
                    </ul>
                </li>
              	<li><a href="mapview.php">Map View</a></li>
              </ul>
           </div>
</div>
<!-- #Header Starts -->
</div><!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">

    <!-- <form name="frmContact" id="" frmContact"" method="post"
    action="" onsubmit="return validateContactForm()">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
                <textarea rows="6" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                 <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
          

</form> -->
<form name="frmContact" id="" frmContact"" method="post"
action="" enctype="multipart/form-data"
onsubmit="return validateContactForm()">

<div class="input-row">
   <br /> <input
        type="text" class="form-control" placeholder="Name" name="userName"
        id="userName" /> <span
        id="userName-info" class="info"></span>
</div>
<div class="input-row">
<br /> <input type="text"
        placeholder="Email" class="form-control" name="userEmail" id="userEmail" />
        <span id="userEmail-info"
        class="info"></span>
</div>
<div class="input-row">
<br /> <input type="text"
        class="form-control" placeholder="Subject" name="subject" id="subject" />
        <span id="subject-info"
        class="info"></span>
</div>
<div class="input-row">
  <br />
    <textarea name="content" id="content"
    class="form-control"placeholder="Message"  cols="60" rows="6"></textarea>
    <span id="userMessage-info"
    class="info"></span>
</div>
<br />
<div>
    <input type="submit" name="send" class="btn btn-success"
        value="Send" />

    <div id="statusMessage"> 
            <?php
            if (! empty($message)) {
                ?>
                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
            <?php
            }
            ?>
        </div>
</div>
</form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div>
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
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
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
            <input type="radio" name="optradio" value="Just a visit">Just a visit
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
              <option value="Building">Building</option>
            </select> &nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="bhk" name="bhk">
              <option >BHK   </option>
              <option value="1RK">1RK</option>
              <option value="1BHK">1BHK</option>
              <option value="2BHK">2BHK</option>
              <option value="3BHK">3BHK</option>
              <option value="3BHK+">3BHK+</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="form-control" id="budget" name="budget">
              <option >Budget</option>
              <option value="$5000 - $50,000">$5000 - $50,000</option>
              <option value="$50,000 - $100,000">$50,000 - $100,000</option>
              <option value="$100,000 - $200,000">$100,000 - $200,000</option>
              <option value="$200,000 - above">$200,000 - above</option>
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

<script type="text/javascript">

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
function validateContactForm() {
    var valid = true;

    $(".info").html("");
    $(".input-field").css('border', '#e0dfdf 1px solid');
    var userName = $("#userName").val();
    var userEmail = $("#userEmail").val();
    var subject = $("#subject").val();
    var content = $("#content").val();
    
            if (userName == "") {
                        $("#userName-info").html(" Name required");
                        $("#userName").css('border', '#e66262 1px solid');
                        valid = false;
 
                    }
            else if (!userName.match(/^[A-Za-z]+$/))
            {
                $("#userName-info").html("Invalid Name");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (userEmail == "") {
                $("#userEmail-info").html("Email required");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Subject required");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Message required");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form" action="addguest.php?pg=contact.php" method="POST">
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

include_once "connection.php";

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

<?php
if(!empty($_POST["send"])) {
	$name = $con -> real_escape_string($_POST["userName"]);
	$email = $con -> real_escape_string($_POST["userEmail"]);
	$subject = $con -> real_escape_string($_POST["subject"]);
	$content = $con -> real_escape_string($_POST["content"]);

	
	mysqli_query($con, "INSERT INTO contact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
  $insert_id = mysqli_insert_id($con);
  echo "<script>alert('Your contact information is saved successfully')</script>";
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}

?>

</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
</html>



