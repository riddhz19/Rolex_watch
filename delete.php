<?php
include "config1.php";
$id = $_GET['id'];
$sql_query = "DELETE FROM `users` WHERE id=$id";
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "<script> location.replace('datauser.php') </script>";
} else {
    echo $connection->error;
}
