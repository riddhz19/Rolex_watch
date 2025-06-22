<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="flip-form flipped" id="flipform">
        <div class="flip-form-inner">
            <div class="flip-form-front">
                <form action="login.php" method="POST">
                    <?php if (isset($error)) : ?>
                        <p><?php echo $error; ?></p>
                    <?php endif; ?>
                    <div class="header">
                        <h1>Login</h1>
                    </div>

                    <div class="input-box">
                        <input type="text" name="username" required>
                        <label> <i class='bx bxs-user' style="font-size: 10px; border: none;"></i> UserName</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label> <i class='bx bxs-lock-open-alt' style="font-size: 10px; border:none;"></i> Password</label>
                    </div>

                    <div class="input-box">
                        <a href="forgot_password.php">Forget Password?</a>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="login">
                    </div>
                    <p>Or Login With</p>

                    <div class="social-icon">
                        <i class='bx bxl-google'></i>
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-apple'></i>
                    </div>

                    <div class="signup-link">
                        <p>Don't Have An Account ? <a href="#" onclick="flipform()">Register</a></p>
                    </div>

                </form>
            </div>
            <div class="flip-form-back">
                <form action="" method="POST">
                    <div class="header">
                        <h1>Register</h1>
                        <?php if (isset($error)) : ?>
                            <p><?php echo $error; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="input-box">
                        <input type="text" name="username" required>
                        <label> <i class='bx bxs-user' style="font-size: 10px; border:none;"></i> UserName</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label> <i class='bx bxs-lock-open-alt' style="font-size: 10px; border:none;"></i> Password</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="email" required>
                        <label> <i class='bx bxs-envelope' style="font-size: 10px; border:none;"></i>Email</label>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="register">
                    </div>
                    <p>Or Login With</p>

                    <div class="social-icon">
                        <i class='bx bxl-google'></i>
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-apple'></i>
                    </div>

                    <div class="login-link">
                        <p>Already Have An Account ? <a href="#" onclick="flipform()">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function flipform() {
            var form = document.getElementById('flipform');
            form.classList.toggle('flipped');
        }
    </script>
</body>

</html>
<?php
include 'config1.php';
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            redirectTo('profile.php');
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "User not found";
    }
}
?>

<?php
include 'config1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($connection, $sql)) {
        echo "User created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
?>


<?php
// Assuming $username and $password are already defined


if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $cookie_name = $mail;
    $cookie_value = $username . ":" . $password;

    if (setcookie($cookie_name, $cookie_value, time() + 60 * 60 * 24)) {
        echo "Cookie Has Been Set";
        // header('Location: index.php'); // Uncomment this line to redirect
    } else {
        echo "Failed to set cookie";
    }
}

?>