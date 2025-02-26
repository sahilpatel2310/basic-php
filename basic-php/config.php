<?php

    $conn = mysqli_connect("localhost", "root", "", "interview1");

    if ($conn -> connect_error){
        die("connection failed:" . $conn -> connect_error);
    }else{
        echo "connected successfully";
    }
?>