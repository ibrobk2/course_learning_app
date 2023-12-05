<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            .registration-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-box">
            <h2>User Registration</h2>
            <form action="../process.php" method="post">
                <input type="text" placeholder="Full Name" required name="full_name">
                <input type="text" placeholder="Department" required name="depart">
                <input type="email" placeholder="Email" required name="email">
                <input type="tel" placeholder="Phone" required name="phone">
                <input type="password" placeholder="Password" required name="pass">
                <input type="submit" value="Register" name="btn_lreg">
                <p>Already Registered? <a href="login.php">Login Here</a></p>
            </form>
        </div><br>

    </div>
</body>
</html>
