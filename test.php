<?php
include_once "connection.php";
    $query = "SELECT MAX(property_id) FROM properties";
    $result = mysqli_query($con, $query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
          //echo $row["MAX(property_id)"];
          $property_id=$row["MAX(property_id)"];
          echo $property_id;
  
   }
  }
?>