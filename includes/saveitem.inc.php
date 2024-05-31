<?php
// Include your database connection file
include 'dbh.inc.php';

// Assuming you have a table named 'items' with columns 'title', 'image_src', 'thumb_src', etc.
$title = $_POST['title']; // Assuming 'title' is the key sent from JavaScript
$imageSrc = $_POST['imageSrc']; // Assuming 'imageSrc' is the key sent from JavaScript
$thumbSrc = $_POST['thumbSrc']; // Assuming 'thumbSrc' is the key sent from JavaScript

// Prepare and execute the SQL query to insert data into the database
$stmt = $pdo->prepare("INSERT INTO items (title, image_src, thumb_src) VALUES (?, ?, ?)");
$stmt->execute([$title, $imageSrc, $thumbSrc]);

// You can perform error handling and return appropriate responses if needed
?>