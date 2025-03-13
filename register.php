<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title> 
    <link rel="stylesheet" href="login.css">
    <script>
        function validateForm() {
          var username = document.forms["registerForm"]["username"].value;
          var email = document.forms["registerForm"]["email"].value;
          var password = document.forms["registerForm"]["password"].value;
          var agree = document.forms["registerForm"]["agree"].checked;
    
          if (username == "") {
            alert("Name must be filled out");
            return false;
          }
          if (email == "") {
            alert("Email must be filled out");
            return false;
          }
          if (password == "") {
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
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#" method="POST">
      <div class="input-box">
        <input type="text" name="username"placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the file containing database connection code
    include 'database.php';

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement using a prepared statement
    $sql = "INSERT INTO register (username, email, password) VALUES (?, ?, ?)";

    // Bind parameters and execute the statement
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

        // Execute the statement
        if(mysqli_stmt_execute($stmt)) {
            // Registration successful, redirect to a confirmation page
            header("Location: index.html");
            exit; // Make sure to exit after redirection
        } else {
            echo "Error: " . mysqli_error($con);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close database connection
    mysqli_close($con);
}
?>