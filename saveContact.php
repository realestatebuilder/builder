<?php
include_once "connection.php";
if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$location = strip_tags($_POST['location']);
	$optradio = strip_tags($_POST['optradio']);
	if($_POST['type'] !="Type"  and $_POST['bhk'] !="BHK" and $_POST['budget'] !="Budget"){
		$type = strip_tags($_POST['type']);
		$bhk = strip_tags($_POST['bhk']);
		$budget = strip_tags($_POST['budget']);
	}else{
		$type = "None";
		$bhk = "None";
		$budget ="None";

	}
	$vaastu = strip_tags($_POST['vaastu']);
	if($vaastu=="yes" and $_POST['door-facing'] !="Door Facing"  and $_POST['kitchen'] !="Kitchen" and $_POST['bedroom'] !="Bedroom"){
		$door = strip_tags($_POST['door-facing']);
		$kitchen = strip_tags($_POST['kitchen']);
		$bedroom = strip_tags($_POST['bedroom']);
	}else{
		$door = "None";
		$kitchen = "None";
		$bedroom ="None";

	}

}

$sql =  "INSERT INTO customer_expectations (username,email,preference_location,purchasetime,property_type,bhk,budget,door,kitchen,bedroom) VALUES('" . $name. "', '" . $email. "','" . $location. "','" . $optradio. "','" . $type. "','" . $bhk. "','" . $budget. "','" . $door. "','" . $kitchen. "','" . $bedroom. "')";

if (mysqli_query($con, $sql)) {
	echo "New record created successfully";
 } else {
	echo "Error: " . $sql . "" . mysqli_error($con);
 }
 $con->close();
	


?>