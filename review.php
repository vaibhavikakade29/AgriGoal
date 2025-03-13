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
        .navbar-dark .navbar-nav .dropdown-menu .dropdown-item {
            color: #000 !important;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        header h1, header h2 {
            color: #000; /* Set header text color to black */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .review-section {
            margin-top: 40px;
        }
        .review-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
        }
        .review-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .review-form input, .review-form textarea, .review-form select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .review-form textarea {
            resize: vertical;
        }
        .review-form button {
            align-self: flex-start;
            padding: 10px 20px;
            background-color: #6fd2a7;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            font-size: 1.0em;
            color: #ccc;
            cursor: pointer;
        }
        .star-rating input[type="radio"]:checked ~ label {
            color: #cfb25b;
        }
        .star-rating label:hover, .star-rating label:hover ~ label {
            color: #ffc107;
        }
        /* Reviews display style */
        .review-item {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
        }
        .review-item h4 {
            margin: 0 0 5px;
        }
        .review-item p {
            margin: 5px 0;
        }
        .review-rating {
            color: #cfb25b;
        }
    </style>
    <title>AgriGoal Website</title>
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
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
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

    <div class="container">
        <header>
            <center><h1>AgriGoal</h1>
                <h2>"Innovative Solutions for Modern Agriculture."</h2></center>
        </header>
        
        <section class="review-section">
            <h2 class="review-title">Submit Your Review</h2>
            <form class="review-form" action="#" method="POST" id="reviewForm">
    <input type="text" name="name" id="name" placeholder="Enter your name:" required>
    <textarea name="review" placeholder="Enter your review:" rows="4" required></textarea>
    <div class="star-rating">
        <input type="radio" id="5-stars" name="rating" value="5" required />
        <label for="5-stars" class="fa fa-star"></label>
        <input type="radio" id="4-stars" name="rating" value="4" />
        <label for="4-stars" class="fa fa-star"></label>
        <input type="radio" id="3-stars" name="rating" value="3" />
        <label for="3-stars" class="fa fa-star"></label>
        <input type="radio" id="2-stars" name="rating" value="2" />
        <label for="2-stars" class="fa fa-star"></label>
        <input type="radio" id="1-star" name="rating" value="1" />
        <label for="1-star" class="fa fa-star"></label>
    </div>
    <button type="submit">Submit</button>
</form>

        </section>
        
        <div class="submitted-reviews">
            <h3 class="review-title">View all Reviews:</h3>
            <div id="reviewsContainer">
            <?php
        include 'database.php'; // Ensure this file contains a valid connection to your database

        // Fetch all reviews from the database
        $sql = "SELECT * FROM reviews";
        $result = mysqli_query($con, $sql);

        // Check if the query was successful
        if (!$result) {
            echo "Error: " . mysqli_error($con); // Output error if query fails
        } else {
            // Check if any reviews exist
            if (mysqli_num_rows($result) > 0) {
                // Output data of each review
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="review-item">';
                    echo '<h4>' . htmlspecialchars($row['name']) . '</h4>';
                    echo '<p>' . htmlspecialchars($row['review']) . '</p>';
                    echo '<div class="review-rating">Rating: ' . str_repeat('⭐', $row['rating']) . '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No reviews available.</p>';
            }
        }

        mysqli_close($con); // Close the database connection
        ?>
            </div>
        </div>
        
    </div>
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


   

    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="js/tiny-slider.js"></script>
      <script src="js/custom.js"></script>

    
</body>
</html>


<?php
// Include database connection file
include 'database.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form input values
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $review = mysqli_real_escape_string($con, $_POST['review']);
    $rating = mysqli_real_escape_string($con, $_POST['rating']);

    // Insert the review into the database
    $sql = "INSERT INTO reviews (name, review, rating) VALUES ('$name', '$review', '$rating')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        // Redirect back to the reviews page after submission
        header('Location: reviews.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
