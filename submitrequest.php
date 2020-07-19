<?php

    include "connection.php";
    $name = $_POST['fname'];
    $price = $_POST['price'];
    $bhk = $_POST['bhk'];
    $email = $_POST['email'];
    $mobNo = $_POST['mobNo'];
    $delivery_type = $_POST['deliverytype'];

    if(!empty($_POST['fname']) and !empty($_POST['price']) and !empty($_POST['email']) and !empty($_POST['bhk']) and !empty($_POST['mobNo']) and !empty($_POST['deliverytype']))
    {
        $query = "insert into customers (name,email,mobileNo,bhk,price,delivery_type)values('$name','$email','$mobNo',$bhk,$price,'$delivery_type')";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo "success";
        }
        else
        {
            echo "fail";    
        }
    }
    else
    {
        echo "empty";
    }

?>
