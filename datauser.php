<?php
include_once "config1.php";

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$search = isset($_GET['search']) ? mysqli_real_escape_string($connection, $_GET['search']) : '';
$sql_query = "SELECT * FROM `users`";
if ($search) {
    $sql_query .= " WHERE `username` LIKE '%$search%'";
}
$result = mysqli_query($connection, $sql_query);

if (!$result) {
    die("Query Failed: " . mysqli_error($connection));
}

$sno = 1;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PHP CRUD APPLICATION</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
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
            height: 150%;
            background: linear-gradient(rgb(0, 140, 255), rgb(110, 226, 247));
            clip-path: circle(15% at right 60%);
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(#e96893 -5%, #2196f3);
            clip-path: circle(30% at 10% 5%);
        }

        .container {
            z-index: 1;
        }

        .tt {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 26px;
            margin: 16px;
        }

        .table {
            margin-bottom: 0;
            border-collapse: collapse;
            cursor: pointer;
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


        .btn {
            margin: 0 5px;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-6" style="margin-bottom: 20px; margin-top: 15px;">
            <h2 class="border-bottom text-info">USER'S DETAILS</h2>
        </div>
        <div class="row">
            <div class="col-9">
                <!-- Search Form -->
                <form class="form-inline my-2 my-lg-0" method="GET" action="" style="margin-left: 4pc;">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search by Username" aria-label="Search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-3 mb-3">
                <a class="btn btn-outline-info btn-sm" href="profile.php">BACK</a>
                <!-- <a class="btn btn-outline-info btn-sm" href="reallogin.php">ADD DATA</a> -->
            </div>
        </div>
        <div class="tt">
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
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($sno) ?></th>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['password']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td style="display: flex; flex-direction:row;">
                                <a class="btn btn-danger" href="delete.php?id=<?= htmlspecialchars($row['id']) ?>"><i class='bx bx-message-square-x' style="font-size:20px;"></i></a>
                                <a class="btn btn-info" href="update.php?id=<?= htmlspecialchars($row['id']) ?>"><i class='bx bx-message-square-edit' style="font-size:20px;"></i></a>
                            </td>
                        </tr>
                    <?php $sno++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div id="searchresult"></div>
</body>

</html>