<?php
include 'config1.php';
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $current_password = $_POST['current_password'];
    $new_password = hashPassword($_POST['new_password']);

    $sql = "SELECT password FROM users WHERE id = $user_id";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($current_password, $user['password'])) {
            $update_sql = "UPDATE users SET password = '$new_password' WHERE id = $user_id";
            if (mysqli_query($connection, $update_sql)) {
                $success = "Password changed successfully";
            } else {
                $error = "Failed to change password: " . mysqli_error($connection);
            }
        } else {
            $error = "Incorrect current password";
        }
    } else {
        $error = "User not found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
            sans-serif;
        font-variant: small-caps;
        background: #161623;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#f00, #f0f);
        clip-path: circle(15% at 80%);
    }

    body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#2196f3, #e91e63);
        clip-path: circle(35% at 10% 10%);
    }

    h2 {
        margin-top: 100px;
    }

    .input-box {
        position: relative;
        display: flex;
        flex-direction: column;
        margin: 20px 1px;
        width: 140%;
        margin-left: 9.5pc;
    }

    .input-box input[type="text"],
    .input-box input[type="password"] {
        width: calc(33% - 1px);
        height: 50px;
        font-size: 16px;
        color: #fff;
        background: transparent;
        border: 2px rgba(255, 255, 255, 0.2);
        border-bottom: 2px solid white;
        border-radius: 0px;
        padding-inline: 10px;
        outline: none;
        padding: 0 10px;
    }

    .input-box input[type="submit"] {
        width: 30%;
        height: 50px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 10px;
        border: none;
        cursor: pointer;
    }

    .input-box input[type="submit"]:hover {
        color: #fff;
        background-color: #2980b9;
    }

    .input-box label {
        position: absolute;
        top: 15px;
        left: 7px;
        font-size: 16px;
        color: #fff;
        transition: .2s ease-in-out;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        position: absolute;
        top: -10px;
        left: 7px;
        background: transparent;
        padding: 3px 2px;
        font-size: 13px;
        color: white;
    }

    .input-box a {
        position: relative;
        bottom: 15px;
        color: #2980b9;
        text-decoration: none;
        text-align: end;
    }

    button {
        text-decoration: none;
        color: #fff;
        border: 2px solid #fff;
        margin-left: -1pc;
        background-color: transparent;
        border-radius: 7px;
        box-shadow: 0 0 3.2px #fff, 0 0 3.2px #fff, 0 0 20px #2980b9,
            inset 0 0 20.8px #2980b9;
        padding: 8px 10px;
        margin-top: 10px;
    }

    .con {
        border: 2px rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        background: transparent;
        width: 40%;
        height: 300px;
        z-index: 1;
        text-align: center;
    }
    h2{
        margin-top: 20px;
        color: white;
        font-weight: 400;
    }
</style>

<body>
    <div class="con">
        <h2>Change Password</h2>
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
            <p><?php echo $success; ?></p>
        <?php endif; ?>
        <form action="change_password.php" method="post">
            <div class="input-box">
                <input type="password" name="current_password" id="current_password" required>
                <label for="current_password"> Current_Password</label>
            </div>

            <div class="input-box">
                <input type="password" id="new_password" name="new_password" required>
                <label for="new_password"> New_Password</label>
            </div>

            <a href="profile.php"><button type="submit">Change Password</button></a>
        </form>
    </div>
</body>

</html>