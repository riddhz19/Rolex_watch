<?php
ob_start(); 
session_start();
include 'config1.php';
include 'functions.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
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

// Register Form Processing

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $email = $_POST['email'];
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
  $checkUserSql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
  $checkUserResult = mysqli_query($connection, $checkUserSql);

  if (mysqli_num_rows($checkUserResult) > 0) {
    $error = "Username or email already exists. Please try a different one.";
  } else {
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($connection, $sql)) {
      header("Location: reallogin.php?success=1"); 
      exit();
    } else {
      $error = "User could not be created. Please try again.";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

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
    clip-path: circle(39% at right 70%);
  }

  body::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(#2196f3, #e91e63);
    clip-path: circle(40% at 10% 10%);
  }


  .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
    letter-spacing: 1pc;
  }

  .input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #e2e2e2;
    border-radius: 0px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
    margin-top: 1pc;
    position: absolute;
    letter-spacing: 3px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
      Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
      sans-serif;
    /* font-size: 1pc; */
  }

  .input-box input::placeholder {
    color: #fff;
    font-weight: 100;
  }

  .btn {
    position: relative;
    width: 60%;
    height: 45px;
    background: transparent;
    border: 2px solid rgb(1, 105, 126);
    outline: none;
    color: #e4e4e4;
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: 500;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    border-radius: 1pc;
    z-index: 1;
    overflow: hidden;
    font-variant: small-caps;
    cursor: pointer;
    margin-left: 15px;
    margin-top: 30px;
  }

  .btn::before {
    content: "";
    position: absolute;
    top: -100%;
    left: 0;
    transition: 0.5s;
    width: 100%;
    height: 300%;
    /* background: linear-gradient(#081b29, rgb(36, 109, 114), #081b29, rgb(36, 106, 111)); */
    background: linear-gradient(#d023cdbe,
        rgba(2, 152, 222, 0.797),
        #081b29,
        rgba(2, 83, 134, 0.734));
    z-index: -1;
  }

  .btn:hover::before {
    top: 0;
    color: rgb(255, 255, 255);
    font-weight: 500;
    font-variant: small-caps;
  }

  .input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 18px;
    color: rgb(239, 240, 240);
    font-weight: 300;
    border-bottom: 2px solid white;
    padding-right: 28px;
  }

  .input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 19px;
    font-weight: 300;
    pointer-events: none;
    transition: 0.5s ease;
    letter-spacing: 1px;
  }

  .input-box input:focus~label,
  .input-box input:valid~label {
    top: -5px;
  }

  #i1:hover {
    cursor: pointer;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
    box-shadow: 0 0 13px rgb(67, 169, 212);
    color: #e3986d;
    /* background-image: linear-gradient(to bottom, rgb(250, 119, 119),rgb(102, 209, 102)); */
    /* background: linear-gradient(rgb(241, 187, 87)0%,rgb(195, 107, 48)50%,rgb(107, 208, 107)100%); */
  }

  #i2:hover {
    cursor: pointer;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
    background-image: linear-gradient(to bottom,
        rgb(18, 18, 18),
        rgb(47, 47, 47));
    box-shadow: 0 0 15px rgb(93, 122, 116);
  }

  #i3:hover {
    cursor: pointer;
    transform: scale(1.1);
    transition: 0.3s ease-in-out;
    color: #52aef9;
    box-shadow: 0 0 13px rgb(76, 187, 206);
  }

  .flip-form {
    background-color: transparent;
    z-index: 1;
    width: 390px;
    height: 590px;
    perspective: 1000px;
    margin: auto;
  }

  .flip-form-inner {
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    z-index: 1;
  }

  .flip-form-front,
  .flip-form-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
  }

  .flip-form-front {
    background: transparent;
    color: #2980b9;
    border-radius: 10px;
    border: 2px rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  }

  .flip-form-back {
    /* background: linear-gradient(180deg, #232c33 40%, #153a56 92%); */
    color: #2980b9;
    border-radius: 10px;
    background: transparent;
    transform: rotateY(180deg);
    border: 2px rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  }

  .flipped .flip-form-inner {
    transform: rotateY(180deg);
  }

  .header {
    position: relative;
  }

  .header h1 {
    color: #fff;
    margin-top: 20px;
  }

  .input-box {
    position: relative;
    display: flex;
    flex-direction: column;
    margin: 40px 33px;
  }

  .input-box input[type="text"],
  .input-box input[type="password"] {
    width: calc(79% - 20px);
    height: 50px;
    font-size: 16px;
    color: #fff;
    background: transparent;
    padding-inline: 10px;
    outline: none;
    margin: 0;
    padding: 0 10px;
    justify-content: center;
    margin-left: 1.5pc;
  }

  .input-box input[type="submit"] {
    width: 100%;
    height: 50px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 10px;
    border: none;
    cursor: pointer;
  }

  .input-box input[type="submit"]:hover {
    color: #fff;
  }

  .input-box label {
    position: absolute;
    top: 15px;
    left: 22px;
    font-size: 16px;
    color: #fff;
    transition: 0.2s ease-in-out;
  }

  .input-box input:focus~label,
  .input-box input:valid~label {
    position: absolute;
    top: -10px;
    left: 20px;
    padding: 3px 5px;
    font-size: 13px;
    color: white;
  }

  .input-box a {
    position: absolute;
    bottom: 15px;
    color: #2980b9;
    text-decoration: none;
    margin-left: 12pc;
    letter-spacing: normal;
  }

  p {
    color: #fff;
    margin-top: 20px;
  }

  .bx {
    position: relative;
    font-size: 20px;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 5px;
    padding: 5px;
    width: 20px;
    cursor: pointer;
  }

  .login-link a,
  .signup-link a {
    color: #2980b9;
    text-decoration: none;
  }

  .signup-link {
    position: relative;
    top: 10px;
  }

  .login-link {
    margin-top: 1px;
    margin-bottom: 20px;
  }

  a:hover {
    color: #fff;
    transition: 0.3s ease-in-out;
  }

  .flip-form {
    z-index: 1;
  }

  .remember-forget a {
    color: #fff;
    font-weight: 300;
    letter-spacing: 1px;
    margin-left: 2.5pc;
    text-decoration: none;
  }

  .remember-forget a:hover {
    text-decoration: underline;
  }

  .icon {
    font-size: 20px;
    margin-top: 7px;
    margin-left: 6.5pc;
    padding: 10px 0px 1px;
    display: flex;
    /* justify-content: space-between; */
  }

  .icon i {
    border: 2px solid white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 5px;
    margin: 10px;
    justify-content: space-between;
  }
