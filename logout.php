<?php
include 'functions.php';
session_start();
session_destroy();
redirectTo('reallogin.php');
?>
