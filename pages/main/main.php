<?php
require_once '../../config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/class/AutoLoader.class.php';

$prefix = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$css = file_exists(realpath(__DIR__) . '/' . $prefix . '.styles.css') ? realpath(__DIR__) . '\\' . $prefix . '.styles.css' : false;
$js = file_exists(realpath(__DIR__) . '/' . $prefix . '.script.js') ? realpath(__DIR__) . '\\' . $prefix . '.script.js' : false;

$title = 'Playiva - Learn and Improve';

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['passwordHash'])) {
    unset($_SESSION['email']);
    unset($_SESSION['passwordHash']);
    header('Location: ../../index.php');
}

$logado = $_SESSION['email'];

R::setup(DB_STRING, DB_USER, DB_PASSWORD);
$languages = R::findAll('language');
$channels = R::findAll('channel');
$instruments = R::findAll('instrument');
$techniques = R::findAll('technique');
$lectures = R::findAll('lecture');
R::close();

include '../template/template.php';