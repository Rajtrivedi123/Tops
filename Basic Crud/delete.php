<?php

include "conn.php";
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql ="DELETE FROM `table1` WHERE `id`='$id'";
    
    $result=$conn->query($sql);
    if($result)
    {
        echo "Data DELETED";
    }
    else    
    {
        echo "Error";
    }
 }
?>
