<!DOCTYPE html>
<html>
<head>
    <title>Respond to Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h1>Respond to Question</h1>
                    
                    <form action="responds.php" method="post">
                        <div class="form-group">
                            <label for="studentName">Student Name:</label>
                            <input type="text" class="form-control" name="studentName" id="studentName" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="question">Question:</label>
                            <textarea class="form-control" name="question" id="question" rows="5" readonly>Sample question text</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="response">Your Response:</label>
                            <textarea class="form-control" name="response" id="response" rows="5" required></textarea>
                        </div>
                        
                        <a href="responds.php?response=<?=$row['id']; ?>" type="submit" class="btn btn-primary btn-block" name="btn_response">Submit Response</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
