<?php
include "include/config.php";
$id = $_GET['id'];
$sql_query = "DELETE FROM `getinsert` WHERE id=$id";
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "<script> location.replace('dataindex.php') </script>";
} else {
    echo $connection->error;
}

