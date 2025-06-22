<?php
include 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sql = "SELECT * FROM add_data";
$run = mysqli_query($connection, $sql) or die("Error Has Been Occurred: " . mysqli_error($connection));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Gallery</title>
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        .heading {
            text-align: center;
            padding-bottom: 30px;
        }

        .heading h1 {
            font-size: 2.5rem;
            color: #343a40;
            font-weight: 600;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
            text-align: center;
        }

        .card-content h3 {
            font-size: 1.25rem;
            color: #495057;
            margin-bottom: 10px;
        }

        .card-content h4 {
            font-size: 1.1rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .btn-back {
            margin: 20px 0;
            margin-left: 60pc;
        }

        .btn-back:hover {
            color: #fff;
        }

        .thin-hr {
            border: none;
            height: 1px;
            background-color: black;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="profile.php"> <button class="btn btn-outline-info btn-back">BACK</button> </a>
        <hr class="thin-hr">
        <div class="heading">
            <h1>Watch Gallery</h1>
            <hr class="thin-hr">
        </div>
        
        <div class="cards">
            <?php
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $imgSrc = "uploads/" . htmlspecialchars($row['image']);
                    echo '<div class="card">';

                    if (file_exists($imgSrc)) {
                        echo "<img src=\"$imgSrc\" alt=\"Product Image\">";
                    } else {
                        echo "<p>Image not found: $imgSrc</p>";
                    }
                    echo '<div class="card-content">';
                    echo "<h3>" . htmlspecialchars($row['pname']) . "</h3>";
                    echo "<h4>" . htmlspecialchars($row['price']) . "</h4>";
                    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                    echo '</div></div>';
                }
            } else {
                echo "<p>No Data Available</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>