<!DOCTYPE html>
<html>
<head>
    <title>Download Files</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <style>
        body {
            padding: 20px;
        }
        
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <a href="index.php"><h3>Back to Dashboard</h3></a>
    <div class="container">
        <h1 class="text-success text-center">Course Material Download Page</h1>
        
        <div class="table-container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>File Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Replace with your database connection details
                    // $servername = "localhost";
                    // $username = "your_username";
                    // $password = "your_password";
                    // $dbname = "your_database_name";
                    
                    // Create connection
                   // $conn = new mysqli($servername, $username, $password, $dbname);
                    include "../includes/connection.php"; 
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    // SQL query to fetch data from the "files" table
                    $sql = "SELECT course, courseTitle, file_name FROM files";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["course"] . "</td>";
                            echo "<td>" . $row["courseTitle"] . "</td>";
                            echo "<td>" . $row["file_name"] . "</td>";
                            echo "<td><a class='btn btn-success btn-sm' href='../lecturers_dashboard/uploads/".$row['course']."/".$row['file_name']."' download>Download</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No files found.</td></tr>";
                    }
                    
                    // Close connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
