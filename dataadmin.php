<?php
require 'config1.php'; // Adjust path as necessary

// Fetch data using PDO
$stmt = $pdo->query("SELECT * FROM admin");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP CRUD APPLICATION</title>
    <style>
        body {
            background: linear-gradient(90deg, rgb(10, 10, 10) 0%, rgb(45, 16, 52) 55%, rgb(52, 15, 77) 100%);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-6" style="margin-bottom: 20px; margin-top: 15px;">
            <h2 class="border-bottom text-primary">PHP CRUD APPLICATION</h2>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-3">
                <!-- <a class="btn btn-primary btn-sm" href="create.php">ADD NEW</a> -->
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($row['id']) ?></th>
                        <td><?= htmlspecialchars($row['username']) ?></td>
                        <td><?= htmlspecialchars($row['password']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" href="delete.php?id=<?= htmlspecialchars($row['id']) ?>">DELETE</a>
                            <a class="btn btn-sm btn-warning" href="edit.php?id=<?= htmlspecialchars($row['id']) ?>">EDIT</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
