<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['passwordHash'])) {
    unset($_SESSION['email']);
    unset($_SESSION['passwordHash']);
    header('Location: ./pages/landing-page/landing-page.php');
} else {
    header('Location: ./pages/main/main.php');
}
?>