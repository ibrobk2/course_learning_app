<?php

$conn = mysqli_connect("localhost", "root", "", "slis");

if(!$conn){
    echo "Failed to connect to database";
    exit();
}

?>