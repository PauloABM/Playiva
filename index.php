<?php
    if (isset($user)) {
        header('Location: ./pages/main/main.php');
    } else {
        header('Location: ./pages/landing-page/landing-page.php');
    }
?>