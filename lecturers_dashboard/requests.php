<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Material Requests</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-primary"><a href="./">Back to Dashboard</a></h2>
    <div class="container">
        <h2 class="text-success text-center">Course Material Requests</h2>
        <br>
        <table class="table table-striped">
            <tr>
                <th>SNO.</th>
                <!-- <th>Student_Name</th> -->
                <th>Registration No.</th>
                <th>Request File</th>
                <th>Action</th>
            </tr>
            <?php  
            
                include "../includes/connection.php";

                $sql = "SELECT * FROM questions";
                $res = mysqli_query($conn, $sql);
                $sn = 1;

                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)): ?>

                  
            
            <tr>
               
                <td><?= $sn++; ?></td>
              
                <td><?= $row['regno']; ?></td>
                <td><?= $row['question']; ?></td>
                <td><a href="delete_req.php?del=<?=$row['id']; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php  endwhile; }
            ?>
            <tr></tr>
        </table>
    </div>
</body>
</html>