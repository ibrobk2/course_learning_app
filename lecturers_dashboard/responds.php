<?php

if(isset($_POST['btn_response'])){
    $student_name = $_POST['studentName'];
    $question = $_POST['question'];
    $response = $_POST['response'];

    $sql = "UPDATE questions SET student_name='$student_name', question='$question', response='$response' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
}

?>