<?php
include 'config1.php';
include 'functions.php';
if (!isLoggedIn()) {
    redirectTo('login.php');
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($result);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_image'])) {
    $target_dir = "uploads/";
    $filename = basename($_FILES["profile_image"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
        $update_sql = "UPDATE users SET profile_image = '$filename' WHERE id = $user_id";
        if (mysqli_query($connection, $update_sql)) {
            $success = "Profile picture updated successfully";
            $user['profile_image'] = $filename;
        } else {
            $error = "Error updating profile picture: " . mysqli_error($connection);
        }
    } else {
        $error = "Error uploading file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap");

    body {

        background: rgba(0, 0, 0, 0.4) url('./img/rsky3.jpg') no-repeat center center/cover;
        color: #333;
        background-blend-mode: darken;
        margin: 0;
        font-family: "DM Sans", sans-serif;
        padding: 0;
    }

    .container {
        width: 80%;
        /* margin: 1px auto; */
        margin-top: 5pc;
        margin-left: 8.3pc;
        margin-bottom: 5pc;
        padding: 20px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        backdrop-filter: blur(6px);
    }

    h2 {
        font-size: 28px;
        color: #fff;
        margin-bottom: 20px;
        background-color: #000;
        padding: 10px;
        font-weight: 400;
        border-radius: 5px;
        /* width: 100%; */
    }

    img {
        border-radius: 50%;
        border: 5px solid #000;
        /* Black border for elegance */
        margin-bottom: 20px;
        width: 150px;
        margin-left: 33pc;
        height: 150px;
        object-fit: cover;
        position: absolute;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        font-size: 18px;
        color: #000;
    }

    input[type="file"] {
        border: 2px solid #000;
        padding: 5px;
        border-radius: 5px;
        background: #fff;
        margin-bottom: 10px;
    }

    button {
        background: #000;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
    }

    button:hover {
        background: #333;
    }

    a {
        display: inline-block;
        text-decoration: none;
        color: #000;
        font-size: 16px;
        margin: 10px;
        padding: 6px 10px;
        border-bottom: 2px solid black;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    a:hover {
        color: #fff;
    }

    .success,
    .error {
        font-size: 16px;
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
    }

    .success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    h3 {
        background: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 3px;
        border-bottom: 2px solid black;
        color: #000;
    }

    .in {
        margin-bottom: 50px;
    }

    .in label {
        font-weight: 600;
        padding: 10px;
    }

    p {
        color: #000;
    }

    form {
        margin-left: 12px;
    }

    .hh p {
        background: rgba(255, 255, 255, 0.02);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    <div class="container">
        <h2 style="text-align: center;">Welcome, <?php echo htmlspecialchars($user['username']); ?></h2>
        <h3>Personal Information</h3>
        <?php if (isset($error)) : ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
            <div class="success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>
        <img src="uploads/<?php echo htmlspecialchars($user['profile_image']); ?>" alt="Profile Picture"><br><br>
        <div class="in" style="margin-top: 15pc;">
            <p><label>Full Name:</label> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><label>Email: </label> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <form action="profile.php" method="post" enctype="multipart/form-data">
            <label for="profile_image" style="font-weight: 600;">Profile Image:</label><br><br>
            <input type="file" id="profile_image" name="profile_image" accept="image/*">
            <button type="submit">Upload Image</button>
        </form>
        <br><br>
        <div class="hh">
            <h3> Account Settings <i class='bx bx-cog' style="font-size: 29px; margin-left:60pc;"></i> </h3>
            <p> <a href="change_password.php">Change Password</a><br></p>
            <p> <a href="datauser.php">Show Your Data</a><br> </p>
            <p> <a href="gallery.php">Show Gallery</a></p>
            <p> <a href="index.php">Back To Home</a></p>
            <p> <a href="logout.php">Logout</a><br></p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var message = document.getElementById("message");
            if (message) {
                // Display the message
                message.style.display = "block";

                // Hide the message after 4 seconds
                setTimeout(function() {
                    message.style.display = "none";
                }, 4000);
            }
        });
    </script>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_image'])) {
    $target_dir = "uploads/";
    $filename = basename($_FILES["profile_image"]["name"]);
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    if (is_uploaded_file($_FILES["profile_image"]["tmp_name"])) {
        $file_md5 = md5_file($_FILES["profile_image"]["tmp_name"]);
        $is_duplicate = false;
        $files = scandir($target_dir);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                if ($file_md5 == md5_file($target_dir . $file)) {
                    $is_duplicate = true;
                    break;
                }
            }
        }
        if ($is_duplicate) {
            $error = "A similar image has already been uploaded.";
            $uploadOk = 0;
        }
        if ($uploadOk && move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            $update_sql = "UPDATE users SET profile_image = '$filename' WHERE id = $user_id";
            if (mysqli_query($connection, $update_sql)) {
                $success = "Profile picture updated successfully";
                $user['profile_image'] = $filename;
            } else {
                $error = "Error updating profile picture: " . mysqli_error($connection);
            }
        } else {
            if (!isset($error)) {
                $error = "Error uploading file.";
            }
        }
    } else {
        $error = "Error: The file was not uploaded correctly.";
    }
}
?>