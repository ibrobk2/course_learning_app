<?php
include "includes/connection.php";


//LECTURERS REGISTRATION SECTION
if(isset($_POST['btn_lreg'])){
    //variables declarations
    $fullname = $_POST['full_name'];
    $depart = $_POST['depart'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM lecturers WHERE email='$email' OR phone='$phone'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        echo "<script>
            alert('Sorry!, User Already Exist.');
            window.location = 'lecturers/login.php';
        </script>";

        exit();
    }else{

    //SQL Statement to insert into DB
    $sql = "INSERT INTO lecturers (full_name, department, email, phone, password) VALUES ('$fullname', '$depart', '$email', '$phone', '$pass')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: lecturers/login.php");
    }
}
}

//STUDENT REGISTRATION SECTION
if(isset($_POST['btn_sreg'])){
    //variables declarations
    $fullname = $_POST['full_name'];
    $depart = $_POST['depart'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];

    $sql = "SELECT * FROM student WHERE regno='$regno' OR email='$email' OR phone='$phone'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        echo "<script>
            alert('Sorry!, User Already Exist.');
            window.location = 'index.php';
        </script>";

        exit();
    }else{

    //SQL Statement to insert into DB
    $sql = "INSERT INTO student (name, regno, department, level, phone, email, password) VALUES ('$fullname', '$regno', '$depart', '$level', '$phone', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "
        <script>
            alert('Registration Successful.., You Can Now Login');
            window.location = 'index.php';
        </script>
    ";
    }
}
}


//STUDENT LOGIN SECTION
if(isset($_POST['btn_login'])){
    $regno = $_POST['regno'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM student WHERE regno='$regno' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        session_start();
        $_SESSION['user'] = $regno;
        header("Location: Students_dashboard/");
    }else{
        echo "
            <script>
                alert('Invalid Username or Password');
                window.location = 'index.php';
            </script>
        ";
    }

}
//LECTURER LOGIN SECTION
if(isset($_POST['btn_lec_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM lecturers WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
        session_start();
        $_SESSION['user'] = $email;
        header("Location: lecturers_dashboard/");
    }
    else{
        echo "
            <script>
                alert('Invalid Username or Password');
                window.location = 'lecturers/login.php';
            </script>
        ";
    }

}

//ASK QUESTION
if(isset($_POST['btn_ask'])){
    $regno = $_POST['regno'];
    $question = $_POST['question'];
    //$response = $_POST['response'];

    $sql = "INSERT INTO questions (regno, question) VALUES ('$regno', '$question')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>
            alert('Request Submitted Successfully..');
            window.location = 'Students_dashboard/ask_question.php';
        </script>";
    }
    else{
        echo "<script>
            alert('An Error Occured..');
            window.location = 'Students_dashboard/ask_question.php';

        </script>";
    }
}


//POST ASSIGNMENT
if(isset($_POST['btn_assign'])){
    $regno = $_POST['regno'];
    // $question = $_POST['question'];
    $response = $_POST['response'];

    $sql = "UPDATE assignment SET response='$response' WHERE regno='$regno' ";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>
            alert('Answer Posted Successfully..');
            window.location = 'Students_dashboard/post_assignment.php';
        </script>";
    }
    else{
        echo "<script>
            alert('An Error Occured..');
            window.location = 'Students_dashboard/post_assignment.php';

        </script>";
    }
}


if(isset($_POST['btn_update'])){
    $regNo = $_POST['regno'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "SELECT * FROM student WHERE regno = '$regNo' AND email='$email'";
    $res = mysqli_query($conn, $sql);

    // $rows = ($res);

    if($res){
        $sql2 = "UPDATE `student` SET `password` = '$password' WHERE `student`.`regno` = $regNo;";
        $res2 = mysqli_query($conn, $sql2);
        
       if($res2){
        echo "
            <script>
                alert('Password Updated Successful..');
                window.location = 'index.php';

            </script>
        ";
       }else{
            echo "<script>
                alert('Something Went Wrong');
                window.location = 'index.php';

            </script>";
      
       }
    }
}




?>