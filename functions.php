<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
function redirectTo($location) {
    header("Location: $location");
    exit();
}
?>
