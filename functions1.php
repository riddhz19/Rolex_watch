<?php
require 'config2.php';
function register($username, $email, $password) {
    global $pdo;
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO admin (username, email, password) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $email, $hash]);
}
function login($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        return true;
    }
    return false;
}
function isAdmin() {
    return isset($_SESSION['user_id']);
}
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
function redirect($url) {
    header("Location: $url");
    exit();
}
function changePassword($user_id, $new_password) {
    global $pdo;
    $hash = password_hash($new_password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("UPDATE admin SET password = ? WHERE id = ?");
    return $stmt->execute([$hash, $user_id]);
}
?>
