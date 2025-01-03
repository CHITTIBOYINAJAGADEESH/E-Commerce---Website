<?php
// about.php

// Start the session if necessary
session_start();

// Include your header and navigation files if you have them
include('header.php'); // Include header (if applicable)
include('./includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Store Name</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <div class="container">
        <h1>About Us</h1>

        <p>Welcome to <strong>[Your Store Name]</strong>, your one-stop destination for unique and high-quality products tailored to meet your needs. Founded in <strong>[Year]</strong>, we are passionate about delivering an exceptional shopping experience to our customers. Our mission is to provide a diverse selection of items, ranging from <strong>[product category]</strong> to <strong>[product category]</strong>, all while ensuring quality, affordability, and customer satisfaction.</p>

        <p>At <strong>[Your Store Name]</strong>, we believe that shopping should be enjoyable and effortless. That’s why we’ve curated a wide array of products from trusted suppliers, ensuring you receive only the best. Our team is dedicated to researching and sourcing innovative products that cater to your lifestyle and preferences.</p>

        <p>Customer service is at the heart of everything we do. Our friendly and knowledgeable team is here to assist you at every step, from selecting the perfect item to answering your questions. We strive to build lasting relationships with our customers, encouraging feedback to help us continually improve our offerings.</p>

        <p>We are committed to sustainability and ethical practices. Our sourcing methods prioritize eco-friendly materials and production processes, contributing to a healthier planet. As we grow, we aim to support local artisans and small businesses, fostering a community that values craftsmanship and integrity.</p>

        <p>Thank you for choosing <strong>[Your Store Name]</strong>. We invite you to explore our store and discover products that inspire and enhance your life. Join our community by signing up for our newsletter to receive the latest updates, exclusive offers, and more. Happy shopping!</p>
    </div>

    <!-- Include your footer file if you have one -->
    <?php include('footer.php'); 
</body>
</html>
