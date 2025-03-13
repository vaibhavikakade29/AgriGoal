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
    /* General Body Styling */
body {
  font-family: 'Times New Roman', Times, serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

/* Navbar Styling */
.navbar-dark .navbar-nav .dropdown-menu .dropdown-item {
  color: #000 !important;
}

.navbar-nav .nav-link, 
.navbar-brand {
  text-decoration: none; /* Remove underline */
}

.navbar-nav .nav-item {
  padding: 0 10px;
}

/* Button Custom Styling */
.btn-custom {
  background-color: #6fd2a7;
  color: #1a1919;
  border: none;
  border-radius: 0;
  font-size: 0.98rem; /* Reduce font size for smaller text */
  height: auto; /* Ensure button height adjusts based on content */
  line-height: 1.2; /* Adjust line height for better alignment */
}

/* Line Decoration for Section Titles */
.line {
  display: flex;
  align-items: center;
  justify-content: center;
}

.line div {
  margin: 0 0.2rem;
}

.line div:nth-child(1), .line div:nth-child(3) {
  height: 3px;
  width: 70px;
  background: #f7327a;
  border-radius: 5px;
}

.line div:nth-child(2) {
  width: 10px;
  height: 10px;
  background: #f7327a;
  border-radius: 50%;
}

/* Form Styling */
.form-control {
  border-radius: 0;
}

.form-group label {
  font-weight: bold;
}

.contact-bg h4 {
  font-size: 2rem;
  text-transform: uppercase;
  padding: 0.4rem 0;
  color: black;
}

/* Hidden Elements */
#cod-image, .total-amount {
  display: none;
}

.total-amount {
  font-size: 1.2rem;
  color: #333;
  margin-top: 10px;
}

/* Footer Styling */
.footer-section {
  background-color: #f4f4f4;
  padding: 40px 0;
  color: #000;
}

.footer-section .footer-logo-wrap {
  margin-bottom: 1rem;
}

.footer-section .footer-logo h5 {
  color: #000;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li a {
  color: #000;
  text-decoration: none;
}

.footer-section ul li a:hover {
  text-decoration: underline;
}

.footer-section .product-thumbnail {
  max-width: 100%;
}

.footer-section .text-center p {
  margin: 0;
  color: #000;
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
                        <a class="dropdown-item" href="tools.html">Tools</a> </div>
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

  <!-- <section class="contact-bg">
    <center><h4>Billing Details</h4></center>
    <center>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </center>
  </section> -->

  <div class="untree_co-section">
    <div class="container">
   
     <form id="billingForm" action="#" method="POST" onsubmit="return redirectToIndex()"></form>
          <div class="form-group row">
          <section class="contact-bg">
    <center><h4>Billing Details</h4></center>
    <center>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </center>
  </section>
            <div class="col-md-6">
              <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="fname" name="fname" required pattern="[A-Za-z]+" title="First name must contain only letters">
            </div>
            <div class="col-md-6">
              <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lname" name="lname" required pattern="[A-Za-z]+" title="Last name must contain only letters">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Street address" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="city" class="text-black">City <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="city" name="city" required pattern="[A-Za-z]+" title="City must contain only letters">
            </div>
            <div class="col-md-6">
              <label for="state" class="text-black">State <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="state" name="state" required pattern="[A-Za-z]+" title="State must contain only letters">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="pincode" class="text-black">Pin Code <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Postal/Zip Code" required min="100000" max="999999" title="Pin code must be a 6-digit number">
            </div>
            <div class="col-md-6">
              <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" title="Phone number must be 10 digits">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" name="email" required title="Please enter a valid email address">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="payment_mode" class="text-black">Payment Mode <span class="text-danger">*</span></label>
              <select class="form-control" id="payment_mode" name="pmode" required>
                <option value="" disabled selected>Select Payment Mode</option>
                <option value="cash_on_delivery">Cash on Delivery</option>
                <option value="online">Online Mode</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" id="pay" class="btn btn-custom btn-lg btn-block">Proceed for Payment</button>
            <!-- <button type="button" id="continue-shopping" class="btn btn-custom btn-lg btn-block" onclick="continueShopping()">Continue Shopping</button>  -->
          </div>
          <div id="cod-image" class="total-amount">
            <p id="total-amount-text"></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <div class="total-amount" id="total-amount"></div> -->
  

<!-- JavaScript function to redirect to the product page -->
<script>
  function continueShopping() {
    window.location.href = 'vegetable.html'; // Replace with the URL of your product categories page
  }
</script>

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


    



  
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script>
    function getTotalAmount() {
      // Retrieve the shopping cart data from local storage
      const cart = JSON.parse(localStorage.getItem('Shopping Cart')) || [];
      let totalAmount = 0;
      cart.forEach(item => {
        if (item) {
          totalAmount += item.price * item.quantity; // Calculate the total amount
        }
      });
      return totalAmount;
    }

    document.addEventListener('DOMContentLoaded', function() {
      var totalAmount = getTotalAmount();
      document.getElementById('total-amount').textContent = 'Total Amount: ₹' + totalAmount.toLocaleString();
    });

    document.getElementById('billing-form').addEventListener('submit', function(event) {
      event.preventDefault();
      const paymentMode = document.getElementById('payment_mode').value;
      
      if (paymentMode === 'cash_on_delivery') {
        // document.getElementById('cod-image').style.display = 'block';
        // document.getElementById('cod-image').innerHTML = '<img src="path_to_your_image.jpg" alt="Cash on Delivery Image">';
        setTimeout(() => {
          alert('Order Placed Successfully');
          window.location.href = 'review.php';
        }, 1000);
      } else if (paymentMode === 'online') {
        window.location.href = 'payment.html';
      }
    });
    document.getElementById('billing-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const paymentMode = document.getElementById('payment_mode').value;
    const totalAmount = getTotalAmount(); // Retrieve the total amount

    if (paymentMode === 'cash_on_delivery') {
        alert('Order Placed Successfully. Total Amount: ₹' + totalAmount.toLocaleString());
        setTimeout(() => {
            window.location.href = 'review.php';
        }, 1000);
    } else if (paymentMode === 'online') {
        // Pass total amount to payment.html via query parameter
        window.location.href = 'payment.html?total=' + totalAmount;
    }
});

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

