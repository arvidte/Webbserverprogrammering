<?php
// header('location: ' . $_SERVER['HTTP_REFERER']);
header('location:index1.php');
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
exit();
?>
