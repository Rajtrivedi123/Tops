<?php
include "conn.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];

    if (empty($name) || empty($password) || empty($email) || empty($number) || empty($city)) {
        echo "Please fill all fields";
    } else {
    $sql = "INSERT INTO `table1` (`name`,`password`,`email`,`number`,`city`) 
    VALUES ('$name','$password','$email','$number','$city')";
    $result = $conn->query($sql);

    if($result)
    {
        echo "<script>alert('Success');</script>";
        // echo "Data inserted successfully";
    }
    else{
        echo "Error";
    }
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<form action="" method="POST"z>
    <label for="">Name :</label>
    <input type="text" name="name" id=""><br><br>
    <label for="">Password</label>
    <input type="password" name="password" id=""><br><br>
    <label for="">Email</label>
    <input type="email" name="email" id=""><br><br>
    <label for="">Contact</label>
    <input type="number" name="number" id=""><br><br>
    
    <label for="">City</label>
    <select name="city" id="city">
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Baroda">Baroda</option>
        <option value="Goa">Goa</option>
    </select><br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>