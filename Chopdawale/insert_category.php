<?php
// insert_category.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chopdawale";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cate_name = $_POST["cate_name"];
    $cate_img = $_POST["cate_img"];

    // Sanitize inputs to prevent SQL injection
    $cate_name = mysqli_real_escape_string($conn, $cate_name);
    $cate_img = mysqli_real_escape_string($conn, $cate_img);

    // SQL query to insert data
    $sql = "INSERT INTO categories (cate_name, cate_img) VALUES ('$cate_name', '$cate_img')";

    if ($conn->query($sql) === TRUE) {
        echo "Category inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
