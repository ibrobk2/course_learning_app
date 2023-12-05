
<?php
session_start();
// if(isset($_GET['msg_login'])){
//   echo "
//     <script>
//       alert('Access Denied, Please Login Via Your Valid Login Page');
//     </script>
//   ";
// }

// if(isset($_SESSION['username'])){
//   header("Location: admin_dashboard/");
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>User Login</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
</head>

<body>
<?php //include "../includes/header.php"; ?>
<marquee behavior="" direction=""><h2 class="text-success">Course Material Learning Application</h2></marquee>
  <div class="container login-container">
    <div class="card">
      <div class="card-header bg-success text-white">
        <h4 class="mb-0">Student Login</h4>
      </div>
      <div class="card-body">
        <form action="process.php" method="post">
          <div class="form-group">
            <label for="regno">Registration Number</label>
            <input type="text" class="form-control" id="regno" placeholder="Enter your Registration Number" required name="regno">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required name="password">
          </div>
          <br>
          <button type="submit" class="btn btn-success btn-block" name="btn_login">Login</button>
        </form>
    </div>
</div>
Don't Have an Account? <a href="students/reg.php">Register Here</a><br>
Forget Password? Click <a href="forgetPassword.php" >Here</a>
</div>
  <br><br><br>
  <center><?php include "includes/footer.php"; ?></center>
  <br><br><br><br><br><br><br>
  <a href="lecturers/login.php">Lecturers Login</a>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
