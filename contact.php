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
  <script src="js/contact.js"></script>



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
<style>
@media only screen and (max-width: 600px) {
   
    .inside-banner
    {
      padding:12px 0;
    }

}
</style>
<body>
<!-- Header Starts -->

<?php include 'header.php';?>

<!-- #Header Starts -->

<!-- banner -->
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
action="" enctype="multipart/form-data">

<div class="input-row">
   <br /> <input
        type="text" class="form-control" placeholder="Name" name="userName"
        id="userName" onfocusout="validatename()" /> <span
        id="userName-info" class="info"></span>
</div>
<div class="input-row">
<br /> <input type="text"
        placeholder="Email" class="form-control" name="userEmail" id="userEmail" onfocusout="validateemail()" />
        <span id="userEmail-info"
        class="info"></span>
</div>
<div class="input-row">
<br /> <input type="text"
        class="form-control" placeholder="Subject" name="subject" id="subject" onfocusout="validatesubject()" />
        <span id="subject-info"
        class="info"></span>
</div>
<div class="input-row">
  <br />
    <textarea name="content" id="content"
    class="form-control"placeholder="Message"  cols="60" rows="6" onfocusout="validatemessage()"></textarea>
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
  <div class="well">
  <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.7036630718885!2d73.7926615148424!3d18.497077487422647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfcb4b26eec9%3A0xba00f8adbe639778!2sNav%20Vinayak%20Society!5e0!3m2!1sen!2sin!4v1595481623878!5m2!1sen!2sin" ></iframe>
    <!-- <iframe  src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div> -->
  </div>
</div>
</div>
</div>


<?php include 'contactmodal.php';?>

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



