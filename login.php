<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
   
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <form name="loginForm" action="#" method="POST" onsubmit="return validateForm()">
        <div class="input-box">
        <label for="username">Enter your name:</label>
            <input type="text" name="username"  required>
        </div>

        <div class="input-box">
        <label for="username">Enter your Password:</label>
            <input type="password" name="password"  required>
        </div>

        <div class="policy">
            <input type="checkbox" name="agree">
            <h3>I accept all terms & condition</h3>
        </div>
        <div class="input-box button">
        <a href="index.html"><input type="Submit" value="Login Now">
        </div>
       
        <div class="link">
          <a href="register.php">Register</a>
        </div>
    </form>
    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value.trim();
            var password = document.forms["loginForm"]["password"].value.trim();
            var agree = document.forms["loginForm"]["agree"].checked;

            if (username === "") {
                alert("Name must be filled out");
                return false;
            }
            if (password === "") {
                alert("Password must be filled out");
                return false;
            }
            if (!agree) {
                alert("Please agree to terms & conditions");
                return false;
            }
            return true;
        }
    </script>
</div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'database.php'; // Assuming contactdatabase.php contains database connection code

    // Validate form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "<script>alert('Name and password must be filled out');</script>";
    } else {
        // Additional server-side validation can be performed here, such as checking for valid email format, strong password, etc.

        $sql = "INSERT INTO login(username, password) VALUES ('$username', '$password')";

        if(mysqli_query($con, $sql)){
            header("Location: index.html");
            exit;
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>