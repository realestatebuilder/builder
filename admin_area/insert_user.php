<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Insert User

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Insert User

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validateUser()"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_name" id="username" class="form-control" required>
<span id="user-name"></span>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_email" id="email" class="form-control" required>
<span id="user-email"></span>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="admin_pass" id="password" class="form-control" required>
<span id="user-password"></span>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Contact: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="admin_contact" id="contact" class="form-control" required>
<span id="user-contact"></span>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Address: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="admin_address" id="address" class="form-control" rows="3" required> </textarea>
<span id="user-address"></span>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="admin_image" accept="image/png,image/jpeg,image/jpg" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<script type="text/javascript">
function validateUser() {
    var valid = true;

    
    var userName = $("#username").val();
    var userEmail = $("#email").val();
    var password = $("#password").val();
    var contact = $("#contact").val();
    var contact_length = contact.toString().length;
    var address = $("#address").val();
    
            if (address == "") {
                $("#user-address").html("Address Required");
                $("#user-address").css("color","red");
                $("#address").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (userName == "") 
            {
                $("#user-name").html(" Name required");
                $("#user-name").css("color","red");
                $("#username").css('border', '#e66262 1px solid');
                valid = false;
        
            }
            else if (!userName.match(/^[A-Za-z]+$/))
            {
                $("#user-name").html("Invalid Name");
                $("#user-name").css("color","red");
                $("#username").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (userEmail == "") {
                $("#user-email").html("Email required");
                $("#user-email").css("color","red");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }
            else if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#user-email").html("Invalid Email Address");
                $("#user-email").css("color","red");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (contact == "") {
                $("#user-contact").html("Contact Number Required");
                $("#user-contact").css("color","red");
                $("#contact").css('border', '#e66262 1px solid');
                valid = false;
            }
            
            else if (!contact.match(/^[0-9]+$/) || contact_length!=10 )
            {
                $("#user-contact").html("Invalid Contact Number");
                $("#user-contact").css("color","red");
                $("#contact").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (password == "") {
                $("#user-password").html("Password Required");
                $("#user-password").css("color","red");
                $("#password").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>


<?php

if(isset($_POST['submit'])){

$admin_name = $con -> real_escape_string($_POST['admin_name']);

$admin_email = $con -> real_escape_string($_POST['admin_email']);

$admin_pass = $con -> real_escape_string($_POST['admin_pass']);

$admin_contact =$con -> real_escape_string( $_POST['admin_contact']);

$admin_address = $con -> real_escape_string($_POST['admin_address']);


$admin_image = $_FILES['admin_image']['name'];

$temp_admin_image = $_FILES['admin_image']['tmp_name'];

move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_address) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_address')";

$run_admin = mysqli_query($con,$insert_admin);


if($run_admin){

echo "<script>alert('One User Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_users','_self')</script>";

}


}


?>



<?php }  ?>