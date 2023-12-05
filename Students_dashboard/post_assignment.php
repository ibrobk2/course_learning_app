<?php

include "../includes/connection.php";
$row['regno'] = "";
$row['response'] = "";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Post Assignment</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        
        .card {
            margin-bottom: 20px;
        }
        
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        
        .card-body {
            background-color: #f8f9fa;
        }
        
        .card-title {
            color: #007bff;
        }
        
        .card-text {
            margin-bottom: 0;
        }
        
        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-container h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<a href="index.php"><h3>Back to Dashboard</h3></a> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="color:white">Question from Lecturer</h5>
                    </div>
                    <div class="card-body">
                        <?php 
                        include "../includes/connection.php";
                            session_start();
                            $regno = $_SESSION['user'];
                            $sql = "SELECT * FROM assignment WHERE regno='$regno'";
                            $query = mysqli_query($conn, $sql);

                            $data = mysqli_fetch_assoc($query);
                        ?>
                        <p class="card-text"><?php echo $data['question']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <h1>Post Assignment</h1>
                    
                    <form action="../process.php" method="post">
                        <div class="form-group">
                            <label for="regno">Your Reg. No:</label>
                            <?php   
                           $sql = "SELECT * FROM assignment WHERE regno='$regno'";
                           $query = mysqli_query($conn, $sql);

                           $row = mysqli_fetch_assoc($query);





?>
                            <input type="text" class="form-control" name="regno" id="regno" required value="<?=$row['regno']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="assignment">Assignment Answer:</label>
                            <textarea class="form-control" name="response" id="response" rows="5" required ><?=$row['response']; ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block" name="btn_assign" >Submit Assignment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
