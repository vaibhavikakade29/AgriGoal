<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Your existing styles */
        .navbar-dark .navbar-nav .dropdown-menu .dropdown-item {
            color: #000 !important; 
        }
         /* {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        } */
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.5;
        }
        .contact-bg {
            height: 40vh;
           
            background-position: 50% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .contact-bg h3 {
            font-size: 1.3rem;
            font-weight: 400;
            color: black;
        }
        .contact-bg h2 {
            font-size: 3rem;
            text-transform: uppercase;
            padding: 0.4rem 0;
            color: black;
        }
        .line div {
            margin: 0 0.2rem;
        }
        .line div:nth-child(1),
        .line div:nth-child(3) {
            height: 3px;
            width: 70px;
            background: #f7327a;
            border-radius: 5px;
        }
        .line {
            display: flex;
            align-items: center;
        }
        .line div:nth-child(2) {
            width: 10px;
            height: 10px;
            background: #f7327a;
            border-radius: 50%;
        }
        .text {
            font-weight: 300;
            opacity: 0.9;
        }
        .contact-bg .text {
            margin: 1.6rem 0;
        }
        .contact-body {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .contact-info {
            margin: 2rem 0;
            text-align: center;
            padding: 2rem 0;
        }
        .contact-info span {
            display: block;
        }
        .contact-info div {
            margin: 0.8rem 0;
            padding: 1rem;
        }
        .contact-info span .fas {
            font-size: 2rem;
            padding-bottom: 0.9rem;
            color: #8ed9e9;
        }
        .contact-info div span:nth-child(2) {
            font-weight: 500;
            font-size: 1.1rem;
        }
        .contact-info .text {
            padding-top: 0.4rem;
        }
        .contact-form {
            padding: 2rem 0;
            border-top: 1px solid #c7c7c7;
        }
        .contact-form form {
            padding-bottom: 1rem;
        }
        .form-control {
            width: 100%;
            border: 1.5px solid #c7c7c7;
            border-radius: 5px;
            padding: 0.7rem;
            margin: 0.6rem 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            outline: 0;
        }
        .form-control:focus {
            box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
        }
        .contact-form form div {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 0.6rem;
        }
        .send-btn {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: #000000;
            background: #6fd2a7;
            border: none;
            border-radius: 5px;
            padding: 0.7rem 1.5rem;
            cursor: pointer;
            transition: all 0.4s ease;
        }
        .send-btn:hover {
            opacity: 0.8;
        }
        .contact-form > div img {
            width: 85%;
        }
        .contact-form > div {
            margin: 0 auto;
            text-align: center;
        }
        .contact-footer {
            padding: 2rem 0;
            background: #fffdfd;
        }
        .contact-footer h3 {
            font-size: 1.3rem;
            color: #fff;
            margin-bottom: 1rem;
            text-align: center;
        }
        .social-links {
            display: flex;
            justify-content: center;
        }
        .social-links a {
            text-decoration: none;
            width: 40px;
            height: 40px;
            color: #0e0101;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.4rem;
            transition: all 0.4s ease;
        }
        .social-links a:hover {
            color: #f7327a;
            border-color: #f7327a;
        }
        @media screen and (min-width: 768px) {
            .contact-bg .text {
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }
            .contact-info {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media screen and (min-width: 992px) {
            .contact-bg .text {
                width: 50%;
            }
            .contact-form {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                align-items: center;
            }
        }
        @media screen and (min-width: 1200px) {
            .contact-info {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>
<body>
     <!-- Start Header/Navigation -->
     <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>AgriGoal</h2><h6>The Best Service.</h6><span></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productDropdown">
                            <a class="dropdown-item" href="vegetable.html">Vegetable</a>
                            <a class="dropdown-item" href="fruit.html">Fruits</a>
                            <a class="dropdown-item" href="sapling.html">Sapling</a>
                            <a class="dropdown-item" href="fertilizer.html">Fertilizer</a>
                            <a class="dropdown-item" href="tools.html">Tools</a></div>
                    </li>
                    <li><a class="nav-link" href="aboutus.html">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="blogs.html">Blog</a></li>
                    <li><a class="nav-link" href="Guidance.html">Guidance</a></li>
                    <li><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                          <i class="fas fa-user"></i> 
                        </a>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->


    <section class="contact-bg">
        
        <h2>Connect with Us:<br> "Your Satisfaction is Our Priority!"</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        
    </section>
    
    <div class="contact-body">
        <div class="contact-info">
            <div>
                
                <span><i class="fas fa-map-marker-alt"></i></span>
                <span>Address</span>
                <span class="text">6V4C+F75,Haran Tekadi road,Junnar Maharashtra 410502.</span>
            </div>
            <div>
                <span><i class="fas fa-phone"></i></span>
                <span>Call Us</span>
                <span class="text">(123) 456-7890</span>
            </div>
            <div>
                <span><i class="fas fa-envelope"></i></span>
                <span>Email Us</span>
                <span class="text">infoagrigoal2529@gmail.com</span>
            </div>
            <!-- <div>
                <span><i class="fas fa-clock"></i></span>
                <span>Office Hours</span>
                <span class="text">Mon - Fri: 9:00 AM - 5:00 PM</span>
            </div> -->
        </div>

        <div class="contact-form">
        <form id="contactForm" action="#" method="POST" onsubmit="return redirectToIndex()">

                <div>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                <button type="submit" class="send-btn">Send Message</button>
            </form>
            <!-- <div>
                <img src="contact.jpeg" alt="Contact Image">
            </div> -->
        </div>
    </div>
    <br><br>
<!-- Footer Section -->
<footer class="footer-section" style="background-color: #011222; padding: 30px 0; color: #f8f9fa;">
  <div class="container">
      <div class="row align-items-center">
          <!-- Logo Section -->
          <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
              <img src="img/logo.jpg" class="img-fluid" alt="AgriGoal Logo" 
                   style="border-radius: 50%; width: 150px; height: 150px; border: 3px solid #f8f9fa;">
              <p style="margin-top: 15px; font-size: 16px; color: #ffc107; font-style: italic;">
                  "Empowering Agriculture, Cultivating Growth"
              </p>
          </div>
          <!-- Quick Links Section -->
          <div class="col-lg-4 text-center">
              <h3 style="margin-bottom: 20px; color: #f8f9fa;">Quick Links</h3>
              <ul class="list-unstyled" style="padding: 0; margin: 0; list-style: none;">
                  <li style="margin-bottom: 10px;"><a href="aboutus.html" style="color: #ffc107; text-decoration: none;">About Us</a></li>
                  <li style="margin-bottom: 10px;"><a href="vegetable.html" style="color: #ffc107; text-decoration: none;">Product</a></li>
                  <li style="margin-bottom: 10px;"><a href="blogs.html" style="color: #ffc107; text-decoration: none;">Blog</a></li>
                  <li style="margin-bottom: 10px;"><a href="services.html" style="color: #ffc107; text-decoration: none;">Services</a></li>
                  <li style="margin-bottom: 10px;"><a href="Guidance.html" style="color: #ffc107; text-decoration: none;">Guidance</a></li>
                  <li><a href="contact.php" style="color: #ffc107; text-decoration: none;">Contact Us</a></li>
              </ul>
          </div>
          <!-- Copyright Section -->
          <div class="col-lg-4 text-center" style="padding-right: 50px; padding-left: 50px;"></div>
          <div class="row">
              <div class="col-12 text-center" style="padding-top: 50px;">
                  <p style="font-size: 14px; justify-items:center; color: #adb5bd;">&copy; 2025 AgriGoal. All Rights Reserved.</p>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- End Footer Section -->


 

<script>
    function validateForm() {
    // Perform form validation
    const form = document.getElementById('contactForm');
    const fname = form.fname.value;
    const lname = form.lname.value;
    const email = form.email.value;
    const subject = form.subject.value;
    const message = form.message.value;

        if (!firstName || !lastName || !email || !subject || !message) {
            alert('All fields are required.');
            return false;
        }

        if (!/^[a-zA-Z ]+$/.test(firstName)) {
            alert('First Name should contain only letters and spaces.');
            return false;
        }

        if (!/^[a-zA-Z ]+$/.test(lastName)) {
            alert('Last Name should contain only letters and spaces.');
            return false;
        }

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        return true;
    }
    function redirectToIndex() {
    // Optionally validate form data before redirecting
    window.location.href = "index.html"; // Redirect to index.html
    return false; // Prevent the form from submitting the traditional way
}
    </script>
    
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>

    
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'database.php'; // Assuming contactdatabase.php contains database connection code

    // Validate form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(empty($fname) || empty($lname)|| empty($email)|| empty($subject)|| empty($message)){
        echo "<script>alert('Information must be filled out');</script>";
    } else {
        // Additional server-side validation can be performed here, such as checking for valid email format, strong password, etc.

        $sql = "INSERT INTO contact( fname, lname, email, subject, message) VALUES ('$fname','$lname','$email','$subject','$message')";

        if(mysqli_query($con, $sql)){
            header("Location: index.html");
            exit;
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>

