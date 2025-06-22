<?php
include_once "config1.php";
$id = $_GET['id'];
$get_sql_query = "SELECT * FROM `users` WHERE id=$id";
$get_result = mysqli_query($connection, $get_sql_query);
$row = mysqli_fetch_assoc($get_result);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); ;
    $update_query = "UPDATE `users` SET `username`='$username', `email`='$email', `password`='$password' WHERE id=$id";

    $result = mysqli_query($connection, $update_query);
    if ($result) {
        echo "<script>alert('data updated')</script>";
        echo "<script>location.replace('datauser.php')</script>";
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
    body{
        /* background-image: linear-gradient(to right,rgb(18, 17, 17) 0%, rgb(3, 88, 91) 100%); */
        height: 700px;
    }
</style>
<body>
    <div class="text-center">
        <h2 class="text-primary">Update Your Profile</h2>
    </div>
    
    <div class="container p-5">
        <form method="POST" action="">
            <div class="row">
                <div class="col-sm-4">
                    <label class="label" for="">UserName</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>">
                </div>
                <div class="col-sm-4">
                    <label class="label" for="">Email</label>
                    <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="col-sm-4">
                    <label class="label" for="">Password</label>
                    <input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>">
                </div>
            </div>
            <div class="mt-4 text-center">
                <button name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
