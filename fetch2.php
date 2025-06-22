<?php
session_start();
require 'config2.php';
require 'functions1.php';

// Check if user is logged in and is an admin
if (!isLoggedIn() || !isAdmin()) {
    redirect('reallogin.php');
}

// Query to fetch all admin records
$stmt = $pdo->query("SELECT * FROM admin");
$data = $stmt->fetchAll();
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 40vh;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;

            background: #161623;
            color: white;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#f00, #f0f);
            clip-path: circle(30% at right 70%);
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#2196f3, #e91e63);
            clip-path: circle(30% at 10% 10%);
        }


        .container {
            margin-top: 2pc;
            z-index: 1;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            padding: 20px;
            border-radius: 4px;
        }

        .table {
            margin-bottom: 0;
            border-collapse: collapse;
            cursor: pointer;
            overflow: auto;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: transparent;
        }

        .table tbody tr:nth-child(even) {
            background-color: transparent;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-6" style="margin-bottom: 20px; margin-top: 15px;">
            <h2 class="border-bottom text-info">ADMIN'S DETAILS</h2>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-3">
                <a class="btn btn-outline-info" href="index.php">BACK</a>
            </div>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Profile Picture</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) { ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td>
                                <?php
                                $profilePic = isset($row['profile_pic']) && !empty($row['profile_pic']) ? 'uploads/' . htmlspecialchars($row['profile_pic']) : 'uploads/default.png';
                                ?>
                                <img src="<?= htmlspecialchars($profilePic) ?>" alt="Profile Picture" class="profile-pic">
                            </td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>