</style>

<body>
  <div class="flip-form flipped" id="flipform">
    <div class="flip-form-inner">
      <!-- Front (Login Form) -->
      <div class="flip-form-front">
        <form action="reallogin.php" method="POST">
          <!-- Display error message if set -->
          <?php if (isset($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
          <?php endif; ?>
          <div class="header">
            <h1>Login</h1>
          </div>

          <div class="input-box">
            <i class="bx bxs-user" style="font-size: 16px; border: none; margin-left: 18pc; margin-top:16px;"></i>
            <input type="text" name="username" required />
            <label>Username</label>
          </div>

          <div class="input-box">
            <i class="bx bxs-lock-open-alt" style="font-size: 16px; border: none; margin-left: 18pc; margin-top:16px;"></i>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>

          <div class="remember-forget">
            <label style="font-size: 18px; margin-top: 30px; align-content: white; margin-right: 3px; color:white;">
              <input type="checkbox" />Remember Me
            </label>
            <a href="forgot_password.php">Forget Password?</a>
          </div>

          <button type="submit" class="btn">Login</button>
          <p>Or Login With</p>

          <div class="icon">
            <i class="bx bxl-google" id="i1" style="font-size: 25px;"></i>
            <i class="bx bxl-github" id="i2" style="font-size: 25px;"></i>
            <i class="bx bxl-microsoft-teams" id="i3" style="font-size: 25px;"></i>
          </div>

          <div class="signup-link">
            <p>
              Don't Have An Account?
              <a href="#" onclick="flipform()">Register</a>
            </p>
          </div>
        </form>
      </div>


      <!-- Back (Register Form) -->
      <div class="flip-form-back">
        <form action="" method="POST">
          <div class="header">
            <h1>Register</h1>
            <?php if (isset($error)) : ?>
              <p><?php echo $error; ?></p>
            <?php endif; ?>
          </div>

          <div class="input-box">
            <i
              class="bx bxs-user"
              style="font-size: 16px; border: none; margin-left: 18pc; margin-top:16px;"></i>
            <input type="text" name="username" required />
            <label>Username</label>
          </div>

          <div class="input-box">
            <i
              class="bx bxs-lock-open-alt"
              style="font-size: 16px; border: none; margin-left: 18pc; margin-top:16px;"></i>
            <input type="password" name="password" required />
            <label>
              Password</label>
          </div>

          <div class="input-box">
            <i
              class="bx bxs-envelope"
              style="font-size: 16px; border: none; margin-left: 18pc; margin-top:16px;"></i>
            <input type="text" name="email" required />
            <label>
              Email</label>
          </div>

          <button type="submit" class="btn" style="margin-top: 10px;">Register</button>
          <p>Or Register With</p>

          <div class="icon" style="margin-top: 2px;">
            <i class="bx bxl-google" id="i1" style="font-size: 25px;"></i>
            <i class="bx bxl-github" id="i2" style="font-size: 25px;"></i>
            <i class="bx bxl-microsoft-teams" id="i3" style="font-size: 25px;"></i>
          </div>

          <div class="login-link">
            <p>
              Already Have An Account?
              <a href="#" onclick="flipform()">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function flipform() {
      var form = document.getElementById("flipform");
      form.classList.toggle("flipped");
    }
  </script>

  <script type="text/javascript" src="./vanilla-tilt.js"></script>
  <script>
    VanillaTilt.init(document.querySelectorAll("#flipform"), {
      max: 2,
      speed: 400,
      glare: true,
      "max-glare": 0.2,
    });
  </script>
</body>

</html>

<!-- <?php
      ob_start();  // Start output buffering

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
?> -->