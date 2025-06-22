<?php
include 'config1.php';
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Generate and send password reset link via email (not implemented here)
        $reset_link = "http://example.com/reset_password.php?token=" . md5($user['password']);
        // Send email with $reset_link
        $success = "Password reset link sent to your email";
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
    <title>Forgot Password</title>
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
        background: linear-gradient(rgb(1, 28, 75), rgb(2, 255, 251));
        clip-path: circle(15% at 76% 40%);
    }

    body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#2196f3, #e91e63);
        clip-path: circle(15% at 26% 70%);
    }

    h2 {
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-top: 100px;
    }

    form {
        align-items: center;
        text-align: center;
        justify-content: center;
    }

    .input-box {
        position: relative;
        display: flex;
        flex-direction: column;
        margin: 20px 1px;
        width: 140%;
        margin-top: 20px;
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
        margin-left: 1pc;
        background-color: transparent;
        border-radius: 10px;
        box-shadow: 0 0 3.2px #fff, 0 0 3.2px #fff, 0 0 20px #2980b9,
            inset 0 0 20.8px #2980b9;
        padding: 8px 10px;
        margin-top: 30px;
    }

    .con {
        border: 2px rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        background: transparent;
        width: 40%;
        height: 280px;
        z-index: 1;
        text-align: center;
    }
    h2{
        margin-top: 30px;
        color: white;
        font-weight: 400;
    }
</style>

<body>
    <div class="con">
        <h2>Forgot Password</h2>
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
            <p><?php echo $success; ?></p>
        <?php endif; ?>
        <form action="forgot_password.php" method="post">

            <div class="input-box">
                <input type="text" id="email" name="email" required>
                <label for="email">Email</label>
            </div>

            <button type="submit">Send Reset Link</button>
        </form>
    </div>
</body>

</html>