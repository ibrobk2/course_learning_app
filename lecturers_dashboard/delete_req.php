<?php
include "../includes/connection.php";

if(isset($_GET['del'])){
    $id = $_GET['del'];

    $sql = "DELETE FROM questions WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if($res){
        header("Location: requests.php");
    }else{
        echo "<script>
            alert('Something Went Wrong');
        </script>";
    }
}

