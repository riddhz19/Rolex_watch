<?php
include_once "include/config.php";
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

   
    $insert_query = "INSERT INTO `getinsert`(`id`, `name`, `price`) VALUES (NULL,'$name','$price')";
    $insert_stmt = $connection->prepare($insert_query);
    $insert_stmt->bind_param('ss', $name, $price);
    if ($insert_stmt->execute()) {
        echo json_encode(['success' => true, 'id' => $connection->insert_id, 'name' => $name, 'price' => $price]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
