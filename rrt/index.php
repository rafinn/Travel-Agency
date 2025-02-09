<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">




</head>

<body>

<?php
session_start(); // Start the session to check login status

// Check if the user is logged in
$is_logged_in = isset($_SESSION['user_id']); // This will be true if the user is logged in
?>
<!-- <?php
// Include the header at the top of the page
include('./client/header.php');

// Check the URL parameter and include the appropriate page (signup or login)
if (isset($_GET['signup'])) {
    include('./client/signup.php'); // Show signup form
} else if (isset($_GET['login'])) {
    include('./client/login.php'); // Show login form
} else {
    // Default content or empty if no parameter is set
    echo "<h2>Welcome to Our Website</h2>";
    echo "<p>Please choose an option: Sign Up or Login</p>";
}
?> -->

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>Mega </span>Travel</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="book.php">Book</a>
        <a href="package.php">Packages</a>
        <a href="contact/contact.php">Contact</a>
    </nav>

    <div class="icons">
        <?php if ($is_logged_in): ?>
            <!-- Show logout button if user is logged in -->
            <a href="logout.php" class="btn" id="logout-btn">Log Out</a>
        <?php else: ?>
            <!-- Show sign-in/signup button if user is not logged in -->
            <a href="./client/signup.php" class="btn" id="signup-btn">Sign In / Sign Up</a>
        <?php endif; ?>
    </div>
</header>

    <section class="home" id="home">

        <div class="content">
            <h3>Find your favourite place</h3>
            <p>Travel with us!</p>
            <a href="index.php" class="btn">discover more</a>
        </div>

    </section>

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/photo_2023-11-24_02-04-45.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Cefalu </h3>
                    <p> Sicilian coastal gem with a stunning cathedral, beautiful
                        beaches, and a charming harbor. Rich history, captivating
                        beauty in a picturesque setting.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $95.00 <span>$170.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/peru.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Peru </h3>
                    <p>Ancient wonders, vibrant culture, diverse landscapes.
                        From Machu Picchu to the Amazon, a tapestry of history
                        and natural beauty.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $70.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/circle.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Arctic Circle </h3>
                    <p>Land of polar bears, midnight sun, and northern lights.
                        A vast, icy wilderness embracing extreme contrasts
                        in light and darkness.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$190.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/lofoten.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Lofoten </h3>
                    <p>Majestic Norwegian archipelago, with dramatic mountains,
                        fishing,picturesque fjords. A haven for outdoor
                        enthusiasts, awe-inspiring landscapes.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $60.00 <span>$180.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/portugal.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Portugal </h3>
                    <p>Sun-kissed shores, historic cities, and vibrant culture.
                        From Lisbon's charming streets to Porto's wine country,
                        a tapestry of ancient heritage and seaside beauty.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$150.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/api.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Seiser Alm: </h3>
                    <p>Alpine paradise in the Dolomites, with sprawling meadows
                        and breathtaking vistas. A haven for hiking, skiing,
                        and embracing nature's grandeur.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $130.00 <span>$200.00</span> </div>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>



    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>We provide you hotels at afforable and best price according to your descried place.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>we are responsible for arranging all food and drinks stuff for you.We provide all different types of
                    food from different countries. Whatever you want you'll get that on your table. </p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>We always make sure all the safety guides of our customers.So, with Skywide Tours you not need to
                    worry about anything. With us you are totally safe.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>So we are responsible for providing you exposure of different places all around the globe.</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>We arrange all best travel services for our customers. We ensure that you will reach to your
                    destination on time.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>With Us, you'll get all facilities to explore the best nature adventures.</p>
            </div>

        </div>

    </section>



    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lets explore the world with Mega Travel</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>


    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/toshika.jpg" alt="">
                        <h3>Tashi Ka</h3>
                        <p>Mega Travel provide best destination plans. There services are very good.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>



    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Mega Travel are professional planners for your
                    vacations. We provide best destination
                    for you and your family at an affordable price.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Bangladesh</a>
                <a href="#">USA</a>
                <a href="#">Maxico</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="admin/dashboard.php">admin</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
        </div>


    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>