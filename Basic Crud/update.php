<?php 
include "conn.php";
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $city = $_POST['city'];

        $id = $_POST['id'];
        $sql = "UPDATE `table1`
        SET `name`='$name',`password`='$password',`email`='$email',`number`='$number',`city`='$city'
        WHERE `id`='$id'"; 
        $result = $conn->query($sql); 
        if ($result) {
            echo "Record updated successfully.";
        }
        else{
            echo "Error:";
        }
    } 
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `table1` WHERE `id`='$id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $password = $row['password']; 
            $email = $row['email'];
            $number = $row['number']; 
            $city = $row['city']; 
        } 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h2>User Update Form</h2>
        <form action="" method="post">
    
    <input type="hidden" name="id" value="<?php echo $id; ?>"><br>	
    ID:<input type="text" name="id" value="<?php echo $id; ?>" disabled ><br>
    First name:<input type="text" name="name" value="<?php echo $name; ?>"><br>
    Password:<input type="password" name="password" value="<?php echo $password; ?>"><br>
    Email:<input type="email" name="email" value="<?php echo $email; ?>"><br>
    Number:<input type="number" name="number" value="<?php echo $number; ?>"><br>
    
    City:<select name="city" id="city">
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Baroda">Baroda</option>
        <option value="Goa">Goa</option>
    </select><br><br>

    <input type="submit" value="Update" name="update" >  
        </form> 
        </body>
        </html> 
    <?php }} ?> 
