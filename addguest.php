<?php

if(isset($_POST))
{
    include_once "connection.php";

    $page =  $_GET['pg'];

    $mailid_guest = $_POST['mailid_guest'];
    $query = "select * from customers where email = '$mailid_guest'";
    $result = mysqli_query($con, $query);
    $rowcount = mysqli_num_rows($result);
    if($rowcount > 0)
    {
        echo "<script>alert('You Are Already Registered. You Will Get Updates For New Properties. Stay Tuned')</script>";
        header("refresh:0;url = ./$page");
    }
    else
    {
        $query = "insert into customers (email) values('$mailid_guest')";
        $result = mysqli_query($con, $query);
        if($result)
        {
            echo "<script>alert('Thank You For Registration. We Will Notify You For New Properties. Stay Tuned')</script>";
            header("refresh:0;url = ./$page");
    
        }
    }
}
else
{
    echo "<script>alert('Please Try Again')</script>";
}


?>