<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
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
        input[type="password"],
        select {
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
            <h2>Student Registration</h2>
            <form action="../process.php" method="post">
                <input type="text" placeholder="Full Name" required name="full_name">
                <input type="text" placeholder="Department" required name="depart">
                <input type="text" placeholder="Registration Number" required name="regno">
                <input type="email" placeholder="Email" required name="email">
                <input type="tel" placeholder="Phone" required name="phone">
                <select name="level">
                    <option value="" disabled value="" selected>Select Level</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="400">400</option>
                    <option value="Spillover">Spillover</option>
                </select>
                <input type="password" placeholder="Password" required name="pass">
                <input type="submit" value="Register" name="btn_sreg">
                <p>Already Registered? <a href="../index.php">Login Here</a></p>
            </form>
        </div>
    </div>
    <br>
    <div class="account">

        </div>
</body>
</html>
