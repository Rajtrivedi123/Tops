<?php
include "conn.php";

if(isset($_POST['search'])){
    $searchTerm = $_POST['search'];
    $sql = "SELECT * FROM `table1` WHERE `name` LIKE '%$searchTerm%' OR `id` LIKE '%$searchTerm%'";
} else {
    $sql = "SELECT * FROM `table1`";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
<center>
    <h1>Data to be Display</h1>

    <form method="post" action="">
        <input type="text" name="search" placeholder="Enter search keyword " style="width: 250px;">
        <input type="submit" value="Search">
    </form>

    <table border="2px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Number</th>
            <th>City</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['city']; ?></td>

                    <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record ?')">Delete</a></td>
                </tr>
                <?php
            }
        } else {
            // echo "No data available";
            echo "<tr><td colspan='8'>No data available</td></tr>";
        }
        ?>
    </table>
</center>
</body>
</html>
