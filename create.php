<?php
include "include/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql_query = "INSERT INTO `getinsert`(`id` , `name`, `price`) VALUES (NULL, '$name','$price')";
    $result = mysqli_query($connection, $sql_query);
    if ($result) {
        echo "Data Inserted Successfully";
        echo "<script> location.replace('dataindex.php')</script>";
    } else {
        echo $connection->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        background: linear-gradient(to left, rgb(140, 91, 19), rgb(110, 92, 34));
    }
</style>

<body>
    <div class="text-center">
        <h2 class="text-light">PHP POST METHOD</h2>
    </div>
    <div class="container p-5">
        <form method="POST" action="">
            <div class="row" style="color: white;">
                <div class="col-sm-4">
                    <label class="lable" for="">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="col-sm-4">
                    <label class="lable" for="">Price</label>
                    <input class="form-control" type="text" name="price">
                </div>
            </div>
            <div class="mt-4 text-center">
                <button name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>