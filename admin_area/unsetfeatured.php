<?php

include("includes/db.php");
$property_id = $_POST['property_id'];
$featured_query = "update properties set featured='0' where property_id=$property_id";
$run = mysqli_query($con,$featured_query);
if($run)
{
    echo "success";
}
else
{
    echo "fail";
}

?>