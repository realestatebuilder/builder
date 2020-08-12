<?php
include_once "connection.php";
if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$location = strip_tags($_POST['location']);
	$optradio = strip_tags($_POST['optradio']);

	$type = $_POST['type']? strip_tags($_POST['type']) : 'None';
	$bhk = $_POST['bhk']? strip_tags($_POST['bhk']) : 'None';
	if($_POST['budget']!="Budget"){
		$budget = $_POST['budget']? strip_tags($_POST['budget']) : 'None';
	}

	if($_POST['budget1']!="Budget"){
		$budget = $_POST['budget1']? strip_tags($_POST['budget1']) : 'None';
	}



	$vaastu = strip_tags($_POST['vaastu']);
	if($vaastu=="yes"){
		$door = $_POST['door-facing']? strip_tags($_POST['door-facing']) : 'None';
		$kitchen = $_POST['kitchen']? strip_tags($_POST['kitchen']) : 'None';
		$bedroom = $_POST['bedroom']? strip_tags($_POST['bedroom']) : 'None';
	}else{
		$door = "None";
		$kitchen = "None";
		$bedroom ="None";

	}

}

$sql = "INSERT INTO customer_expectations (username,email,preference_location,purchasetime,property_type,bhk,budget,door,kitchen,bedroom) VALUES('" . $name. "', '" . $email. "','" . $location. "','" . $optradio. "','" . $type. "','" . $bhk. "','" . $budget. "','" . $door. "','" . $kitchen. "','" . $bedroom. "')";
//$sql = "INSERT INTO customer_expectations (username,email,preference_location,purchasetime,property_type,bhk,budget,door,kitchen,bedroom) VALUES('$name','$email','$location','$optradio','$type','$bhk',$budget,'$door','$kitchen','$bedroom')";
if (mysqli_query($con, $sql)) {
	echo "New record created successfully";
 } else {
	echo "Error: " . $sql . "" . mysqli_error($con);
 }
 $con->close();
	


?>