<!DOCTYPE html>
<html>
<head>
    <title>Request For Course a Material</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <style>
        body {
            padding: 20px;
        }
        
        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        
        .form-container h1 {
            /* color: #007bff; */
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<a href="index.php"><h3>Back to Dashboard</h3></a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h1 class="text-success">Course Material Request Form</h1>
                    
                    <form action="../process.php" method="post">
                        <div class="form-group">
                            <label for="name">Your Reg. No:</label>
                            <input type="text" class="form-control" name="regno" id="regno" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="question">Request Message:</label>
                            <textarea class="form-control" name="question" id="question" rows="5" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-block" name="btn_ask">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
