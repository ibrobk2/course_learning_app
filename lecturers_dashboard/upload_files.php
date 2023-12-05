<?php include "../includes/connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">  
      <style>
        body {
            padding: 20px;
            background-color: #f1f5f8;
        }

        .container{
            width: 40%;
        }
    </style>
</head>
<body>
    <a href="index.php"><h3>Back to Dashboard</h3></a>
    <div class="container">
        <h1 class="mt-4 text-success">Course Material File Upload Page</h1>
        
        <?php
        // Define the target directory for file uploads
        $targetDir = "uploads/";
        
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the course code and course title from the form
            $courseCode = $_POST["courseCode"];
            $courseTitle = $_POST["courseTitle"];
            
            // Create a directory for the specific course if it doesn't exist
            $courseDir = $targetDir . $courseCode . '/';
            if (!is_dir($courseDir)) {
                mkdir($courseDir, 0755, true);
            }
            
            // Process the uploaded file
            $uploadFile = $courseDir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
            
            // Check if the file is valid
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo '<div class="alert alert-success">File is an image - ' . $check["mime"] . '.</div>';
                    $uploadOk = 1;
                } else {
                    echo '<div class="alert alert-danger">File is not an image.</div>';
                    $uploadOk = 0;
                }
            }
            
            // Check if the file already exists
            if (file_exists($uploadFile)) {
                echo '<div class="alert alert-danger">File already exists.</div>';
                $uploadOk = 0;
            }
            
            // Allow only specific file formats
            $allowedFormats = array("jpg", "jpeg", "png", "pdf", "doc", "docx", "xls", "xlsx", "ppt", "pptx", "html", "html", "mp3", "mp4", "avi", "webp", "weba");
            if (!in_array($fileType, $allowedFormats)) {
                echo '<div class="alert alert-danger">Only JPG, JPEG, PNG, PDF, DOC, Videos and DOCX files are allowed.</div>';
                $uploadOk = 0;
            }
            
            // If the file passes all checks, upload it
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadFile)) {
                    $file = $_FILES["fileToUpload"]["name"];
                    
                    $sql = mysqli_query($conn,"INSERT INTO files (course, courseTitle, file_name) VALUES ('$courseCode', '$courseTitle', '$file')");
                    echo '<div class="alert alert-success">The file ' . basename($_FILES["fileToUpload"]["name"]) . ' has been uploaded.</div>';
                } else {
                    echo '<div class="alert alert-danger">Sorry, there was an error uploading your file.</div>';
                }
            }
        }
        ?>
        
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="courseCode">Course Code:</label>
                <input type="text" class="form-control" name="courseCode" id="courseCode" required>
            </div>
            
            <div class="form-group">
                <label for="courseTitle">Course Title:</label>
                <input type="text" class="form-control" name="courseTitle" id="courseTitle" required>
            </div>
            <br>
            <div class="form-group">
                <label for="fileToUpload">Select File:</label>
                <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Upload File</button>
        </form>
    </div>

    <?php include "../includes/footer.php"; ?>
</body>
</html>
