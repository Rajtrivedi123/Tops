<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chopdawale";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database
$conn->select_db($dbname);

// SQL statements to create tables
$sql = <<<SQL
    -- Categories Table
    CREATE TABLE categories (
        cate_id INT PRIMARY KEY AUTO_INCREMENT,
        cate_name VARCHAR(255) NOT NULL,
        cate_img VARCHAR(255)
    );

    -- Product Table
    CREATE TABLE product (
        prod_id INT PRIMARY KEY AUTO_INCREMENT,
        cate_id INT,
        prod_name VARCHAR(255) NOT NULL,
        prod_dec TEXT,
        prod_img VARCHAR(255),
        main_price DECIMAL(10, 2),
        status ENUM('In Stock', 'Out of Stock')
    );

    -- Inquiry Table
    CREATE TABLE inquiry (
        inq_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        comment TEXT
    );

    -- Customer Table
    CREATE TABLE customer (
        cust_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        mobile VARCHAR(15),
        img VARCHAR(255),
        status ENUM('Unblock', 'Block')
    );

    -- Cart Table
    CREATE TABLE cart (
        cart_id INT PRIMARY KEY AUTO_INCREMENT,
        prod_id INT,
        cust_id INT,
        qty INT,
        FOREIGN KEY (prod_id) REFERENCES product(prod_id),
        FOREIGN KEY (cust_id) REFERENCES customer(cust_id)
    );

    -- Order Table
    CREATE TABLE order_table (
        order_id INT PRIMARY KEY AUTO_INCREMENT,
        cust_id INT,
        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (cust_id) REFERENCES customer(cust_id)
    );

    -- Feedback Table
    CREATE TABLE feedback (
        feedback_id INT PRIMARY KEY AUTO_INCREMENT,
        cust_id INT,
        comment TEXT,
        FOREIGN KEY (cust_id) REFERENCES customer(cust_id)
    );

    -- Employee Table
    CREATE TABLE employee (
        emp_id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    );

    -- Admin Table
    CREATE TABLE admin (
        admin_id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    );
SQL;

// Execute SQL statements
if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

// Close connection
$conn->close();
?>
